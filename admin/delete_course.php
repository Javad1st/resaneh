<?php
// اتصال به پایگاه داده
include('../database/db.php');

if (isset($_GET['id'])) {
    $programId = $_GET['id'];

    try {
        // ابتدا دریافت شناسه رشته مربوط به این برنامه
        $stmt = $conn->prepare("SELECT major_id FROM programs WHERE id = :programId");
        $stmt->bindParam(':programId', $programId, PDO::PARAM_INT);
        $stmt->execute();
        $program = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($program) {
            // حذف برنامه از پایگاه داده
            $stmt = $conn->prepare("DELETE FROM programs WHERE id = :programId");
            $stmt->bindParam(':programId', $programId, PDO::PARAM_INT);

            if ($stmt->execute()) {
                // پس از حذف، هدایت به صفحه رشته با استفاده از major_id
                header("Location: view_programs.php?field_id=" . $program['major_id']);
                exit();
            } else {
                // نمایش خطا در صورت عدم موفقیت
                header("Location: view_programs.php?error=خطا در حذف برنامه");
                exit();
            }
        } else {
            echo "برنامه یافت نشد.";
        }
    } catch (PDOException $e) {
        echo "خطا در حذف برنامه: " . $e->getMessage();
    }
} else {
    echo "شناسه برنامه ارسال نشده است.";
}
?>
