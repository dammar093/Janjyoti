<?php
 include 'header.php';
 if(isset($_POST['save-notice'])){
    $eid=$_POST['eid'];
    $notice_title = mysqli_real_escape_string($conn,$_POST['notice-title']);
    $notice_content = $_POST['notice-description'];
    $select_notice = mysqli_query($conn, "UPDATE  `notice` SET title = '$notice_title', description= '$notice_content' ") or die('query failed');
    header('location:admin_notice.php');
 }
?>
    <!-- main section start -->
    <main>
        <div class="conatiner-fluid">
            <div class="row">
                <div class="col-12 d-flex justify-content-center align-items-center mt-5">
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class="col-sm-12 p-2">
                       
                        <?php
                        $nid=0;
                          if(isset($_GET['edit'])){
                            $nid = $_GET['edit'];
                          }
                           
                           
                                // query to select all the courses
                                $select_notices = mysqli_query($conn,"SELECT * FROM `notice` WHERE nid ='$nid'") or die('query failed');
                                if(mysqli_num_rows($select_notices)>0){
                                    //fetch details   
                                   while($fetch_notice=mysqli_fetch_assoc($select_notices)){
                               ?>  
                                
                                <div class=" col-sm-12 col-md-6">
                                <input type="text" name="notice-title" value="<?php echo $fetch_notice['title']; ?>"
                                    class="form-control mt-2" required>
                              </div>
                                <div class="col-12 mt-3">
                              <textarea name="notice-description" id="description" cols="100" rows="200"
                                class="form-control " placeholder="Write notice"><?php echo $fetch_notice['description'];?></textarea>
                              <script>
                                CKEDITOR.replace('description');
                             </script>
                        </div>
                                   <?php
                                    }
                                  }
                                mysqli_close($conn);
                            ?>
                        <input type="hidden" name="eid" value="<?php $fetch_notice['nid'];?>">
                        <button class="btn btn-primary mt-2" name="save-notice">save</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
 
    <!-- footer section -->
    <script src="../css/bootstrap/js/bootstrap.min.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>