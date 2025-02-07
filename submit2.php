<?php
require_once './database/db.php'; // اتصال به پایگاه داده

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // دریافت داده‌ها از فرم و پاکسازی ورودی‌ها
        $name = htmlspecialchars(trim($_POST['name']), ENT_QUOTES, 'UTF-8');
        $family = htmlspecialchars(trim($_POST['family']), ENT_QUOTES, 'UTF-8');
        $phone = htmlspecialchars(trim($_POST['phone']), ENT_QUOTES, 'UTF-8');
        $national_id = isset($_POST['national_id']) ? htmlspecialchars(trim($_POST['national_id']), ENT_QUOTES, 'UTF-8') : null;
        $course_name = htmlspecialchars(trim($_POST['course_name']), ENT_QUOTES, 'UTF-8');
        $course_code = htmlspecialchars(trim($_POST['course_code']), ENT_QUOTES, 'UTF-8'); // دریافت کد دوره

        // بررسی صحت شماره تلفن (شماره تلفن باید دقیقا 11 رقم باشد)
        if (!preg_match('/^\d{11}$/', $phone)) {
            echo json_encode([
                'status' => 'error',
                'message' => 'شماره تلفن باید دقیقا 11 رقم باشد.'
            ]);
            exit();
        }

        // بررسی صحت کد ملی (اختیاری: اگر وارد شده باشد باید عدد باشد)
        if ($national_id && !preg_match('/^\d{10}$/', $national_id)) {
            echo json_encode([
                'status' => 'error',
                'message' => 'کد ملی وارد شده معتبر نیست.'
            ]);
            exit();
        }

        // بررسی اینکه آیا شماره تلفن برای همین کد دوره ثبت شده است یا نه
        $stmt = $conn->prepare("SELECT id FROM course_registrations WHERE phone = :phone AND course_code = :course_code");
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':course_code', $course_code);
        $stmt->execute();
        $existing_registration = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($existing_registration) {
            // اگر شماره تلفن برای همین کد دوره ثبت شده باشد، خطا
            echo json_encode([
                'status' => 'error',
                'message' => 'شما قبلاً برای این دوره با این شماره تلفن ثبت‌نام کرده‌اید.'
            ]);
        } else {
            // اگر برای همین کد دوره ثبت نشده باشد یا اصلاً ثبت نشده باشد، ثبت‌نام انجام می‌شود
            $stmt = $conn->prepare("INSERT INTO course_registrations (name, family, phone, national_id, course_name, course_code) 
                                    VALUES (:name, :family, :phone, :national_id, :course_name, :course_code)");

            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':family', $family);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':national_id', $national_id);
            $stmt->bindParam(':course_name', $course_name);
            $stmt->bindParam(':course_code', $course_code);

            $stmt->execute();

            echo json_encode([
                'status' => 'success',
                'message' => 'ثبت‌نام شما با موفقیت انجام شد! شما هم اکنون برای دوره ' . $course_name . ' ثبت‌نام کرده‌اید.'
            ]);
        }

    } catch (PDOException $e) {
        echo json_encode([
            'status' => 'error',
            'message' => 'خطا در ثبت‌نام: ' . $e->getMessage()
        ]);
    }
}
?>
