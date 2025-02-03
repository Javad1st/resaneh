<?php
// پردازش فرم در add_major_process.php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include('../database/db.php');
    $major_name = htmlspecialchars($_POST['major_name'], ENT_QUOTES, 'UTF-8');

    // بررسی و پردازش تصویر
    $imagePath = ''; // مقدار پیش‌فرض
    if (isset($_FILES['major_image']) && $_FILES['major_image']['error'] == 0) {
        $image_name = time() . '_' . basename($_FILES["major_image"]["name"]); // نام منحصربه‌فرد
        $target_directory = "../uploads/"; // مسیر ذخیره‌سازی در سرور
        $target_file = $target_directory . $image_name; // مسیر کامل ذخیره در سرور

        if (move_uploaded_file($_FILES["major_image"]["tmp_name"], $target_file)) {
            $imagePath = "uploads/" . $image_name; // مسیر قابل ذخیره در دیتابیس
        } else {
            header("Location: add_major.php?error=" . urlencode("خطا در آپلود تصویر"));
            exit();
        }
    }

    try {
        // ذخیره در پایگاه داده
        $stmt = $conn->prepare("INSERT INTO majors (major_name, major_image) VALUES (:major_name, :major_image)");
        $stmt->bindParam(':major_name', $major_name);
        $stmt->bindParam(':major_image', $imagePath);
        $stmt->execute();

        header("Location: add_major.php");
        exit();
    } catch (PDOException $e) {
        header("Location: add_major.php?error=" . urlencode("خطا در افزودن رشته"));
        exit();
    }
}
?>
