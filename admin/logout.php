<?php
session_start();
session_unset();  // پاک کردن تمام داده‌های سشن
session_destroy();  // خاتمه دادن به سشن

// هدایت به صفحه ورود
header("Location: login.php");
exit();
?>
