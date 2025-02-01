<?php
// اتصال به پایگاه داده
include('../database/db.php');

if (isset($_GET['field_id'])) {
    $field_id = $_GET['field_id'];

    try {
        // حذف رشته از دیتابیس
        $stmt = $conn->prepare("DELETE FROM fields WHERE id = :id");
        $stmt->bindParam(':id', $field_id);
        $stmt->execute();

        header("Location: major.php?message=رشته با موفقیت حذف شد");
        exit();
    } catch (PDOException $e) {
        echo "خطا در حذف رشته: " . $e->getMessage();
    }
} else {
    echo "شناسه رشته مشخص نشده است.";
    exit();
}
?>
