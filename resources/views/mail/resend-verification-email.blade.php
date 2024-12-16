<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gửi lại email xác minh</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 500px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            font-size: 24px;
            color: #333;
        }

        p {
            font-size: 16px;
            color: #666;
            margin: 10px 0 20px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            text-decoration: none;
            font-size: 16px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        @if (session('message'))
            <div style="color: green; margin-top: 20px;">
                {{ session('message') }}
            </div>
        @endif

        <h1>Gửi lại email xác minh</h1>
        <p>Nếu bạn chưa nhận được email xác minh, bạn có thể gửi lại bằng cách nhấn nút bên dưới.</p>
        <form method="POST" action="{{ route('resend.verification.email') }}">
            @csrf
            <button type="submit" class="btn">Gửi lại email</button>
        </form>
        <p><a href="{{ route('home') }}">Quay lại Trang chủ</a></p>
    </div>
</body>

</html>
