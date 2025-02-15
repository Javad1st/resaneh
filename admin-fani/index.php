<?php
session_start();
// شامل کردن فایل هدر
require 'header.php';
?>

<div class="container mt-5">
    <div class="card shadow-lg p-4">
        <h1 class="text-center text-primary mb-4">خوش آمدید به پنل ادمین فنی حرفه‌ای</h1>
        <p class="text-center text-muted">از اینجا می‌توانید دوره‌ها و رشته‌ها را مدیریت کنید.</p>

        <!-- فرم جستجو -->
        <div class="input-group mb-3">
            <input type="text" class="form-control form-control-lg border-primary" id="search" placeholder="نام دوره را وارد کنید" aria-label="Search" aria-describedby="search-icon" oninput="adjustTextDirection(this)">
        </div>

        <!-- نمایش نتایج جستجو -->
        <div id="searchResults" class="mt-3"></div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
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

    // تابع برای تنظیم جهت متن ورودی
    function adjustTextDirection(input) {
        const value = input.value;
        // اگر متن شامل حروف فارسی باشد، متن به راست‌چین تغییر کند
        if (/[\u0600-\u06FF]/.test(value)) {
            input.style.direction = 'rtl';
            input.style.textAlign = 'right';
        } else {
            input.style.direction = 'ltr';
            input.style.textAlign = 'left';
        }
    }
</script>
<style>
        .program-card { position: relative; border-radius: 15px; overflow: hidden; transition: all 0.4s ease; cursor: pointer;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1); background: linear-gradient(145deg, #e0e0e0, #ffffff); border: 1px solid #ddd; }
        .program-card:hover { transform: translateY(-15px); box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            background: linear-gradient(145deg, #007bff, #0056b3);  }
        .program-card .card-body { padding: 20px; position: relative; z-index: 1; }
        .card-title { font-size: 1.3rem; font-weight: 600; margin-bottom: 10px; color: #495057; transition: color 0.3s ease; }
        .card-text { font-size: 1rem; color: #495057; line-height: 1.6; margin-bottom: 20px; transition: color 0.3s ease; }
        .program-card:hover .card-title, .program-card:hover .card-text { color: #fff; }
        .btn-more { display: inline-block; background-color: #007bff; color: white; font-size: 1rem; padding: 12px 18px;
            border: none; border-radius: 25px; transition: all 0.3s ease; }
        .btn-more:hover { background-color: #0056b3; transform: translateY(-3px); }
        .program-details { display: none; margin-top: 15px; background-color: rgba(255, 255, 255, 0.95);
            padding: 20px; border-radius: 12px; box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1); }
        .show-details .program-details { display: block; }
        /* استایل دکمه‌های ویرایش و حذف */
.btn-edit, .btn-delete {
    display: inline-block;
    padding: 8px 16px;
    margin-right: 10px;
    margin-top: 10px;
    font-size: 1rem;
    font-weight: bold;
    border-radius: 5px;
    text-align: center;
    text-decoration: none;
    transition: all 0.3s ease;
}

/* استایل برای دکمه ویرایش */
.btn-edit {
    background-color: #28a745;
    color: white;
    border: none;
    margin-right: 10px;
}

.btn-edit:hover {
    background-color: #218838;
    transform: translateY(-3px);
}

/* استایل برای دکمه حذف */
.btn-delete {
    background-color: #dc3545;
    color: white;
    border: none;
}

.btn-delete:hover {
    background-color: #c82333;
    transform: translateY(-3px);
}

    </style>
</body>
</html>
