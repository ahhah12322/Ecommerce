<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Vehicle;

class BrandController extends Controller
{

  public function index()
    {
        // Lấy tất cả các danh mục
        $brands = Brand::all();



        // Trả về view và truyền dữ liệu danh mục với số lượng xe
        return view('admin.main.brand.brand-list', compact('brands'));
    }

 public function store(Request $request)
    {
        $request->validate([
            'BrandName' => 'required|string|max:255',
        ]);

        Brand::create([
            'BrandName' => $request->BrandName,
        ]);

        // Điều hướng đến route 'brand-list' sau khi thêm thành công
        return redirect()->route('brand-add-form')->with('success', 'brand added successfully!');
    }

 public function edit($id)
{
    $brand = Brand::findOrFail($id);
    return view('admin.main.brand.brand-edit', compact('brand'));
}


  public function update(Request $request, $id)
{
    $request->validate([
        'BrandName' => 'required|max:255',
    ]);

    $brand = Brand::findOrFail($id);
    $brand->update([
        'BrandName' => $request->BrandName,
    ]);

    return redirect()->route('brand-list')->with('success', 'brand updated successfully.');
}


    public function destroy($id)
{
    $brand = Brand::findOrFail($id);
    $brand->delete();

    return redirect()->route('brand-list')->with('success', 'brand deleted successfully.');
}

}
