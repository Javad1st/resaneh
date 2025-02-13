<?php
// اتصال به پایگاه داده
include('../database/db.php');

// دریافت رشته‌ها از جدول majors
$sql = "SELECT id, major_name FROM majors";
$stmt = $conn->prepare($sql);
$stmt->execute();
$majors = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>افزودن دوره</title>
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
    <h2>افزودن دوره جدید</h2>
    
    <form action="add_course_process.php" method="POST" enctype="multipart/form-data">
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
    <label class="form-label">روزهای برگزاری دوره</label>
    <div class="form-check form-check-inline">
        <input class="form-check-input bg-green-500 border-green-500" type="radio" name="course_days" id="evenDays" value="زوج" required>
        <label class="form-check-label text-green-600 font-semibold" for="evenDays">روزهای زوج</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input bg-blue-500 border-blue-500" type="radio" name="course_days" id="oddDays" value="فرد">
        <label class="form-check-label text-blue-600 font-semibold" for="oddDays">روزهای فرد</label>
    </div>
</div>


        <div class="mb-3">
            <label for="coursePrice" class="form-label">قیمت اصلی دوره (تومان)</label>
            <input type="text" class="form-control" id="coursePrice" name="course_price" oninput="formatPrice(this)" required>
        </div>
        <div class="mb-3">
            <label for="discountedPrice" class="form-label">قیمت پس از تخفیف (تومان)</label>
            <input type="text" class="form-control" id="discountedPrice" name="discounted_price" oninput="formatPrice(this)">
        </div>
        <div class="mb-3">
            <label for="instructorName" class="form-label">نام معلم</label>
            <input type="text" class="form-control" id="instructorName" name="instructor_name" required>
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
            <label for="courseImage" class="form-label">تصویر دوره</label>
            <input type="file" class="form-control" id="courseImage" name="course_image" accept="image/*" required>
        </div>
        <div class="mb-3">
            <label for="majorId" class="form-label">رشته</label>
            <select class="form-control" id="majorId" name="major_id" required>
                <option value="">انتخاب رشته</option>
                <?php foreach ($majors as $major): ?>
                    <option value="<?= htmlspecialchars($major['id']); ?>"><?= htmlspecialchars($major['major_name']); ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">افزودن دوره</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
