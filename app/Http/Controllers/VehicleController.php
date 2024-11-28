<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\Brand;
use App\Models\Category;
use App\Models\VehicleType;


class VehicleController extends Controller
{

    /**
     * Hiển thị danh sách phương tiện.
     */
    public function index()
    {
        $vehicles = Vehicle::paginate(6);
        $brands = Brand::all();
        $cates = Category::all();
        return view('user.main.shop-grid-2-col', compact('brands','vehicles','cates'));
    }
    public function filterByBrand($brandName)
{
      $brand = Brand::where('BrandName', $brandName)->firstOrFail();

    // Fetch vehicles where the BrandID matches the brand's ID
    $vehicles = Vehicle::where('BrandID', $brand->BrandID)->paginate(6);

    // Fetch all brands for the sidebar or other sections
    $brands = Brand::all();
    $cates = Category::all();
    return view('user.main.shop-grid-2-col', compact('brands', 'vehicles', 'brand','cates'));
}
    // public function search1(Request $request)
    // {
    //    $query = $request->input('search1'); // Lấy từ khóa tìm kiếm

    // $vehicles = Vehicle::where('status', 'Sẵn sàng') // Chỉ lấy xe có trạng thái "Sẵn sàng"
    //     ->where(function ($q) use ($query) {
    //         $q->where('VehicleName', 'LIKE', "%{$query}%")
    //           ->orWhere('license_plate', 'LIKE', "%{$query}%");
    //     })
    //     ->paginate(6); // Phân trang kết quả
    //      $brands = Brand::all();

    //     return view('user.main.shop-grid-2-col', compact( 'brands','vehicles', 'query'));
    // }

    public function store(Request $request)
    {
        // Xác thực dữ liệu nhập vào
        $request->validate([
            'VehicleName' => 'required|string',
            'BrandID' => 'required|exists:brands,BrandID',
            'CategoryID' => 'required|exists:categories,CategoryID',
            'year_of_manufacture' => 'required|digits:4',
            'color' => 'required|string',
            'license_plate' => 'required|string|unique:vehicles,license_plate',
            'seat_number' => 'required|integer',
            'chassis_number' => 'required|string',
            'engine_number' => 'required|string',
            'vehicle_color' => 'required|string',
            'description' => 'nullable|string',
            'location' => 'required|string',
            'battery_capacity' => 'required|integer',
            'max_range' => 'required|integer',
            'status' => 'required|in:Sẵn sàng,Đang thuê,Bảo trì',
            'rental_price_per_hour' => 'required|numeric',
            'rental_price_per_day' => 'required|numeric',
        ]);

        // Lưu phương tiện vào cơ sở dữ liệu
        Vehicle::create($request->all());

        return redirect()->route('vehicles.index')->with('success', 'Phương tiện đã được tạo thành công!');
    }

    /**
     * Hiển thị chi tiết phương tiện.
     */
    public function show($id)
    {
        $vehicle = Vehicle::findOrFail($id);
       $brands = Brand::all();
        $types = VehicleType::all();
        $cates = Category::all();
        return view('user.main.product-details', compact('brands','vehicles','types','cates'));
    }

    /**
     * Hiển thị form chỉnh sửa phương tiện.
     */
    public function edit($id)
    {
        $vehicle = Vehicle::findOrFail($id);
        $brands = Brand::all();
        $categories = Category::all();

        return view('vehicles.edit', compact('vehicle', 'brands', 'categories'));
    }

