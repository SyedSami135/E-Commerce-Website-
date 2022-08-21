<?php
session_start();

if(isset($_SESSION['username']) ){
    header("Location:SS Collections.php");
   }



?>

<!DOCTYPE html>


<?php
//This script will handle login


// check if the user is already logged in

include('connection.php');

$email = $password = "";


// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $sql="SELECT * FROM users WHERE email='$email' AND password='$password'";
        $result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
        $rowExist=mysqli_num_rows($result);
        $row=mysqli_fetch_array($result);
        if($rowExist>0){
            
            $_SESSION['username']=$row['username'];
            
            header("Location:SS Collections.php");
        }    else{
          echo'<script>alert("UserName Or Password does not match")</script>'  ;
        }



}


?>




    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" href="Account.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Account.css">
    </head>

    <body>
        <div class="wrapper">

            <div class="form-container">

                <div class="form-inner">

                    <form action="" method="post" class="login">
                        <div class="field">
                            <input type="email" name="email" placeholder="Email Address" required>
                        </div>
                        <div class="field">
                            <input type="password" name="password" placeholder="Password" required>
                        </div>
                        <div class="pass-link">
                            <a href="#">Forgot password?</a>
                        </div>
                        <div class="field btn">
                            <div class="btn-layer"></div>
                            <input type="submit" value="Login">
                        </div>
                        <div class="signup-link">
                            Not a member? <a href="Signup.php">Signup now</a>
                        </div>



                    </form>

                </div>
            </div>
        </div>

        <!-- ========= -->



    </body>

    </html>