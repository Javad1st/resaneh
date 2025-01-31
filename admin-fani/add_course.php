<?php
// اتصال به پایگاه داده
include('../database/db.php');

// دریافت رشته‌ها از جدول fields
$sql = "SELECT id, field_name FROM fields";
$stmt = $conn->prepare($sql);
$stmt->execute();
$fields = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>افزودن دوره فنی و حرفه‌ای</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script>
        function formatPrice(input) {
            let value = input.value.replace(/,/g, ''); // حذف کاماهای قبلی
            let formattedValue = value.replace(/\B(?=(\d{3})+(?!\d))/g, ","); // فرمت سه‌رقمی
            input.value = formattedValue;
        }
    </script>
</head>
<?php
// شامل کردن فایل هدر
require 'header.php';
?>
<body>
    <div class="container mt-5">
        <h2>افزودن دوره فنی و حرفه‌ای جدید</h2>
        <form action="add_course_process.php" method="POST">
            <div class="mb-3">
                <label for="courseName" class="form-label">نام دوره</label>
                <input type="text" class="form-control" id="courseName" name="course_name" required>
            </div>
            <div class="mb-3">
                <label for="courseHours" class="form-label">ساعت شروع و پایان دوره</label>
                <input type="text" class="form-control" id="courseHours" name="course_hours" placeholder="مثال: 14:00 تا 17:00" required>
            </div>
            <div class="mb-3">
                <label for="courseDuration" class="form-label">مدت زمان دوره (به ماه)</label>
                <input type="number" class="form-control" id="courseDuration" name="course_duration" required>
            </div>
            <div class="mb-3">
                <label for="coursePrice" class="form-label">قیمت دوره (تومان)</label>
                <input type="text" class="form-control" id="coursePrice" name="course_price" oninput="formatPrice(this)" required>
            </div>
            <div class="mb-3">
                <label for="courseDescription" class="form-label">توضیحات دوره</label>
                <textarea class="form-control" id="courseDescription" name="course_description" rows="4" required></textarea>
            </div>
            <div class="mb-3">
                <label for="learningObjectives" class="form-label">مبانی که می‌خواهید یاد بگیرید</label>
                <textarea class="form-control" id="learningObjectives" name="learning_objectives" rows="4" required></textarea>
            </div>
            <div class="mb-3">
                <label for="fieldId" class="form-label">رشته</label>
                <select class="form-control" id="fieldId" name="field_id" required>
                    <option value="">انتخاب رشته</option>
                    <?php foreach ($fields as $field): ?>
                        <option value="<?= $field['id']; ?>"><?= $field['field_name']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">افزودن دوره</button>
        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
