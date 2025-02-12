<?php
// اتصال به پایگاه داده
include('../database/db.php');

if (isset($_GET['id'])) {
    $courseId = $_GET['id'];

    try {
        // ابتدا دریافت مسیر تصویر دوره از پایگاه داده
        $stmt = $conn->prepare("SELECT course_image FROM courses WHERE id = :courseId");
        $stmt->bindParam(':courseId', $courseId);
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
            $stmt->bindParam(':courseId', $courseId);
            $stmt->execute();

            echo "دوره با موفقیت حذف شد.";
            // انتقال به صفحه اصلی یا نمایش پیامی که دوره حذف شده است
            header('Location: all_course.php');
            exit();
        } else {
            echo "دوره یافت نشد.";
        }
    } catch (PDOException $e) {
        echo "خطا در حذف دوره: " . $e->getMessage();
    }
} else {
    echo "شناسه دوره معتبر نیست.";
}
?>
