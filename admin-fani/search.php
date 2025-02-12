<?php
require '../database/db.php'; // فایل اتصال به دیتابیس

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['search'])) {
    $search = trim($_POST['search']);

    if (empty($search)) {
        echo '<p class="text-danger">لطفاً مقدار جستجو را وارد کنید.</p>';
        exit;
    }

    try {
        $isCodeSearch = (strpos($search, "#") === 0);
        $searchQuery = "%" . ltrim($search, "#") . "%";

        $query = $isCodeSearch
            ? "SELECT * FROM programs WHERE program_code LIKE :searchQuery ORDER BY program_code LIMIT 10"
            : "SELECT * FROM programs WHERE program_name LIKE :searchQuery ORDER BY program_name LIMIT 10";

        $stmt = $conn->prepare($query);
        $stmt->bindParam(':searchQuery', $searchQuery, PDO::PARAM_STR);
        $stmt->execute();
        $programs = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (!empty($programs)) {
            echo '<div class="row">';
            foreach ($programs as $program) {
                echo '<div class="col-md-4 mb-4">';
                echo '<div class="card program-card" onclick="toggleDetails(this)">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . htmlspecialchars($program['program_name'], ENT_QUOTES, 'UTF-8') . '</h5>';
                echo '<p class="card-text">' . htmlspecialchars($program['program_description'], ENT_QUOTES, 'UTF-8') . '</p>';
                echo '<button class="btn-more">جزئیات بیشتر</button>';
                echo '<div class="program-details" style="display: none;">';
                echo '<p><strong>کد برنامه:</strong> #' . htmlspecialchars($program['program_code'], ENT_QUOTES, 'UTF-8') . '</p>';
                echo '<p><strong>زمان برگزاری:</strong> ' . htmlspecialchars($program['program_hours'], ENT_QUOTES, 'UTF-8') . '</p>';
                echo '<p><strong>مدت دوره:</strong> ' . htmlspecialchars($program['program_duration'], ENT_QUOTES, 'UTF-8') . ' ماه</p>';
                echo '<p><strong>قیمت دوره:</strong> ' . number_format($program['program_price']) . ' تومان</p>';
                echo '</div>';

                // دکمه ویرایش و حذف
                echo '<a href="edit_program.php?id=' . $program['id'] . '" class="btn-edit">ویرایش</a>';
                echo '<button class="btn-delete" onclick="confirmDelete(' . $program['id'] . ')">حذف</button>';

                echo '</div></div></div>';
            }
            echo '</div>';
        } else {
            echo '<p class="text-danger text-center">هیچ برنامه‌ای ' . ($isCodeSearch ? 'با این کد' : 'با این نام') . ' پیدا نشد.</p>';
        }
    } catch (PDOException $e) {
        echo '<p class="text-danger">خطای پایگاه داده: ' . htmlspecialchars($e->getMessage(), ENT_QUOTES, 'UTF-8') . '</p>';
    }
} else {
    echo '<p class="text-danger">درخواست نامعتبر است.</p>';
}
?>

<script>
    function toggleDetails(card) {
        var details = card.querySelector(".program-details");
        details.style.display = (details.style.display === "none" || details.style.display === "") ? "block" : "none";
    }

    function confirmDelete(programId) {
        if (confirm("آیا از حذف این برنامه اطمینان دارید؟")) {
            window.location.href = "delete_program.php?id=" + programId;
        }
    }
</script>
