<?php
session_start();

if(isset($_SESSION['username'])){
   
   }


else{ header("Location:SS Collections.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SS Collections</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css">

    <link rel="stylesheet" href="SS Collections.css">
</head>

<body><?php
include('header.php');

?>

    <!-- ----------------About---------------------- -->
    <?php
include('footer.php');

?>
</body>

</html>