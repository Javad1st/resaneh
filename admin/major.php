<?php
// اتصال به پایگاه داده
include('../database/db.php');

try {
    // گرفتن تمامی رشته‌ها از دیتابیس
    $stmt = $conn->prepare("SELECT * FROM majors");
    $stmt->execute();
    $majors = $stmt->fetchAll(PDO::FETCH_ASSOC);  // دریافت تمام رشته‌ها به صورت آرایه
} catch (PDOException $e) {
    echo "<div class='alert alert-danger'>خطا در خواندن داده‌ها: " . $e->getMessage() . "</div>";
    exit;
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
    <?php require 'header.php'; ?>

    <div class="container mt-5">
        <h2 class="mb-4">لیست رشته‌ها</h2>

        <!-- نمایش پیام موفقیت یا خطا -->
        <?php if (isset($_GET['success'])): ?>
            <div class="alert alert-success"><?= htmlspecialchars($_GET['success']) ?></div>
        <?php elseif (isset($_GET['error'])): ?>
            <div class="alert alert-danger"><?= htmlspecialchars($_GET['error']) ?></div>
        <?php endif; ?>

        <!-- جدول نمایش رشته‌ها -->
        <table class="table table-bordered table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>نام رشته</th>
                    <th>تصویر رشته</th>
                    <th>مشاهده دوره‌ها</th>
                    <th>عملیات</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($majors as $major): ?>
                    <tr>
                        <td><?= htmlspecialchars($major['id']) ?></td>
                        <td><?= htmlspecialchars($major['major_name']) ?></td>
                        <td>
                            <?php if (!empty($major['major_image'])): ?>
                                <img src="../<?= htmlspecialchars($major['major_image']) ?>" alt="تصویر رشته" width="100" class="rounded shadow">
                            <?php else: ?>
                                <img src="default-image.jpg" alt="بدون تصویر" width="100" class="rounded shadow">
                            <?php endif; ?>
                        </td>
                        <td>
                            <a href="view_courses.php?major_id=<?= $major['id'] ?>" class="btn btn-info">مشاهده دوره‌ها</a>
                        </td>
                        <td>
                            <a href="edit_major.php?major_id=<?= $major['id'] ?>" class="btn btn-warning">ویرایش</a>
                            <a href="del_major.php?major_id=<?= $major['id'] ?>" class="btn btn-danger" onclick="return confirm('آیا از حذف این رشته مطمئن هستید؟')">حذف</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
