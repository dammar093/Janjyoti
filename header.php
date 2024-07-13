<?php
  include './admin/db.php';
  
  $title= basename($_SERVER['PHP_SELF']);
  switch($title){
    case "index.php":
        $title="Janjyoti Campus";
        break;
    case "course.php":
        $title="Janjyoti | Courses";
        break;
    case "notice.php":
        $title="Janjyoti | Notice";
        break;
    
   case "about.php":
       $title="Janjyoti | About Us";
       break;
    case "login.php":
        $title="Admin Login";
        break;
    case "noticepage.php":
        $title = "Notice";
        break;
    default: $title="404 Page not found";
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ;?></title>
    <meta name="description" content="This is an example of a
    meta description. This will often show up in search results.">
    <link rel="icon" type="image/png" href="./images/jmclogo.png" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <!-- header section start -->
    <header>
        <nav>
            <div class="logo">
                <a href="index" target="_self">
                    <img src="./images/jmclogo.png" alt="logo">
                    <span fw-bold>जनज्योति क्याम्पस</span>
                </a>
            </div>
            <div class="nav-links">
                <!-- pc nave links -->
                <ul>
                    <li><a href="index" target="_self">Home</a></li>
                    <li><a href="about" target="_self">About Us</a></li>
                    <li><a href="course" target="_self">Courses</a></li>
                    <li><a href="notice" target="_self">Notice</a></li>
                </ul>
                <div class="menu-icon">
                    <i class="ri-menu-line menu-bar" id="menu-bar"></i>
                </div>
            </div>
        </nav>
        <!-- mobile nav links -->
        <div class="mobile-menu">
            <ul>
                <li><a href="index" target="_self">Home</a></li>
                <li><a href="about" target="_self">About Us</a></li>
                <li><a href="course" target="_self">Courses</a></li>
                <li><a href="notice" target="_self">Notice</a></li>
            </ul>
        </div>
    </header>
    <!-- header section end -->