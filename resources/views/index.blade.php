@include('user.app.header')

        <div class="overview-area pt-135" style="margin-top:40px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="overview-content">

                            <h3>CÙNG BẠN TRÊN MỌI HÀNH TRÌNH</h3>
                            <br>

                            <div class="">
                                <div class="col-md-8">
                                    <div class="car-rental">
                                        <form>
                                            <div class="form-group">
                                                <label for="">Chọn địa điểm</label>
                                                <select class="form-control">
                                                    <option value="" hidden="">Chọn điểm nhận xe</option>
                                                    <option value="1">Hà Nội</option>
                                                    <option value="2">TP. Hồ Chí Minh</option>
                                                    <option value="3">Đà Nẵng</option>
                                                    <option value="4">Phú Quốc</option>
                                                    <option value="7">Sapa (Lào Cai)</option>
                                                    <option value="11">Ninh Bình</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Ngày nhận xe</label>
                                                <input class="form-control" type="date">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Ngày trả xe</label>
                                                <input class="form-control" type="date">
                                            </div>
                                            <div class="form-group">
                                                <button class="btn-lg btn-warning btn-block " type="submit">TÌM
                                                    XE</button>
                                            </div>
                                        </form>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="overview-img">
                            <img class="tilter" src="assets/Frontend/img/banner/banner-1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-area pt-135 pb-120">
            <div class="container">
                <div class="section-title text-center mb-50">
                    <h2>THUÊ XE MÁY TẠI</h2>
                    <hr>
                </div>
                <div class="row">

                    <div class="col-md-4">
                        <div class="banner-wrapper mb-30">
                            <a href="#"><img src="assets/Frontend/img/banner/ha-noi.jpg" alt="image"></a>
                            <div class="banner-content">
                                <h2>HÀ NỘI</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="banner-wrapper mb-30">
                            <a href="#"><img src="assets/Frontend/img/banner/sai-gon.jpg" alt="image"></a>
                            <div class="banner-content">
                                <h2>SÀI GÒN</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="banner-wrapper mb-30">
                            <a href="#"><img src="assets/Frontend/img/banner/sapa.jpg" alt="image"></a>
                            <div class="banner-content">
                                <h2>SAPA</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="banner-wrapper mb-30">
                            <a href="#"><img src="assets/Frontend/img/banner/ninh-binh.jpg" alt="image"></a>
                            <div class="banner-content">
                                <h2>NINH BÌNH</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="banner-wrapper mb-30">
                            <a href="#"><img src="assets/Frontend/img/banner/phu-quoc.jpg" alt="image"></a>
                            <div class="banner-content">
                                <h2>PHÚ QUỐC</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="banner-wrapper mb-30">
                            <a href="#"><img src="assets/Frontend/img/banner/ha-giang.jpg" alt="image"></a>
                            <div class="banner-content">
                                <h2>HÀ GIANG</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="banner-wrapper mb-30">
                            <a href="#"><img src="assets/Frontend/img/banner/da-nang.jpg" alt="image"></a>
                            <div class="banner-content">
                                <h2>ĐÀ NẴNG</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="banner-wrapper mb-30">
                            <a href="#"><img src="assets/Frontend/img/banner/hue.jpg" alt="image"></a>
                            <div class="banner-content">
                                <h2>HUẾ</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="banner-wrapper mb-30">
                            <a href="#"><img src="assets/Frontend/img/banner/da-lat.jpg" alt="image"></a>
                            <div class="banner-content">
                                <h2>ĐÀ LẠT</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-area pb-190">
            <div class="container">
                <div class="section-title text-center mb-50">
                    <h2>XE DÀNH CHO BẠN</h2>
                </div>
                <div class="product-tab-list text-center mb-80 nav product-menu-mrg" role="tablist">
                    <a class="active" href="#home1" data-toggle="tab">
                        <h4>HONDA </h4>
                    </a>
                    <a href="#home2" data-toggle="tab">
                        <h4> YAMAHA </h4>
                    </a>
                </div>
                <div class="tab-content jump">
                    <div class="tab-pane active" id="home1">
                        <div class="product-slider-active owl-carousel">
                            <div class="product-wrapper-bundle">
                                <div class="product-wrapper">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img src="assets/Frontend/img/product/honda-blade.png" alt="">
                                        </a>
                                        <div class="product-item-dec">
                                            <ul>
                                                <li>MANUAL</li>
                                                <li>PETROL</li>
                                                <li>250 CC</li>
                                            </ul>
                                        </div>
                                        <div class="product-action">
                                            <a class="action-plus-2" title="Add To Cart" href="#">
                                                <i class=" ti-shopping-cart"></i>
                                            </a>
                                            <a class="action-cart-2" title="Wishlist" href="#">
                                                <i class=" ti-heart"></i>
                                            </a>
                                            <a class="action-reload" title="Quick View" data-toggle="modal"
                                                data-target="#exampleModal" href="#">
                                                <i class=" ti-zoom-in"></i>
                                            </a>
                                        </div>
                                        <div class="product-content-wrapper">
                                            <div class="product-title-spreed">
                                                <h4><a href="product-details.html">Honda Blade</a></h4>
                                                <span>110 CC</span>
                                            </div>
                                            <div class="product-price">
                                                <span>120,000 đ/ngày</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrapper">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img src="assets/Frontend/img/product/honda-ware-rsx.png" alt="">
                                        </a>
                                        <div class="product-item-dec">
                                            <ul>
                                                <li>2018</li>
                                                <li>MANUAL</li>
                                                <li>PETROL</li>
                                                <li>480 CC</li>
                                            </ul>
                                        </div>
                                        <div class="product-action">
                                            <a class="action-plus-2" title="Add To Cart" href="#">
                                                <i class=" ti-shopping-cart"></i>
                                            </a>
                                            <a class="action-cart-2" title="Wishlist" href="#">
                                                <i class=" ti-heart"></i>
                                            </a>
                                            <a class="action-reload" title="Quick View" data-toggle="modal"
                                                data-target="#exampleModal" href="#">
                                                <i class=" ti-zoom-in"></i>
                                            </a>
                                        </div>
                                        <div class="product-content-wrapper">
                                            <div class="product-title-spreed">
                                                <h4><a href="product-details.html">Honda WAVE RSX FI</a></h4>
                                                <span>110 CC</span>
                                            </div>
                                            <div class="product-price">
                                                <span>120,000 đ/ngày</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrapper-bundle">
                                <div class="product-wrapper">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img src="assets/Frontend/img/product/honda-future.png" alt="">
                                        </a>
                                        <div class="product-item-dec">
                                            <ul>
                                                <li>2018</li>
                                                <li>MANUAL</li>
                                                <li>PETROL</li>
                                                <li>200 CC</li>
                                            </ul>
                                        </div>
                                        <div class="product-action">
                                            <a class="action-plus-2" title="Add To Cart" href="#">
                                                <i class=" ti-shopping-cart"></i>
                                            </a>
                                            <a class="action-cart-2" title="Wishlist" href="#">
                                                <i class=" ti-heart"></i>
                                            </a>
                                            <a class="action-reload" title="Quick View" data-toggle="modal"
                                                data-target="#exampleModal" href="#">
                                                <i class=" ti-zoom-in"></i>
                                            </a>
                                        </div>
                                        <div class="product-content-wrapper">
                                            <div class="product-title-spreed">
                                                <h4><a href="product-details.html">Honda Future</a></h4>
                                                <span>125 CC</span>
                                            </div>
                                            <div class="product-price">
                                                <span>$2549</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrapper">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img src="assets/Frontend/img/product/honda-winner.png" alt="">
                                        </a>
                                        <div class="product-item-dec">
                                            <ul>
                                                <li>2018</li>
                                                <li>MANUAL</li>
                                                <li>PETROL</li>
                                                <li>150 CC</li>
                                            </ul>
                                        </div>
                                        <div class="product-action">
                                            <a class="action-plus-2" title="Add To Cart" href="#">
                                                <i class=" ti-shopping-cart"></i>
                                            </a>
                                            <a class="action-cart-2" title="Wishlist" href="#">
                                                <i class=" ti-heart"></i>
                                            </a>
                                            <a class="action-reload" title="Quick View" data-toggle="modal"
                                                data-target="#exampleModal" href="#">
                                                <i class=" ti-zoom-in"></i>
                                            </a>
                                        </div>
                                        <div class="product-content-wrapper">
                                            <div class="product-title-spreed">
                                                <h4><a href="product-details.html">Honda Winner</a></h4>
                                                <span>150 CC</span>
                                            </div>
                                            <div class="product-price">
                                                <span>$2549</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrapper-bundle">
                                <div class="product-wrapper">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img src="assets/Frontend/img/product/honda-air-blade.png" alt="">
                                        </a>
                                        <div class="product-item-dec">
                                            <ul>
                                                <li>2018</li>
                                                <li>MANUAL</li>
                                                <li>PETROL</li>
                                                <li>150 CC</li>
                                            </ul>
                                        </div>
                                        <div class="product-action">
                                            <a class="action-plus-2" title="Add To Cart" href="#">
                                                <i class=" ti-shopping-cart"></i>
                                            </a>
                                            <a class="action-cart-2" title="Wishlist" href="#">
                                                <i class=" ti-heart"></i>
                                            </a>
                                            <a class="action-reload" title="Quick View" data-toggle="modal"
                                                data-target="#exampleModal" href="#">
                                                <i class=" ti-zoom-in"></i>
                                            </a>
                                        </div>
                                        <div class="product-content-wrapper">
                                            <div class="product-title-spreed">
                                                <h4><a href="product-details.html">Honda Air Blade</a></h4>
                                                <span>125 CC</span>
                                            </div>
                                            <div class="product-price">
                                                <span>$2549</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrapper">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img src="assets/Frontend/img/product/honda-monkey.png" alt="">
                                        </a>
                                        <div class="product-item-dec">
                                            <ul>
                                                <li>2018</li>
                                                <li>MANUAL</li>
                                                <li>PETROL</li>
                                                <li>250 CC</li>
                                            </ul>
                                        </div>
                                        <div class="product-action">
                                            <a class="action-plus-2" title="Add To Cart" href="#">
                                                <i class=" ti-shopping-cart"></i>
                                            </a>
                                            <a class="action-cart-2" title="Wishlist" href="#">
                                                <i class=" ti-heart"></i>
                                            </a>
                                            <a class="action-reload" title="Quick View" data-toggle="modal"
                                                data-target="#exampleModal" href="#">
                                                <i class=" ti-zoom-in"></i>
                                            </a>
                                        </div>
                                        <div class="product-content-wrapper">
                                            <div class="product-title-spreed">
                                                <h4><a href="product-details.html">Honda Monkey</a></h4>
                                                <span>150 CC</span>
                                            </div>
                                            <div class="product-price">
                                                <span>$2549</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="home2">
                        <div class="product-slider-active owl-carousel">
                            <div class="product-wrapper-bundle">
                                <div class="product-wrapper mb-30">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img src="assets/Frontend/img/product/yamaha-exciter-monster.png" alt="">
                                        </a>
                                        <div class="product-item-dec">
                                            <ul>
                                                <li>2018</li>
                                                <li>MANUAL</li>
                                                <li>PETROL</li>
                                                <li>250 CC</li>
                                            </ul>
                                        </div>
                                        <div class="product-action">
                                            <a class="action-plus-2" title="Add To Cart" href="#">
                                                <i class=" ti-shopping-cart"></i>
                                            </a>
                                            <a class="action-cart-2" title="Wishlist" href="#">
                                                <i class=" ti-heart"></i>
                                            </a>
                                            <a class="action-reload" title="Quick View" data-toggle="modal"
                                                data-target="#exampleModal" href="#">
                                                <i class=" ti-zoom-in"></i>
                                            </a>
                                        </div>
                                        <div class="product-content-wrapper">
                                            <div class="product-title-spreed">
                                                <h4><a href="product-details.html">Yamaha Exciter</a></h4>
                                                <span>150 CC</span>
                                            </div>
                                            <div class="product-price">
                                                <span>200,000 đ/ngày</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrapper mb-30">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img src="assets/Frontend/img/product/Jupiter-GP.png" alt="">
                                        </a>
                                        <div class="product-item-dec">
                                            <ul>
                                                <li>2018</li>
                                                <li>MANUAL</li>
                                                <li>PETROL</li>
                                                <li>480 CC</li>
                                            </ul>
                                        </div>
                                        <div class="product-action">
                                            <a class="action-plus-2" title="Add To Cart" href="#">
                                                <i class=" ti-shopping-cart"></i>
                                            </a>
                                            <a class="action-cart-2" title="Wishlist" href="#">
                                                <i class=" ti-heart"></i>
                                            </a>
                                            <a class="action-reload" title="Quick View" data-toggle="modal"
                                                data-target="#exampleModal" href="#">
                                                <i class=" ti-zoom-in"></i>
                                            </a>
                                        </div>
                                        <div class="product-content-wrapper">
                                            <div class="product-title-spreed">
                                                <h4><a href="product-details.html">Jupiter-GP</a></h4>
                                                <span>110 CC</span>
                                            </div>
                                            <div class="product-price">
                                                <span>160,000 đ/ngày</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrapper-bundle">
                                <div class="product-wrapper mb-30">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img src="assets/Frontend/img/product/Jupiter-RC.png" alt="">
                                        </a>
                                        <div class="product-item-dec">
                                            <ul>
                                                <li>2018</li>
                                                <li>MANUAL</li>
                                                <li>PETROL</li>
                                                <li>200 CC</li>
                                            </ul>
                                        </div>
                                        <div class="product-action">
                                            <a class="action-plus-2" title="Add To Cart" href="#">
                                                <i class=" ti-shopping-cart"></i>
                                            </a>
                                            <a class="action-cart-2" title="Wishlist" href="#">
                                                <i class=" ti-heart"></i>
                                            </a>
                                            <a class="action-reload" title="Quick View" data-toggle="modal"
                                                data-target="#exampleModal" href="#">
                                                <i class=" ti-zoom-in"></i>
                                            </a>
                                        </div>
                                        <div class="product-content-wrapper">
                                            <div class="product-title-spreed">
                                                <h4><a href="product-details.html">Jupiter-RC</a></h4>
                                                <span>5500 RPM</span>
                                            </div>
                                            <div class="product-price">
                                                <span>$2549</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrapper mb-30">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img src="assets/Frontend/img/product/Sirius-Fi-RC.png" alt="">
                                        </a>
                                        <div class="product-item-dec">
                                            <ul>
                                                <li>2018</li>
                                                <li>MANUAL</li>
                                                <li>PETROL</li>
                                                <li>150 CC</li>
                                            </ul>
                                        </div>
                                        <div class="product-action">
                                            <a class="action-plus-2" title="Add To Cart" href="#">
                                                <i class=" ti-shopping-cart"></i>
                                            </a>
                                            <a class="action-cart-2" title="Wishlist" href="#">
                                                <i class=" ti-heart"></i>
                                            </a>
                                            <a class="action-reload" title="Quick View" data-toggle="modal"
                                                data-target="#exampleModal" href="#">
                                                <i class=" ti-zoom-in"></i>
                                            </a>
                                        </div>
                                        <div class="product-content-wrapper">
                                            <div class="product-title-spreed">
                                                <h4><a href="product-details.html">Sirius Fi RC</a></h4>
                                                <span>110 CC</span>
                                            </div>
                                            <div class="product-price">
                                                <span>$2549</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrapper-bundle">
                                <div class="product-wrapper mb-30">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img src="assets/Frontend/img/product/Sirius-Fi.png" alt="">
                                        </a>
                                        <div class="product-item-dec">
                                            <ul>
                                                <li>2018</li>
                                                <li>MANUAL</li>
                                                <li>PETROL</li>
                                                <li>150 CC</li>
                                            </ul>
                                        </div>
                                        <div class="product-action">
                                            <a class="action-plus-2" title="Add To Cart" href="#">
                                                <i class=" ti-shopping-cart"></i>
                                            </a>
                                            <a class="action-cart-2" title="Wishlist" href="#">
                                                <i class=" ti-heart"></i>
                                            </a>
                                            <a class="action-reload" title="Quick View" data-toggle="modal"
                                                data-target="#exampleModal" href="#">
                                                <i class=" ti-zoom-in"></i>
                                            </a>
                                        </div>
                                        <div class="product-content-wrapper">
                                            <div class="product-title-spreed">
                                                <h4><a href="product-details.html">Sirius Fi</a></h4>
                                                <span>4600 RPM</span>
                                            </div>
                                            <div class="product-price">
                                                <span>$2549</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrapper mb-30">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img src="assets/Frontend/img/product/Sirius-RC.png" alt="">
                                        </a>
                                        <div class="product-item-dec">
                                            <ul>
                                                <li>2018</li>
                                                <li>MANUAL</li>
                                                <li>PETROL</li>
                                                <li>250 CC</li>
                                            </ul>
                                        </div>
                                        <div class="product-action">
                                            <a class="action-plus-2" title="Add To Cart" href="#">
                                                <i class=" ti-shopping-cart"></i>
                                            </a>
                                            <a class="action-cart-2" title="Wishlist" href="#">
                                                <i class=" ti-heart"></i>
                                            </a>
                                            <a class="action-reload" title="Quick View" data-toggle="modal"
                                                data-target="#exampleModal" href="#">
                                                <i class=" ti-zoom-in"></i>
                                            </a>
                                        </div>
                                        <div class="product-content-wrapper">
                                            <div class="product-title-spreed">
                                                <h4><a href="product-details.html">Sirius RC</a></h4>
                                                <span>110 CC</span>
                                            </div>
                                            <div class="product-price">
                                                <span>$2549</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrapper-bundle">
                                <div class="product-wrapper mb-30">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img src="assets/Frontend/img/product/product-2.jpg" alt="">
                                        </a>
                                        <div class="product-item-dec">
                                            <ul>
                                                <li>2018</li>
                                                <li>MANUAL</li>
                                                <li>PETROL</li>
                                                <li>250 CC</li>
                                            </ul>
                                        </div>
                                        <div class="product-action">
                                            <a class="action-plus-2" title="Add To Cart" href="#">
                                                <i class=" ti-shopping-cart"></i>
                                            </a>
                                            <a class="action-cart-2" title="Wishlist" href="#">
                                                <i class=" ti-heart"></i>
                                            </a>
                                            <a class="action-reload" title="Quick View" data-toggle="modal"
                                                data-target="#exampleModal" href="#">
                                                <i class=" ti-zoom-in"></i>
                                            </a>
                                        </div>
                                        <div class="product-content-wrapper">
                                            <div class="product-title-spreed">
                                                <h4><a href="product-details.html">Klager GSX 250 R</a></h4>
                                                <span>5500 RPM</span>
                                            </div>
                                            <div class="product-price">
                                                <span>$2549</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-wrapper mb-30">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img src="assets/Frontend/img/product/product-5.jpg" alt="">
                                        </a>
                                        <div class="product-item-dec">
                                            <ul>
                                                <li>2018</li>
                                                <li>MANUAL</li>
                                                <li>PETROL</li>
                                                <li>350 CC</li>
                                            </ul>
                                        </div>
                                        <div class="product-action">
                                            <a class="action-plus-2" title="Add To Cart" href="#">
                                                <i class=" ti-shopping-cart"></i>
                                            </a>
                                            <a class="action-cart-2" title="Wishlist" href="#">
                                                <i class=" ti-heart"></i>
                                            </a>
                                            <a class="action-reload" title="Quick View" data-toggle="modal"
                                                data-target="#exampleModal" href="#">
                                                <i class=" ti-zoom-in"></i>
                                            </a>
                                        </div>
                                        <div class="product-content-wrapper">
                                            <div class="product-title-spreed">
                                                <h4><a href="product-details.html">Maxclon ZPE 54</a></h4>
                                                <span>3300 RPM</span>
                                            </div>
                                            <div class="product-price">
                                                <span>$2549</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </div>
    <div class="newsletter-area">
        <div class="container">
            <div class="newsletter-wrapper-all theme-bg-2">
                <div class="row">
                    <div class="col-lg-5 col-12 col-md-12">
                        <div class="newsletter-img bg-img"
                            style="background-image: url(assets/Frontend/img/banner/newsletter-bg.png)">
                            <img alt="image" src="assets/Frontend/img/team/newsletter-img.png">
                        </div>
                    </div>
                    <div class="col-lg-7 col-12 col-md-12">
                        <div class="newsletter-wrapper text-center">
                            <div class="newsletter-title">
                                <h3>ĐĂNG KÝ NHẬN TIN MỚI NHẤT</h3>
                            </div>
                            <div id="mc_embed_signup" class="subscribe-form">
                                <form action="" method="post" id="mc-embedded-subscribe-form"
                                    name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                    <div id="mc_embed_signup_scroll" class="mc-form">
                                        <input type="email" value="" name="EMAIL" class="email"
                                            placeholder="Nhập email ..." required>
                                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                        <div class="mc-news" aria-hidden="true"><input type="text"
                                                name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value="">
                                        </div>
                                        <div class="clear"><input type="submit" value="Subscribe" name="subscribe"
                                                id="mc-embedded-subscribe" class="button"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('user.app.footer')



