<?php
    include('./maininclude/header.php');
    include('./dbConnection.php');

?>    
    <!--Start video background-->
    <div class="container-fluid remove-vid-marg">
        <div class="vid-parent">
            <video playinline autoplay muted loop> 
                <source src="video/banvid.mp4">
            </video>
            <div class="vid-overlay">
            </div>
        </div>
        <div class="vid-content">
            <h1 class="my-content">Welcome to iSchool</h1>
            <small class="my-content">Learn and Implement</small> <br>
            <?php
                if(!isset($_SESSION['is_login'])){
                    echo'
                    <a href="#" class="btn btn-danger mt-3" data-toggle="modal" data-target="#stuRegModalCenter">Get Started</a>   
                    ';
                }
                else{
                    echo '
                    <a href="student/studentProfile.php" class="btn btn-danger mt-3" data-toggle="modal">My Profile</a>
                    
                    ';
                }
            ?>
                  
        </div>
    </div>

    <!-- Start text banner-->

    <div class="container-fluid bg-danger txt-banner">
        <div class="row bottom-banner">
            <div class="col-sm">
                <h5> <i class="fas fa-book-open mr-3"></i>100+ Online Course </h5>
            </div>
            <div class="col-sm">
                <h5> <i class="fas fa-users mr-3"></i>Expert Instructors </h5>
            </div>
            <div class="col-sm">
                <h5> <i class="fas fa-keyboard mr-3"></i>Lifetime Access </h5>
            </div>
            <div class="col-sm">
                <h5> <i class="fa fa-money-check-dollar mr-3"></i>Money Back Guarantee* </h5>
            </div>
        </div>
    </div>

    <!-- End text banner-->

    <!-- Start most popular course-->
    <div class="container mt-5">
        <h1 class="text-center">Popular Course</h1>
        <!--Start most popular course 1st card deck-->
        <div class="card-deck mt-4">
        <?php   
            $sql = "SELECT * FROM course LIMIT 3";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $course_id = $row['course_id'];
                    echo '<a href="#" class="btn" style="text-align: left; padding: 0px; margin: 0px;">
                        <div class="card">
                            <img src="'.str_replace('..', '.', $row['course_img']).'" class="card-img-top" alt="Guitar">
                            <div class="card-body">
                                <h5 class="card-title">' .$row['course_name']. '</h5>
                                </a>
                                <p class="card-text">' .$row['course_desc']. '</p>
                            </div>
                            <div class="card-footer">
                                <p class="card-text d-inline">
                                    Price:
                                    <small>
                                        <del>
                                            &#8377 '.$row['course_original_price'].'
                                        </del>
                                    </small>
                                    <span class="font-weight-bolder">&#8377 '.$row['course_price'].'</span>
                                </p>
                                <a class="btn btn-primary text-white font-weight-bolder float-right" href="coursedetails.php?course_id='.$course_id.'">Enroll</a>
                            </div>
                        </div>
                        ';
                }
            }
        ?>
        </div>
        <!--End most popular course 1st card deck-->

        <!--Start most popular course 2nd card deck-->
        <div class="card-deck mt-4">
        <?php   
            $sql = "SELECT * FROM course LIMIT 3, 3";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $course_id = $row['course_id'];
                    echo '<a href="#" class="btn" style="text-align: left; padding: 0px; margin: 0px;">
                            <div class="card">
                            <img src="'.str_replace('..', '.', $row['course_img']).'" class="card-img-top" alt=""  >
                            <div class="card-body">
                                <h5 class="card-title">' .$row['course_name']. '</h5>
                            </a>
                                <p class="card-text">' .$row['course_desc']. '</p>
                            </div>
                            <div class="card-footer">
                                <p class="card-text d-inline">
                                    Price:
                                    <small>
                                        <del>
                                            &#8377 '.$row['course_original_price'].'
                                        </del>
                                    </small>
                                    <span class="font-weight-bolder">&#8377 '.$row['course_price'].'</span>
                                </p>
                                <a class="btn btn-primary text-white font-weight-bolder float-right" href="coursedetails.php?course_id='.$course_id.'">Enroll</a>
                            </div>
                        </div>
                    ';
                }
            }
        ?>
        </div>
        <!--End most popular course 2nd card deck-->
        <div class="text-center m-2">
            <a href="course.php" class="btn btn-danger btn-sm">View All Course</a>
        </div>
    </div>

    <!-- End most popular course-->

    <!-- Start contact us-->
        <?php
        include('./contact.php');
        ?>
    <!-- End contact us-->

    <!--Start students testtimonial-->
    <!-- <div class="container-fluid mt-5" style="background-color: #4B7289;" id="Feedback">
        <h1 class="text-center testheading p-4">Student's Feedback</h1>
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel" id="testimonial-slider">
                    <div class="testiminial">
                        <p class="description">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                        <div class="pic">
                            <img src="image/stu/Guitar.jpg" alt="">
                        </div>
                        <div class="testimonial-prof">
                            <h4>Sonam</h4>
                            <small>Web developer</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!--End students testtimonial-->

    <!--Start social follow-->
    <div class="container-fluid bg-danger">
        <div class="text-white row text-center p-1" >
            <div class="col-sm">
                <a href="#" class="text-white social-hover">
                    <i class="fab fa-facebook-f"></i> Facebook
                </a>
            </div>
            <div class="col-sm">
                <a href="#" class="text-white social-hover">
                    <i class="fab fa-twitter"></i> Twitter
                </a>
            </div>
            <div class="col-sm">
                <a href="#" class="text-white social-hover">
                    <i class="fab fa-whatsapp"></i> WhatsApp
                </a>
            </div>
            <div class="col-sm">
                <a href="#" class="text-white social-hover">
                    <i class="fab fa-instagram"></i> Instagram
                </a>
            </div>
        </div>
    </div> 
    <!--End social follow-->

    <!--Start about section-->
    <div class="container-fluid p-4" style="background-color: #E9ECEF;">
        <div class="container" style="background-color: #E9ECEF;">
            <div class="text-center row">
                <div class="col-sm">
                    <h5>About us</h5>
                    <p>iSchool provides universal accsess....</p>
                </div>
                <div class="col-sm">
                    <h5>Category</h5>
                    <a href="#" class="text-dark">Web Development</a><br>
                    <a href="#" class="text-dark">Web Designing</a><br>
                    <a href="#" class="text-dark">Web Development</a><br>
                    <a href="#" class="text-dark">Web Development</a><br>
                </div>
                <div class="col-sm">
                    <h5>Contact Us</h5>
                    <p>iSchool pvt ltd <br> 123456789</p>
                </div>
            </div>
        </div>
    </div>
    <!--End about section-->

<?php
    include('./maininclude/footer.php');
?>