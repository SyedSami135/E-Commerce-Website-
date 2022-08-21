<?php
session_start();

if(isset($_SESSION['username'])){
    header("Location:SS Collections.php");
   }


else{ header("Location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="Account.css">
</head>

<body>
    <?php
    include('connection.php');
    $username = $password =$email="";
    
    $username_er = $password_er =$email_er="";
    ?>
        <div class="wrapper">

            <div class="form-container">

                <div class="form-inner">
                    <form action="" method="post" class="Login">
                        <div class="field">
                            <input type="text" name="username" placeholder="Your Name" required>
                        </div>
                        <div class="field">
                            <input type="email" name="email" placeholder="Email Address" required>
                        </div>
                        <div class="field">
                            <input type="password" length="" name="password" placeholder="Password" required>
                        </div>

                        <div class="field btn">
                            <div class="btn-layer"></div>
                            <input type="submit" value="Signup">
                        </div>
                        <div class="signup-link">
                            Already a member? <a href="login.php">Login now</a>
                        </div>
                    </form>


                   
                </div>
            </div>
        </div>

        <?php
                    if($_SERVER['REQUEST_METHOD'] == "POST"){
                        $username= $_POST['username'];
                        $email= $_POST['email'];
                        $password= $_POST['password'];
                       
                     
                        $sql_query="INSERT INTO `users`( `username`, `email`, `password`) VALUES ('$username','$email','$password')";
                       mysqli_query($conn,$sql_query); 
                        header("Location:login.php");
                        die;
                          
                          
                    }

                     ?>

</body>

</html>