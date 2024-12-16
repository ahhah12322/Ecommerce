<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function processPayment(Request $request)
    {
        $paymentMethod = $request->input('payment_method');
        $totalCost = $request->input('total_cost');
        $contractID = $request->input('contract_id');

        switch ($paymentMethod) {
            case 'VNPAY':
                // Điều hướng đến trang xử lý thanh toán VNPAY
                return redirect()->route('vnpay.payment', ['amount' => $totalCost, 'contract_id' => $contractID]);
            case 'MOMO':
                // Điều hướng đến trang xử lý thanh toán MOMO
                return redirect()->route('momo.payment', ['amount' => $totalCost, 'contract_id' => $contractID]);
            case 'BANK':
                // Điều hướng đến trang thanh toán ngân hàng
                return redirect()->route('bank.payment', ['amount' => $totalCost, 'contract_id' => $contractID]);
            case 'CASH':
                // Xử lý thanh toán tiền mặt và cập nhật trạng thái đơn hàng
                return back()->with('success', 'Đơn hàng đã được ghi nhận. Vui lòng thanh toán khi nhận xe.');
            default:
                return back()->with('error', 'Phương thức thanh toán không hợp lệ.');
        }
    }


    public function bankPayment(Request $request)
    {
        $totalCost = $request->input('amount');
        $contractID = $request->input('contract_id');

        // Thông tin ngân hàng Agribank (ví dụ)
        $bankName = "Agribank";
        $accountNumber = "123456789"; // Số tài khoản Agribank
        $accountName = "Công Ty Cho Thuê Xe Điện";
        $note = "Don hang ma " . $contractID;

        // Tạo URL QR dựa vào VietQR API hoặc chuẩn mã QR
        $qrCodeData = "https://api.vietqr.io/v2/generate?" . http_build_query([
            'accountNo' => $accountNumber,
            'accountName' => $accountName,
            'amount' => $totalCost,
            'addInfo' => $note,
            'template' => 'compact',
        ]);

        return view('user.main.bank-payment', [
            'bankName' => $bankName,
            'accountNumber' => $accountNumber,
            'accountName' => $accountName,
            'amount' => $totalCost,
            'note' => $note,
            'qrCodeData' => $qrCodeData,
        ]);
    }
}
