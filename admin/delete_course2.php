<?php
// اتصال به پایگاه داده
include('../database/db.php');

if (isset($_GET['id'])) {
    $courseId = $_GET['id'];

    try {
        // حذف دوره از پایگاه داده
        $stmt = $conn->prepare("DELETE FROM courses WHERE id = :courseId");
        $stmt->bindParam(':courseId', $courseId);
        $stmt->execute();

        echo "دوره با موفقیت حذف شد.";
        // انتقال به صفحه اصلی یا نمایش پیامی که دوره حذف شده است
        header('Location: all_course.php');
        exit();
    } catch (PDOException $e) {
        echo "خطا در حذف دوره: " . $e->getMessage();
    }
} else {
    echo "شناسه دوره معتبر نیست.";
}
?>
