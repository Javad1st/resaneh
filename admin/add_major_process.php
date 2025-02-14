<?php
// اتصال به پایگاه داده
require_once '../database/db.php';

// تابع برای تولید کد منحصر به فرد
function generateUniqueCourseCode($conn) {
    do {
        $courseCode = 'res' . strtoupper(bin2hex(random_bytes(3))); // تولید کد تصادفی شروع با "res"
        
        // بررسی اینکه آیا کد قبلاً در پایگاه داده وجود دارد
        $stmt = $conn->prepare("SELECT id FROM courses WHERE course_code = :course_code");
        $stmt->bindParam(':course_code', $courseCode);
        $stmt->execute();
        $existingCourse = $stmt->fetch(PDO::FETCH_ASSOC);
        
    } while ($existingCourse); // اگر کد تکراری بود، دوباره تولید می‌کند
    
    return $courseCode;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // دریافت داده‌ها از فرم
       // دریافت داده‌ها از فرم و حذف کاماها از قیمت‌ها
$course_name = $_POST['course_name'];
$course_hours = $_POST['course_hours'];
$course_duration = $_POST['course_duration'];
$course_price = str_replace(',', '', $_POST['course_price']); // حذف کاماها
$discounted_price = str_replace(',', '', $_POST['discounted_price']); // حذف کاماها
$instructor_name = $_POST['instructor_name'];
$course_description = $_POST['course_description'];
$learning_objectives = $_POST['learning_objectives'];
$major_id = $_POST['major_id'];
$course_days = $_POST['course_days'];

        // تولید کد دوره منحصر به فرد
        $course_code = generateUniqueCourseCode($conn);

        // مدیریت آپلود تصویر
        $imagePath = null;
        if (isset($_FILES['course_image']) && $_FILES['course_image']['error'] == 0) {
            $imageName = time() . '_' . $_FILES['course_image']['name'];
            $targetDirectory = '../uploads/courses/';
            $targetFile = $targetDirectory . basename($imageName);
            $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

            // بررسی فرمت فایل تصویر
            $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
            if (in_array($imageFileType, $allowedTypes)) {
                if (move_uploaded_file($_FILES['course_image']['tmp_name'], $targetFile)) {
                    $imagePath = 'uploads/courses/' . $imageName;
                }
            } else {
                echo "فرمت تصویر مجاز نیست.";
                exit();
            }
        }

        // وارد کردن اطلاعات دوره به پایگاه داده
        $stmt = $conn->prepare("INSERT INTO courses (course_code, course_name, course_hours, course_duration, course_price, discounted_price, instructor_name, course_description, learning_objectives, major_id, course_image , course_days) 
                                VALUES (:course_code, :course_name, :course_hours, :course_duration, :course_price, :discounted_price, :instructor_name, :course_description, :learning_objectives, :major_id, :course_image, :course_days)");
        
        $stmt->bindParam(':course_code', $course_code);
        $stmt->bindParam(':course_name', $course_name);
        $stmt->bindParam(':course_hours', $course_hours);
        $stmt->bindParam(':course_duration', $course_duration);
        $stmt->bindParam(':course_price', $course_price);
        $stmt->bindParam(':discounted_price', $discounted_price);
        $stmt->bindParam(':instructor_name', $instructor_name);
        $stmt->bindParam(':course_description', $course_description);
        $stmt->bindParam(':learning_objectives', $learning_objectives);
        $stmt->bindParam(':major_id', $major_id);
        $stmt->bindParam(':course_days', $course_days);
        $stmt->bindParam(':course_image', $imagePath);

        $stmt->execute();

        // نمایش پیام موفقیت و هدایت به صفحه دیگری بعد از ۳ ثانیه
        echo "<div style='text-align: center; margin-top: 50px; font-size: 20px; color: green;'>
                دوره با موفقیت افزوده شد! <br> در حال انتقال...
              </div>";

        // هدایت به صفحه افزودن دوره پس از 3 ثانیه
        header("Refresh: 3; URL=add_course.php");
        exit(); // جلوگیری از ادامه اجرای کد

    } catch (PDOException $e) {
        echo "خطا در افزودن دوره: " . $e->getMessage();
    }
}
?>