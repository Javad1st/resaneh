<?php
require_once './database/db.php'; // اتصال به پایگاه داده

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // دریافت داده‌ها از فرم
        $name = $_POST['name'] ?? '';
        $family = $_POST['family'] ?? '';
        $phone = $_POST['phone'] ?? '';
        $national_id = $_POST['national_id'] ?? '';
        $course_name = $_POST['course_name'] ?? ''; // دریافت نام دوره
        $course_code = $_POST['course_code'] ?? ''; // دریافت کد دوره

        // بررسی اینکه آیا شماره تلفن برای همین کد دوره ثبت شده است یا نه
        $stmt = $conn->prepare("SELECT id FROM pre_registration WHERE phone = :phone AND course_code = :course_code");
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':course_code', $course_code);
        $stmt->execute();
        $existing_registration = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($existing_registration) {
            // اگر شماره تلفن برای همین کد دوره باشد، خطا
            echo json_encode([
                'status' => 'error',
                'message' => 'شما قبلاً برای این دوره با این شماره تلفن ثبت‌نام کرده‌اید.'
            ]);
        } else {
            // اگر برای همین شماره تلفن کد دوره متفاوت باشد یا اصلاً ثبت نشده باشد، ثبت‌نام انجام می‌شود
            $stmt = $conn->prepare("INSERT INTO pre_registration (name, family, phone, national_id, course_name, course_code) 
                                    VALUES (:name, :family, :phone, :national_id, :course_name, :course_code)");

            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':family', $family);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':national_id', $national_id);
            $stmt->bindParam(':course_name', $course_name); // ارسال اسم دوره
            $stmt->bindParam(':course_code', $course_code); // ارسال کد دوره

            $stmt->execute();

            echo json_encode([
                'status' => 'success',
                'message' => 'ثبت‌نام شما با موفقیت انجام شد!'
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
