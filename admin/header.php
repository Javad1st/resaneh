<!-- header.php -->
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>پنل ادمین</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
     

        /* هدر جداگانه */
        .header {
            background-color: #2c3e50;
            color: #ecf0f1;
            padding: 20px 0;
            text-align: center;
            font-size: 2rem;
            font-weight: 700;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .navbar {
            background-color: #34495e;
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: 700;
            color: #ecf0f1;
        }

        .navbar-nav .nav-item .nav-link {
            font-size: 1.1rem;
            color: #ecf0f1;
            padding: 10px 20px;
            transition: background-color 0.3s;
        }

        .navbar-nav .nav-item .nav-link:hover {
            background-color: #2980b9;
            color: #fff;
        }

        .dropdown-menu {
            background-color: #34495e;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .dropdown-item {
            font-size: 1rem;
            color: #ecf0f1;
            padding: 12px 20px;
            transition: background-color 0.3s;
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
            font-size: 2rem;
            color: #2c3e50;
            text-align: center;
            margin-bottom: 30px;
            font-weight: 700;
        }
    </style>
</head>
<body>

    <!-- هدر جداگانه -->
    <div class="header">
        پنل ادمین
    </div>

    <!-- ناوبری اصلی -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link mx-5" href="./index.php" id="majorsDropdown" role="button">
                           خانه 
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link mx-5" href="../admin-fani/index.php" id="majorsDropdown" role="button">
                           پنل فنی حرفه ای 
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
                            <li><a class="dropdown-item" href="all_course.php">مشاهده دوره‌ها</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
