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
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product-name">products</th>
                                            <th class="product-price">products name</th>
                                            <th class="product-name">price</th>
                                            <th class="product-price">quantity</th>
                                            <th class="product-quantity">total</th>
                                            <th class="product-subtotal">delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="#"><img src="assets/Frontend/img/cart/4.jpg" alt=""></a>
                                            </td>
                                            <td class="product-name">
                                                <a href="#">Gloriori GSX 250 R</a>
                                            </td>
                                            <td class="product-price"><span class="amount">$1128.00</span></td>
                                            <td class="product-quantity">
                                                <div class="quantity-range">
                                                    <input class="input-text qty text" type="number" step="1" min="0" value="1" title="Qty" size="4">
                                                </div>
                                            </td>
                                            <td class="product-subtotal">$1128.00</td>
                                            <td class="product-cart-icon product-subtotal"><a href="#"><i class="ti-trash"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="#"><img src="assets/Frontend/img/cart/5.jpg" alt=""></a>
                                            </td>
                                            <td class="product-name">
                                                <a href="#">Klager GSX 250 R</a>
                                            </td>
                                            <td class="product-price"><span class="amount">$1450.00</span></td>
                                            <td class="product-quantity">
                                                <div class="quantity-range">
                                                    <input class="input-text qty text" type="number" step="1" min="0" value="1" title="Qty" size="4">
                                                </div>
                                            </td>
                                            <td class="product-subtotal">$1450.00</td>
                                            <td class="product-cart-icon product-subtotal"><a href="#"><i class="ti-trash"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="#"><img src="assets/Frontend/img/cart/6.jpg" alt=""></a>
                                            </td>
                                            <td class="product-name">
                                                <a href="#">Matrio Max</a>
                                            </td>
                                            <td class="product-price"><span class="amount">$1300.00</span></td>
                                            <td class="product-quantity">
                                                <div class="quantity-range">
                                                    <input class="input-text qty text" type="number" step="1" min="0" value="1" title="Qty" size="4">
                                                </div>
                                            </td>
                                            <td class="product-subtotal">$1300.00</td>
                                            <td class="product-cart-icon product-subtotal"><a href="#"><i class="ti-trash"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="#"><img src="assets/Frontend/img/cart/7.jpg" alt=""></a>
                                            </td>
                                            <td class="product-name">
                                                <a href="#">Demonissi Gori</a>
                                            </td>
                                            <td class="product-price"><span class="amount">$1190.00</span></td>
                                            <td class="product-quantity">
                                                <div class="quantity-range">
                                                    <input class="input-text qty text" type="number" step="1" min="0" value="1" title="Qty" size="4">
                                                </div>
                                            </td>
                                            <td class="product-subtotal">$1190.00</td>
                                            <td class="product-cart-icon product-subtotal"><a href="#"><i class="ti-trash"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
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
                                        <a class="btn-style cr-btn" href="#">
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
            <div class="newsletter-area">
                <div class="container">
                    <div class="newsletter-wrapper-all theme-bg-2">
                        <div class="row">
                            <div class="col-lg-5 col-12 col-md-12">
                                <div class="newsletter-img bg-img" style="background-image: url(assets/Frontend/img/banner/newsletter-bg.png)">
                                    <img alt="image" src="assets/Frontend/img/team/newsletter-img.png">
                                </div>
                            </div>
                            <div class="col-lg-7 col-12 col-md-12">
                                <div class="newsletter-wrapper text-center">
                                    <div class="newsletter-title">
                                        <h3>Subscribe our newsletter</h3>
                                    </div>
                                    <div id="mc_embed_signup" class="subscribe-form">
                                        <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                            <div id="mc_embed_signup_scroll" class="mc-form">
                                                <input type="email" value="" name="EMAIL" class="email" placeholder="Enter your email here..." required>
                                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                                <div class="mc-news" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                                <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer>
                <div class="footer-top pt-210 pb-98 theme-bg">
                    <div class="container">
                       <div class="row">
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="footer-widget mb-30">
                                    <div class="footer-logo">
                                        <a href="index.html">
                                            <img src="assets/Frontend/img/logo/2.png" alt="">
                                        </a>
                                    </div>
                                    <div class="footer-about">
                                        <p><span>OSWAN</span> the most latgest bike store in the wold can serve you latest ulity of motorcycle soucan sell here your motorcycle it quo </p>
                                        <div class="footer-support">
                                            <h5>FOR SUPPORT</h5>
                                            <span> 01245 658 698 (Toll Free)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="footer-widget mb-30 pl-60">
                                    <div class="footer-widget-title">
                                        <h3>QUICK LINK</h3>
                                    </div>
                                    <div class="quick-links">
                                        <ul>
                                            <li><a href="about-us.html">About us</a></li>
                                            <li><a href="#">Service</a></li>
                                            <li><a href="#">Inventory</a></li>
                                            <li><a href="shop.html">Shop</a></li>
                                            <li><a href="blog-sidebar.html">Blog</a></li>
                                            <li><a href="#">Conditions</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="footer-widget mb-30">
                                    <div class="footer-widget-title">
                                        <h3>LATEST TWEET</h3>
                                    </div>
                                    <div class="food-widget-content pr-30">
                                        <div class="single-tweet">
                                            <p><a href="#">@Smith,</a> the most latgest bike store in the wold can serve you
