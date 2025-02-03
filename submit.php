<?php
require_once './database/db.php';
try {

    
    // دریافت داده‌ها از فرم
    $name = $_POST['name'];
    $family = $_POST['family'];
    $phone = $_POST['phone'];
    $national_id = isset($_POST['national_id']) ? $_POST['national_id'] : null;

    // آماده‌سازی کوئری SQL با استفاده از prepared statements
    $stmt = $conn->prepare("INSERT INTO pre_registration (name, family, phone, national_id) 
                            VALUES (:name, :family, :phone, :national_id)");

    // بایند کردن پارامترها
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':family', $family);
    $stmt->bindParam(':phone', $phone);
    $stmt->bindParam(':national_id', $national_id);

    // اجرای کوئری
    $stmt->execute();

    // نمایش پیام موفقیت
    echo "ثبت‌نام با موفقیت انجام شد.";
} catch (PDOException $e) {
    // در صورت بروز خطا، پیام خطا نمایش داده می‌شود
    echo "خطا: " . $e->getMessage();
}

// بستن اتصال
$conn = null;
?>
