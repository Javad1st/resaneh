    
    <?php
    // پردازش فرم در add_major_process.php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        include('../database/db.php');
        $major_name = htmlspecialchars($_POST['major_name'], ENT_QUOTES, 'UTF-8');
        
        // پردازش و ذخیره تصویر
        $target_dir = "../uploads/";
        $target_file = $target_dir . basename($_FILES["major_image"]["name"]);
        move_uploaded_file($_FILES["major_image"]["tmp_name"], $target_file);
        
        try {
            $stmt = $conn->prepare("INSERT INTO majors (major_name, major_image) VALUES (:major_name, :major_image)");
            $stmt->bindParam(':major_name', $major_name);
            $stmt->bindParam(':major_image', $target_file);
            $stmt->execute();
            header("Location: add_major.php");
            exit();
        } catch (PDOException $e) {
            header("Location: add_major.php?error=" . urlencode("خطا در افزودن رشته"));
            exit();
        }
    }
    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
