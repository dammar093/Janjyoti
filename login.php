<?php
include './admin/db.php';
 session_start();
 $mesage[]='';
 if(isset($_POST['login'])){
    $email = trim(mysqli_real_escape_string($conn,$_POST['email']));
    $pass = md5(mysqli_real_escape_string($conn,$_POST['pass']));

  $select_admin =mysqli_query($conn, "SELECT * FROM `admin` WHERE email= '$email' AND password='$pass'") or die(mysqli_error($conn));
     // check the row no.
     if(mysqli_num_rows($select_admin)>0){
        // fetch data from table users
         $row=mysqli_fetch_assoc($select_admin);
          //assigning data
          $_SESSION['admin_name'] = $row['name'];
          $_SESSION['admin_email'] = $row['email'];
          $_SESSION['admin_id'] = $row['uid'];
          header('location:./admin/admin_notice.php');
    }
      // error message
    else{
      $message[]='Incorrect email or password';  
    }
 }

mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Login</title>
    <link rel="icon" type="image/png" href="./images/jmclogo.png" />
    <style>
        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 90vh;
            font-family: sans-serif;

        }

        .login-box {
            box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;
            width: 300px;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px 0;
            border-radius: 10px;
            background-color:rgb(147, 143, 139);
        }

        .logo {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .logo img {
            width: 100px;
            height: 100px;
        }

        .logo h2 {
            font-size: 20px;
            font-weight: bolder;
            color: white;
        }
        .login input {
            width: 200px;
            padding: 8px 12px;
            border: 1px solid grey;
            border-radius: 5px;
            outline: none;
            margin: 10px 0;
        }

        #login-btn {
            padding: 8px 100px;
            background: blue;
        }

        .login button {
            color: white;
            background-color:#4054b2 ;
            padding: 8px 12px;
            outline: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease-in;
        }
        .login button:hover{
            background-color: darkblue;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="login-box">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="logo">
                    <img src="./images/jmclogo.png" alt="">
                    <h2>जनज्योति क्याम्पस</h2>

                </div>
                <div class="login-input">
                <?php
                 if(isset($message)){
                    foreach($message as $message){
                        echo'<div class="login" style="color:red"> <span>'.$message.'</span>
                        </div>';
                        
                    }

                 }
                ?>
                    <div class="login">
                        <input type="email" placeholder="Enter your email" name="email" required>
                    </div>
                    <div class="login">
                        <input type="password" placeholder="Enter your password" minlength="8" required name="pass">
                    </div>
                    <div class="login">
                        <button type="submit" name="login" id="login">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
