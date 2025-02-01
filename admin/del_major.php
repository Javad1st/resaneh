<?php
include('../database/db.php');

if (isset($_GET['major_id'])) {
    $major_id = $_GET['major_id'];

    try {
        // ابتدا تمام دوره‌های مرتبط را حذف کن
        $stmt = $conn->prepare("DELETE FROM courses WHERE major_id = ?");
        $stmt->execute([$major_id]);

        // سپس رشته را حذف کن
        $stmt = $conn->prepare("DELETE FROM majors WHERE id = ?");
        $stmt->execute([$major_id]);

        header("Location: major.php?success=رشته با موفقیت حذف شد");
        exit;
    } catch (PDOException $e) {
        header("Location: major.php?error=خطا در حذف رشته: " . $e->getMessage());
        exit;
    }
} else {
    header("Location: major.php?error=شناسه رشته نامعتبر است");
    exit;
}
