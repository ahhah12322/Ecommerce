<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class CheckoutController extends Controller
{

    public function calculateTotalCost(Request $request)
    {   
        $validated = $request->validate([
            'rental_price_per_hour' => 'required|integer',
            'rental_price_per_day' => 'required|integer',
            'rental_start_date' => 'required|date|after_or_equal:now',
            'rental_end_date' => 'required|date|after:rental_start_date',
        ]);
    
        $startDateTime = new Carbon($request->rental_start_date);
        $endDateTime = new Carbon($request->rental_end_date);
    
        // Số giờ thuê
        $hours = $startDateTime->diffInHours($endDateTime);
    
        // Giá thuê theo giờ và ngày
        $pricePerHour = $request->rental_price_per_hour;
        $pricePerDay = $request->rental_price_per_day;
    
        // Tính toán chi phí
        $totalCost = 0;
    
        if ($hours <= 6) {
            $totalCost = $pricePerHour * $hours;
        } else {
            $days = intdiv($hours, 24); // Số ngày
            $remainingHours = $hours % 24; // Số giờ lẻ
    
            $totalCost = $pricePerDay * $days;
            if ($remainingHours <= 6) {
                $totalCost += $pricePerHour * $remainingHours;
            } else {
                $totalCost += $pricePerDay;
            }
        }
    
        // return back()->with('totalCost', $totalCost)->with('success', 'Tổng chi phí đã được tính.');
        return response()->json(['totalCost' => $totalCost]);
    }
}