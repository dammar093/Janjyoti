<?php
 include 'header.php';
 if(isset($_POST['add-admin'])){
  $name = mysqli_real_escape_string($conn,$_POST['name']);
  $email = mysqli_real_escape_string($conn,$_POST['email']);
  $pass = md5(mysqli_real_escape_string($conn,$_POST['pass']));
  
  $select_admin = mysqli_query($conn,"SELECT name,email FROM `admin` WHERE name='$name' AND email='$email'") or die(mysql_error($select_admin));

  if(mysqli_num_rows($select_admin)>0){
    echo "<p style='color:red;text-align:center;'>admin already added</p>";
  }
  else{
    $add_admin=mysqli_query($conn,"INSERT INTO `admin`(name,email,password) VALUES('$name','$email','$pass')") or die('query failed');
  }
 }
?>


    <!-- main section start -->
    <main>
         <div class="add-photo conatiner-fulid mt-5">
                <div class="row">
                    <div class="col-6 m-auto">
                        <form action="" method="post">
                            <input type="text" placeholder="Enter name" required name="name" class="form-control">
                            <input type="email" placeholder="Enter email" class="form-control mt-2" required name="email">
                            <input type="password" placeholder="Enter password" class="form-control mt-2" required name="pass">    
                            <button class="btn btn-primary mt-2" name="add-admin">Add Admin</button>
                        </form>
                    </div>
                    <div class="col-md-7 col-sm-12 p-2 m-auto">
                        <table class="table table-striped col-md-6 mt-5">
                            <thead>
                              <tr>
                                <th scope="col">S.N.</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php
                              $index=1;
                                // query to select all the courses
                                $select_admin = mysqli_query($conn,"SELECT * FROM `admin`") or die('query failed');
                                if(mysqli_num_rows($select_admin)>0){
                                    //fetch details   
                                   while($fetch_admin=mysqli_fetch_assoc($select_admin)){
                                   
                               ?>  
                              <tr>
                            
                                <th scope="row"><?php echo $index;?></th>
                                <td><?php echo $fetch_admin['name'];?></td>
                                <td><?php echo $fetch_admin['email'];?></td>
                              </tr>
                                   <?php
                                       $index=$index+1;
                                    }
                                  }
                                mysqli_close($conn);
                            ?>
                            </tbody>
                          </table>
                    </div>
                </div>
         </div>
    </main>

    <!-- footer section -->
    <script src="../css/bootstrap/js/bootstrap.min.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>