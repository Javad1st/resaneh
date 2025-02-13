<?php
// اتصال به پایگاه داده
include('../database/db.php');

try {
    // گرفتن همه رشته‌ها و دوره‌ها از پایگاه داده
    $stmt = $conn->prepare("SELECT * FROM majors");
    $stmt->execute();
    $majors = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "خطا در خواندن داده‌ها: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تمام دوره‌ها</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f1f3f6;
            color: #333;
        }

        .course-card {
            position: relative;
            border-radius: 15px;
            overflow: hidden;
            transition: all 0.4s ease;
            cursor: pointer;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            background: linear-gradient(145deg, #e0e0e0, #ffffff);
            border: 1px solid #ddd;
        }

        .course-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            background: linear-gradient(145deg, #007bff, #0056b3);
            color: #fff;
        }

        .course-card .card-body {
            padding: 20px;
            position: relative;
            z-index: 1;
        }

        .card-title {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 10px;
            color: #495057;
            transition: color 0.3s ease;
        }

        .card-text {
            font-size: 1rem;
            color: #495057;
            line-height: 1.6;
            margin-bottom: 20px;
            transition: color 0.3s ease;
        }

        .course-card:hover .card-title,
        .course-card:hover .card-text {
            color: #fff;
        }

        .btn-more {
            display: inline-block;
            background-color: #007bff;
            color: white;
            font-size: 1rem;
            padding: 12px 18px;
            border: none;
            border-radius: 25px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .btn-more:hover {
            background-color: #0056b3;
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .course-details {
            display: none;
            margin-top: 15px;
            background-color: rgba(255, 255, 255, 0.95);
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
        }

        .show-details .course-details {
            display: block;
        }

        .course-details p {
            font-size: 1rem;
            color: #212529;
            margin-bottom: 12px;
        }

        .course-details strong {
            color: #007bff;
        }

        .container {
            max-width: 1200px;
        }

        .row {
            margin-top: 20px;
        }

        .col-md-4 {
            transition: all 0.3s ease;
        }

        .col-md-4:hover {
            transform: scale(1.05);
        }

        .btn-edit, .btn-delete {
            display: inline-block;
            background-color: #f39c12;
            color: white;
            font-size: 1rem;
            padding: 8px 12px;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            margin-top: 10px;
            transition: 0.3s ease;
        }

        .btn-edit:hover {
            background-color: #e67e22;
        }

        .btn-delete {
            background-color: #e74c3c;
        }

        .btn-delete:hover {
            background-color: #c0392b;
        }

        /* استایل مودال */
        .modal-content {
            border-radius: 12px;
        }
    </style>
</head>
<body>
    <?php
    // شامل کردن فایل هدر
    require 'header.php';
    ?>
    <div class="container mt-5">
        <h2>تمام دوره‌ها</h2>

        <!-- نمایش دوره‌ها بر اساس رشته‌ها -->
        <?php if (!empty($majors)): ?>
            <?php foreach ($majors as $major): ?>
                <div class="major-section">
                    <h3 class="major-title"><?= htmlspecialchars($major['major_name']) ?></h3><br>

                    <!-- دریافت دوره‌ها برای هر رشته -->
                    <?php
                        try {
                            $stmt_courses = $conn->prepare("SELECT * FROM courses WHERE major_id = :major_id");
                            $stmt_courses->bindParam(':major_id', $major['id']);
                            $stmt_courses->execute();
                            $courses = $stmt_courses->fetchAll(PDO::FETCH_ASSOC);
                        } catch (PDOException $e) {
                            echo "خطا در خواندن دوره‌ها: " . $e->getMessage();
                        }
                    ?>

                    <div class="row">
                        <?php if (!empty($courses)): ?>
                            <?php foreach ($courses as $course): ?>
                                <div class="col-md-4 mb-4">
                                    <div class="card course-card" onclick="toggleDetails(this)">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= htmlspecialchars($course['course_name']) ?></h5>
                                            <p class="card-text"><?= htmlspecialchars($course['course_description']) ?></p>
                                            <button class="btn-more">جزئیات بیشتر</button>
                                            <div class="course-details">
                                                <p><strong>زمان برگزاری:</strong> <?= htmlspecialchars($course['course_hours']) ?></p>
                                                <p><strong>مدت دوره:</strong> <?= htmlspecialchars($course['course_duration']) ?> ماه</p>
                                                <p><strong>روزای برگزاری دوره :</strong> <?= htmlspecialchars($course['course_days']) ?>  </p>
                                                <p><strong>قیمت دوره:</strong> 
    <?php if (!empty($course['discounted_price']) && $course['discounted_price'] > 0): ?>
        <span style="text-decoration: line-through; color: #d9534f;">
            <?= number_format($course['course_price']) ?> تومان
        </span>
        <span style="color: #5bc0de; font-weight: bold;">
            <?= number_format($course['discounted_price']) ?> تومان
        </span>
    <?php else: ?>
        <?= number_format($course['course_price']) ?> تومان
    <?php endif; ?>
</p>

                                            </div>
                                            <!-- دکمه‌های ویرایش و حذف -->
                                            <div class="mt-3">
                                                <a href="edit_course.php?id=<?= $course['id'] ?>" class="btn-edit">ویرایش</a>
                                                <button class="btn-delete" data-bs-toggle="modal" data-bs-target="#deleteModal" onclick="setCourseId(<?= $course['id'] ?>)">حذف</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <p>هیچ دوره‌ای برای این رشته موجود نیست.</p>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>هیچ رشته‌ای در دسترس نیست.</p>
        <?php endif; ?>
    </div>

    <!-- مودال حذف دوره -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">تایید حذف دوره</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    آیا مطمئن هستید که می‌خواهید این دوره را حذف کنید؟
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">لغو</button>
                    <a id="deleteCourseLink" href="" class="btn btn-delete">حذف</a> <!-- لینک حذف -->
                </div>
            </div>
        </div>
    </div>

    <script>
        // توابع جاوا اسکریپت برای نمایش جزئیات
        function toggleDetails(card) {
            card.classList.toggle('show-details');
        }

        // تابع برای تنظیم ID دوره برای حذف
        function setCourseId(courseId) {
            const deleteLink = document.getElementById('deleteCourseLink');
            deleteLink.href = 'delete_course2.php?id=' + courseId;
        }
    </script>
    <script>
    function copyCourseCode(elementId) {
        var codeElement = document.getElementById(elementId);
        var tempInput = document.createElement("input");
        tempInput.value = codeElement.innerText;
        document.body.appendChild(tempInput);
        tempInput.select();
        document.execCommand("copy");
        document.body.removeChild(tempInput);
        alert("کد دوره کپی شد: " + codeElement.innerText);
    }
</script>

    <!-- اضافه کردن Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
