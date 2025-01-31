<?php
// اتصال به پایگاه داده
include('../database/db.php');

try {
    // گرفتن تمام دوره‌ها از جدول program
    $stmt = $conn->prepare("SELECT * FROM programs");
    $stmt->execute();
    $programs = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
            transition: color 0.3s ease;
        }

        .card-text {
            font-size: 1rem;
            color: #495057;
            line-height: 1.6;
            margin-bottom: 20px;
            transition: color 0.3s ease;
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
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
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

        /* مخفی کردن جزئیات در ابتدا */
        .course-details {
            display: none;
        }
    </style>
</head>
<body>
    <?php
    // شامل کردن فایل هدر
    require 'header.php';
    ?>
    <div class="container mt-5">
        <h2>تمام دوره‌ها</h2><br><br>

        <!-- نمایش دوره‌ها از جدول program -->
        <?php if (!empty($programs)): ?>
            <div class="row">
                <?php foreach ($programs as $program): ?>
                    <div class="col-md-4 mb-4">
                        <div class="card program-card">
                            <div class="card-body">
                                <h5 class="card-title"><?= htmlspecialchars($program['program_name']) ?></h5>
                                <p class="card-text"><?= htmlspecialchars($program['program_description']) ?></p>
                                <button class="btn-more" onclick="toggleDetails(this)">جزئیات بیشتر</button>

                                <!-- جزئیات دوره -->
                                <div class="course-details">
                                    <p><strong>زمان برگزاری:</strong> <?= htmlspecialchars($program['program_hours']) ?></p>
                                    <p><strong>مدت دوره:</strong> <?= htmlspecialchars($program['program_duration']) ?> ماه</p>
                                    <p><strong>قیمت دوره:</strong> <?= number_format($program['program_price']) ?> تومان</p>
                                </div>

                                <!-- دکمه‌های ویرایش و حذف -->
                                <div class="mt-3">
                                    <a href="edit_program.php?id=<?= $program['id'] ?>" class="btn-edit">ویرایش</a>
                                    <button class="btn-delete" data-bs-toggle="modal" data-bs-target="#deleteModal" onclick="setProgramId(<?= $program['id'] ?>)">حذف</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <p>هیچ دوره‌ای موجود نیست.</p>
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
                    <a id="deleteProgramLink" href="" class="btn btn-delete">حذف</a> <!-- لینک حذف -->
                </div>
            </div>
        </div>
    </div>

    <script>
        // تابع برای نمایش/مخفی کردن جزئیات دوره
        function toggleDetails(button) {
            // پیدا کردن بخش جزئیات داخل همان کارت
            const details = button.closest('.card-body').querySelector('.course-details');
            
            // تغییر وضعیت نمایش یا مخفی بودن جزئیات
            if (details.style.display === 'none' || details.style.display === '') {
                details.style.display = 'block';
                button.innerText = 'جزئیات کمتر';  // تغییر متن دکمه
            } else {
                details.style.display = 'none';
                button.innerText = 'جزئیات بیشتر';  // تغییر متن دکمه به حالت اولیه
            }
        }

        // تابع برای تنظیم ID دوره برای حذف
        function setProgramId(programId) {
            const deleteLink = document.getElementById('deleteProgramLink');
            deleteLink.href = 'delete_program.php?id=' + programId;
        }
    </script>

    <!-- اضافه کردن Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
