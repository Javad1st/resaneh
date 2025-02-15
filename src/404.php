<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحه یافت نشد</title>
<style>
    /* Reset the default margin and padding */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body styles */
body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f9;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    color: #333;
    text-align: center;
}

/* Main container for the page */
.container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
    padding: 20px;
}

/* Error box styling */
.error-box {
    background-color: #fff;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    text-align: center;
    max-width: 400px;
    width: 100%;
}

/* Error code styling */
.error-code {
    font-size: 80px;
    color: #e74c3c;
    font-weight: bold;
}

/* Error message styling */
.error-message {
    font-size: 18px;
    margin: 20px 0;
    color: #555;
}

/* Back to home button styling */
.back-home {
    font-size: 16px;
    color: #fff;
    background-color: #3498db;
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

/* Hover effect for the button */
.back-home:hover {
    background-color: #2980b9;
}

/* Mobile responsiveness */
@media (max-width: 768px) {
    .error-box {
        padding: 30px;
    }

    .error-code {
        font-size: 60px;
    }

    .error-message {
        font-size: 16px;
    }
}

</style>
</head>
<body>
    <div class="container">
        <div class="error-box">
            <h1 class="error-code">۴۰۴</h1>
            <p class="error-message">متاسفانه، صفحه‌ای که درخواست کردید وجود ندارد.</p>
            <a href="/" class="back-home">بازگشت به صفحه اصلی</a>
        </div>
    </div>
</body>
</html>
