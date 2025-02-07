<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تایید ثبت‌نام</title>
    <style>
        body {
            font-family: Tahoma, Arial, sans-serif;
            background-color: #f0f8ff;
            text-align: center;
            margin-top: 100px;
        }
        .confirmation-box {
            background-color: #32cd32;
            color: white;
            padding: 30px;
            border-radius: 10px;
            font-size: 24px;
            width: 400px;
            margin: 0 auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .confirmation-box p {
            font-size: 18px;
        }
        .redirect {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            display: block;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="confirmation-box">
        <h2>تایید ثبت‌نام</h2>
        <p>ثبت‌نام شما با موفقیت انجام شد</p>
        <p>لطفاً منتظر بمانید، شما به زودی به صفحه دوره فنی منتقل خواهید شد.</p>
        <a class="redirect" href="major.php">اگر انتقال به صورت خودکار انجام نشد، کلیک کنید.</a>
    </div>

    <script>
        setTimeout(function() {
            window.location.href = 'index.php';
        }, 5000); 
    </script>
</body>
</html>
