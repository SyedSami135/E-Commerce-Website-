<?php
session_start();
$_SESSION['items']=array();
if(isset($_SESSION['username'])){
    
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
    <title>SS Collections</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css">

    <link rel="stylesheet" href="SS Collections.css">
</head>

<body>
 
    <?php
    include('header.php');
   
   
   
?>
    <!-- --------------------------------------- -->

    <div class="sContainer single">
        <div class="row">
       
       
             
             <?php
            
                $id=$_GET['name'];
                
                include('connection.php');
                $sql_query="SELECT * FROM `product`  WHERE id=$id";
                $filepath="";
                $producttype="";
               


                $result=mysqli_query($conn,$sql_query);
                 $row=mysqli_fetch_array($result);
                    $filepath=$row['img'];?>
                  <?php  
                  $producttype=$row['type']; 
                  echo'<div class="col2">';?>
                    
                   <?php echo"<img  width='80%'  src='$filepath'/>";?>
                    <?php echo'</div>';?>
                    <?php $filepath=$row['type'];?> 
                    
                      
                
               
        
            

            <div class="col2">
            
                <h1><?php echo$row['name']?></h1>
                <h4>RS. <?php echo$row['price']?></h4>
                <select name="Size" id="Size">
                <option value="">Select Size</option> 
                <option value="">Extra Large</option>
                <option value="">Large</option> 
                <option value="">Medim</option> 
                <option value="">Small</option>
                </select> <input type="number" value="1" length="5px"><br>
                <!-- <a href="shopping_cart.php" > -->
                <button onclick="addtocart()" type="submit"  class="btn" name="cart">Add to Cart</button>
                <!-- </a> -->
                <h2>Product Details</h2>
                <p> <?php echo$row['des'];
                 
                
                ?>
                </p>
            </div>
        </div>
    </div>
    <!-- ======================== -->
    <div class="sContainer">
        <div class="rows ">
            <h2>Related products</h2>
            <a href="ProductPage.HTML">
                <p>view more</p>
            </a>

        </div>
    </div>

    <!-- --------------------------------------- -->
    <div class="sContainer">

        <div class="row">
        <?php
                
                
                $sql_query="SELECT * FROM `product` WHERE type='$producttype' lIMIT 4  ";
                $filepath="";
                

                $result=mysqli_query($conn,$sql_query);
                while( $row=mysqli_fetch_array($result)){
                    $filepath=$row['img']; 
                    $image_id=$row['id'];
                    echo'<div class="col4">'; ?>
                    <a href="ProductDetail.php?name=<?Php echo$image_id?>"> 
                    <?php  echo"<img  src='$filepath'/>"?>
                    </a>
                   
                   
                    <h4> 
                    <a href="ProductDetail.php?name=<?Php echo$image_id?>"> 
                    <?php  echo$row['name']?>
                    <?php echo'</a>';?>
                    
                </h4>
                    <p>Rs. <?php echo$row['price']?></p>
                   <?php echo'</div>';?>
               <?php }
            
                ?>
            
        </div>
    </div>

    <!-- ---------------------------------- -->
<?php
  
   include('footer.php')?>
<script>
function addtocart(){
  
    alert("Hello");

    <?php
    array_push($_SESSION['items'],$id);
    ?>
    
    

    }


</script>
</body>

</html>