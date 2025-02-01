<?php
// اتصال به پایگاه داده
include('../database/db.php');

try {
    // گرفتن تمامی رشته‌ها از دیتابیس
    $stmt = $conn->prepare("SELECT * FROM fields");
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
    <title>مدیریت رشته‌ها</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script>
        function confirmDelete(fieldId) {
            if (confirm("آیا مطمئن هستید که می‌خواهید این رشته را حذف کنید؟")) {
                window.location.href = "del_field.php?field_id=" + fieldId;
            }
        }
    </script>
</head>
<body>

<?php require 'header.php'; ?>

<div class="container mt-5">
    <h2>مدیریت رشته‌ها</h2><br><br>

    <?php if (isset($_GET['message'])): ?>
        <div class="alert alert-success">
            <?= htmlspecialchars($_GET['message']) ?>
        </div>
    <?php endif; ?>

    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th>#</th>
                <th>نام رشته</th>
                <th>تصویر رشته</th>
                <th>عملیات</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($majors as $major): ?>
                <tr>
                    <td><?= htmlspecialchars($major['id']) ?></td>
                    <td><?= htmlspecialchars($major['field_name']) ?></td>
                    <td>
                        <img src="<?= !empty($major['field_image']) ? '../' . htmlspecialchars($major['field_image']) : '../uploads/default.jpg' ?>" 
                             alt="تصویر رشته" width="100">
                    </td>
                    <td>
                        <a href="view_programs.php?field_id=<?= $major['id'] ?>" class="btn btn-info">دوره‌ها</a>
                        <a href="edit_field.php?field_id=<?= $major['id'] ?>" class="btn btn-warning">ویرایش</a>
                        <button onclick="confirmDelete(<?= $major['id'] ?>)" class="btn btn-danger">حذف</button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
