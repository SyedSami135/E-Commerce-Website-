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
    <div class="header">
    <body><?php
include('header.php');

?>
            <div class="row">

                <div class="col2">
                    <h1>We Are Here To
                        <br>Serve You!</h1>
                    <br>
                    <p> we will be there where ever you want!</p>
                    <a href="ProductPage.php" class="btn"> Explore &#8594</a>
                </div>
                <div class="col1">
                    <img src="images/homepage.png">
                </div>
            </div>
        </div>
    </div>





    <!-- --------------------------------------- -->
    <div class="category">
        <div class="sContainer">
            <div class="row">
                <div class="col3"><img src="images/category-1.jpg"></div>
                <div class="col3"><img src="images/category-2.jpg"></div>
                <div class="col3"><img src="images/category-3.jpg"></div>
            </div>
        </div>
    </div>
    <!-- --------------------------------------- -->
    <div class="sContainer">
        <h2 class="title">Featured Products</h2>
        <div class="row">

            
                <?php
                
                include('connection.php');
                $sql_query="SELECT * FROM `product` LIMIT 4";
                $filepath="";

                $result=mysqli_query($conn,$sql_query);
                while( $row=mysqli_fetch_array($result)){
                    $filepath=$row['img'];
                    $image_id=$row['id'];
                    echo'<div class="col4">';?>
                    
                    <a href="ProductDetail.php?name=<?Php echo$image_id?>"> 
                    <?php  echo"<img src='$filepath'/>"?>
                    <?php echo'</a>';?>
                   

                    <a href="ProductDetail.php?name=<?Php echo$image_id?>"> 
                    <h4><?php echo$row['name']?></h4>
                    <?php echo'</a>';?>
                    
                    <p>Rs. <?php echo$row['price']?></p>
                   <?php echo'</div>';?>
               <?php }
                ?>
            


        </div>

        <!-- ----------------------------------------- -->
        <div>
            <h2 class="title">New Arrival</h2>
        </div>
        <div class="row">

            
        <?php
                
               
                $sql_query="SELECT * FROM `product`lIMIT 8 OFFSET 4";
                $filepath="";

                $result=mysqli_query($conn,$sql_query);
                while( $row=mysqli_fetch_array($result)){
                    $filepath=$row['img'];
                    $image_id=$row['id'];
                    echo'<div class="col4">';
                    ?>
                    
                    <a href="ProductDetail.php?name=<?Php echo$image_id?>"> 
                    <?php  echo"<img src='$filepath'/>"?>
                    <?php echo'</a>';?>
                   

                    <a href="ProductDetail.php?name=<?Php echo$image_id?>"> 
                    <h4><?php echo$row['name']?></h4>
                    <?php echo'</a>';?>
                    
                   
                    
                    <p>Rs. <?php echo$row['price']?></p>
                   <?php echo'</div>';?>
               <?php }
                ?>
            
            


        </div>
    </div>
    <!-- ---------------------------------- -->
    <div class="offer">

        <div class="sContainer">

            <div class="row">
                <div class="col2">
                    <a href="ProductDetail.php?name=13">
                    <img src="images/coat.jpg" class="img">
                </a></div>
                <div class="col3">
                    <p>Flat 30% off for first 10 Customers! <br> We brings the most Anticipated Elegent & high-quality Suit that set you appart from the rest to make your special occasion remarkable</p>
                    <h1>Blue Pant Coat </h1>
                    <a href="ProductPage.php" class="btn">Buy Now &#8594</a>
                </div>
            </div>
        </div>
    </div>

    <body><?php
include('footer.php');

?>
</body>

</html>