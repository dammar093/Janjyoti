<?php
  include 'header.php'
?>


    <!-- main section start -->
    <main>
        <!-- course hero -->
        <div class="container-fluid p-0">
            <div class="row about-us">
                <div class="col-sm-12">
                    <img src="./images/notice.jpg" alt="" class="img-fluid about-image">
                </div>
                <h2 class="link-tag">#notice</h2>
                <div class="row padding">
                    <!-- under graduate courses -->
                    <div class="col-l-12 col-md-12 col-sm-12">
                        <h2 class="title fw-bold">NOTICE</h2>
                        <div class="row notices">
                        <?php
                                // query to select all the notice
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
                                 
                                      <?php 
                                       $string= $fetch_notice['description'];
                                       if (strlen($string) > 300) {
                                       
                                           // truncate string
                                           $stringCut = substr($string, 0, 400);
                                           $endPoint = strrpos($stringCut, ' ');
                                       
                                           //if the string doesn't contain any space then it will cut without word basis.
                                           $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                           $string .= '...';
                                       }
                                       echo $string;
                                       ?>
                                </div>
                                <a href="noticepage?notice=<?php echo $fetch_notice['nid'];?>">Read more</a>
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
<?php
include 'footer.php';
?>