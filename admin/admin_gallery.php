<?php
 include 'header.php';

 if(isset($_POST['add-image'])){
  $image = $_FILES['image']['name'];
  //assign size of image
  $image_size = $_FILES['image']['size'];
  // assign temperary name of file
  $image_tmp_name = $_FILES['image']['tmp_name'];
  // assign the folder where images are stored
  $image_folder='../uploaded_image/'.$image;

  $gallery_type=$_POST['gallery-type'];
  
  $select_image=mysqli_query($conn,"SELECT image FROM `gallery` WHERE image = '$image'") or die('query failed');
  if(mysqli_num_rows($select_image)>0){
    echo "<p style='color:red;text-align:center;'>image already added</p>";
  }
  else{
    if(($image_size>2097152)){
    echo "<p style='color:red;text-align:center;'>image size too large please upload image size less than 2MB</p>";
    }
    else{
        $add_image=mysqli_query($conn,"INSERT INTO `gallery`(image,gallery_type) VALUES('$image','$gallery_type')") or die('query failed');
        move_uploaded_file($image_tmp_name,$image_folder);
    }
  }
 }

 if(isset($_GET['delete'])){
    $did=$_GET['delete'];
    $delete_image=mysqli_query($conn,"SELECT image FROM `gallery` WHERE gid='$did'") or die('query failed!');
    $fetch_delete_image=mysqli_fetch_assoc($delete_image);
    unlink('../uploaded_image/'.$fetch_delete_image['image']);
    $delete_course =  mysqli_query($conn,"DELETE FROM `gallery` WHERE gid = '$did'") or die('query failed');
    header('location:admin_gallery.php');
 }
?>


    <!-- main section start -->
    <main>
         <div class="add-photo conatiner-fulid mt-5">
                <div class="row">
                    <div class="col-6 m-auto">
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                            <label for="">Upload only jpg and jpeg file</label>
                            <input type="file" name="image" class="form-control" accept="image/jpg, image/png, image/jpeg" required>
                            <select class="form-select form-select-md mt-3" name="gallery-type" required>
                            <option value="slider">slider</option>
                            <option value="gallery" selected>gallery</option>
                            </select>
                            <button class="btn btn-primary mt-2" name="add-image">Add Image</button>
                        </form>
                    </div>
                    <hr class="mt-3">
                    <div class="col-12">
                        <div class="gallery p-2">
                        <?php
                                // query to select all the courses
                                $select_images = mysqli_query($conn,"SELECT * FROM `gallery`") or die('query failed');
                                if(mysqli_num_rows($select_images)>0){
                                    //fetch details   
                                   while($fetch_image=mysqli_fetch_assoc($select_images)){
                               ?>  
                                 <div class="gallery-image">
                                <img src="../uploaded_image/<?php echo $fetch_image['image'];?>"  alt="gallery image">
                                <a href="admin_gallery.php?delete=<?php echo $fetch_image['gid'];?>" class="btn btn-danger mt-2"><i class="ri-delete-bin-7-fill"></i> Delete</a>
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
    </main>

    <!-- footer section -->
    <script src="../css/bootstrap/js/bootstrap.min.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>