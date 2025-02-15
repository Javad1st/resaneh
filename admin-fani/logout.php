<?php
session_start();

// پایان دادن به سشن
session_unset();
session_destroy();

// هدایت به صفحه ورود
header('Location: login.php');
exit();
?>
