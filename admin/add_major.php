<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>افزودن رشته</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <?php
    // شامل کردن فایل هدر
    require 'header.php';
    ?>
    <div class="container mt-5">
        <h2>افزودن رشته</h2>
        <form action="add_major_process.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="majorName" class="form-label">نام رشته</label>
                <input type="text" class="form-control" id="majorName" name="major_name" required>
            </div>
            <div class="mb-3">
                <label for="majorImage" class="form-label">تصویر رشته</label>
                <input type="file" class="form-control" id="majorImage" name="major_image" accept="image/*" required>
            </div>
            <button type="submit" class="btn btn-primary">افزودن</button>
        </form>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</html>