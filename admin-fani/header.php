<!-- header.php -->
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>پنل ادمین فنی حرفه ای</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        /* استایل هدر */
        .header {
            background: linear-gradient(to right, #00aaff, #0066cc);
            color: #fff;
            padding: 40px 0;
            text-align: center;
            font-size: 2.8rem;
            font-weight: 700;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            border-radius: 10px 10px 0 0;
            margin-bottom: 20px;
        }

        .navbar {
            background-color: #34495e;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        .navbar-brand {
            font-size: 1.8rem;
            font-weight: 700;
            color: #ecf0f1;
            padding: 5px 15px;
        }

        .navbar-nav .nav-item .nav-link {
            font-size: 1.2rem;
            color: #ecf0f1;
            padding: 15px 25px;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        .navbar-nav .nav-item .nav-link:hover {
            background-color: #2980b9;
            color: #fff;
        }

        .dropdown-menu {
            background-color: #34495e;
            border-radius: 8px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        .dropdown-item {
            font-size: 1.1rem;
            color: #ecf0f1;
            padding: 12px 20px;
            border-radius: 4px;
            transition: background-color 0.3s, color 0.3s;
        }

        .dropdown-item:hover {
            background-color: #2980b9;
            color: #fff;
        }

        .navbar-toggler {
            border-color: #ecf0f1;
        }

        .navbar-toggler-icon {
            background-color: #ecf0f1;
        }

        .container {
            margin-top: 50px;
        }

        h1 {
            font-size: 2.5rem;
            color: #34495e;
            text-align: center;
            margin-bottom: 40px;
            font-weight: 700;
            letter-spacing: 1px;
        }

        /* تنظیمات دکمه‌های مختلف */
        .btn-primary {
            background-color: #00aaff;
            border: none;
            padding: 10px 20px;
            font-size: 1.2rem;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #0066cc;
        }

        /* پس‌زمینه متفاوت برای منو */
        .navbar-nav .nav-item {
            margin-right: 10px;
        }
    </style>
</head>
<body>

    <!-- هدر -->
    <div class="header">
        پنل ادمین فنی حرفه ای
    </div>

    <!-- ناوبری اصلی -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link mx-5" href="./index.php" id="homeDropdown" role="button">
                            خانه
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-5" href="./register.php" id="homeDropdown" role="button">
                           پیش ثبت نام ها  
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-5" href="../admin/index.php" id="homeDropdown" role="button">
                            پنل آموزشگاه رسانه
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle mx-5" href="#" id="majorsDropdown" role="button" data-bs-toggle="dropdown">
                            رشته‌ها
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="majorsDropdown">
                            <li><a class="dropdown-item" href="add_major.php">افزودن رشته</a></li>
                            <li><a class="dropdown-item" href="major.php">مشاهده رشته‌ها</a></li>
                        </ul>
                    </li>
                  
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="coursesDropdown" role="button" data-bs-toggle="dropdown">
                            دوره‌ها
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="coursesDropdown">
                            <li><a class="dropdown-item" href="add_course.php">افزودن دوره</a></li>
                            <li><a class="dropdown-item" href="all_programs.php">مشاهده دوره‌ها</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


</body>
</html>
