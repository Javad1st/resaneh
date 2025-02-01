<?php
// اتصال به پایگاه داده
include('../database/db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $major_id = $_POST['major_id'];
    $major_name = $_POST['major_name'];
    $major_image = $_FILES['major_image']['name']; // نام فایل تصویری که آپلود می‌شود

    try {
        // بررسی اینکه آیا تصویری جدید آپلود شده است یا نه
        if ($major_image) {
            // مسیر ذخیره‌سازی تصویر جدید
            $target_dir = "../uploads/";
            $target_file = $target_dir . basename($major_image);

            // انتقال فایل تصویر به پوشه uploads
            if (move_uploaded_file($_FILES['major_image']['tmp_name'], $target_file)) {
                // اگر آپلود موفقیت‌آمیز باشد، مسیر جدید تصویر را در دیتابیس ذخیره می‌کنیم
                $image_path = "uploads/" . $major_image;
            } else {
                echo "خطا در آپلود تصویر.";
                exit;
            }
        } else {
            // اگر تصویری جدید انتخاب نشده باشد، تصویر قبلی حفظ می‌شود
            // گرفتن تصویر قبلی از دیتابیس
            $stmt = $conn->prepare("SELECT major_image FROM majors WHERE id = :id");
            $stmt->bindParam(':id', $major_id);
            $stmt->execute();
            $major = $stmt->fetch(PDO::FETCH_ASSOC);
            $image_path = $major['major_image']; // استفاده از تصویر قبلی
        }

        // به‌روزرسانی اطلاعات رشته در دیتابیس
        $stmt = $conn->prepare("UPDATE majors SET major_name = :major_name, major_image = :major_image WHERE id = :id");
        $stmt->bindParam(':major_name', $major_name);
        $stmt->bindParam(':major_image', $image_path);
        $stmt->bindParam(':id', $major_id);
        $stmt->execute();

        // هدایت کاربر به صفحه لیست رشته‌ها یا هر صفحه دیگری که بخواهید
        header("Location: major.php?success=رشته با موفقیت ویرایش شد.");
        exit;
    } catch (PDOException $e) {
        echo "خطا در ویرایش داده‌ها: " . $e->getMessage();
    }
}
?>
