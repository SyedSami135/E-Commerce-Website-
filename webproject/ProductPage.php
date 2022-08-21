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

<body>

    <?php
    include('header.php');?>






    <!-- --------------------------------------- -->

    <!-- --------------------------------------- -->
    <div class="sContainer">
        <h2 class="title">All Products</h2>
        <div class="row">
            <?php
                
            include('connection.php');
            $sql_query="SELECT * FROM `product` ";
            $filepath="";

            $result=mysqli_query($conn,$sql_query);
            while( $row=mysqli_fetch_array($result)){
                $filepath=$row['img'];
                $image_id=$row['id'];
                // echo$id;
               
                echo'<div class="col4">';?>
              <a href="ProductDetail.php?name=<?Php echo$image_id?>"> 
                <?php  echo"<img src='$filepath'/>"?>
               <?php echo'</a>';
                    ?>
                <h4>
                    
                    <a href="ProductDetail.php?name=<?Php echo$image_id?>"> 
                    <?php  echo$row['name']?>
                    <?php echo'</a>';?>
                </h4>
                <p>Rs.
                    <?php echo$row['price']?>
                </p>
                </div>;
        <?php }
        
            ?>


    </div>
    <div class="pagebtn">
        <span>1</span><span>2</span><span>3</span><span>&#8594</span>
    </div>
    </div>

    <!-- ---------------------------------- -->

    <!-- ----------------About---------------------- -->
    <?php
    include('footer.php');?>



</body>

</html>