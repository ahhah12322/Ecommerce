@include('user.app.header')
<div class="login-register-area pb-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 ml-auto mr-auto">
                <div class="login-register-wrapper">
                    <div class="login-register-tab-list nav">
                        <a class="active" data-toggle="tab" href="#lg1">
                            <h4> Đăng ký </h4>
                        </a>
                    </div>
                    <div class="tab-content">
                        <div id="lg1" class="tab-pane active">
                            <div class="login-form-container">
                                @if (session('message'))
                                    <div class="alert alert-{{ session('type') }}">
                                        {{ session('message') }}
                                    </div>
                                @endif
                                <div class="login-form">
                                    <form action="{{ route('register') }}" method="POST">
                                        @csrf
                                        <input type="text" name="name" placeholder="Username">
                                        <input name="email" placeholder="Email" type="email">
                                        <input type="password" name="password" placeholder="Password">
                                        <input type="password" name="password_confirmation"
                                            placeholder="password_confirmation">
                                        <div class="button-box">
                                            <button type="submit" class="btn-style cr-btn">Đăng ký</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('user.app.footer')
