<?php
// اتصال به پایگاه داده
include('../database/db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // دریافت داده‌های فرم
    $program_name = $_POST['course_name'];  // تغییر نام از course_name به program_name
    $program_hours = $_POST['course_hours']; // تغییر نام از course_hours به program_hours
    $program_duration = $_POST['course_duration']; // تغییر نام از course_duration به program_duration
    $program_price = $_POST['course_price'];  // دریافت قیمت
    $program_description = $_POST['course_description']; // تغییر نام از course_description به program_description
    $program_object = $_POST['learning_objectives']; // تغییر نام از course_description به program_description
    $field_id = $_POST['field_id']; // تغییر نام از major_id به field_id

    // جلوگیری از تزریق SQL
    $program_name = htmlspecialchars($program_name, ENT_QUOTES, 'UTF-8');
    $program_hours = htmlspecialchars($program_hours, ENT_QUOTES, 'UTF-8');
    $program_description = htmlspecialchars($program_description, ENT_QUOTES, 'UTF-8');

    // حذف کاماها از قیمت و تبدیل آن به عدد صحیح
    $program_price = str_replace(',', '', $program_price);  // حذف کاماها
    $program_price = floatval($program_price);  // تبدیل به float
    $program_price = round($program_price);  // گرد کردن به عدد صحیح اگر نیاز است

    // مدیریت آپلود تصویر
    $imagePath = null;  // مقدار پیش‌فرض برای تصویر

    if (isset($_FILES['course_image']) && $_FILES['course_image']['error'] == 0) {
        $imageName = time() . '_' . $_FILES['course_image']['name']; // نام منحصربه‌فرد
        $targetDirectory = '../uploads2/courses/';
        $targetFile = $targetDirectory . basename($imageName);
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // بررسی فرمت فایل تصویر
        $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
        if (in_array($imageFileType, $allowedTypes)) {
            if (move_uploaded_file($_FILES['course_image']['tmp_name'], $targetFile)) {
                $imagePath = 'uploads2/courses/' . $imageName; // آدرس تصویر برای ذخیره در پایگاه داده
            }
        } else {
            echo "فرمت تصویر مجاز نیست.";
            exit();
        }
    }

    try {
        // وارد کردن اطلاعات به پایگاه داده
        $stmt = $conn->prepare("INSERT INTO programs (field_id, program_name, program_description, program_hours, program_duration, program_price, program_image,learning_objectives) 
                                VALUES (:field_id, :program_name, :program_description, :program_hours, :program_duration, :program_price, :program_image, :learning_objectives)");
        $stmt->bindParam(':field_id', $field_id);  // اضافه کردن شناسه رشته به جدول
        $stmt->bindParam(':program_name', $program_name);
        $stmt->bindParam(':program_description', $program_description);
        $stmt->bindParam(':program_hours', $program_hours);
        $stmt->bindParam(':program_duration', $program_duration);
        $stmt->bindParam(':program_price', $program_price);
        $stmt->bindParam(':learning_objectives',  $program_object);
        $stmt->bindParam(':program_image', $imagePath); // ذخیره آدرس تصویر در پایگاه داده

        $stmt->execute();
        
        // هدایت به صفحه افزودن دوره
        header("Location: add_course.php");
        exit();
    } catch (PDOException $e) {
        echo "خطا در افزودن دوره: " . $e->getMessage();
    }
}
?>
