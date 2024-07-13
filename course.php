<?php
  include 'header.php';
?>
 <!-- main section start -->
    <main>
        <!-- course hero -->
        <div class="container-fluid p-0">
            <div class="row about-us">
                <div class="col-sm-12">
                    <img src="./images/course.jpg" alt="" class="img-fluid about-image">
                </div>
                <h2 class="link-tag">#our courses</h2>
                <div class="row padding">
                    <!-- under graduate courses -->
                    <div class="col-l-12 col-md-12 col-sm-12">
                        <h2 class="title fw-bold">UNDER GRADUATE COURSES</h2>
                        <div class="row courses">
                        <?php
                                // query to select all the courses
                                $select_courses = mysqli_query($conn,"SELECT * FROM `courses` WHERE course_type = 'bachelor'") or die('query failed');
                                if(mysqli_num_rows($select_courses)>0){
                                    //fetch details   
                                   while($fetch_course=mysqli_fetch_assoc($select_courses)){
                               ?>  
                                <div class="col-sm-12 col-l-5 col-md-5 course">
                                <img src="uploaded_image/<?php echo $fetch_course['image'] ;?>" alt="course image" class="img-fluid course-image">
                                <div class="col-sm-12 course-content">
                                    <h3 class="course-title"><?php echo $fetch_course['course_name'];?></h3>
                                    <div class="about-course">
                                        <?php echo $fetch_course['course_desc'];?>
                                    </div>
                                </div>
                            </div>
                                   <?php
                                    }
                                  }
                            ?>
                         
                        </div>
                    </div>

                    <!-- post graduate courses -->
                    <div class="col-l-12 col-md-12 col-sm-12">
                        <h2 class="title fw-bold">POST GRADUATE COURSES</h2>
                        <div class="row courses"> 
                        <?php
                                // query to select all the courses
                                $select_courses = mysqli_query($conn,"SELECT * FROM `courses` WHERE course_type = 'master'") or die('query failed');
                                if(mysqli_num_rows($select_courses)>0){
                                    //fetch details   
                                   while($fetch_course=mysqli_fetch_assoc($select_courses)){
                               ?>  
                                <div class="col-sm-12 col-l-5 col-md-5 course">
                                <img src="uploaded_image/<?php echo $fetch_course['image'] ;?>" alt="course image" class="img-fluid course-image">
                                <div class="col-sm-12 course-content">
                                    <h3 class="course-title"><?php echo $fetch_course['course_name'];?></h3>
                                    <div class="about-course d-flex">
                                        <?php echo $fetch_course['course_desc'];?>
                                    </div>
                                </div>
                            </div>
                                   <?php
                                    }
                                  }
                            ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>

    <!-- footer section -->
    <footer>
        <div class="padding d-flex flex-column">
            <div class="container-fluid p-0 footer ">
                <div class="row">
                    <div class="col-md-4 col-sm-12 contact">
                        <h6 class="fw-bold text-white fs-5">CONTACT US</h6>
                        <div class="text-white">
                            <p class="fs-6"><i class="ri-phone-line"></i> 9809498493</p>
                            <p class="fs-6"><i class="ri-mail-line"></i> dammarrana093@gmail.com</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <h6 class="fw-bold text-white fs-5 contact">FOLLOW US</h6>
                        <div class="text-white social">
                            <a href="" class="text-white"><i class="ri-facebook-circle-fill fs-4"></i> </a> |
                            <a href="" class="text-white"><i class="ri-linkedin-fill fs-4"></i></a> |
                            <a href="" class="text-white"><i class="ri-youtube-fill fs-4"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 contact">
                        <h6 class="fw-bold text-white fs-5">JANJYOTI CAMPUS Pvt. Ltd.</h6>
                        <p class="text-white">BHITDATT-18,BHANSHI,KANCHANPUR</p>
                        <div class="col-12">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3490.8066139306698!2d80.19419937420166!3d28.963459868978394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39a1aeada6546647%3A0x6f3b99bf5befa412!2sJanajyoti%20Multiple%20Campus!5e0!3m2!1sen!2snp!4v1698676732524!5m2!1sen!2snp"
                                style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copy-right">
                <p class="text-white">Copyright &copy; Janjyoti Campus | <a href="login.html"
                        class="text-white">Login</a></p>
            </div>
        </div>
    </footer>
    <script src="css/bootstrap/js/bootstrap.min.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>