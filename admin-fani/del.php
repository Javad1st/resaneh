<?php
require_once '../database/db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // آماده‌سازی کوئری SQL برای حذف پیش‌ثبت‌نام با شناسه مشخص
    $stmt = $conn->prepare("DELETE FROM pre_registration WHERE id = :id");
    $stmt->bindParam(':id', $id);

    if ($stmt->execute()) {
        echo "پیش‌ثبت‌نام با موفقیت حذف شد.";
        header('Location: register.php'); // بعد از حذف، به صفحه لیست پیش‌ثبت‌نام‌ها هدایت می‌شود
    } else {
        echo "خطا در حذف پیش‌ثبت‌نام.";
    }
} else {
    echo "شناسه پیش‌ثبت‌نام مشخص نشده است.";
}

$conn = null;
?>
