<?php
// اتصال به پایگاه داده
include('../database/db.php');

try {
    // گرفتن رشته‌ای که کاربر انتخاب کرده است
    if (isset($_GET['field_id'])) {
        $major_id = $_GET['field_id'];

        // گرفتن اسم رشته انتخابی
        $stmt = $conn->prepare("SELECT field_name FROM fields WHERE id = :field_id");
        $stmt->bindParam(':field_id', $major_id, PDO::PARAM_INT);
        $stmt->execute();
        $field = $stmt->fetch(PDO::FETCH_ASSOC);
        $field_name = $field['field_name'] ?? 'نام رشته';

        // گرفتن دوره‌های مربوط به رشته انتخابی
        $stmt = $conn->prepare("SELECT * FROM programs WHERE field_id = :field_id");
        $stmt->bindParam(':field_id', $major_id, PDO::PARAM_INT);
        $stmt->execute();
        $courses = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } else {
        echo "رشته‌ای انتخاب نشده است.";
    }
} catch (PDOException $e) {
    echo "خطا در خواندن داده‌ها: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>دوره‌های رشته</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        /* استایل‌های موجود */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f1f3f6;
            color: #333;
        }

        .program-card {
            position: relative;
            border-radius: 15px;
            overflow: hidden;
            transition: all 0.4s ease;
            cursor: pointer;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            background: linear-gradient(145deg, #e0e0e0, #ffffff);
            border: 1px solid #ddd;
        }

        .program-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            background: linear-gradient(145deg, #007bff, #0056b3);
            color: #fff;
        }

        .program-card .card-body {
            padding: 20px;
            position: relative;
            z-index: 1;
        }

        .card-title {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 10px;
            color: #495057;
        }

        .card-text {
            font-size: 1rem;
            color: #495057;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .program-card:hover .card-title,
        .program-card:hover .card-text {
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
            transition: all 0.3s ease;
        }

        .btn-more:hover {
            background-color: #0056b3;
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
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

        .course-details {
            display: none;
            border: 1px solid #ddd;
            padding: 15px;
            margin-top: 10px;
            border-radius: 8px;
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <?php require 'header.php'; ?>

    <div class="container mt-5">
        <h2>دوره‌های رشته: <?= htmlspecialchars($field_name) ?></h2><br><br><br>

        <!-- نمایش پیغام خطا در صورت وجود -->
        <?php if (isset($_GET['error'])): ?>
            <div class="alert alert-danger">
                <?= htmlspecialchars($_GET['error']) ?>
            </div>
        <?php endif; ?>

        <!-- نمایش پیغام موفقیت پس از حذف -->
        <?php if (isset($_GET['success'])): ?>
            <div class="alert alert-success">
                دوره با موفقیت حذف شد.
            </div>
        <?php endif; ?>

        <!-- نمایش دوره‌ها به صورت باکس -->
        <div class="row">
            <?php if (!empty($courses)): ?>
                <?php foreach ($courses as $course): ?>
                    <div class="col-md-4 mb-4">
                        <div class="card course-card">
                            <div class="card-body">
                                <h5 class="card-title"><?= htmlspecialchars($course['program_name']) ?></h5>
                                <p class="card-text"><?= htmlspecialchars($course['program_description']) ?></p>
                                <button class="btn-more" onclick="toggleDetails(this)">جزئیات بیشتر</button>
                                <div class="course-details">
                                    <p><strong>زمان برگزاری:</strong> <?= htmlspecialchars($course['program_hours']) ?></p>
                                    <p><strong>مدت دوره:</strong> <?= htmlspecialchars($course['program_duration']) ?> ماه</p>
                                    <p><strong>قیمت دوره:</strong> <?= number_format($course['program_price']) ?> تومان</p>
                                </div>
                                <!-- دکمه ویرایش و حذف -->
                                <a href="edit_program.php?id=<?= $course['id'] ?>" class="btn-edit">ویرایش</a>
                                <button class="btn-delete" onclick="confirmDelete(<?= $course['id'] ?>)">حذف</button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>هیچ دوره‌ای برای این رشته موجود نیست.</p>
            <?php endif; ?>
        </div>
    </div>

    <!-- مودال تایید حذف دوره -->
    <div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmDeleteModalLabel">تایید حذف دوره</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    آیا از حذف این دوره مطمئن هستید؟
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">لغو</button>
                    <a id="confirmDeleteBtn" href="#" class="btn btn-danger">حذف</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        // تابع برای نمایش/مخفی کردن جزئیات دوره
        function toggleDetails(button) {
            const details = button.closest('.card-body').querySelector('.course-details');
            
            if (details.style.display === 'none' || details.style.display === '') {
                details.style.display = 'block';
                button.innerText = 'جزئیات کمتر';
            } else {
                details.style.display = 'none';
                button.innerText = 'جزئیات بیشتر';
            }
        }

        // تابع برای تنظیم ID دوره برای حذف
        function confirmDelete(courseId) {
            const modal = new bootstrap.Modal(document.getElementById('confirmDeleteModal'));
            modal.show();
            document.getElementById('confirmDeleteBtn').href = "delete_course2.php?id=" + courseId;
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
