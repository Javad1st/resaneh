<?php
// اتصال به پایگاه داده
include('../database/db.php');

try {
    // گرفتن تمامی رشته‌ها از دیتابیس
    $stmt = $conn->prepare("SELECT * FROM fields");
    $stmt->execute();
    $majors = $stmt->fetchAll(PDO::FETCH_ASSOC);  // دریافت تمام رشته‌ها به صورت آرایه
} catch (PDOException $e) {
    echo "خطا در خواندن داده‌ها: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مشاهده رشته‌ها</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    
</head>
<body>
    <?php
// شامل کردن فایل هدر
require 'header.php';
?>

    <div class="container mt-5">
        <h2>لیست رشته‌ها</h2><br><br>
        
        <!-- نمایش پیغام خطا در صورت وجود -->
        <?php if (isset($_GET['error'])): ?>
            <div class="alert alert-danger">
                <?= htmlspecialchars($_GET['error']) ?>
            </div>
        <?php endif; ?>
        
        <!-- جدول نمایش رشته‌ها -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>نام رشته</th>
                    <th>مشاهده دوره‌ها</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($majors as $major): ?>
                    <tr>
                        <td><?= htmlspecialchars($major['id']) ?></td>
                        <td><?= htmlspecialchars($major['field_name']) ?></td>
                        <td>
                            <!-- دکمه مشاهده دوره‌ها -->
                            <a href="view_programs.php?field_id=<?= $major['id'] ?>" class="btn btn-info">مشاهده دوره‌ها</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
