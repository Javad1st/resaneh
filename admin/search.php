<?php
// اتصال به پایگاه داده
include('../database/db.php');

if (isset($_POST['search'])) {
    $searchInput = trim($_POST['search']); // حذف فاصله‌های اضافی از ابتدا و انتها
    $isCodeSearch = false; // متغیر برای تشخیص نوع جستجو

    // بررسی اینکه مقدار وارد شده با `#` شروع شده باشد
    if (strpos($searchInput, "#") === 0) {
        $searchQuery = "%" . substr($searchInput, 1) . "%"; // حذف `#` از ابتدای مقدار
        $stmt = $conn->prepare("SELECT * FROM courses WHERE course_code LIKE :searchQuery");
        $isCodeSearch = true;
    } else {
        $searchQuery = "%" . $searchInput . "%"; // جستجو بر اساس نام دوره
        $stmt = $conn->prepare("SELECT * FROM courses WHERE course_name LIKE :searchQuery");
    }

    $stmt->bindParam(':searchQuery', $searchQuery, PDO::PARAM_STR);
    $stmt->execute();
    $courses = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (!empty($courses)) {
        foreach ($courses as $course) {
            echo '
            <div class="col-md-4 mb-4">
                <div class="card course-card">
                    <div class="card-body">
                        <h5 class="card-title">' . htmlspecialchars($course['course_name']) . '</h5>
                        <p class="card-text">' . htmlspecialchars($course['course_description']) . '</p>
                        <button class="btn-more" onclick="toggleDetails(this)">جزئیات بیشتر</button>
                        <div class="course-details" style="display: none;">
                            <p><strong>کد دوره:</strong> 
                                <span id="courseCode' . $course['id'] . '">#' . htmlspecialchars($course['course_code']) . '</span>
                                <button class="btn-copy" onclick="copyToClipboard(\'courseCode' . $course['id'] . '\')">📋</button>
                            </p>
                            <p><strong>زمان برگزاری:</strong> ' . htmlspecialchars($course['course_hours']) . '</p>
                            <p><strong>مدت دوره:</strong> ' . htmlspecialchars($course['course_duration']) . ' ماه</p>
                            <p><strong>قیمت دوره:</strong> ' . number_format($course['course_price']) . ' تومان</p>
                        </div>
                        <a href="edit_course.php?id=' . $course['id'] . '" class="btn-edit">ویرایش</a>
                        <button class="btn-delete" onclick="confirmDelete(' . $course['id'] . ')">حذف</button>
                    </div>
                </div>
            </div>';
        }
    } else {
        if ($isCodeSearch) {
            echo '<p class="text-center text-muted">هیچ دوره‌ای با این کد پیدا نشد.</p>';
        } else {
            echo '<p class="text-center text-muted">هیچ دوره‌ای با این نام پیدا نشد.</p>';
        }
    }
}

// چاپ اسکریپت در خروجی
echo '
<script>
    function toggleDetails(button) {
        var details = button.nextElementSibling;
        if (details.style.display === "none" || details.style.display === "") {
            details.style.display = "block";
            button.innerText = "بستن جزئیات";
        } else {
            details.style.display = "none";
            button.innerText = "جزئیات بیشتر";
        }
    }

    function copyToClipboard(id) {
        var text = document.getElementById(id).innerText;
        var tempInput = document.createElement("input");
        document.body.appendChild(tempInput);
        tempInput.value = text;
        tempInput.select();
        document.execCommand("copy");
        document.body.removeChild(tempInput);
        alert("کد دوره کپی شد: " + text);
    }
</script>';
?>
