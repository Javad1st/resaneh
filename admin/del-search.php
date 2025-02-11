<?php
include('../database/db.php');

if (isset($_GET['id'])) {
    $courseId = $_GET['id'];

    // اجرای حذف از دیتابیس
    $stmt = $conn->prepare("DELETE FROM courses WHERE id = :courseId");
    $stmt->bindParam(':courseId', $courseId, PDO::PARAM_INT);

    if ($stmt->execute()) {
        echo "<script>alert('دوره با موفقیت حذف شد!'); window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('خطا در حذف دوره!'); window.history.back();</script>";
    }
} else {
    echo "<script>alert('شناسه دوره نامعتبر است!'); window.history.back();</script>";
}
?>
