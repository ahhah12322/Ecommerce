<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\Brand;
use App\Models\Category;
use App\Models\VehicleType;
use App\Models\VehicleImage;
use App\Models\RentalContract;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;





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

        $reviews = DB::table('vehicles')
            ->leftJoin('reviews', 'vehicles.id', '=', 'reviews.vehicle_id')
            ->leftJoin('users', 'reviews.customer_id', '=', 'users.id')
            ->where('vehicles.id')
            ->select('vehicles.*', 'reviews.*', 'users.*')
            ->select(
                'vehicles.*',
                'reviews.*',
                'users.id as user_id',
                'users.name as customer_name'  // Lấy tên khách hàng từ bảng users
            )
            ->get();
        foreach ($vehicles as $vehicle) {
            $ordersCount = RentalContract::where('VehicleID', $vehicle->id)
                ->where('StatusPayment', 'Đã thanh toán')
                ->count();
        }

        // Mảng để lưu ảnh chính và ảnh phụ của từng xe
        $vehicleImages = [];

        // Duyệt qua từng xe để lấy ảnh chính và ảnh phụ
        foreach ($vehicles as $vehicle) {
            // Lấy ảnh chính của từng xe (IsMainImage = 1)
            $mainImage = VehicleImage::where('VehicleID', $vehicle->id)
                ->where('IsMainImage', 1) // Lọc ảnh chính
                ->first();

            // Lấy ảnh phụ của từng xe (IsMainImage = 0)
            $additionalImages = VehicleImage::where('VehicleID', $vehicle->id)
                ->where('IsMainImage', 0) // Lọc ảnh phụ
                ->get();

            // Lưu ảnh chính và ảnh phụ của xe vào mảng
            $vehicleImages[$vehicle->id] = [
                'mainImage' => $mainImage,
                'additionalImages' => $additionalImages,
            ];
        }
        return view('user.main.shop-grid-2-col', compact('brands', 'vehicles', 'cates', 'vehicleImages', 'reviews', 'ordersCount'));
    }
    public function index2()
    {
        $vehicles = Vehicle::paginate(6);
        $brands = Brand::all();
        $categorys = Category::all();
        $types = VehicleType::all();

        return view('admin.main.product.product-add1', compact('brands', 'vehicles', 'categorys', 'types'));
    }
    public function index3()
    {
        // Lấy danh sách các xe với phân trang
        $vehicles = Vehicle::paginate(10);

        // Lấy tất cả các thương hiệu, danh mục và loại xe
        $brands = Brand::all();
        $categorys = Category::all();
        $types = VehicleType::all();

        // Mảng để lưu ảnh chính và ảnh phụ của từng xe
        $vehicleImages = [];

        // Duyệt qua từng xe để lấy ảnh chính và ảnh phụ
        foreach ($vehicles as $vehicle) {
            // Lấy ảnh chính của từng xe (IsMainImage = 1)
            $mainImage = VehicleImage::where('VehicleID', $vehicle->id)
                ->where('IsMainImage', 1) // Lọc ảnh chính
                ->first();

            // Lấy ảnh phụ của từng xe (IsMainImage = 0)
            $additionalImages = VehicleImage::where('VehicleID', $vehicle->id)
                ->where('IsMainImage', 0) // Lọc ảnh phụ
                ->get();

            // Lưu ảnh chính và ảnh phụ của xe vào mảng
            $vehicleImages[$vehicle->id] = [
                'mainImage' => $mainImage,
                'additionalImages' => $additionalImages,
            ];
        }
        // Trả về view với tất cả các dữ liệu cần thiết
        return view('admin.main.product.product-list', compact('brands', 'vehicles', 'categorys', 'types', 'vehicleImages'));
    }
    public function vehicalgrid()
    {
        // Lấy danh sách các xe với phân trang
        $vehicles = Vehicle::paginate(12);

        // Lấy tất cả các thương hiệu, danh mục và loại xe
        $brands = Brand::all();
        $categorys = Category::all();
        $types = VehicleType::all();

        // Mảng để lưu ảnh chính và ảnh phụ của từng xe
        $vehicleImages = [];

        // Duyệt qua từng xe để lấy ảnh chính và ảnh phụ
        foreach ($vehicles as $vehicle) {
            // Lấy ảnh chính của từng xe (IsMainImage = 1)
            $mainImage = VehicleImage::where('VehicleID', $vehicle->id)
                ->where('IsMainImage', 1) // Lọc ảnh chính
                ->first();

            // Lấy ảnh phụ của từng xe (IsMainImage = 0)
            $additionalImages = VehicleImage::where('VehicleID', $vehicle->id)
                ->where('IsMainImage', 0) // Lọc ảnh phụ
                ->get();

            // Lưu ảnh chính và ảnh phụ của xe vào mảng
            $vehicleImages[$vehicle->id] = [
                'mainImage' => $mainImage,
                'additionalImages' => $additionalImages,
            ];
        }
        // Trả về view với tất cả các dữ liệu cần thiết
        return view('admin.main.product.product-grid', compact('brands', 'vehicles', 'categorys', 'types', 'vehicleImages'));
    }

    public function filterByBrand($brandName)
    {
        $brand = Brand::where('BrandName', $brandName)->firstOrFail();

        // Fetch vehicles where the BrandID matches the brand's ID
        $vehicles = Vehicle::where('BrandID', $brand->BrandID)->paginate(6);

        // Fetch all brands for the sidebar or other sections
        $brands = Brand::all();
        $cates = Category::all();
        return view('user.main.shop-grid-2-col', compact('brands', 'vehicles', 'brand', 'cates'));
    }


    public function store(Request $request)
    {
        // dd($request->all());

        try {
            // Xác thực dữ liệu nhập vào
            $request->validate([
                'VehicleName' => 'required|string',
                'BrandID' => 'required|exists:brands,BrandID',
                'CategoryID' => 'required|exists:categories,CategoryID',
                'vehicle_type_id' => 'required|exists:vehicle_types,id',
                'year_of_manufacture' => 'required|digits:4',
                'color' => 'required|string',
                'license_plate' => 'required|string|unique:vehicles,license_plate',
                'seat_number' => 'required|integer',
                'chassis_number' => 'required|string',
                'engine_number' => 'required|string',
                'description' => 'nullable|string',
                'location' => 'required|string',
                'battery_capacity' => 'required|integer',
                'max_range' => 'required|integer',
                'rental_price_per_hour' => 'required|numeric',
                'rental_price_per_day' => 'required|numeric',

                'main_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Kiểm tra ảnh chính
                'additional_images' => 'nullable|array',
                'additional_images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Kiểm tra ảnh phụ
            ]);
            $status = $request->input('status', 'Sẵn sàng'); // Nếu không có, gán mặc định là 'Sẵn sàng'
            // Lưu thông tin phương tiện vào bảng vehicles
            $vehicle = Vehicle::create([
                'VehicleName' => $request->VehicleName,
                'BrandID' => $request->BrandID,
                'CategoryID' => $request->CategoryID,
                'vehicle_type_id' => $request->vehicle_type_id,
                'year_of_manufacture' => $request->year_of_manufacture,
                'color' => $request->color,
                'license_plate' => $request->license_plate,
                'seat_number' => $request->seat_number,
                'chassis_number' => $request->chassis_number,
                'engine_number' => $request->engine_number,
                'description' => $request->description,
                'location' => $request->location,
                'battery_capacity' => $request->battery_capacity,
                'max_range' => $request->max_range,
                'status' => $status,

                'rental_price_per_day' => $request->rental_price_per_day,
                'rental_price_per_hour' => $request->rental_price_per_hour,

            ]);

            // Lưu ảnh chính vào bảng vehicle_images
            // Lưu ảnh chính
            if ($request->hasFile('main_image')) {
                $mainImage = $request->file('main_image');

                // Kiểm tra nếu ảnh hợp lệ
                if ($mainImage->isValid()) {
                    // Đảm bảo thư mục tồn tại
                    $mainImagePath = public_path('assets/Frontend/img/product');
                    if (!file_exists($mainImagePath)) {
                        mkdir($mainImagePath, 0775, true); // Tạo thư mục nếu chưa có
                    }

                    // Lưu ảnh chính
                    $mainImageName = time() . '.' . $mainImage->getClientOriginalExtension(); // Đặt tên ảnh
                    $mainImage->move($mainImagePath, $mainImageName); // Di chuyển ảnh

                    // Lưu thông tin ảnh chính vào database
                    VehicleImage::create([
                        'VehicleID' => $vehicle->id,
                        'ImageURL' => 'assets/Frontend/img/product/' . $mainImageName, // Lưu đường dẫn vào database
                        'IsMainImage' => true, // Đánh dấu ảnh chính
                    ]);
                } else {
                    return back()->withErrors('Ảnh chính không hợp lệ');
                }
            }

            // Lưu ảnh phụ
            if ($request->hasFile('additional_images')) {
                $additionalImages = $request->file('additional_images');

                foreach ($additionalImages as $image) {
                    // Kiểm tra nếu ảnh phụ hợp lệ
                    if ($image->isValid()) {
                        // Đảm bảo thư mục tồn tại
                        $additionalImagePath = public_path('assets/Frontend/img/product-details');
                        if (!file_exists($additionalImagePath)) {
                            mkdir($additionalImagePath, 0775, true); // Tạo thư mục nếu chưa có
                        }

                        // Lưu ảnh phụ
                        $imageName = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension(); // Đặt tên ảnh
                        $image->move($additionalImagePath, $imageName); // Di chuyển ảnh

                        // Lưu thông tin ảnh phụ vào database
                        VehicleImage::create([
                            'VehicleID' => $vehicle->id,
                            'ImageURL' => 'assets/Frontend/img/product-details/' . $imageName, // Lưu đường dẫn vào database
                            'IsMainImage' => false, // Đánh dấu ảnh phụ
                        ]);
                    } else {
                        return back()->withErrors('Một hoặc nhiều ảnh phụ không hợp lệ');
                    }
                }
            }

            // Nếu tất cả đều thành công, chuyển hướng về trang danh sách phương tiện và thông báo thành công
            return redirect()->route('vehical-add1')->with('success', 'Vehicle and images added successfully!');
        } catch (\Exception $e) {
            // Nếu có lỗi, trả về thông báo lỗi
            return redirect()->back()->withErrors(['error' => 'Something went wrong! Please try again. Error: ' . $e->getMessage()]);
        }
    }



    /**
     * Hiển thị chi tiết phương tiện.
     */
    public function show($id)
    {
        DB::table('vehicle_views')->insert([
            'vehicle_id' => $id,
            'viewed_at' => now(),
        ]);

        $reviews = DB::table('vehicles')
            ->leftJoin('reviews', 'vehicles.id', '=', 'reviews.vehicle_id')
            ->leftJoin('users', 'reviews.customer_id', '=', 'users.id')
            ->where('vehicles.id', $id)
            ->select('vehicles.*', 'reviews.*', 'users.*')
            ->select(
                'vehicles.*',
                'reviews.*',
                'users.id as user_id',
                'users.name as customer_name'  // Lấy tên khách hàng từ bảng users
            )
            ->get();
        $vehicle = Vehicle::findOrFail($id);
        $brands = Brand::all();
        $types = VehicleType::all();
        $categorys = Category::all();
        // Mảng để lưu ảnh chính và ảnh phụ của từng xe
        $vehicleImages = [];

        // Lấy ảnh chính của từng xe (IsMainImage = 1)
        $mainImage = VehicleImage::where('VehicleID', $vehicle->id)
            ->where('IsMainImage', 1) // Lọc ảnh chính
            ->first();

        // Lấy ảnh phụ của từng xe (IsMainImage = 0)
        $additionalImages = VehicleImage::where('VehicleID', $vehicle->id)
            ->where('IsMainImage', 0) // Lọc ảnh phụ
            ->get();

        // Lưu ảnh chính và ảnh phụ của xe vào mảng
        $vehicleImages[$vehicle->id] = [
            'mainImage' => $mainImage,
            'additionalImages' => $additionalImages,
        ];


        return view('user.main.product-details', compact('brands', 'vehicle', 'types', 'categorys', 'vehicleImages', 'reviews'));
    }

    /**
     * Hiển thị form chỉnh sửa phương tiện.
     */
    public function edit($id)
    {


        $vehicleedit = Vehicle::findOrFail($id);
        // Lấy tất cả các thương hiệu, danh mục và loại xe

        $brands = Brand::all();
        $categorys = Category::all();
        $types = VehicleType::all();
        $vehicles = Vehicle::all();
        // Mảng để lưu ảnh chính và ảnh phụ của từng xe
        $vehicleImages = [];

        // Duyệt qua từng xe để lấy ảnh chính và ảnh phụ
        foreach ($vehicles as $vehicle) {
            // Lấy ảnh chính của từng xe (IsMainImage = 1)
            $mainImage = VehicleImage::where('VehicleID', $vehicle->id)
                ->where('IsMainImage', 1) // Lọc ảnh chính
                ->first();

            // Lấy ảnh phụ của từng xe (IsMainImage = 0)
            $additionalImages = VehicleImage::where('VehicleID', $vehicle->id)
                ->where('IsMainImage', 0) // Lọc ảnh phụ
                ->get();

            // Lưu ảnh chính và ảnh phụ của xe vào mảng
            $vehicleImages[$vehicle->id] = [
                'mainImage' => $mainImage,
                'additionalImages' => $additionalImages,
            ];
        }

        // Trả về view với tất cả các dữ liệu cần thiết
        return view('admin.main.product.product-update', compact('brands', 'vehicleedit', 'categorys', 'types', 'vehicleImages'));
    }
    /**
     * Cập nhật phương tiện vào cơ sở dữ liệu.
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        // Tìm phương tiện theo ID
        $vehicle = Vehicle::findOrFail($id);

        // Xác thực dữ liệu đầu vào
        $request->validate([
            'VehicleName' => 'required|string',
            'BrandID' => 'required|exists:brands,BrandID',
            'CategoryID' => 'required|exists:categories,CategoryID',
            'vehicle_type_id' => 'required|exists:vehicle_types,id',
            'year_of_manufacture' => 'required|digits:4',
            'color' => 'required|string',
            'license_plate' => 'required|string|unique:vehicles,license_plate,' . $vehicle->id,
            'seat_number' => 'required|integer',
            'chassis_number' => 'required|string',
            'engine_number' => 'required|string',
            'description' => 'nullable|string',
            'location' => 'required|string',
            'battery_capacity' => 'required|integer',
            'max_range' => 'required|integer',
            'rental_price_per_day' => 'required|numeric',
            'main_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Kiểm tra ảnh chính
            'additional_images' => 'nullable|array',
            'additional_images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Kiểm tra ảnh phụ
        ]);

        // Cập nhật thông tin phương tiện
        $vehicle->update([
            'VehicleName' => $request->input('VehicleName'),
            'BrandID' => $request->input('BrandID'),
            'CategoryID' => $request->input('CategoryID'),
            'vehicle_type_id' => $request->input('vehicle_type_id'),
            'year_of_manufacture' => $request->input('year_of_manufacture'),
            'color' => $request->input('color'),
            'license_plate' => $request->input('license_plate'),
            'seat_number' => $request->input('seat_number'),
            'chassis_number' => $request->input('chassis_number'),
            'engine_number' => $request->input('engine_number'),
            'description' => $request->input('description'),
            'location' => $request->input('location'),
            'battery_capacity' => $request->input('battery_capacity'),
            'max_range' => $request->input('max_range'),
            'rental_price_per_day' => $request->input('rental_price_per_day'),
        ]);

        // Xử lý ảnh chính (nếu có)
        if ($request->hasFile('main_image')) {
            $mainImage = $request->file('main_image');

            // Kiểm tra nếu ảnh hợp lệ
            if ($mainImage->isValid()) {
                // Đảm bảo thư mục tồn tại
                $mainImagePath = public_path('assets/Frontend/img/product');
                if (!file_exists($mainImagePath)) {
                    mkdir($mainImagePath, 0775, true); // Tạo thư mục nếu chưa có
                }

                // Kiểm tra xem có ảnh chính cũ không và xóa nó
                $oldMainImage = VehicleImage::where('VehicleID', $vehicle->id)
                    ->where('IsMainImage', true)
                    ->first();

                if ($oldMainImage) {
                    // Xóa ảnh chính cũ khỏi cơ sở dữ liệu
                    $oldMainImage->delete();

                    // Tùy chọn: Xóa ảnh khỏi hệ thống tệp nếu cần
                    $oldImagePath = public_path($oldMainImage->ImageURL);
                    if (File::exists($oldImagePath)) {
                        File::delete($oldImagePath);
                    }
                }

                // Lưu ảnh chính mới
                $mainImage = $request->file('main_image');
                $mainImageName = time() . '-' . uniqid() . '.' . $mainImage->getClientOriginalExtension();
                $mainImagePath = public_path('assets/Frontend/img/product');
                $mainImage->move($mainImagePath, $mainImageName);

                VehicleImage::create([
                    'VehicleID' => $vehicle->id,
                    'ImageURL' => 'assets/Frontend/img/product/' . $mainImageName, // Lưu đường dẫn vào database
                    'IsMainImage' => true, // Đánh dấu ảnh chính
                ]);
            } else {
                return back()->withErrors('Ảnh chính không hợp lệ');
            }
        }

        // Xử lý ảnh phụ (nếu có)
        if ($request->hasFile('additional_images')) {
            $additionalImages = $request->file('additional_images');

            foreach ($additionalImages as $image) {
                // Kiểm tra nếu ảnh phụ hợp lệ
                if ($image->isValid()) {
                    // Đảm bảo thư mục tồn tại
                    $additionalImagePath = public_path('assets/Frontend/img/product-details');
                    if (!file_exists($additionalImagePath)) {
                        mkdir($additionalImagePath, 0775, true); // Tạo thư mục nếu chưa có
                    }

                    // Lưu ảnh phụ
                    $imageName = time() . '-' . uniqid() . '.' . $image->getClientOriginalExtension(); // Đặt tên ảnh
                    $image->move($additionalImagePath, $imageName); // Di chuyển ảnh

                    // Lưu thông tin ảnh phụ vào database
                    VehicleImage::create([
                        'VehicleID' => $vehicle->id,
                        'ImageURL' => 'assets/Frontend/img/product-details/' . $imageName, // Lưu đường dẫn vào database
                        'IsMainImage' => false, // Đánh dấu ảnh phụ
                    ]);
                } else {
                    return back()->withErrors('Một hoặc nhiều ảnh phụ không hợp lệ');
                }
            }
        }

        return back()->with('success', 'Cập nhật phương tiện thành công!');
    }


    /**
     * Xóa phương tiện khỏi cơ sở dữ liệu.
     */
    public function destroy($id)
    {

        try {
            // Tìm và xóa ảnh liên quan// Xóa phương tiện
            $vehicle = Vehicle::findOrFail($id);
            $vehicle->delete();
            $images = VehicleImage::where('VehicleID', $id)->get(); // Sử dụng `get()` để lấy kết quả
            // Duyệt qua các ảnh và xóa từng ảnh
            foreach ($images as $image) {
                $imagePath = public_path($image->ImageURL);

                if (file_exists($imagePath)) {
                    unlink($imagePath); // Xóa file ảnh
                }

                $image->delete(); // Xóa ảnh trong DB
            }

            // Trả về thông báo thành công
            return back()->with('success', 'Phương tiện và ảnh liên quan đã được xóa!');
        } catch (\Exception $e) {
            // Xử lý lỗi
            // Trả về thông báo thành công
            return back()->with('error', 'Phương tiện và ảnh liên quan chưa được Xóa');
        }
    }


    public function search(Request $request)
    {
        $query = $request->input('search1');
        $location = $request->input('location');
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');

        // Khởi tạo query cơ bản
        $vehicles = Vehicle::query();
        // Mảng để lưu ảnh chính và ảnh phụ của từng xe
        $vehicleImages = [];

        // Duyệt qua từng xe để lấy ảnh chính và ảnh phụ
        foreach ($vehicles as $vehicle) {
            // Lấy ảnh chính của từng xe (IsMainImage = 1)
            $mainImage = VehicleImage::where('VehicleID', $vehicle->id)
                ->where('IsMainImage', 1) // Lọc ảnh chính
                ->first();

            // Lấy ảnh phụ của từng xe (IsMainImage = 0)
            $additionalImages = VehicleImage::where('VehicleID', $vehicle->id)
                ->where('IsMainImage', 0) // Lọc ảnh phụ
                ->get();

            // Lưu ảnh chính và ảnh phụ của xe vào mảng
            $vehicleImages[$vehicle->id] = [
                'mainImage' => $mainImage,
                'additionalImages' => $additionalImages,
            ];
        }

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
            $vehicleImages = [];

            // Duyệt qua từng xe để lấy ảnh chính và ảnh phụ
            foreach ($vehicles as $vehicle) {
                // Lấy ảnh chính của từng xe (IsMainImage = 1)
                $mainImage = VehicleImage::where('VehicleID', $vehicle->id)
                    ->where('IsMainImage', 1) // Lọc ảnh chính
                    ->first();

                // Lấy ảnh phụ của từng xe (IsMainImage = 0)
                $additionalImages = VehicleImage::where('VehicleID', $vehicle->id)
                    ->where('IsMainImage', 0) // Lọc ảnh phụ
                    ->get();

                // Lưu ảnh chính và ảnh phụ của xe vào mảng
                $vehicleImages[$vehicle->id] = [
                    'mainImage' => $mainImage,
                    'additionalImages' => $additionalImages,
                ];
            }

            // Trả về view phù hợp với dữ liệu
            return view('user.main.shop-grid-2-col', compact('vehicles', 'brands', 'query', 'cates', 'vehicleImages'));
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
            return view('user.main.search', compact('vehicles', 'brands', 'location', 'start_date', 'end_date', 'cates', 'vehicleImages'));
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
        // Mảng để lưu ảnh chính và ảnh phụ của từng xe
        $vehicleImages = [];

        // Duyệt qua từng xe để lấy ảnh chính và ảnh phụ
        foreach ($vehicles as $vehicle) {
            // Lấy ảnh chính của từng xe (IsMainImage = 1)
            $mainImage = VehicleImage::where('VehicleID', $vehicle->id)
                ->where('IsMainImage', 1) // Lọc ảnh chính
                ->first();

            // Lấy ảnh phụ của từng xe (IsMainImage = 0)
            $additionalImages = VehicleImage::where('VehicleID', $vehicle->id)
                ->where('IsMainImage', 0) // Lọc ảnh phụ
                ->get();

            // Lưu ảnh chính và ảnh phụ của xe vào mảng
            $vehicleImages[$vehicle->id] = [
                'mainImage' => $mainImage,
                'additionalImages' => $additionalImages,
            ];
        }

        return view('user.main.shop-grid-2-col', compact('vehicles', 'brands', 'decodedLocation', 'cates', 'vehicleImages'));
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
        return view('user.main.shop-grid-2-col', compact('vehicles', 'sort', 'types', 'cates', 'brands')); // Truyền thêm 'sort' để duy trì trạng thái
    }
    public function getVehicles(Request $request)
    {
        $brands = $request->input('brands');
        $categories = $request->input('categories');

        $vehicles = Vehicle::query();

        if (!empty($brands)) {
            $vehicles->whereIn('BrandID', $brands);
        }

        if (!empty($categories)) {
            $vehicles->whereIn('CategoryID', $categories);
        }

        return response()->json(['vehicles' => $vehicles->get()]);
    }

    public function filter(Request $request)

    {

        // Lấy dữ liệu lọc từ request
        $brands = $request->input('brands', []);
        $categories = $request->input('categories', []);

        // Lọc xe theo thương hiệu và danh mục
        $vehicles = Vehicle::query();

        if (!empty($brands)) {
            $vehicles->whereIn('BrandID', $brands);
        }

        if (!empty($categories)) {
            $vehicles->whereIn('CategoryID', $categories);
        }

        $vehicles = $vehicles->get();
        $brands = Brand::all();
        $categorys = Category::all();
        $types = VehicleType::all();

        // Mảng để lưu ảnh chính và ảnh phụ của từng xe
        $vehicleImages = [];

        // Duyệt qua từng xe để lấy ảnh chính và ảnh phụ
        foreach ($vehicles as $vehicle) {
            // Lấy ảnh chính của từng xe (IsMainImage = 1)
            $mainImage = VehicleImage::where('VehicleID', $vehicle->id)
                ->where('IsMainImage', 1) // Lọc ảnh chính
                ->first();

            // Lấy ảnh phụ của từng xe (IsMainImage = 0)
            $additionalImages = VehicleImage::where('VehicleID', $vehicle->id)
                ->where('IsMainImage', 0) // Lọc ảnh phụ
                ->get();

            // Lưu ảnh chính và ảnh phụ của xe vào mảng
            $vehicleImages[$vehicle->id] = [
                'mainImage' => $mainImage,
                'additionalImages' => $additionalImages,
            ];
        }
        // Trả về view với tất cả các dữ liệu cần thiết
        return view('admin.main.product.product-grid', compact('brands', 'vehicles', 'categorys', 'types', 'vehicleImages'));
    }
    public function removeImage($id)
    {
        try {
            $image = VehicleImage::where('id', $id)->first();
            if ($image) {
                $imagePath = public_path($image->ImageURL);
                if (file_exists($imagePath)) {
                    unlink($imagePath); // Xóa file ảnh
                }
                $image->delete(); // Xóa record trong DB
                return response()->json(['success' => true, 'message' => 'Ảnh đã xóa thành công.']);
            } else {
                return response()->json(['success' => false, 'message' => 'Ảnh không tồn tại.']);
            }
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Lỗi: ' . $e->getMessage()], 500);
        }
    }
}
