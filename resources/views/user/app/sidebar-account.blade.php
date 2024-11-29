   <div class="col-md-4">
                        
                            <div class="product-details-content">
                                <form action="{{ route('user.update.avatar') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="text-center">
                                        <label for="avatarInput">
                                            <img class="img-comment" 
                                            src="{{ $user->avatar ? 'data:image/jpeg;base64,' . base64_encode($user->avatar) : 'https://n1-cstg.mioto.vn/m/avatars/h.jpg' }}" 
                                            alt="Avatar" 
                                            style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover; cursor: pointer;" 
                                            onclick="document.getElementById('avatar').click();" />                           
                                        </label>
                                    <input type="file" name="avatar" id="avatarInput" style="display: none;" accept="image/*" onchange="this.form.submit();">
                                </form>
                                    <h4>{{ $user->name }}</h4>
                                    </div>
                                    <hr>
                                    <div>
                                        <p><a href="/tai-khoan">Thông tin tài khoản</a></p>
                                        <p><a href="/doi-thong-tin">Thay đổi thông tin</a></p>
                                        <p><a href="/lich-su">Lịch sử thuê xe</a></p>
                                        <p><a href="/doi-mat-khau">Đổi mật khẩu</a></p>
                                        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                                            @csrf
                                            <button type="submit" style="background: none; border: none; color: blue; cursor: pointer;">
                                                Đăng xuất
                                            </button>
                                        </form>

                                    </div>
                                </div>
</div>
<script>
    document.getElementById('avatarPreview').addEventListener('click', function () {
        document.getElementById('avatarInput').click();
    });

    document.getElementById('avatarInput').addEventListener('change', function () {
        this.form.submit(); // Tự động submit form sau khi chọn ảnh
    });
</script>
