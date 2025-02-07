<?php
require_once '../database/db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // دریافت اطلاعات پیش‌ثبت‌نام با استفاده از شناسه
    $stmt = $conn->prepare("SELECT * FROM pre_registration WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $registration = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$registration) {
        echo "پیش‌ثبت‌نام پیدا نشد.";
        exit;
    }
} else {
    echo "شناسه پیش‌ثبت‌نام مشخص نشده است.";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // دریافت داده‌های فرم
    $name = $_POST['name'];
    $family = $_POST['family'];
    $phone = $_POST['phone'];
    $national_id = isset($_POST['national_id']) ? $_POST['national_id'] : null;
    $course_name = $_POST['course'];

    // آماده‌سازی کوئری SQL برای به‌روزرسانی داده‌ها
    $stmt = $conn->prepare("UPDATE pre_registration SET name = :name, family = :family, phone = :phone, national_id = :national_id, course_name = :course_name WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':family', $family);
    $stmt->bindParam(':phone', $phone);
    $stmt->bindParam(':national_id', $national_id);
    $stmt->bindParam(':course_name', $course_name);
    $stmt->bindParam(':id', $id);

    if ($stmt->execute()) {
        echo "اطلاعات با موفقیت ویرایش شد.";
        header('Location: register.php'); // بعد از ویرایش، به صفحه اصلی لیست پیش‌ثبت‌نام‌ها هدایت می‌شود
    } else {
        echo "خطا در به‌روزرسانی اطلاعات.";
    }
}
?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ویرایش پیش ثبت‌نام</title>
<style>
    /* استایل اصلی صفحه */
body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

/* استایل برای کانتینر فرم */
.container {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    width: 80%;
    max-width: 600px;
    margin: 20px;
}

/* عنوان صفحه */
h2 {
    font-size: 24px;
    color: #333;
    text-align: center;
    margin-bottom: 20px;
}

/* استایل برای ورودی‌های فرم */
input[type="text"],
input[type="tel"],
button[type="submit"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 16px;
}

/* ورودی‌های فرم هنگام فوکوس */
input[type="text"]:focus,
input[type="tel"]:focus {
    border-color: #007bff;
    outline: none;
}

/* دکمه ارسال */
button[type="submit"] {
    background-color: #007bff;
    color: #fff;
    font-weight: bold;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s ease;
    border-radius: 4px;
    padding: 12px;
}

button[type="submit"]:hover {
    background-color: #0056b3;
}

/* استایل برای دکمه‌های فرم */
input[type="text"],
input[type="tel"] {
    box-sizing: border-box;
    font-size: 16px;
}

/* استایل برای پیام‌های خطا یا موفقیت */
.success, .error {
    text-align: center;
    margin-top: 10px;
    padding: 10px;
    border-radius: 5px;
    color: white;
    font-size: 16px;
}

.success {
    background-color: #28a745;
}

.error {
    background-color: #dc3545;
}

</style>
</head>
<body>
    <div class="container" dir="rtl">
        <h2>ویرایش پیش ثبت‌نام</h2>
        <form action="edit.php?id=<?= $registration['id'] ?>" method="POST">
            <input type="text" name="name" value="<?= htmlspecialchars($registration['name']) ?>" placeholder="نام" required>
            <input type="text" name="family" value="<?= htmlspecialchars($registration['family']) ?>" placeholder="نام خانوادگی" required>
            <input type="tel" name="phone" value="<?= htmlspecialchars($registration['phone']) ?>" placeholder="شماره تماس" required>
            <input type="text" name="national_id" value="<?= htmlspecialchars($registration['national_id']) ?>" placeholder="کد ملی (اختیاری)">
            <input type="text" name="course" value="<?= htmlspecialchars($registration['course_name']) ?>" placeholder="نام دوره" required>
            <button type="submit" class="submit-btn">ذخیره تغییرات</button>
        </form>
    </div>
</body>
</html>

<?php
// بستن اتصال به دیتابیس
$conn = null;
?>
