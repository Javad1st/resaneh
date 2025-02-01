<?php
// اتصال به پایگاه داده
include('../database/db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $field_id = $_POST['field_id'];
    $field_name = $_POST['field_name'];
    
    try {
        // دریافت اطلاعات رشته از دیتابیس برای بررسی تصویر فعلی
        $stmt = $conn->prepare("SELECT field_image FROM fields WHERE id = :id");
        $stmt->bindParam(':id', $field_id);
        $stmt->execute();
        $field = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if (!$field) {
            die("رشته‌ای با این شناسه یافت نشد.");
        }

        $image_path = $field['field_image'];

        // بررسی و آپلود تصویر جدید در صورت ارسال
        if (!empty($_FILES['field_image']['name'])) {
            $target_dir = "../uploads/";
            $new_image_name = time() . "_" . basename($_FILES["field_image"]["name"]);
            $target_file = $target_dir . $new_image_name;

            if (move_uploaded_file($_FILES["field_image"]["tmp_name"], $target_file)) {
                // حذف تصویر قدیمی در صورت وجود
                if ($image_path && file_exists("../" . $image_path)) {
                    unlink("../" . $image_path);
                }
                $image_path = "uploads/" . $new_image_name;
            } else {
                die("خطا در آپلود تصویر جدید.");
            }
        }

        // به‌روزرسانی اطلاعات رشته در دیتابیس
        $stmt = $conn->prepare("UPDATE fields SET field_name = :field_name, field_image = :field_image WHERE id = :id");
        $stmt->bindParam(':field_name', $field_name);
        $stmt->bindParam(':field_image', $image_path);
        $stmt->bindParam(':id', $field_id);
        $stmt->execute();

        header("Location: major.php?success=رشته با موفقیت به‌روزرسانی شد");
        exit();
    } catch (PDOException $e) {
        die("خطا در به‌روزرسانی اطلاعات: " . $e->getMessage());
    }
} else {
    die("درخواست نامعتبر.");
}