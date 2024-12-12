@include('user.app.header')
<div class="breadcrumb-area pt-255 pb-170" style="background-image: url(assets/Frontend/img/banner/banner-4.jpg)">
    <div class="container-fluid">
        <div class="breadcrumb-content text-center">
            <h2>Cart page</h2>
            <ul>
                <li>
                    <a href="#">home</a>
                </li>
                <li>Cart page</li>
            </ul>
        </div>
    </div>
</div>
<div class="product-cart-area pt-120 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="table-content table-responsive">
                    @if (isset($message))
                        <p>{{ $message }}</p>
                    @else
                        <table>
                            <thead>
                                <tr>
                                    <th class="VehicleName">Tên Xe</th>
                                    <th class="rental_price_per_day">Giá Thuê</th>
                                    <th class="BrandID">Hãng Xe</th>
                                    <th class="seat_number">Số Ghế</th>
                                    <th class="location">Địa Điểm</th>
                                    <th class="delete-cart">Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cart as $item)
                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href="#"><img src="assets/Frontend/img/cart/6.jpg"
                                                    alt=""></a>
                                        </td>
                                        <td class="product-name">
                                            <a href="#"> {{ $item['name'] }} </a>
                                        </td>
                                        <td class="product-name">
                                            <a href="#"> {{ $item['brand'] }} </a>
                                        </td>
                                        <td class="product-price"><span
                                                class="amount">{{ number_format($item['price']) }}đ/ngày</span></td>
                                        <td class="product-name">
                                            <a href="#"> {{ $item['seat'] }} </a>
                                        </td>
                                        
                                        <td class="product-cart-icon product-subtotal">
                                            <form class="remove-item-form" data-product-id="{{ $item['id'] }}">
                                                @csrf

                                                <button type="button" class="btn btn-danger remove-item">
                                                    <i class="ti-trash"></i> Xóa
                                                </button>
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="cart-shiping-update">
                    <div class="cart-shipping">
                        <a class="btn-style cr-btn" href="#">
                            <span>continue shopping</span>
                        </a>
                    </div>
                    <div class="update-checkout-cart">
                        <div class="update-cart">
                            <button class="btn-style cr-btn"><span>update</span></button>
                        </div>
                        <div class="update-cart">
                            <a class="btn-style cr-btn" href="{{ route('checkout')}}">
                                <span>checkout</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7 col-sm-6">
                <div class="discount-code">
                    <h4>enter your discount code</h4>
                    <div class="coupon">
                        <input type="text">
                        <input class="cart-submit" type="submit" value="enter">
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-sm-6">
                <div class="shop-total">
                    <h3>cart total</h3>
                    <ul>
                        <li>
                            sub total
                            <span>$909.00</span>
                        </li>
                        <li>
                            tax
                            <span>$9.00</span>
                        </li>
                        <li class="order-total">
                            shipping
                            <span>0</span>
                        </li>
                        <li>
                            order total
                            <span>$918.00</span>
                        </li>
                    </ul>
                </div>
                <div class="cart-btn text-center mb-15">
                    <a href="#">payment</a>
                </div>
                <div class="continue-shopping-btn text-center">
                    <a href="#">continue shopping</a>
                </div>
            </div>
        </div>
    </div>
</div>




@include('user.app.footer')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const removeFromCartButtons = document.querySelectorAll('.remove-item');

        removeFromCartButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const productId = this.closest('form').getAttribute(
                'data-product-id'); // Lấy productId từ form

                const row = this.closest('tr'); // Lấy dòng sản phẩm

                // Gửi AJAX request đến controller Laravel để xóa sản phẩm
                fetch('/yeu-thich/remove', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            product_id: productId
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            // Xóa sản phẩm khỏi bảng nếu xóa thành công
                            row.remove();
                            alert(data.message); // Hiển thị thông báo

                            // Cập nhật giỏ hàng trong cookie sau khi xóa
                            let cart = data.cart; // Lấy giỏ hàng mới từ server
                            document.cookie = "cart=" + encodeURIComponent(JSON.stringify(
                                cart)) + "; path=/; max-age=" + (60 * 60 *
                            24); // Cập nhật cookie giỏ hàng (24 giờ)
                        } else {
                            alert('Có lỗi xảy ra, vui lòng thử lại!');
                        }
                    })
                    .catch(error => console.error('Error:', error));
            });
        });
    });
</script>
