<?php
// اتصال به پایگاه داده
include('../database/db.php');

if (isset($_GET['id'])) {
    $programId = $_GET['id'];

    try {
        // حذف برنامه از پایگاه داده
        $stmt = $conn->prepare("DELETE FROM programs WHERE id = :programId");
        $stmt->bindParam(':programId', $programId);
        $stmt->execute();

        echo "برنامه با موفقیت حذف شد.";
        // انتقال به صفحه اصلی یا نمایش پیامی که برنامه حذف شده است
        header('Location: view_programs.php?field_id=1');
        exit();
    } catch (PDOException $e) {
        echo "خطا در حذف برنامه: " . $e->getMessage();
    }
} else {
    echo "شناسه برنامه معتبر نیست.";
}
?>
