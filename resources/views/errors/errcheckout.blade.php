<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thất bại</title>
    <style>
        body {
            text-align: center;
            font-family: Arial, sans-serif;
            padding: 50px;
        }
        .error {
            color: red;
            font-size: 24px;
        }
    </style>
</head>
<body>
    <h1 class="error">403 - Forbidden</h1>
    <p>Thông tin xe không hợp lệ</p>
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <a href="{{ route('index') }}">Quay lại trang chủ</a>
</body>
</html>
