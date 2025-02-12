<?php
// اتصال به پایگاه داده
include('../database/db.php');

try {
    if (isset($_GET['id'])) {
        $course_id = $_GET['id'];

        // دریافت مسیر تصویر دوره
        $stmt = $conn->prepare("SELECT program_image FROM programs WHERE id = :id");
        $stmt->bindParam(':id', $course_id, PDO::PARAM_INT);
        $stmt->execute();
        $course = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($course) {
            // مسیر تصویر دوره
            $imagePath = $course['program_image'];

            // اگر تصویر وجود داشته باشد، آن را حذف کنید
            if ($imagePath && file_exists('../' . $imagePath)) {
                unlink('../' . $imagePath);
            }

            // حذف دوره از پایگاه داده
            $stmt = $conn->prepare("DELETE FROM programs WHERE id = :id");
            $stmt->bindParam(':id', $course_id, PDO::PARAM_INT);
            $stmt->execute();

            // هدایت به صفحه اصلی با پیغام موفقیت
            header("Location: view_programs.php?success=1");
            exit();
        } else {
            echo "دوره‌ای با این شناسه یافت نشد.";
        }
    } else {
        echo "دوره‌ای برای حذف انتخاب نشده است.";
    }
} catch (PDOException $e) {
    echo "خطا در حذف دوره: " . $e->getMessage();
}
?>
