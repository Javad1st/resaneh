<?php
// اتصال به پایگاه داده
include('../database/db.php');

// بررسی اینکه شناسه دوره ارسال شده است یا خیر
if (isset($_GET['id'])) {
    $courseId = $_GET['id'];

    // دریافت اطلاعات دوره از پایگاه داده
    try {
        $stmt = $conn->prepare("SELECT * FROM courses WHERE id = :courseId");
        $stmt->bindParam(':courseId', $courseId);
        $stmt->execute();
        $course = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$course) {
            echo "دوره‌ای با این شناسه پیدا نشد.";
            exit();
        }
    } catch (PDOException $e) {
        echo "خطا در خواندن دوره: " . $e->getMessage();
        exit();
    }
} else {
    echo "شناسه دوره ارسال نشده است.";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // دریافت اطلاعات فرم
    $courseName = $_POST['course_name'];
    $courseDescription = $_POST['course_description'];
    $courseHours = $_POST['course_hours'];
    $courseDuration = $_POST['course_duration'];
    $coursePrice = $_POST['course_price'];
  // حذف کاماها از قیمت و تبدیل آن به عدد صحیح
  $coursePrice = str_replace(',', '', $coursePrice);  // حذف کاماها
  $coursePrice = floatval($coursePrice);  // تبدیل به float
  $coursePrice = round($coursePrice);  
    try {
        // بروزرسانی اطلاعات دوره در پایگاه داده
        $stmt = $conn->prepare("UPDATE courses SET course_name = :courseName, course_description = :courseDescription, course_hours = :courseHours, course_duration = :courseDuration, course_price = :coursePrice WHERE id = :courseId");
        $stmt->bindParam(':courseName', $courseName);
        $stmt->bindParam(':courseDescription', $courseDescription);
        $stmt->bindParam(':courseHours', $courseHours);
        $stmt->bindParam(':courseDuration', $courseDuration);
        $stmt->bindParam(':coursePrice', $coursePrice);
        $stmt->bindParam(':courseId', $courseId);
        $stmt->execute();

        echo "دوره با موفقیت ویرایش شد.";
        // هدایت به صفحه دوره‌ها پس از ویرایش موفق
        header("Location: all_course.php");
        exit();
    } catch (PDOException $e) {
        echo "خطا در ویرایش دوره: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ویرایش دوره</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <?php require 'header.php'; ?>

    <div class="container mt-5">
        <h2>ویرایش دوره</h2>

        <form method="POST">
            <div class="mb-3">
                <label for="course_name" class="form-label">نام دوره</label>
                <input type="text" id="course_name" name="course_name" class="form-control" value="<?= htmlspecialchars($course['course_name']) ?>" required>
            </div>
            <div class="mb-3">
                <label for="course_description" class="form-label">توضیحات دوره</label>
                <textarea id="course_description" name="course_description" class="form-control" rows="4" required><?= htmlspecialchars($course['course_description']) ?></textarea>
            </div>
            <div class="mb-3">
                <label for="course_hours" class="form-label">زمان برگزاری</label>
                <input type="text" id="course_hours" name="course_hours" class="form-control" value="<?= htmlspecialchars($course['course_hours']) ?>" required>
            </div>
            <div class="mb-3">
                <label for="course_duration" class="form-label">مدت دوره (ماه)</label>
                <input type="number" id="course_duration" name="course_duration" class="form-control" value="<?= htmlspecialchars($course['course_duration']) ?>" required>
            </div>
            <div class="mb-3">
                <label for="course_price" class="form-label">قیمت دوره</label>
                <input type="text" id="course_price" name="course_price" class="form-control" value=" <?= number_format($course['course_price']) ?>"  oninput="formatPrice(this)"  required>
            </div>
            <button type="submit" class="btn btn-primary">ذخیره تغییرات</button>
        </form>
    </div>
    <script>
        function formatPrice(input) {
            let value = input.value.replace(/,/g, ''); // حذف کاماهای قبلی
            let formattedValue = value.replace(/\B(?=(\d{3})+(?!\d))/g, ","); // فرمت سه‌رقمی
            input.value = formattedValue;
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
