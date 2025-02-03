<?php
// اتصال به پایگاه داده
include('../database/db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // دریافت داده‌های فرم
    $course_name = htmlspecialchars($_POST['course_name'], ENT_QUOTES, 'UTF-8');
    $course_hours = htmlspecialchars($_POST['course_hours'], ENT_QUOTES, 'UTF-8');
    $course_duration = intval($_POST['course_duration']);
    $course_price = str_replace(',', '', $_POST['course_price']);
    $course_price = round(floatval($course_price));
    $instructor_name = htmlspecialchars($_POST['instructor_name'], ENT_QUOTES, 'UTF-8');
    $course_description = htmlspecialchars($_POST['course_description'], ENT_QUOTES, 'UTF-8');
    $learning_objectives = htmlspecialchars($_POST['learning_objectives'], ENT_QUOTES, 'UTF-8');
    $major_id = intval($_POST['major_id']);

    // بررسی و آپلود تصویر
    $imagePath = ''; // مقدار پیش‌فرض برای مسیر تصویر
    if (!empty($_FILES['course_image']['name'])) {
        $target_directory = '../uploads/courses/'; // مسیر ذخیره‌سازی
        if (!file_exists($target_directory)) {
            mkdir($target_directory, 0777, true); // ایجاد مسیر در صورت نبودن
        }

        $image_name = time() . '_' . basename($_FILES['course_image']['name']); // تولید نام منحصربه‌فرد
        $target_file = $target_directory . $image_name;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // بررسی فرمت تصویر
        $allowed_types = ['jpg', 'jpeg', 'png', 'gif'];
        if (in_array($imageFileType, $allowed_types)) {
            if (move_uploaded_file($_FILES['course_image']['tmp_name'], $target_file)) {
                $imagePath = 'uploads/courses/' . $image_name; // مسیر ذخیره‌شده در دیتابیس
            } else {
                die("خطا در آپلود تصویر. لطفاً مجدداً تلاش کنید.");
            }
        } else {
            die("فرمت فایل مجاز نیست. فقط JPG, JPEG, PNG, GIF قابل قبول هستند.");
        }
    }

    try {
        // ذخیره اطلاعات در پایگاه داده
        $stmt = $conn->prepare("INSERT INTO courses (course_name, course_hours, course_duration, course_price, instructor_name, course_description, learning_objectives, major_id, course_image) 
                                VALUES (:course_name, :course_hours, :course_duration, :course_price, :instructor_name, :course_description, :learning_objectives, :major_id, :course_image)");
        $stmt->bindParam(':course_name', $course_name);
        $stmt->bindParam(':course_hours', $course_hours);
        $stmt->bindParam(':course_duration', $course_duration);
        $stmt->bindParam(':course_price', $course_price);
        $stmt->bindParam(':instructor_name', $instructor_name);
        $stmt->bindParam(':course_description', $course_description);
        $stmt->bindParam(':learning_objectives', $learning_objectives);
        $stmt->bindParam(':major_id', $major_id);
        $stmt->bindParam(':course_image', $imagePath);

        $stmt->execute();
        
        // هدایت به صفحه افزودن دوره
        header("Location: add_course.php?success=1");
        exit;
    } catch (PDOException $e) {
        die("خطا در افزودن دوره: " . $e->getMessage());
    }
}
?>
