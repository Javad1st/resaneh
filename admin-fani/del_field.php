<?php
// اتصال به پایگاه داده
include('../database/db.php');

if (isset($_GET['field_id'])) {
    $field_id = $_GET['field_id'];

    try {
        // ابتدا دریافت مسیر تصویر رشته
        $stmt = $conn->prepare("SELECT field_image FROM fields WHERE id = :id");
        $stmt->bindParam(':id', $field_id);
        $stmt->execute();
        $field = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($field) {
            // مسیر تصویر رشته
            $imagePath = $field['field_image'];

            // اگر تصویر وجود داشته باشد، آن را حذف کنید
            if ($imagePath && file_exists('../' . $imagePath)) {
                unlink('../' . $imagePath);
            }

            // حذف رشته از دیتابیس
            $stmt = $conn->prepare("DELETE FROM fields WHERE id = :id");
            $stmt->bindParam(':id', $field_id);
            $stmt->execute();

            header("Location: major.php?message=رشته با موفقیت حذف شد");
            exit();
        } else {
            // در صورتی که رشته یافت نشد
            echo "رشته یافت نشد.";
            exit();
        }
    } catch (PDOException $e) {
        // نمایش خطای پایگاه داده در صورت بروز مشکل
        echo "خطا در حذف رشته: " . $e->getMessage();
    }
} else {
    echo "شناسه رشته مشخص نشده است.";
    exit();
}
?>
