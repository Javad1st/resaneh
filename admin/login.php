<?php
session_start();
require '../database/db.php'; // اتصال به دیتابیس

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // بررسی خالی نبودن فیلدها
    if (empty($email) || empty($password)) {
        $error = 'لطفاً همه فیلدها را پر کنید.';
    } else {
        // جستجو در دیتابیس
        $stmt = $conn->prepare("SELECT * FROM admin WHERE email = :email");
        $stmt->execute(['email' => $email]);
        $admin = $stmt->fetch();

        // بررسی وجود ایمیل در دیتابیس و تطبیق پسورد
        if ($admin) {
            if (password_verify($password, $admin['password'])) {
                // ذخیره شناسه ادمین در سشن
                $_SESSION['admin'] = $admin['id'];

                // تنظیم کوکی 'logged_in' برای اعتبارسنجی بیشتر
                setcookie('logged_in', 'true', time() + 3600, '/resaneh/admin'); // 1 ساعت اعتبار

                // هدایت به صفحه اصلی
                header("Location: ./index.php");
                exit();
            } else {
                $error = 'پسورد اشتباه است.';
            }
        } else {
            $error = 'ایمیل یافت نشد.';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحه لاگین</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f7f7f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 20px;
            direction: rtl;
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            padding: 40px;
            text-align: center;
            box-sizing: border-box;
        }

        h2 {
            color: #333;
            margin-bottom: 30px;
            font-size: 28px;
            font-weight: 600;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            text-align: right;
            margin-bottom: 8px;
            font-size: 14px;
            color: #555;
        }

        input {
            padding: 14px;
            font-size: 16px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            outline: none;
            transition: border-color 0.3s ease;
            text-align: right;
        }

        input:focus {
            border-color: #5d9bfb;
        }

        button {
            padding: 14px;
            font-size: 16px;
            background-color: #5d9bfb;
            color: #fff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #4a89e3;
        }

        p.error {
            color: red;
            font-size: 14px;
            margin-bottom: 20px;
        }

        a {
            text-decoration: none;
            color: #5d9bfb;
            font-size: 14px;
            margin-top: 20px;
            display: block;
            text-align: center;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>ورود به پنل ادمین</h2>
        <?php if (isset($error)): ?>
            <p class="error"><?= $error ?></p>
        <?php endif; ?>
        <form method="POST">
            <label for="email">ایمیل:</label>
            <input type="email" name="email" id="email" required><br><br>

            <label for="password">پسورد:</label>
            <input type="password" name="password" id="password" required><br><br>

            <button type="submit">ورود</button>
        </form>
    </div>
</body>
</html>
