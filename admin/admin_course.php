<?php
// include admin header file
 include 'header.php';
 //cehck the add-course button is clicked or not
 if(isset($_POST['add-course'])){
 // asigning the value of course name where we input the name of course
  $course_name = mysqli_real_escape_string($conn,$_POST['course-name']);
  // assigning course type value
  $course_type = mysqli_real_escape_string($conn,$_POST['course-type']);
  // assign image name
  $image = $_FILES['image']['name'];
  //assign size of image
  $image_size = $_FILES['image']['size'];
  // assign temperary name of file
  $image_tmp_name = $_FILES['image']['tmp_name'];
  // assign the folder where images are stored
  $image_folder='../uploaded_image/'.$image;
  // assign the conent of course
  $course_content = $_POST['description']; 
  
  // select the all the course
  $select_course = mysqli_query($conn,"SELECT course_name from `courses` WHERE  course_name='$course_name'") or die(mysql_error($select_course));

  if(mysqli_num_rows($select_course)>0){
    // check whether the corse is alredy added or not
    echo '<p style="color:red;">Course already added</p>';
  }
  else{
    //execute query to insert data ino database
    $add_course  =mysqli_query($conn,"INSERT INTO `courses`(course_name,course_desc,image,course_type) VALUES('$course_name','$course_content','$image','$course_type')") or die('query failed!');
   move_uploaded_file($image_tmp_name,$image_folder);
   header('location:admin_course.php');
  }
 }
 // php code for deleting course

 if(isset($_GET['delete'])){
    $did=$_GET['delete'];
    $delete_image=mysqli_query($conn,"SELECT image FROM `courses` WHERE cid='$did'") or die('query failed!');
    $fetch_delete_image=mysqli_fetch_assoc($delete_image);
    unlink('../uploaded_image/'.$fetch_delete_image['image']);
    $delete_course =  mysqli_query($conn,"DELETE FROM `courses` WHERE cid = '$did'") or die('query failed');
 }
?>
    <!-- main section start -->
    <main>
         <div class="conatiner-fluid">
            <div class="row">
              <div class="col-sm-12 p-2">
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post"  class="col-sm-12 d-flex flex-wrap" enctype="multipart/form-data" style="width:100%">
                     <div class="course col-sm-12 col-md-5">
                        <input type="text" name="course-name" placeholder="Enter course name" class="form-control" required>
                     </div>
                     <div class="col-md-6 col-sm-12">
                     <input type="file" name="image" accept="image/jpeg, image/png, image/jpg" class="form-control mt-2" required>
                     </div>
                     <div class="course col-md-6 col-sm-12">
                        <select name="course-type" id="" class="form-select">
                            <option value="bachelor" selected>Bachelor</option>
                            <option value="master">Master</option>
                        </select>
                     </div>
                     <div class="course col-12 mt-3">
                        <textarea name="description" id="description" cols="100" rows="200" class="form-control " placeholder="Write description of course"></textarea>
                        <script>
                            CKEDITOR.replace( 'description' );
                        </script>
                     </div>
                    <button class="btn btn-primary m-2" name="add-course">Add Course</button>
                </form>
            </div>
         </div>
         <div class="container-fluid p-0 mt-5">
            <div class="row about-us">
                <div class="row padding">
                    <!-- under graduate courses -->
                    <div class="col-l-12 col-md-12 col-sm-12">
                        <h2 class="title fw-bold">UNDERGRADUATE COURSES</h2>
                        <div class="row courses">
                            <?php
                                // query to select all the courses
                                $select_courses = mysqli_query($conn,"SELECT * FROM `courses` WHERE course_type = 'bachelor'") or die('query failed');
                                if(mysqli_num_rows($select_courses)>0){
                                    //fetch details   
                                   while($fetch_course=mysqli_fetch_assoc($select_courses)){
                               ?>  
                                <div class="col-sm-12 col-l-5 col-md-5 course">
                                <img src="../uploaded_image/<?php echo $fetch_course['image'] ;?>" alt="course image" class="img-fluid course-image">
                                <div class="col-sm-12 course-content">
                                    <h3 class="course-title"><?php echo $fetch_course['course_name'];?></h3>
                                    <div class="about-course">
                                        <?php echo $fetch_course['course_desc'];?>
                                    </div>
                                   <a href="admin_course.php?delete=<?php echo $fetch_course['cid']; ?>" class="btn btn-danger"><i class="ri-delete-bin-7-fill"></i> Delete</a>
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
                        <h2 class="title fw-bold">POSTGRADUATE COURSES</h2>
                        <div class="row courses">
                        <?php
                                // query to select all the courses
                                $select_courses = mysqli_query($conn,"SELECT * FROM `courses` WHERE course_type = 'master'") or die('query failed');
                                if(mysqli_num_rows($select_courses)>0){
                                    //fetch details   
                                   while($fetch_course=mysqli_fetch_assoc($select_courses)){
                               ?>  
                                <div class="col-sm-12 col-l-5 col-md-5 course">
                                <img src="../uploaded_image/<?php echo $fetch_course['image'] ;?>" alt="course image" class="img-fluid course-image">
                                <div class="col-sm-12 course-content">
                                    <h3 class="course-title"><?php echo $fetch_course['course_name'];?></h3>
                                    <div class="about-course d-flex">
                                        <?php echo $fetch_course['course_desc'];?>
                                    </div>
                                   <a href="admin_course.php?delete=<?php echo $fetch_course['cid']; ?>" class="btn btn-danger"><i class="ri-delete-bin-7-fill"></i> Delete</a>
                                </div>
                            </div>
                                   <?php
                                    }
                                  }
                                mysqli_close($conn);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- footer section -->
    <script src="../css/bootstrap/js/bootstrap.min.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>