    /**
     * Cập nhật phương tiện vào cơ sở dữ liệu.
     */
    public function update(Request $request, $id)
    {
        // Xác thực dữ liệu nhập vào
        $request->validate([
            'BrandID' => 'required|exists:brands,BrandID',
            'CategoryID' => 'required|exists:categories,CategoryID',
            'year_of_manufacture' => 'required|digits:4',
            'color' => 'required|string',
            'license_plate' => 'required|string|unique:vehicles,license_plate,' . $id,
            'seat_number' => 'required|integer',
            'chassis_number' => 'required|string',
            'engine_number' => 'required|string',
            'vehicle_color' => 'required|string',
            'description' => 'nullable|string',
            'location' => 'required|string',
            'battery_capacity' => 'required|integer',
            'max_range' => 'required|integer',
            'status' => 'required|in:Sẵn sàng,Đang thuê,Bảo trì',
            'rental_price_per_hour' => 'required|numeric',
            'rental_price_per_day' => 'required|numeric',
        ]);

        // Cập nhật phương tiện vào cơ sở dữ liệu
        $vehicle = Vehicle::findOrFail($id);
        $vehicle->update($request->all());

        return redirect()->route('vehicles.index')->with('success', 'Phương tiện đã được cập nhật thành công!');
    }

    /**
     * Xóa phương tiện khỏi cơ sở dữ liệu.
     */
    public function destroy($id)
    {
        $vehicle = Vehicle::findOrFail($id);
        $vehicle->delete();

        return redirect()->route('vehicles.index')->with('success', 'Phương tiện đã được xóa!');
    }

   public function search(Request $request)
{
    $query = $request->input('search1');
    $location = $request->input('location');
    $start_date = $request->input('start_date');
    $end_date = $request->input('end_date');

    // Khởi tạo query cơ bản
    $vehicles = Vehicle::query();

    // Nếu có từ khóa tìm kiếm (search1), tìm theo tên xe hoặc biển số
    if ($query) {
        $vehicles->where('status', 'Sẵn sàng')
                 ->where(function ($q) use ($query) {
                     $q->where('VehicleName', 'LIKE', "%{$query}%")
                       ->orWhere('license_plate', 'LIKE', "%{$query}%");
                 });

            // Phân trang kết quả
    $vehicles = $vehicles->paginate(6);

    // Lấy danh sách thương hiệu cho view
    $brands = Brand::all();
    $cates = Category::all();

    // Trả về view phù hợp với dữ liệu
    return view('user.main.shop-grid-2-col', compact('vehicles', 'brands', 'query','cates'));
    }

    // Nếu có địa điểm và ngày nhận/trả xe
    if ($location && $start_date && $end_date) {
        $vehicles->where('location', $location)
                 ->whereNotIn('status', ['Đang thuê', 'Bảo trì']);

            // Phân trang kết quả
    $vehicles = $vehicles->paginate(6);

    // Lấy danh sách thương hiệu cho view
    $brands = Brand::all();
    $cates = Category::all();

    // Trả về view phù hợp với dữ liệu
    return view('user.main.search', compact('vehicles', 'brands', 'location', 'start_date', 'end_date','cates'));
    }
}
public function filterByLocation($location)
{
    // Decode the location from URL
    $decodedLocation = urldecode($location);

    // Get vehicles matching the location
    $vehicles = Vehicle::where('location', $decodedLocation)->paginate(6);

    // Get all brands for the sidebar
    $brands = Brand::all();
    $cates = Category::all();

    return view('user.main.shop-grid-2-col', compact('vehicles', 'brands', 'decodedLocation','cates'));
}



    public function SapXep(Request $request)
    {
    $sort = $request->query('sort'); // Lấy tham số 'sort' từ URL
    $vehicles = Vehicle::query();

    if ($sort === 'newest') {
        $vehicles->orderBy('created_at', 'desc'); // Sắp xếp theo thời gian tạo mới nhất
    } elseif ($sort === 'price') {
        $vehicles->orderBy('rental_price_per_day', 'asc'); // Sắp xếp theo giá tăng dần
    }

    $vehicles = $vehicles->get(); // Lấy danh sách xe sau khi sắp xếp
     $brands = Brand::all();
        $types = VehicleType::all();
        $cates = Category::all();
    return view('user.main.shop-grid-2-col', compact('vehicles', 'sort','types','cates','brands')); // Truyền thêm 'sort' để duy trì trạng thái
}

}

