<?php


namespace App\Http\Controllers;
use App\Models\Vehicle;
use App\Models\Brand;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
class CartController extends Controller{
  public function addToCart(Request $request)
    {
        $productId = $request->input('product_id');

        // Lấy thông tin sản phẩm từ database (hoặc từ cache)
        $vehicle = Vehicle::find($productId);

        // Kiểm tra nếu không có sản phẩm trong database
        if (!$vehicle) {
            return response()->json(['success' => false, 'message' => 'Sản phẩm không tồn tại']);
        }

        // Lấy giỏ hàng hiện tại từ cookie
        $cart = json_decode(Cookie::get('cart'), true) ?? [];

        // Kiểm tra nếu sản phẩm đã có trong giỏ hàng
        $found = false;
        foreach ($cart as $item) {
            if ($item['id'] == $vehicle->id) {
                $found = true;
                break;
            }
        }

        // Nếu sản phẩm đã có trong giỏ hàng, trả về thông báo
        if ($found) {
            return response()->json(['success' => false, 'message' => 'Sản phẩm đã có trong giỏ hàng']);
        }

        // Nếu sản phẩm chưa có trong giỏ hàng, thêm mới vào giỏ hàng
        $cart[] = [
            'id' => $vehicle->id,
            'name' => $vehicle->VehicleName,
            'price' => $vehicle->rental_price_per_day,
            'brand' => $vehicle->BrandID,
            'seat' => $vehicle->seat_number,
        ];

        // Lưu giỏ hàng vào cookie
        Cookie::queue('cart', json_encode($cart), 60 * 24); // Lưu trong 24 giờ

        return response()->json(['success' => true, 'message' => 'Sản phẩm đã được thêm vào giỏ hàng']);
    }
    public function showCart()
{
    // Lấy giỏ hàng từ cookie
    $cart = json_decode(Cookie::get('cart'), true) ?? [];
     $brands = Brand::all();


    return view('user.main.cart', compact('cart','brands'));
}

public function removeFromCart(Request $request)
{
    $productId = $request->input('product_id');

    // Lấy giỏ hàng hiện tại từ cookie
    $cart = json_decode(Cookie::get('cart'), true) ?? [];

    // Tìm và xóa sản phẩm khỏi giỏ hàng
    $cart = array_filter($cart, function($item) use ($productId) {
        return $item['id'] != $productId;
    });

    // Cập nhật lại giỏ hàng trong cookie
    Cookie::queue('cart', json_encode(array_values($cart)), 60 * 24); // Lưu lại giỏ hàng mới trong 24 giờ

    // Trả lại kết quả
    return response()->json([
        'success' => true,
        'message' => 'Sản phẩm đã được xóa khỏi giỏ hàng',
        'cart' => array_values($cart) // Trả lại giỏ hàng mới
    ]);
}


}
