<?php
include('../database/db.php');

if (isset($_GET['id'])) {
    $courseId = $_GET['id'];

    try {
        // ابتدا اطلاعات دوره را دریافت کنیم تا تصویر آن را پیدا کنیم
        $stmt = $conn->prepare("SELECT course_image FROM courses WHERE id = :courseId");
        $stmt->bindParam(':courseId', $courseId, PDO::PARAM_INT);
        $stmt->execute();
        $course = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($course) {
            // حذف تصویر دوره اگر موجود باشد
            if ($course['course_image'] && file_exists('../' . $course['course_image'])) {
                unlink('../' . $course['course_image']); // حذف تصویر
            }

            // حذف دوره از پایگاه داده
            $stmt = $conn->prepare("DELETE FROM courses WHERE id = :courseId");
            $stmt->bindParam(':courseId', $courseId, PDO::PARAM_INT);

            if ($stmt->execute()) {
                echo "<script>alert('دوره با موفقیت حذف شد!'); window.location.href='index.php';</script>";
            } else {
                echo "<script>alert('خطا در حذف دوره!'); window.history.back();</script>";
            }
        } else {
            echo "<script>alert('دوره یافت نشد!'); window.history.back();</script>";
        }
    } catch (PDOException $e) {
        echo "<script>alert('خطا در حذف دوره: " . $e->getMessage() . "'); window.history.back();</script>";
    }
} else {
    echo "<script>alert('شناسه دوره نامعتبر است!'); window.history.back();</script>";
}
?>