10 min ago</p>
                                        </div>
                                        <div class="single-tweet">
                                            <p><a href="#">@Smith,</a> the most latgest bike store in the wold can serve you
10 min ago</p>
                                        </div>
                                        <div class="single-tweet">
                                            <p><a href="#">@Smith,</a> the most latgest bike store in the wold can serve you
10 min ago</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="footer-widget mb-30">
                                    <div class="footer-widget-title">
                                        <h3>CONTACT INFO</h3>
                                    </div>
                                    <div class="food-info-wrapper">
                                        <div class="food-address">
                                            <div class="food-info-title">
                                                <span>Address</span>
                                            </div>
                                            <div class="food-info-content">
                                                <p>276 Jhilli Nogor, 4th folor, Momen Tower, Main Town, New Yourk</p>
                                            </div>
                                        </div>
                                        <div class="food-address">
                                            <div class="food-info-title">
                                                <span>Phone</span>
                                            </div>
                                            <div class="food-info-content">
                                                <p>+090 12568 369 987</p>
                                                <p>+090 12568 369 987</p>
                                            </div>
                                        </div>
                                        <div class="food-address">
                                            <div class="food-info-title">
                                                <span>Web</span>
                                            </div>
                                            <div class="food-info-content">
                                                <a href="#">info@oswanmega.com</a>
                                                <a href="#">www.oswanmega.com</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom ptb-35 black-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-12">
                                <div class="copyright">
                                    <p>©Copyright, 2018 All Rights Reserved by <a href="#">HASTECH</a></p>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="footer-payment-method">
                                    <a href="#"><img alt="" src="assets/Frontend/img/icon-img/payment.png"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>











		<!-- all js here -->
        <script src="assets/Frontend/js/vendor/jquery-1.12.0.min.js"></script>
        <script src="assets/Frontend/js/popper.js"></script>
        <script src="assets/Frontend/js/bootstrap.min.js"></script>
        <script src="assets/Frontend/js/isotope.pkgd.min.js"></script>
        <script src="assets/Frontend/js/imagesloaded.pkgd.min.js"></script>
        <script src="assets/Frontend/js/jquery.counterup.min.js"></script>
        <script src="assets/Frontend/js/waypoints.min.js"></script>
        <script src="assets/Frontend/js/ajax-mail.js"></script>
        <script src="assets/Frontend/js/owl.carousel.min.js"></script>
        <script src="assets/Frontend/js/plugins.js"></script>
        <script src="assets/Frontend/js/main.js"></script>
    </body>

<!-- Mirrored from preview.freethemescloud.com/oswan/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2019 16:15:32 GMT -->
</html>
