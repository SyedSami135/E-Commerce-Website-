<?php
session_start();
$_SESSION['items']=array();

if(isset($_SESSION['username'])){
   
   }


else{ header("Location:login.php");
}
?>


<!DOCTYPE html>
<html>

<head>
    <link rel='stylesheet' href="indexx.css">
    <title>HTML Shopping Cart</title>
    <!-- <link rel="stylesheet" href="index.js"> -->
</head>

<body>
    
<?php


 include('connection.php')?>


<?php
 include('header.php')?>


                    

    <div class="shopping-cart">
        <!-- Title -->
        <div class="tittle">
            Shopping Bag
        </div>

        <?php
        
                $i=0;
                
                while($i<1){
               
               

                $sql_query="SELECT * FROM `product` LIMIT 2";
                $filepath="";

                $result=mysqli_query($conn,$sql_query);
                while( $row=mysqli_fetch_array($result)){
                    $filepath=$row['img'];
                    $image_id=$row['id'];
                    $price=$row['price'];
                   
                    ?> <div class="item">
                    <div class="buttons">
                        <span class="delete-btn"></span>
                        <span class="like-btn"></span>
                    </div>
        
                    <div class="image">
                       
                    <?php echo"<img  width='65px' height='90px'  src='$filepath'/>";?>
                            
                    </div>
        
                    <div class="description">
                        <span><?php echo$row['name'];?></span>
                        <span>Rs. <?php echo$row['price'];?></span>
                        <span><?php echo$row['type'];?></span>
                        
                    </div>
        
                    <div class="quantity">
                        <button onclick="add(<?php echo$row['name']?>)"  class="plus-btn" type="button" name="button">
                    <img src="plus.svg" alt="Add Item" />
                  </button>
                        <input type="number" id="qty" name="name" value="1">
                        <button class="minus-btn" onclick="sub()" type="button" name="button">
                    <img src="minus.svg" alt="Remove Item" />
                  </button>
                  </div>
        
                    <div   class="total-price">Rs. <span id="price" > <?php echo$row['price'];?></span></div>
                </div>
                    
                
                <?php  }
                $i++;}
                
       
                   ?>
      <div class="item "><span>Rs. </span> </div>
            

    </div>
    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src='./index.js'></script> -->
    <script>
        function add(){
            
            var qty =Number (document.getElementById("qty").value);
            
            qty ++ ;
            
            document.getElementById('qty').value=qty;
            var price = Number (document.getElementById("price").value);
           alert(price);
            var cal=price*qty;
            document.getElementById('price').textContent=cal;
        }
        function sub(){
            
            var qty =Number (document.getElementById("qty").value);
            if(qty>1){
            qty-- ;
            document.getElementById('qty').value=qty;}
            var price = "<?php echo $price; ?>";
            cal=price*qty;
            document.getElementById('price').textContent=cal;

        }
    </script>
<?php
 include('footer.php')?>

</body>

</html>