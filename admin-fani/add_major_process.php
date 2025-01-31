<?php
// اتصال به پایگاه داده با استفاده از db.php
include('../database/db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // دریافت داده‌های فرم
    $field_name = $_POST['major_name'];

    // جلوگیری از تزریق SQL
    $field_name = htmlspecialchars($field_name, ENT_QUOTES, 'UTF-8');

    try {
        // وارد کردن اطلاعات به پایگاه داده
        $stmt = $conn->prepare("INSERT INTO fields (field_name) VALUES (:field_name)");
        $stmt->bindParam(':field_name', $field_name);
        $stmt->execute();
        
        // هدایت به صفحه افزودن رشته بعد از موفقیت
        header("Location: add_major.php");  // فرض کنید صفحه شما add_major.php است
        exit();  // بسیار مهم است که بعد از header() از exit() استفاده کنید تا عملیات متوقف شود.
    } catch (PDOException $e) {
        // در صورت خطا، هدایت به همان صفحه با پیغام خطا
        header("Location: add_major.php?error=" . urlencode("خطا در افزودن رشته"));
        exit();
    }
}
?>
