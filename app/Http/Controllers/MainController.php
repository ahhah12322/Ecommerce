<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\Brand;
use App\Models\Category;
use App\Models\VehicleType;

class MainController extends Controller
{

        public function index()
    {
        $vehicles = Vehicle::all();
        $brands = Brand::all();
        $types = VehicleType::all();
        $cates = Category::all();
        return view('index', compact('brands','vehicles','types','cates'));
    }
}
