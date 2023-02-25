<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">



    <title>iSchool</title>
</head>
<body>
    <!--Start navigation-->
    <nav class="navbar navbar-expand-sm navbar-dark pl-5 fixed-top bg-dark">   <!--bg-dark -->
        <a class="navbar-brand" href="index.php">iSchool</a>
        <span class="navbar-text">Learn And Implement</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav custom-nav pl-5">
                <li class="nav-item custom-nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>

                <li class="nav-item custom-nav-item">
                <a class="nav-link" href="./course.php">Courses</a>
                </li>
                
                <li class="nav-item custom-nav-item">
                <a class="nav-link" href="paymentstatus.php">Payment Status</a>
                </li>
                <?php
                    session_start();
                    if(isset($_SESSION['is_login'])){
                        echo'
                        <li class="nav-item custom-nav-item">
                        <a href="student/studentProfile.php" class="nav-link">My Profile</a>
                        </li>
                        <li class="nav-item custom-nav-item">
                            <a href="./logout.php" class="nav-link">Logout</a>
                        </li>
                        ';
                    }
                    else{
                        echo '
                        <li class="nav-item custom-nav-item">
                        <a href="#" class="nav-link" data-toggle="modal" data-target="#stuLoginModalCenter">Login</a>
                        </li>
                        <li class="nav-item custom-nav-item">
                            <a href="#" class="nav-link" data-toggle="modal" data-target="#stuRegModalCenter">Signup</a>
                        </li>
                        ';
                    }
                ?>
                <li class="nav-item custom-nav-item">
                <a class="nav-link " href="#">Feedback</a>
                </li>

                <li class="nav-item custom-nav-item">
                <a class="nav-link " href="#">Contact</a>
                </li>
                
            </ul>
        </div>
    
    </nav>


    <!--End navigation-->