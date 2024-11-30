<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Vehicle;

class CategoryController extends Controller
{

  public function index()
    {
        // Lấy tất cả các danh mục
        $categories = Category::all();
        // Trả về view và truyền dữ liệu danh mục với số lượng xe
        return view('admin.main.category.category-list', compact('categories'));
    }

 public function store(Request $request)
    {
        $request->validate([
            'CategoryName' => 'required|string|max:255',
        ]);
        Category::create([
            'CategoryName' => $request->CategoryName,
        ]);
        // Điều hướng đến route 'category-list' sau khi thêm thành công
        return redirect()->route('category-add-form')->with('success', 'Category added successfully!');
    }

 public function edit($id)
{
    $category = Category::findOrFail($id);
    return view('admin.main.category.category-edit', compact('category'));
}


  public function update(Request $request, $id)
{
    $request->validate([
        'CategoryName' => 'required|max:255',
    ]);

    $category = Category::findOrFail($id);
    $category->update([
        'CategoryName' => $request->CategoryName,
    ]);

    return redirect()->route('category-list')->with('success', 'Category updated successfully.');
}


    public function destroy($id)
{
    $category = Category::findOrFail($id);
    $category->delete();

    return redirect()->route('category-list')->with('success', 'Category deleted successfully.');
}

}
