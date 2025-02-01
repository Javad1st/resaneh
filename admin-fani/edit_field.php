<?php
// اتصال به پایگاه داده
include('../database/db.php');

if (isset($_GET['field_id'])) {
    $field_id = $_GET['field_id'];

    try {
        // دریافت اطلاعات رشته مورد نظر از دیتابیس
        $stmt = $conn->prepare("SELECT * FROM fields WHERE id = :id");
        $stmt->bindParam(':id', $field_id);
        $stmt->execute();
        $field = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$field) {
            echo "رشته‌ای با این شناسه پیدا نشد.";
            exit;
        }
    } catch (PDOException $e) {
        echo "خطا در بارگذاری داده‌ها: " . $e->getMessage();
    }
} else {
    echo "شناسه رشته مشخص نشده است.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ویرایش رشته</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <?php require 'header.php'; ?>
    <div class="container mt-5">
        <h2>ویرایش رشته</h2>
        <form action="edit_field_process.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="field_id" value="<?= htmlspecialchars($field['id']) ?>">
            <div class="mb-3">
                <label for="fieldName" class="form-label">نام رشته</label>
                <input type="text" class="form-control" id="fieldName" name="field_name" value="<?= htmlspecialchars($field['field_name']) ?>" required>
            </div>
            <div class="mb-3">
                <label for="fieldImage" class="form-label">تصویر رشته</label>
                <div>
                    <p>تصویر فعلی:</p>
                    <img src="../<?= htmlspecialchars($field['field_image']) ?>" alt="تصویر رشته" class="mt-3" width="150">
                </div>
                <input type="file" class="form-control mt-2" id="fieldImage" name="field_image" accept="image/*" onchange="previewImage(event)">
                <div id="newImagePreview" class="mt-3" style="display: none;">
                    <p>تصویر جدید:</p>
                    <img id="preview" width="150">
                </div>
            </div>
            <button type="submit" class="btn btn-warning">به‌روزرسانی</button>
        </form>
    </div>

    <script>
        function previewImage(event) {
            let preview = document.getElementById('preview');
            let previewContainer = document.getElementById('newImagePreview');
            preview.src = URL.createObjectURL(event.target.files[0]);
            previewContainer.style.display = 'block';
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
