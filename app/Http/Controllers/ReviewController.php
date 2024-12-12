<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Review;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use App\Models\RentalContract;


class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'vehicle_id' => 'required|exists:vehicles,id',
            'title' => 'required|string|max:255',
            'rating' => 'required|integer|between:1,5',
            'content' => 'nullable|string|max:1000',
        ]);

        // Kiểm tra trạng thái thanh toán
        $contract = RentalContract::where('CustomerID', Auth::id())
            ->where('VehicleID', $request->vehicle_id)
            ->where('StatusPayment', 'Đã thanh toán')
            ->first();

        if (!$contract) {
            return redirect()->back()->withErrors('Bạn chỉ có thể đánh giá khi hợp đồng thuê xe đã được thanh toán.');
        }

        // Tạo đánh giá
        Review::create([
            'vehicle_id' => $request->vehicle_id,
            'customer_id' => Auth::id(),
            'title' => $request->title,
            'rating' => $request->rating,
            'content' => $request->content,
        ]);

        return redirect()->back()->with('success', 'Đánh giá của bạn đã được gửi!');
    }
}
