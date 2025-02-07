<?php
require_once '../database/db.php';

// بررسی اینکه آیا آی‌دی رکورد در URL وجود دارد
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    try {
        // دریافت اطلاعات رکورد از دیتابیس
        $stmt = $conn->prepare("SELECT * FROM course_registrations WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $registration = $stmt->fetch(PDO::FETCH_ASSOC);

        // اگر رکورد یافت نشد
        if (!$registration) {
            echo "رکورد یافت نشد.";
            exit();
        }

        // در صورتی که فرم ارسال شود
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // دریافت داده‌ها از فرم
            $name = htmlspecialchars(trim($_POST['name']), ENT_QUOTES, 'UTF-8');
            $family = htmlspecialchars(trim($_POST['family']), ENT_QUOTES, 'UTF-8');
            $phone = htmlspecialchars(trim($_POST['phone']), ENT_QUOTES, 'UTF-8');
            $national_id = isset($_POST['national_id']) ? htmlspecialchars(trim($_POST['national_id']), ENT_QUOTES, 'UTF-8') : null;
            $course_name = htmlspecialchars(trim($_POST['course']), ENT_QUOTES, 'UTF-8');
            $course_code = htmlspecialchars(trim($_POST['course_code']), ENT_QUOTES, 'UTF-8'); 

            // به‌روزرسانی رکورد در دیتابیس
            $updateStmt = $conn->prepare("UPDATE course_registrations SET name = :name, family = :family, phone = :phone, national_id = :national_id, course_name = :course_name, course_code = :course_code WHERE id = :id");
            $updateStmt->bindParam(':name', $name);
            $updateStmt->bindParam(':family', $family);
            $updateStmt->bindParam(':phone', $phone);
            $updateStmt->bindParam(':national_id', $national_id);
            $updateStmt->bindParam(':course_name', $course_name);
            $updateStmt->bindParam(':course_code', $course_code);
            $updateStmt->bindParam(':id', $id);
            $updateStmt->execute();

            // پس از به‌روزرسانی، کاربر را به صفحه لیست پیش‌ثبت‌نام‌ها هدایت می‌کنیم
            header("Location: register.php");
            exit();
        }
    } catch (PDOException $e) {
        echo "خطا: " . $e->getMessage();
    }
} else {
    echo "آی‌دی رکورد یافت نشد.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ویرایش پیش‌ثبت‌نام</title>
    <link href="https://fonts.googleapis.com/css2?family=Vazir&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Vazir', sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 85%;
            margin: 30px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            font-size: 2.2em;
            color: #333;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        input, select {
            padding: 10px;
            font-size: 1em;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        button {
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #218838;
        }

        .error-message {
            color: red;
            font-weight: bold;
            text-align: center;
            margin-top: 20px;
        }

    </style>
</head>
<body>
    <div class="container" dir="rtl">
        <h2>ویرایش پیش‌ثبت‌نام</h2>
        <form method="POST">
            <label for="name">نام</label>
            <input type="text" name="name" id="name" value="<?= htmlspecialchars($registration['name']) ?>" required>

            <label for="family">نام خانوادگی</label>
            <input type="text" name="family" id="family" value="<?= htmlspecialchars($registration['family']) ?>" required>

            <label for="phone">شماره تلفن</label>
            <input type="text" name="phone" id="phone" value="<?= htmlspecialchars($registration['phone']) ?>" required>

            <label for="national_id">کد ملی</label>
            <input type="text" name="national_id" id="national_id" value="<?= htmlspecialchars($registration['national_id']) ?>">

            <label for="course">نام دوره</label>
            <input type="text" name="course" id="course" value="<?= htmlspecialchars($registration['course_name']) ?>" required>

            <label for="course_code">کد دوره</label>
            <input type="text" name="course_code" id="course_code" value="<?= htmlspecialchars($registration['course_code']) ?>" required>

            <button type="submit">ذخیره تغییرات</button>
        </form>
    </div>
</body>
</html>
