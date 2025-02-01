<?php
// اتصال به پایگاه داده
include('../database/db.php');

if (isset($_GET['major_id'])) {
    $major_id = $_GET['major_id'];

    try {
        // گرفتن اطلاعات رشته مورد نظر از دیتابیس
        $stmt = $conn->prepare("SELECT * FROM majors WHERE id = :id");
        $stmt->bindParam(':id', $major_id);
        $stmt->execute();
        $major = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$major) {
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
    <script>
        function previewImage(input) {
            const file = input.files[0];
            const reader = new FileReader();

            reader.onload = function (e) {
                const img = document.getElementById("imagePreview");
                const p = document.getElementById("up");
                img.src = e.target.result;
                img.style.display = "block";
                p.style.display = 'block';
                
                 // نمایش پیش‌نمایش تصویر جدید
            };

            if (file) {
                reader.readAsDataURL(file);
            }
        }
    </script>
</head>
<body>
    <?php
    // شامل کردن فایل هدر
    require 'header.php';
    ?>
    <div class="container mt-5">
        <h2>ویرایش رشته</h2>
        <form action="edit_major_process.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="major_id" value="<?= htmlspecialchars($major['id']) ?>">
            <div class="mb-3">
                <label for="majorName" class="form-label">نام رشته</label>
                <input type="text" class="form-control" id="majorName" name="major_name" value="<?= htmlspecialchars($major['major_name']) ?>" required>
            </div>
            <div class="mb-3">
                <label for="majorImage" class="form-label">تصویر رشته فعلی</label>
                <!-- نمایش تصویر فعلی -->
                <div>
                    <img src="../<?= htmlspecialchars($major['major_image']) ?>" alt="تصویر رشته" class="mt-3" width="150"><br><br>
                </div>
                <!-- فرم آپلود تصویر جدید -->
                <input type="file" class="form-control" id="majorImage" name="major_image" accept="image/*" onchange="previewImage(this)">
                <!-- پیش‌نمایش تصویر جدید -->
                <p  class="text-danger" id="up" style="display: none;">تصویر جدید بروز شده</p>
                <img id="imagePreview" src="" alt="پیش‌نمایش تصویر" class="mt-3" width="150" style="display:none;">
            </div>
            <button type="submit" class="btn btn-warning">به‌روزرسانی</button>
        </form>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</html>
