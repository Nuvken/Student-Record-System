<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/project/public/css/dashboard.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <title>Dashboard</title>
</head>
<body>
    <input type="checkbox" id="check">

    <!-- Sidebar -->
    <div class="sidebar_menu">
        <div class="logo">
            <a href="">Student Management System</a>
        </div>
        <div class="btn_two">
            <label for="check">
                <i class="fas fa-times"></i>
            </label>
        </div>
        <ul>
            <li><a href="app/view/student.php"><i class="fa-solid fa-user-graduate"></i>Students</a></li>
            <li><a href="app/view/courses.php"><i class="fa-solid fa-book"></i>Courses</a></li>
            <li><a href="app/view/grade.php"><i class="fa-solid fa-clipboard-list"></i>Grades</a></li>
            <li><a href="app/view/teacher.php"><i class="fa-solid fa-chalkboard-user"></i>Teachers</a></li>
            <li><a href="app/view/attendance.php"><i class="fa-solid fa-calendar-check"></i>Attendance</a></li>
            <li><a href="app/view/announcement.php"><i class="fa-solid fa-bullhorn"></i>Annnouncement</a></li>
            <li><a href="app/view/settings.php"><i class="fa-solid fa-gear"></i>Settings</a></li>
            <li><a href="app/view/logout.php"><i class="fa-solid fa-right-from-bracket"></i>Logout</a></li>
        </ul>
    </div>

    <div class="main_box">
        <div class="btn_one">
            <label for="check">
                <i class="fas fa-bars"></i>
            </label>
        </div>

        <div class="social_media">
            <a href=""><i class="fab fa-facebook-f"></i></a>
            <a href=""><i class="fab fa-twitter"></i></a>
            <a href=""><i class="fab fa-instagram"></i></a>
            <a href=""><i class="fab fa-github"></i></a>
        </div>
    </div>
</body>
</html>
