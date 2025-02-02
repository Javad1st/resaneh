<?php
    // پردازش فرم در add_field_process.php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        include('../database/db.php');
        $field_name = htmlspecialchars($_POST['field_name'], ENT_QUOTES, 'UTF-8');
        
        // پردازش و ذخیره تصویر
        $target_dir = "../uploads2/";
        $target_file = $target_dir . basename($_FILES["field_image"]["name"]);
        move_uploaded_file($_FILES["field_image"]["tmp_name"], $target_file);
        
        try {
            $stmt = $conn->prepare("INSERT INTO fields (field_name, field_image) VALUES (:field_name, :field_image)");
            $stmt->bindParam(':field_name', $field_name);
            $stmt->bindParam(':field_image', $target_file);
            $stmt->execute();
            header("Location: add_major.php");
            exit();
        } catch (PDOException $e) {
            header("Location: add_major.php?error=" . urlencode("خطا در افزودن رشته"));
            exit();
        }
    }
    ?>
    