<?php
// include heade file of admin
 include 'header.php';
 if(isset($_POST['add-notice'])){
    $notice_title = mysqli_real_escape_string($conn,$_POST['notice-title']);
    $notice_content = $_POST['notice-description'];
    
    $select_notice = mysqli_query($conn, "SELECT * FROM `notice` WHERE title = '$notice_title'") or die('query failed');


    if(mysqli_num_rows($select_notice)>0){
        echo '<p styele="color:red;">notice already added</p>';
    }
    else{
        $add_notce = mysqli_query($conn,"INSERT INTO `notice`(title,description) VALUES('$notice_title','$notice_content')") or die('query failed');
    }
 }
 // deleting notice
  if(isset($_GET['delete'])){
    $nid=$_GET['delete'];
    $delete_notice= mysqli_query($conn,"DELETE FROM `notice` WHERE nid = '$nid'") or die('query failed');
  }

  
?>


    <!-- main section start -->
    <main>
        <div class="conatiner-fluid">
            <div class="row">
                <div class="col-12 d-flex justify-content-center align-items-center p-2">
                    <form action="<?php echo$_SERVER['PHP_SELF'];?>" method="post" style="width:100%">
                        <div class=" col-sm-12 col-md-6">
                            <input type="text" name="notice-title" placeholder="Enter title of notice"
                                class="form-control mt-2" required>
                        </div>
                        <div class="col-12 mt-3">
                            <textarea name="notice-description" id="description" cols="100" rows="200"
                                class="form-control " placeholder="Write notice"></textarea>
                            <script>
                                CKEDITOR.replace('description');
                            </script>
                        </div>
                        <button class="btn btn-primary mt-2" name="add-notice">Add Notice</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="container-fluid p-0">
            <div class="row about-us">
                <div class="row padding">
                    <!-- under graduate courses -->
                    <div class="col-l-12 col-md-12 col-sm-12">
                        <h2 class="title fw-bold">NOTICE</h2>
                        <div class="row notices">

                        <?php
                                // query to select all the courses
                                $select_notices = mysqli_query($conn,"SELECT * FROM `notice` ORDER BY date DESC") or die('query failed');
                                if(mysqli_num_rows($select_notices)>0){
                                    //fetch details   
                                   while($fetch_notice=mysqli_fetch_assoc($select_notices)){
                               ?>  
                                 <div class="col-sm-12 notice">
                                <div class="col-12 notice-title-date">
                                    <p class="notice-title"><?php echo $fetch_notice['title'];?></p>
                                    <p class="publish-date"><?php $date= $fetch_notice['date'];
                                      echo (date("d M, Y g:i A", strtotime($date)));
                                    ?></p>
                                </div>
                                <div class="col-12 notice-content">
                                      <?php echo $fetch_notice['description'];?>
                                       <div class="mt-3">
                                       <a href="edit_notice.php?edit=<?php echo $fetch_notice['nid'];?>" class="btn btn-primary"><i class="ri-edit-box-line"></i> Edit</a>

                                       <a href="admin_notice.php?delete=<?php echo $fetch_notice['nid']; ?>" class="btn btn-danger"><i class="ri-delete-bin-7-fill"></i> Delete</a>
                                       </div>
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