<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MoMoController extends Controller
{
    // Tạo thanh toán MoMo
    public function createPayment(Request $request)
    {
        $endpoint = env('MOMO_API_ENDPOINT');
        $partnerCode = env('MOMO_PARTNER_CODE');
        $accessKey = env('MOMO_ACCESS_KEY');
        $secretKey = env('MOMO_SECRET_KEY');
        $orderInfo = "Thanh toán hợp đồng thuê xe";
        $amount = $request->amount; // Số tiền cần thanh toán
        $orderId = time() . ""; // Mã đơn hàng duy nhất
        $returnUrl = env('MOMO_RETURN_URL');
        $notifyUrl = env('MOMO_NOTIFY_URL');

        // Dữ liệu gửi tới MoMo
        $requestId = time() . "";
        $requestType = "captureWallet";
        $extraData = ""; // Dữ liệu bổ sung nếu cần

        $rawData = "accessKey=$accessKey&amount=$amount&extraData=$extraData&ipnUrl=$notifyUrl&orderId=$orderId&orderInfo=$orderInfo&partnerCode=$partnerCode&redirectUrl=$returnUrl&requestId=$requestId&requestType=$requestType";

        // Tạo chữ ký
        $signature = hash_hmac("sha256", $rawData, $secretKey);

        // Gửi yêu cầu thanh toán đến MoMo
        $data = [
            'partnerCode' => $partnerCode,
            'accessKey' => $accessKey,
            'requestId' => $requestId,
            'amount' => $amount,
            'orderId' => $orderId,
            'orderInfo' => $orderInfo,
            'redirectUrl' => $returnUrl,
            'ipnUrl' => $notifyUrl,
            'extraData' => $extraData,
            'requestType' => $requestType,
            'signature' => $signature
        ];

        $response = $this->execPostRequest($endpoint, json_encode($data));

        $result = json_decode($response, true);

        if ($result['resultCode'] == 0) {
            return redirect($result['payUrl']); // Chuyển hướng tới URL thanh toán MoMo
        } else {
            return "Lỗi: " . $result['message'];
        }
    }

    // Hàm gửi POST request
    private function execPostRequest($url, $data)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }

    // Xử lý callback từ MoMo
    public function momoReturn(Request $request)
    {
        if ($request->resultCode == 0) {
            // Cập nhật trạng thái thanh toán
            DB::table('rental_contracts')
            ->where('id', $request->orderId) // orderId là ID hợp đồng
            ->update(['PaymentStatus' => 'Đã thanh toán']);
            // Giao dịch thành công
            return "Thanh toán thành công! Mã đơn hàng: " . $request->orderId;
            
        } else {
            return "Thanh toán thất bại!";
        }
    }

    // Xử lý thông báo IPN từ MoMo
    public function momoNotify(Request $request)
    {
        // Xử lý logic cập nhật trạng thái thanh toán ở đây
        // Dữ liệu trả về trong $request->all()
        return response()->json(['status' => 'success']);
    }
}
