<?php
// اتصال به پایگاه داده
include('../database/db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // دریافت داده‌های فرم
    $course_name = $_POST['course_name'];
    $course_hours = $_POST['course_hours'];
    $course_duration = $_POST['course_duration'];
    $course_price = $_POST['course_price'];  // دریافت قیمت
    $instructor_name = $_POST['instructor_name'];
    $course_description = $_POST['course_description'];
    $learning_objectives = $_POST['learning_objectives'];
    $major_id = $_POST['major_id']; // دریافت شناسه رشته

    // جلوگیری از تزریق SQL
    $course_name = htmlspecialchars($course_name, ENT_QUOTES, 'UTF-8');
    $course_hours = htmlspecialchars($course_hours, ENT_QUOTES, 'UTF-8');
    $instructor_name = htmlspecialchars($instructor_name, ENT_QUOTES, 'UTF-8');
    $course_description = htmlspecialchars($course_description, ENT_QUOTES, 'UTF-8');
    $learning_objectives = htmlspecialchars($learning_objectives, ENT_QUOTES, 'UTF-8');

    // حذف کاماها از قیمت و تبدیل آن به عدد صحیح
    $course_price = str_replace(',', '', $course_price);  // حذف کاماها
    $course_price = floatval($course_price);  // تبدیل به float
    $course_price = round($course_price);  // گرد کردن به عدد صحیح اگر نیاز است

    try {
        // وارد کردن اطلاعات به پایگاه داده
        $stmt = $conn->prepare("INSERT INTO courses (course_name, course_hours, course_duration, course_price, instructor_name, course_description, learning_objectives, major_id) 
                                VALUES (:course_name, :course_hours, :course_duration, :course_price, :instructor_name, :course_description, :learning_objectives, :major_id)");
        $stmt->bindParam(':course_name', $course_name);
        $stmt->bindParam(':course_hours', $course_hours);
        $stmt->bindParam(':course_duration', $course_duration);
        $stmt->bindParam(':course_price', $course_price);
        $stmt->bindParam(':instructor_name', $instructor_name);
        $stmt->bindParam(':course_description', $course_description);
        $stmt->bindParam(':learning_objectives', $learning_objectives);
        $stmt->bindParam(':major_id', $major_id); // اضافه کردن شناسه رشته به جدول

        $stmt->execute();
        
        // هدایت به صفحه افزودن دوره
        header("Location: add_course.php");
    } catch (PDOException $e) {
        echo "خطا در افزودن دوره: " . $e->getMessage();
    }
}
?>
