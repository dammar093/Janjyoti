<?php
// include databse connection file
  include 'db.php';
// Start the session
session_start();

// Check if the admin_id is set in the session
if (!isset($_SESSION['admin_id'])) {
  // Redirect to the login page
  header('location:../index.php');

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Janjyoti Multipule Campus</title>
    <link rel="icon" type="image/png" href="../images/jmclogo.png" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="ckeditor/ckeditor.js"></script>
</head>

<body>
    <!-- header section start -->
    <header>
        <nav>
            <div class="logo">
                <a href="admin_course.php" target="_self">
                    <h2 class="fw-bold center">Admin Panel</h2>
                </a>
            </div>
            <div class="nav-links">
                <!-- pc nave links -->
                <ul>
                    <li><a href="admin_course.php" target="_self">Course</a></li>
                    <li><a href="admin_notice.php" target="_self">Notice</a></li>
                    <li><a href="admin_gallery.php" target="_self">Gallery</a></li>
                    <li><a href="admin.php" target="_self">Add Admin</a></li>
                    
                </ul>
                <div class="menu-icon d-flex ml-2">
                    <a href="logout.php" class="btn btn-primary" target="_self">Logout</a>
                    <i class="ri-menu-line menu-bar" id="menu-bar"></i>
                </div>
            </div>
        </nav>
        <!-- mobile nav links -->
        <div class="mobile-menu">
            <ul>
                <li><a href="admin_course.php" target="_self">Course</a></li>
                <li><a href="admin_notice.php" target="_self">Notice</a></li>
                <li><a href="admin_gallery.php" target="_self">Gallery</a></li>
                <li><a href="admin.php" target="_self">Add Admin</a></li>
            </ul>
        </div>
    </header>
    <!-- header section end -->

