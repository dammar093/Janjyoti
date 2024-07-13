<?php
  include 'header.php';
?>
<!-- main section start -->
    <main>
        <!-- slider section -->

        <div class="container-fluid slider">
            <div class="row">
                <div class="col-l-12">
                    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner slider">
                            <?php
                                // query to select all the courses
                                $select_slider = mysqli_query($conn,"SELECT * FROM `gallery` WHERE gallery_type = 'slider'") or die('query failed');
                                if(mysqli_num_rows($select_slider)>0){
                                    //fetch details   
                                   while($fetch_slide=mysqli_fetch_assoc($select_slider)){
                               ?>  
                                 <div class="carousel-item active">
                                  <img src="uploaded_image/<?php echo $fetch_slide['image'];?>" class="d-block w-100 img-fluid" alt="...">
                                 </div>
                                   <?php
                                    }
                                  }
                            ?>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- welcome section start -->
        <div class="container-fluid padding background">
            <div class="row">
                <div class="col-12">
                    <div class="row d-flex justify-content-between welcome-content">
                        <div class="col-l-8 col-md-8 col-sm-12">
                            <h3 class="fw-bold title">WLCOME TO JANJYOTI CAMPUS</h3>
                            <p class="text mission">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, rem laboriosam quam,
                                libero impedit a excepturi repellendus minus eum ipsa officia consequuntur delectus
                                nobis voluptatibus voluptates harum rerum porro minima laborum atque alias.
                                Exercitationem ipsam voluptate temporibus sit voluptatibus dolore, doloremque eum neque.
                                Sequi aliquid fuga inventore. Quod, natus earum!
                            </p>
                        </div>
                        <div class="col-l-4 col-md-4 col-sm-12">
                            <img src="./images/image1.jpg" alt="" class="img-fluid rounded welcome-image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- facility section start -->
        <div class="container-fliud padding">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="fw-bold title">OUR FACILITIES</h3>
                    <div class="services">
                        <div class="service">
                            <img src="./images/library.jpeg" alt="" class="img-fluid">
                            <p>Library</p>
                        </div>
                        <div class="service">
                            <img src="./images/lab.jpeg" alt="" class="img-fluid">
                            <p>Computer Lab</p>
                        </div>
                        <div class="service">
                            <img src="./images/wifi.png" alt="" class="img-fluid">
                            <p>Inernet</p>
                        </div>
                        <div class="service">
                            <img src="./images/samrt.jpg" alt="" class="img-fluid">
                            <p>Smart Teaching</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Janjyoti MISSION -->
        <div class="container-fluid padding background">
            <div class="row">
                <div class="col-12">
                    <div class="row d-flex justify-content-between welcome-content">
                        <div class="col-l-4 col-md-4 col-sm-12">
                            <img src="./images/image3.jpg" alt="" class="img-fluid rounded welcome-image">
                        </div>
                        
                        <div class="col-l-8 col-md-8 col-sm-12 mission">
                            <h3 class="fw-bold title">OUR MISSION</h3>
                            <p class="text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, rem laboriosam quam,
                                libero impedit a excepturi repellendus minus eum ipsa officia consequuntur delectus
                                nobis voluptatibus voluptates harum rerum porro minima laborum atque alias.
                                Exercitationem ipsam voluptate temporibus sit voluptatibus dolore, doloremque eum neque.
                                Sequi aliquid fuga inventore. Quod, natus earum!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid background" id="counter">
            <div class="row padding">
                <div class="col-sm-12">
                    <div class="peoples" id="counter">
                        <div class="people">
                            <h1 class="counts-number" data-count="400">300+</h1>
                            <p>STUDESNT ENCROLLED</p>
                        </div>
                        <div class="people">
                            <h1 class="counts-number" data-count="15000">13000+</h1>
                            <p>PAASED OUT</p>
                        </div>
                        <div class="people">
                            <h1 class="counts-number" data-count="50">50+</h1>
                            <p>TEACHING STAFF</p>
                        </div>
                        <div class="people">
                            <h1 class="counts-number" data-count="20">20+</h1>
                            <p>EVENTS</p>
                        </div>
                        <div class="people">
                            <h1 class="counts-number" data-count="3">3+</h1>
                            <p>CLUB</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>
        </div>
        <!-- gallery section start -->
        <div class="container-fluid padding">
            <div class="row">
                <div class="col-12 navigate-btn ">
                    <h3 class="fw-bold title">GALLERY</h3>
                    <div class="gallery">
                    <?php
                                // query to select all the courses
                                $select_slider = mysqli_query($conn,"SELECT * FROM `gallery`") or die('query failed');
                                if(mysqli_num_rows($select_slider)>0){
                                    //fetch details   
                                   while($fetch_slide=mysqli_fetch_assoc($select_slider)){
                               ?>  
                                 <div class="gallery-image">
                                  <img src="uploaded_image/<?php echo $fetch_slide['image'];?>"  alt="...">
                                 </div>
                                   <?php
                                    }
                                  }
                            ?>
                        <div class="gallery-image">
                            <img src="./images/image1.jpg" alt="">
                        </div>
                        
                        <span id="prev" class="gallery-btn"><i class="ri-arrow-left-s-fill"></i></span>
                        <span id="next" class="gallery-btn"><i class="ri-arrow-right-s-fill"></i></span>
                    </div>

                </div>
            </div>
        </div>
    </main>
<?php
include 'footer.php';
?>