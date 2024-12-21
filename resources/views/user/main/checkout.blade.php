@include('user.app.header')
<div class="breadcrumb-area pt-255 pb-170" style="background-image: url(assets/Frontend/img/banner/banner-4.jpg)">
    <div class="container-fluid">
        <div class="breadcrumb-content text-center">
            <h2>Đặt xe</h2>
            <ul>
                <li>
                    <a href="{{ route('index') }}">home</a>
                </li>
                <li>đặt xe</li>
            </ul>
        </div>
    </div>
</div>
<div class="checkout-area pt-130 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-details-content">
                        <div class="table-content table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product-name">Hình ảnh</th>
                                            <th class="product-price">Xe</th>
                                            <th class="product-name">Giá theo giờ</th>
                                            <th class="product-price">Số theo ngày</th>
                                            {{-- <th class="product-subtotal">delete</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="#"><img src="assets/img/cart/4.jpg" alt=""></a>
                                            </td>
                                            <td class="product-name">
                                                <a href="/chi-tiet/{{ $vehicle->id }}">{{ $vehicle->VehicleName }}</a>
                                            </td>
                                            <td class="product-price"><span class="amount">{{ $vehicle->rental_price_per_hour }}<p>VNĐ/h</p></span></td>
                                            <td class="product-subtotal">{{ $vehicle->rental_price_per_day }}<p>VNĐ/day</p></td>
                                            {{-- <td class="product-cart-icon product-subtotal"><a href="#"><i class="ti-trash"></i></a></td> --}}
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                </div>
            </div>
        </div>
            <div style="height: 40px; width: 100%;"></div>
        <div class="row">
            <div class="col-md-7 col-sm-6">
                <div class="product-details-content">
                    <form id="caculator-form">
                        @csrf
                    <div class="row">
                    <!-- Hidden inputs để gửi thông tin item -->
                    <input type="hidden" id="rental_price_per_hour" name="rental_price_per_hour" value="{{ $vehicle->rental_price_per_hour }}">
                    <input type="hidden" id="rental_price_per_day" name="rental_price_per_day" value="{{ $vehicle->rental_price_per_day }}">
                    
                    <div class="col-md-6">
                        <label for="rental_start_date">Thời gian bắt đầu thuê:</label>
                        <input type="datetime-local" id="rental_start_date" class="form-control flatpickr-input active" name="rental_start_date" 
                               min="{{ now()->format('Y-m-d\TH:i') }}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="rental_end_date">Thời gian kết thúc thuê:</label>
                        <input type="datetime-local" id="rental_end_date" class="form-control flatpickr-input active" name="rental_end_date" required>
                    </div>
                    </div>
                    
                    {{-- <div id="total-cost" name="total-cost" style="margin-top: 15px; font-weight: bold;">Tổng chi phí: 0 VNĐ</div> --}}
                    </form>

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}: {{ number_format(session('totalCost', 0, ',', '.')) }} VNĐ
                        </div>
                    @endif
                </div>
            </div>

            <div class="col-md-5 col-sm-6">
                <div class="shop-total">
                    <h3>Kiểm Tra Thanh Toán</h3>
                    <ul>
                        <li>
                            Mã hợp đồng
                            <span>{{ $ContractID ?? 1000 }}</span>
                        </li>
                        <li>
                            Sub Total
                            <span>$909.00</span>
                        </li>
                        <li>
                            Tax
                            <span>$9.00</span>
                        </li>
                        <li class="order-total">
                            Shipping
                            <span>0</span>
                        </li>
                        <li>
                            Order Total
                            <div id="total-cost" style="margin-top: 15px; font-weight: bold;">Tổng chi phí: 0 VNĐ</div>
                        </li>
                    </ul>
                </div>
                


                <!-- Form Thanh Toán -->
                <form action="{{ route('process.payment') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="payment_method">Chọn phương thức thanh toán:</label>
                        <select name="payment_method" id="payment_method" class="form-control">
                            <option value="VNPAY">VNPAY</option>
                            <option value="MOMO">MoMo</option>
                            <option value="BANK">Ngân Hàng</option>
                            <option value="CASH">Tiền Mặt</option>
                        </select>
                    </div>
                    <input type="hidden" id="total_cost_input" name="total_cost" value="">
                    <input type="hidden" id="contract_id_input" name="contract_id_input" value="">
                    <input type="hidden" id="vehicle_id" name="vehicle_id" value="{{ $vehicle->id }}">
                    <!-- Thêm hidden inputs cho rental_start_date và rental_end_date -->
                    <input type="hidden" id="hidden_rental_start_date" name="rental_start_date" value="">
                    <input type="hidden" id="hidden_rental_end_date" name="rental_end_date" value="">
            
                    <div class="cart-btn text-center mb-15">
                        {{-- <button type="submit" class="btn btn-primary">Thanh Toán</button> --}}
                        <button type="submit" class="cart-btn">Thanh Toán</button>
                    </div>
                </form>
                


                <div class="continue-shopping-btn text-center">
                    <a href="#">Continue Shopping</a>
                </div>
            </div>
        </div>
    </div>
</div>
        {{-- <!-- checkout-area end --> --}}
@include('user.app.footer')


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        // Khi thay đổi giá trị thời gian bắt đầu hoặc kết thúc
        $('#rental_start_date, #rental_end_date').on('change', function () {
            const rentalStartDate = $('#rental_start_date').val();
            const rentalEndDate = $('#rental_end_date').val();

            if (rentalStartDate && rentalEndDate) {
                // Dữ liệu cần gửi
                const data = {
                    _token: $('input[name="_token"]').val(),
                    rental_price_per_hour: $('#rental_price_per_hour').val(),
                    rental_price_per_day: $('#rental_price_per_day').val(),
                    rental_start_date: rentalStartDate,
                    rental_end_date: rentalEndDate,
                };
                console.log('Data to send:', data);

                // Gửi yêu cầu AJAX
                $.ajax({
                    url: '{{ route("checkout.calculate") }}',
                    type: 'POST',
                    data: data,
                    success: function (response) {
                        // Cập nhật tổng chi phí
                        $('#total-cost').text('Tổng chi phí: ' + 
                            new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(response.totalCost));
                    },
                    error: function (xhr) {
                        alert('Có lỗi xảy ra: ' + xhr.responseJSON.message);
                    }
                });
            }
        });
    });
