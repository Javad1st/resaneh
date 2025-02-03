<?php
// اتصال به پایگاه داده
include('../database/db.php');

// بررسی اینکه شناسه برنامه ارسال شده است یا خیر
if (isset($_GET['id'])) {
    $programId = $_GET['id'];

    // دریافت اطلاعات برنامه از پایگاه داده
    try {
        $stmt = $conn->prepare("SELECT * FROM programs WHERE id = :programId");
        $stmt->bindParam(':programId', $programId);
        $stmt->execute();
        $program = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$program) {
            echo "برنامه‌ای با این شناسه پیدا نشد.";
            exit();
        }
    } catch (PDOException $e) {
        echo "خطا در خواندن برنامه: " . $e->getMessage();
        exit();
    }
} else {
    echo "شناسه برنامه ارسال نشده است.";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // دریافت اطلاعات فرم
    $programName = $_POST['program_name'];
    $programDescription = $_POST['program_description'];
    $programHours = $_POST['program_hours'];
    $programDuration = $_POST['program_duration'];
    $programPrice = $_POST['program_price'];

    // مدیریت آپلود تصویر
    $program_image = $program['program_image']; // تصویر قبلی
    if (isset($_FILES['course_image']) && $_FILES['course_image']['error'] == 0) {
        $image_name = $_FILES['course_image']['name'];
        $image_tmp_name = $_FILES['course_image']['tmp_name'];
        $image_extension = pathinfo($image_name, PATHINFO_EXTENSION);
        $new_image_name = uniqid('course_', true) . '.' . $image_extension;
        $upload_dir = '../uploads2/courses/';

        // انتقال تصویر به پوشه مربوطه
        if (move_uploaded_file($image_tmp_name, $upload_dir . $new_image_name)) {
            $program_image = 'uploads2/courses/' . $new_image_name; // مسیر ذخیره تصویر جدید
        } else {
            echo "خطا در بارگذاری تصویر.";
            exit();
        }
    }

    try {
        // بروزرسانی اطلاعات برنامه در پایگاه داده
        $stmt = $conn->prepare("UPDATE programs SET program_name = :programName, program_description = :programDescription, program_hours = :programHours, program_duration = :programDuration, program_price = :programPrice, program_image = :programImage WHERE id = :programId");
        $stmt->bindParam(':programName', $programName);
        $stmt->bindParam(':programDescription', $programDescription);
        $stmt->bindParam(':programHours', $programHours);
        $stmt->bindParam(':programDuration', $programDuration);
        $stmt->bindParam(':programPrice', $programPrice);
        $stmt->bindParam(':programImage', $program_image);
        $stmt->bindParam(':programId', $programId);
        $stmt->execute();

        echo "برنامه با موفقیت ویرایش شد.";
        // هدایت به صفحه برنامه‌ها پس از ویرایش موفق
        header("Location: all_programs.php");
        exit();
    } catch (PDOException $e) {
        echo "خطا در ویرایش برنامه: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ویرایش برنامه</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script>
        function formatPrice(input) {
            let value = input.value.replace(/,/g, ''); // حذف کاماهای قبلی
            let formattedValue = value.replace(/\B(?=(\d{3})+(?!\d))/g, ","); // فرمت سه‌رقمی
            input.value = formattedValue;
        }
    </script>
</head>
<body>
    <?php require 'header.php'; ?>

    <div class="container mt-5">
        <h2>ویرایش برنامه</h2>

        <form method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="program_name" class="form-label">نام برنامه</label>
                <input type="text" id="program_name" name="program_name" class="form-control" value="<?= htmlspecialchars($program['program_name']) ?>" required>
            </div>
            <div class="mb-3">
                <label for="program_description" class="form-label">توضیحات برنامه</label>
                <textarea id="program_description" name="program_description" class="form-control" rows="4" required><?= htmlspecialchars($program['program_description']) ?></textarea>
            </div>
            <div class="mb-3">
                <label for="program_hours" class="form-label">زمان برگزاری</label>
                <input type="text" id="program_hours" name="program_hours" class="form-control" value="<?= htmlspecialchars($program['program_hours']) ?>" required>
            </div>
            <div class="mb-3">
                <label for="program_duration" class="form-label">مدت برنامه (ماه)</label>
                <input type="number" id="program_duration" name="program_duration" class="form-control" value="<?= htmlspecialchars($program['program_duration']) ?>" required>
            </div>
            <div class="mb-3">
                <label for="program_price" class="form-label">قیمت برنامه</label>
                <input type="text" id="program_price" name="program_price" class="form-control" value="<?= number_format($program['program_price']) ?>" oninput="formatPrice(this)" required>
            </div>
            <div class="mb-3">
                <label for="course_image" class="form-label">تصویر برنامه</label>
                <input type="file" class="form-control" id="course_image" name="course_image" accept="image/*">
                <br>
                <?php if ($program['program_image']): ?>
                    <img src="../<?= $program['program_image'] ?>" alt="تصویر دوره" width="150">
                <?php endif; ?>
            </div>
        
            <button type="submit" class="btn btn-primary">ذخیره تغییرات</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
