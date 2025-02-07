<?php
require_once '../database/db.php';

// بررسی اینکه آیا آی‌دی رکورد در URL وجود دارد
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    try {
        // حذف رکورد از دیتابیس با استفاده از آی‌دی
        $stmt = $conn->prepare("DELETE FROM course_registrations WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        // پس از حذف رکورد، کاربر را به صفحه لیست پیش‌ثبت‌نام‌ها هدایت می‌کنیم
        header("Location: register.php");
        exit();

    } catch (PDOException $e) {
        // در صورت بروز خطا، پیغام خطا نمایش داده می‌شود
        echo "خطا: " . $e->getMessage();
    }
} else {
    echo "آی‌دی رکورد یافت نشد.";
}
?>
