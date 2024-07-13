<?php
  include 'header.php';
  $nid = $_GET['notice'];
?>

    <!-- main section start -->
      <main>
        <!-- single page od course -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 mt-3 ">
                <?php
                                // query to select all the notice
                                $select_notices = mysqli_query($conn, "SELECT * FROM `notice` WHERE nid ='$nid'") or die('query failed');

                                if(mysqli_num_rows($select_notices)>0){
                                    //fetch details   
                                   while($fetch_notice=mysqli_fetch_assoc($select_notices)){
                               ?>  
                               <h2 class="fw-bold title"><?php echo $fetch_notice['title'];?></h2>
                               <p class="publish-date"><?php echo $fetch_notice['date']; ?></p>
                                <div class="row ">
                                    <div class="col-sm-12 notice-content mt-3 p-1">
                                        <?php echo $fetch_notice['description']; ?>
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
      </main>
<?php
  include 'footer.php';
?>