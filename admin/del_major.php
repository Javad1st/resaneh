<?php
include('../database/db.php');

if (isset($_GET['major_id'])) {
    $major_id = $_GET['major_id'];

    try {
        // ابتدا اطلاعات رشته را دریافت کنیم تا تصویر آن را پیدا کنیم
        $stmt = $conn->prepare("SELECT major_image FROM majors WHERE id = :major_id");
        $stmt->bindParam(':major_id', $major_id, PDO::PARAM_INT);
        $stmt->execute();
        $major = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($major) {
            // حذف تصویر رشته اگر موجود باشد
            if ($major['major_image'] && file_exists('../' . $major['major_image'])) {
                unlink('../' . $major['major_image']); // حذف تصویر
            }

            // حذف تمام دوره‌های مرتبط با رشته
            $stmt = $conn->prepare("DELETE FROM courses WHERE major_id = ?");
            $stmt->execute([$major_id]);

            // سپس رشته را حذف کن
            $stmt = $conn->prepare("DELETE FROM majors WHERE id = ?");
            $stmt->execute([$major_id]);

            // هدایت به صفحه رشته‌ها با پیغام موفقیت
            header("Location: major.php?success=" . urlencode("رشته با موفقیت حذف شد"));
            exit;
        } else {
            // در صورتی که رشته پیدا نشود
            header("Location: major.php?error=" . urlencode("رشته یافت نشد"));
            exit;
        }
    } catch (PDOException $e) {
        // در صورت بروز خطا در حذف، هدایت به صفحه رشته‌ها با پیغام خطا
        header("Location: major.php?error=" . urlencode("خطا در حذف رشته: " . $e->getMessage()));
        exit;
    }
} else {
    // در صورتی که شناسه رشته ارسال نشده باشد
    header("Location: major.php?error=" . urlencode("شناسه رشته نامعتبر است"));
    exit;
}
?>
