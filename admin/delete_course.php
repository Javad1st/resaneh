<?php
// اتصال به پایگاه داده
include('../database/db.php');

if (isset($_GET['course_id']) && is_numeric($_GET['course_id'])) {
    $courseId = $_GET['course_id'];

    try {
        // ابتدا دریافت مسیر تصویر دوره از پایگاه داده
        $stmt = $conn->prepare("SELECT course_image FROM courses WHERE id = :courseId");
        $stmt->bindParam(':courseId', $courseId, PDO::PARAM_INT);
        $stmt->execute();
        $course = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($course) {
            // حذف تصویر دوره از سرور
            $imagePath = '../' . $course['course_image'];
            if (file_exists($imagePath)) {
                unlink($imagePath); // حذف فایل تصویر
            }

            // حذف دوره از پایگاه داده
            $stmt = $conn->prepare("DELETE FROM courses WHERE id = :courseId");
            $stmt->bindParam(':courseId', $courseId, PDO::PARAM_INT);

            if ($stmt->execute()) {
                // هدایت به صفحه اصلی پس از موفقیت
                echo "<script>alert('دوره با موفقیت حذف شد!'); window.location.href='index.php';</script>";
            } else {
                echo "<script>alert('خطا در حذف دوره!'); window.history.back();</script>";
            }
        } else {
            echo "<script>alert('دوره یافت نشد!'); window.history.back();</script>";
        }
    } catch (PDOException $e) {
        echo "خطا در حذف دوره: " . $e->getMessage();
    }
} else {
    echo "<script>alert('شناسه دوره نامعتبر است!'); window.history.back();</script>";
}
?>
