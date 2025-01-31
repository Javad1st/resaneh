<?php
// اتصال به پایگاه داده
include('../database/db.php');

// بررسی اینکه آیا شناسه برنامه (program_id) ارسال شده است یا نه
if (isset($_GET['id'])) {
    $program_id = $_GET['id'];

    try {
        // ابتدا دریافت شناسه رشته (major_id) مربوط به این برنامه
        $stmt = $conn->prepare("SELECT field_id FROM programs WHERE id = :program_id");
        $stmt->bindParam(':program_id', $program_id, PDO::PARAM_INT);
        $stmt->execute();
        $program = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($program) {
            // حذف برنامه از جدول programs
            $stmt = $conn->prepare("DELETE FROM programs WHERE id = :program_id");
            $stmt->bindParam(':program_id', $program_id, PDO::PARAM_INT);

            if ($stmt->execute()) {
                // هدایت به صفحه برنامه‌های رشته (major_id) پس از موفقیت در حذف
                header("Location: view_programs.php?major_id=" . $program['major_id']);
                exit();
            } else {
                // در صورت بروز خطا در حذف، نمایش پیام خطا
                header("Location: view_programs.php?error=خطا در حذف برنامه");
                exit();
            }
        } else {
            // در صورتی که برنامه یافت نشد
            echo "برنامه یافت نشد.";
        }
    } catch (PDOException $e) {
        // نمایش خطای پایگاه داده در صورت بروز مشکل
        echo "خطا در حذف برنامه: " . $e->getMessage();
    }
} else {
    // در صورتی که شناسه برنامه ارسال نشده باشد
    echo "شناسه برنامه ارسال نشده است.";
}
?>
