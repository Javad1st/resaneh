<?php
// شامل کردن فایل هدر
require 'header.php';
?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>پنل ادمین</title>
    <style>

        .course-card {
            position: relative;
            border-radius: 15px;
            overflow: hidden;
            transition: all 0.4s ease;
            cursor: pointer;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            background: linear-gradient(145deg, #e0e0e0, #ffffff);
            border: 1px solid #ddd;
        }

        .course-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            background: linear-gradient(145deg, #007bff, #0056b3);
            color: #fff;
        }

        .course-card .card-body {
            padding: 20px;
            position: relative;
            z-index: 1;
        }

        .card-title {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 10px;
            color: #495057;
            transition: color 0.3s ease;
        }

        .card-text {
            font-size: 1rem;
            color: #495057;
            line-height: 1.6;
            margin-bottom: 20px;
            transition: color 0.3s ease;
        }

        .course-card:hover .card-title,
        .course-card:hover .card-text {
            color: #fff;
        }

        .btn-more {
            display: inline-block;
            background-color: #007bff;
            color: white;
            font-size: 1rem;
            padding: 12px 18px;
            border: none;
            border-radius: 25px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .btn-more:hover {
            background-color: #0056b3;
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .course-details {
            display: none;
            margin-top: 15px;
            background-color: rgba(255, 255, 255, 0.95);
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
        }

        .show-details .course-details {
            display: block;
        }

        .course-details p {
            font-size: 1rem;
            color: #212529;
            margin-bottom: 12px;
        }

        .course-details strong {
            color: #007bff;
        }

        .container {
            max-width: 1200px;
        }

        .row {
            margin-top: 20px;
        }

        .col-md-4 {
            transition: all 0.3s ease;
        }

        .col-md-4:hover {
            transform: scale(1.05);
        }

        .btn-edit, .btn-delete {
            display: inline-block;
            background-color: #f39c12;
            color: white;
            font-size: 1rem;
            padding: 8px 12px;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            margin-top: 10px;
            transition: 0.3s ease;
        }

        .btn-edit:hover {
            background-color: #e67e22;
        }

        .btn-delete {
            background-color: #e74c3c;
        }

        .btn-delete:hover {
            background-color: #c0392b;
        }

        /* استایل مودال */
        .modal-content {
            border-radius: 12px;
        }
    </style>
    
    <!-- لینک به CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJ6v5o6jGfuWj-5Q+6p7nx4PX6d+GFMzj5zmCv1Y5P3I/Nyft0t7pPrh/P6m" crossorigin="anonymous">
    
    <!-- لینک به jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- لینک به JavaScript Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
<div class="container mt-5">
    <div class="card shadow-lg p-4">
        <h1 class="text-center text-primary mb-4">خوش آمدید به پنل ادمین</h1>
        <p class="text-center text-muted">از اینجا می‌توانید دوره‌ها و رشته‌ها را مدیریت کنید.</p>
        
        <!-- فرم جستجو -->
        <div class="input-group mb-3">
            <input type="text" class="form-control form-control-lg border-primary" id="search" placeholder="نام دوره را وارد کنید" aria-label="Search" aria-describedby="search-icon">
        </div>

        <!-- نمایش نتایج جستجو -->
        <div id="searchResults" class="mt-3 row"></div> <!-- اضافه کردن کلاس row برای چیدمان به صورت ردیفی -->
    </div>
</div>

<script>
    $(document).ready(function() {
        // اجرای جستجو با هر حرف تایپ شده
        $('#search').on('keyup', function() {
            var query = $(this).val().trim();  // دریافت داده جستجو از کادر متنی
            if (query.length > 0) {
                $.ajax({
                    url: 'search.php',  // درخواست به فایل PHP
                    method: 'POST',  // ارسال داده‌ها با متد POST
                    data: { search: query },  // ارسال داده جستجو
                    dataType: 'html',  // نوع داده دریافتی از سرور
                    success: function(data) {
                        $('#searchResults').html(data);  // نمایش نتایج جستجو در div
                    },
                    error: function() {
                        $('#searchResults').html('<p class="text-danger">خطا در دریافت نتایج</p>');
                    }
                });
            } else {
                $('#searchResults').html('');  // اگر جستجو خالی باشد، نتایج را پاک می‌کنیم
            }
        });
    });

   
</script>
<!-- مودال تایید حذف -->
<div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-danger" id="confirmDeleteModalLabel">حذف دوره</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                آیا مطمئن هستید که می‌خواهید این دوره را حذف کنید؟
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">انصراف</button>
                <a id="confirmDeleteBtn" class="btn btn-danger">حذف</a>
            </div>
        </div>
    </div>
</div>

<script>
    function confirmDelete(courseId) {
        // نمایش مودال تایید حذف
        var modal = new bootstrap.Modal(document.getElementById('confirmDeleteModal'));
        modal.show();

        // تغییر لینک حذف
        document.getElementById('confirmDeleteBtn').href = "del-search.php?id=" + courseId;
    }
</script>
<script>
    $(document).ready(function() {
        $('#search').on('input', function() {
            var inputVal = $(this).val().trim();

            if (inputVal.startsWith("#")) {
                $(this).css({"direction": "ltr", "text-align": "left"});
            } else if (/^[A-Za-z0-9\s]+$/.test(inputVal)) {
                $(this).css({"direction": "ltr", "text-align": "left"});
            } else {
                $(this).css({"direction": "rtl", "text-align": "right"});
            }
        });

        // اجرای جستجو با هر حرف تایپ شده
        $('#search').on('keyup', function() {
            var query = $(this).val().trim();  
            if (query.length > 0) {
                $.ajax({
                    url: 'search.php',
                    method: 'POST',
                    data: { search: query },
                    dataType: 'html',
                    success: function(data) {
                        $('#searchResults').html(data);
                    },
                    error: function() {
                        $('#searchResults').html('<p class="text-danger">خطا در دریافت نتایج</p>');
                    }
                });
            } else {
                $('#searchResults').html('');
            }
        });
    });
</script>

</body>
</html>
