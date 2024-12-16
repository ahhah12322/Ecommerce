{{-- resources/views/emails/reset_password.blade.php --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password Notification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            background-color: #f4f4f9;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
        }

        .content {
            margin-top: 20px;
        }

        .content p {
            font-size: 16px;
            line-height: 1.5;
        }

        .footer {
            margin-top: 20px;
            text-align: center;
            font-size: 14px;
            color: #666;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h2>Reset Password Notification</h2>
        </div>

        <div class="content">
            <h1>Xin chào!</h1>
            <p>Mật khẩu mới của bạn là:</p>
            <p><strong>{{ $newPassword }}</strong></p>
            <p>Vui lòng đăng nhập và thay đổi mật khẩu ngay lập tức vì lý do bảo mật.</p>
            <p>Trân trọng,<br>Đội ngũ hỗ trợ</p>
        </div>

        <div class="footer">
            <p>Trân trọng,</p>
            <p>Đội ngũ hỗ trợ của chúng tôi</p>
        </div>
    </div>
</body>

</html>
