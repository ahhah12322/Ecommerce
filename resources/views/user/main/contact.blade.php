@include('user.app.header')
<div class="container">
    <nav aria-label="breadcrumb" class="breadcrumb-nav ">

        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="/lien-he">liên Hệ</a></li>
        </ol>

    </nav><!-- End .breadcrumb-nav -->
</div>
<div class="contact-area ">
    <div class="container">
        <div class="contact-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5720.777682106879!2d108.25622309498445!3d15.97533748178776!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142108997dc971f%3A0x1295cb3d313469c9!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2jhu4cgVGjDtG5nIHRpbiB2w6AgVHJ1eeG7gW4gdGjDtG5nIFZp4buHdCAtIEjDoG4sIMSQ4bqhaSBo4buNYyDEkMOgIE7hurVuZw!5e0!3m2!1svi!2s!4v1734023940821!5m2!1svi!2s"
                width="1170" height="500" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>
<div class="all-info ptb-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-info-wrapper">
                    <h4 class="contact-title">THÔNG TIN VỀ CHÚNG TÔI</h4>
                    <div class="communication-info">
                        <div class="single-communication">
                            <div class="communication-icon">
                                <i class="ti-home" aria-hidden="true"></i>
                            </div>
                            <div class="communication-text">
                                <h4>Địa chỉ:</h4>
                                <p>123 Nguyễn Trãi, Thanh Xuân, Hà Nội</p>
                            </div>
                        </div>
                        <div class="single-communication">
                            <div class="communication-icon">
                                <i class="ti-mobile" aria-hidden="true"></i>
                            </div>
                            <div class="communication-text">
                                <h4>Số điện thoại:</h4>
                                <p>0123 456 789 - 15 2368 4597</p>
                            </div>
                        </div>
                        <div class="single-communication">
                            <div class="communication-icon">
                                <i class="ti-email" aria-hidden="true"></i>
                            </div>
                            <div class="communication-text">
                                <h4>Email:</h4>
                                <p><a href="#">info@mego.vn</a></p>
                            </div>
                        </div>
                        <div class="single-communication">
                            <div class="communication-icon">
                                <i class="ti-world" aria-hidden="true"></i>
                            </div>
                            <div class="communication-text">
                                <h4>Website:</h4>
                                <p><a href="#">https://mego.vn</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-message-wrapper">
                    <h4 class="contact-title">LIÊN HỆ</h4>
                    <div class="contact-message">
                        <form id="contact-form"
                            action="http://preview.freethemescloud.com/oswan/assets/Frontend/mail.php" method="post">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="contact-form-style mb-20">
                                        <input name="name" placeholder="Tên" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="contact-form-style mb-20">
                                        <input name="email" placeholder="Địa chỉ Email" type="email">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="contact-form-style mb-20">
                                        <input name="Tiêu đề" placeholder="Subject" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="contact-form-style">
                                        <textarea name="message" placeholder="Nội dung"></textarea>
                                        <button class="submit cr-btn btn-style" type="submit"><span>GỬI</span></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <p class="form-messege"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@include('user.app.footer')
