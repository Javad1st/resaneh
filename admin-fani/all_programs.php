<?php
// اتصال به پایگاه داده
include('../database/db.php');

try {
    // گرفتن همه دسته‌بندی‌های رشته‌ها
    $stmt = $conn->prepare("SELECT * FROM fields");
    $stmt->execute();
    $fields = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "خطا در خواندن داده‌ها: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تمام برنامه‌ها</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body { font-family: 'Arial', sans-serif; background-color: #f1f3f6; color: #333; }
        .program-card { position: relative; border-radius: 15px; overflow: hidden; transition: all 0.4s ease; cursor: pointer;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1); background: linear-gradient(145deg, #e0e0e0, #ffffff); border: 1px solid #ddd; }
        .program-card:hover { transform: translateY(-15px); box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            background: linear-gradient(145deg, #007bff, #0056b3);  }
        .program-card .card-body { padding: 20px; position: relative; z-index: 1; }
        .card-title { font-size: 1.3rem; font-weight: 600; margin-bottom: 10px; color: #495057; transition: color 0.3s ease; }
        .card-text { font-size: 1rem; color: #495057; line-height: 1.6; margin-bottom: 20px; transition: color 0.3s ease; }
        .program-card:hover .card-title, .program-card:hover .card-text { color: #fff; }
        .btn-more { display: inline-block; background-color: #007bff; color: white; font-size: 1rem; padding: 12px 18px;
            border: none; border-radius: 25px; transition: all 0.3s ease; }
        .btn-more:hover { background-color: #0056b3; transform: translateY(-3px); }
        .program-details { display: none; margin-top: 15px; background-color: rgba(255, 255, 255, 0.95);
            padding: 20px; border-radius: 12px; box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1); }
        .show-details .program-details { display: block; }
        .btn-edit, .btn-delete, .btn-copy { margin-top: 10px; padding: 8px 16px; font-size: 1rem; border-radius: 5px; cursor: pointer; }
        .btn-edit { background-color: #28a745; color: white; border: none; }
        .btn-edit:hover { background-color: #218838; }
        .btn-delete { background-color: #dc3545; color: white; border: none; }
        .btn-delete:hover { background-color: #c82333; }
        .btn-copy { background-color: #17a2b8; color: white; border: none; }
        .btn-copy:hover { background-color: #138496; }
    </style>
</head>
<body>
    <?php require_once './header.php' ?>
    <div class="container mt-5">
        <h2>تمام برنامه‌ها</h2><br><br>

        <?php if (!empty($fields)): ?>
            <?php foreach ($fields as $field): ?>
                <div class="field-section">
                    <h3 class="field-title"><?= htmlspecialchars($field['field_name']) ?></h3><br><br>
                    <?php
                        try {
                            $stmt_programs = $conn->prepare("SELECT * FROM programs WHERE field_id = :field_id");
                            $stmt_programs->bindParam(':field_id', $field['id']);
                            $stmt_programs->execute();
                            $programs = $stmt_programs->fetchAll(PDO::FETCH_ASSOC);
                        } catch (PDOException $e) {
                            echo "خطا در خواندن برنامه‌ها: " . $e->getMessage();
                        }
                    ?>

                    <div class="row">
                        <?php if (!empty($programs)): ?>
                            <?php foreach ($programs as $program): ?>
                                <div class="col-md-4 mb-4">
                                    <div class="card program-card" onclick="toggleDetails(this)">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= htmlspecialchars($program['program_name']) ?></h5>
                                            <p class="card-text"><?= htmlspecialchars($program['program_description']) ?></p>
                                            <button class="btn-more">جزئیات بیشتر</button>
                                            <div class="program-details">
                                                <p><strong>زمان برگزاری:</strong> <?= htmlspecialchars($program['program_hours']) ?></p>
                                                <p><strong>مدت دوره:</strong> <?= htmlspecialchars($program['program_duration']) ?> ماه</p>
                                                <p><strong>قیمت دوره:</strong> <?= number_format($program['program_price']) ?> تومان</p>
                                                <p><strong>کد دوره:</strong> #<?= htmlspecialchars($program['program_code']) ?></p>
                                                <!-- دکمه کپی کد دوره -->
                                                <button class="btn-copy" onclick="copyCode('<?= htmlspecialchars($program['program_code']) ?>')">کپی کد دوره</button>
                                            </div>
                                            <!-- دکمه ویرایش و حذف -->
                                            <a href="edit_program.php?id=<?= $program['id'] ?>" class="btn-edit">ویرایش</a>
                                            <button class="btn-delete" onclick="confirmDelete(<?= $program['id'] ?>)">حذف</button>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <p>هیچ برنامه‌ای برای این رشته موجود نیست.</p>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>هیچ رشته‌ای در دسترس نیست.</p>
        <?php endif; ?>
    </div>

    <script>
        function toggleDetails(card) {
            card.classList.toggle('show-details');
        }

        function confirmDelete(programId) {
            if (confirm("آیا از حذف این برنامه اطمینان دارید؟")) {
                window.location.href = "delete_program.php?id=" + programId;
            }
        }

        function copyCode(code) {
            navigator.clipboard.writeText(code).then(function() {
                alert("کد دوره کپی شد: " + code);
            }).catch(function(err) {
                alert("خطا در کپی کردن کد دوره: " + err);
            });
        }
    </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
