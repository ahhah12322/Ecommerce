<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forbidden</title>
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
    <p>Bạn không có quyền truy cập trang này.</p>
    <a href="{{ route('login') }}">Quay lại trang đăng nhập</a>
</body>
</html>
