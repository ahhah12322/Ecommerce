<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Xác minh Email') }}</div>

                <div class="card-body">
                    <p>{{ session('message') }}</p>

                    <form action="{{ route('resend.verification.email') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary">
                            {{ __('Gửi lại email xác minh') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
