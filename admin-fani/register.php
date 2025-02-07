<?php
require_once '../database/db.php';

try {
    // دریافت اطلاعات پیش‌ثبت‌نام‌ها از دیتابیس
    $stmt = $conn->prepare("SELECT * FROM pre_registration");
    $stmt->execute();

    // ذخیره اطلاعات در یک متغیر
    $registrations = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "خطا: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لیست پیش ثبت‌نام‌ها</title>
    <link href="https://fonts.googleapis.com/css2?family=Vazir&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Vazir', sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 85%;
            margin: 30px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            font-size: 2.2em;
            color: #333;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            text-align: right;
            border: 1px solid #ddd;
            font-size: 1em;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:nth-child(odd) {
            background-color: #f1f1f1;
        }

        td a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
            margin: 0 10px;
        }

        td a:hover {
            color: #0056b3;
        }

        .action-btns {
            display: flex;
            gap: 10px;
        }

        .action-btns a {
            background-color: #28a745;
            color: white;
            padding: 8px 16px;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .action-btns a:hover {
            background-color: #218838;
        }

        .action-btns .delete {
            background-color: #dc3545;
        }

        .action-btns .delete:hover {
            background-color: #c82333;
        }

        .no-data {
            text-align: center;
            font-size: 1.2em;
            color: #999;
            padding: 20px;
        }

        @media (max-width: 768px) {
            .container {
                width: 95%;
            }
            table {
                font-size: 0.9em;
            }
        }
    </style>
</head>
<body>
     <?php 
     require_once './header.php'
     ?>
    <div class="container" dir="rtl">
        <h2>لیست پیش ثبت‌نام‌ها</h2>
        <table cellspacing="0" cellpadding="10">
            <thead>
                <tr>
                    <th>نام</th>
                    <th>نام خانوادگی</th>
                    <th>شماره تماس</th>
                    <th>کد ملی</th>
                    <th>نام دوره</th>
                    <th>کد دوره</th>
                    <th>عملیات</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($registrations)): ?>
                    <?php foreach ($registrations as $registration): ?>
                        <tr>
                            <td><?= htmlspecialchars($registration['name']) ?></td>
                            <td><?= htmlspecialchars($registration['family']) ?></td>
                            <td><?= htmlspecialchars($registration['phone']) ?></td>
                            <td><?= htmlspecialchars($registration['national_id']) ?></td>
                            <td><?= htmlspecialchars($registration['course_name']) ?></td>
                            <td><?= htmlspecialchars($registration['course_code']) ?></td>
                            <td class="action-btns">
                                <a href="edit.php?id=<?= $registration['id'] ?>">ویرایش</a>
                                <a href="del.php?id=<?= $registration['id'] ?>" class="delete" onclick="return confirm('آیا مطمئن هستید؟')">حذف</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="7" class="no-data">هیچ داده‌ای برای نمایش وجود ندارد.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

<?php
// بستن اتصال به دیتابیس
$conn = null;
?>