</script>
<script>
    $(document).ready(function() {
    // Hàm để cập nhật giá trị vào input
    function updateTotalCost() {
        var totalCostText = $('#total-cost').text();  // Lấy nội dung văn bản từ div #total-cost
        var totalCost = totalCostText.replace('Tổng chi phí: ', '').replace(' VNĐ', '').replace(/\./g, '').trim(); // Loại bỏ văn bản và chỉ lấy giá trị số
        
        // Chuyển đổi giá trị thành số (float)
        totalCost = parseFloat(totalCost);

        // Kiểm tra nếu totalCost không phải là NaN (không phải chuỗi rỗng hoặc dữ liệu không hợp lệ)
        if (!isNaN(totalCost)) {
            // Gán giá trị vào trường input có id total_cost_input
            $('#total_cost_input').val(totalCost);
        } else {
            // Nếu giá trị không hợp lệ, bạn có thể đặt lại input thành 0
            $('#total_cost_input').val(1);
        }
        
    }

    // Sử dụng MutationObserver để theo dõi thay đổi nội dung của #total-cost
    var targetNode = document.getElementById('total-cost');
    var config = { childList: true, subtree: true };

    var observer = new MutationObserver(function(mutationsList, observer) {
        // Kiểm tra các thay đổi trong #total-cost và cập nhật giá trị vào input
        updateTotalCost();
    });

    observer.observe(targetNode, config);
    
    // Gọi hàm updateTotalCost() ngay khi trang tải để khởi tạo giá trị ban đầu
    updateTotalCost();
});

</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
    const rentalStartDateInput = document.getElementById('rental_start_date');
    const rentalEndDateInput = document.getElementById('rental_end_date');
    const hiddenRentalStartDateInput = document.getElementById('hidden_rental_start_date');
    const hiddenRentalEndDateInput = document.getElementById('hidden_rental_end_date');

    // Đồng bộ giá trị khi người dùng thay đổi
    rentalStartDateInput.addEventListener('change', function () {
        hiddenRentalStartDateInput.value = rentalStartDateInput.value;
    });

    rentalEndDateInput.addEventListener('change', function () {
        hiddenRentalEndDateInput.value = rentalEndDateInput.value;
    });

    // Nếu đã có giá trị ban đầu, đồng bộ khi trang tải
    hiddenRentalStartDateInput.value = rentalStartDateInput.value;
    hiddenRentalEndDateInput.value = rentalEndDateInput.value;
});

</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // // Giả sử user_id được truyền vào từ backend
        // const userId = "{{ str_pad(auth()->user()->id ?? 0, 3, '0', STR_PAD_LEFT) }}";

        // Lấy thời gian hiện tại
        const now = new Date();
        const day = String(now.getDate()).padStart(2, '0');
        const month = String(now.getMonth() + 1).padStart(2, '0');
        const year = String(now.getFullYear()).slice(-2); // Lấy 2 số cuối của năm
        const hour = String(now.getHours()).padStart(2, '0');
        const minute = String(now.getMinutes()).padStart(2, '0');

        // Tạo ContractID
        const contractID =  day + month + year + hour + minute;

        // Gán vào input hidden
        document.getElementById("contract_id_input").value = contractID;
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Lấy form
        const form = document.querySelector('form[action="{{ route("process.payment") }}"]');
        
        // Gán sự kiện submit cho form
        form.addEventListener('submit', function (event) {
            // Lấy giá trị từ các input datetime-local
            const rentalStartDate = document.getElementById('rental_start_date')?.value || '';
            const rentalEndDate = document.getElementById('rental_end_date')?.value || '';
            const totalCost = document.getElementById('total-cost')?.textContent || '';
            const contractID = generateContractID(); // Hàm tạo ContractID (xem dưới)

            // Gán vào các input hidden
            document.getElementById('hidden_rental_start_date').value = rentalStartDate;
            document.getElementById('hidden_rental_end_date').value = rentalEndDate;
            document.getElementById('total_cost_input').value = parseNumberFromText(totalCost);
            document.getElementById('contract_id_input').value = contractID;

            console.log('Dữ liệu gửi đi:', {
                rental_start_date: rentalStartDate,
                rental_end_date: rentalEndDate,
                total_cost: parseNumberFromText(totalCost),
                contract_id: contractID,
            });
        });

        // Hàm chuyển chuỗi chi phí thành số
        function parseNumberFromText(text) {
            return text.replace('Tổng chi phí: ', '').replace(' VNĐ', '').replace(/\./g, '');
        }

        // Hàm tạo ContractID
        function generateContractID() {
            const now = new Date();
            const day = String(now.getDate()).padStart(2, '0');
            const month = String(now.getMonth() + 1).padStart(2, '0');
            const year = String(now.getFullYear()).slice(-2);
            const hour = String(now.getHours()).padStart(2, '0');
            const minute = String(now.getMinutes()).padStart(2, '0');
            return day + month + year + hour + minute;
        }
    });
</script>



