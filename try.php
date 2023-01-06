<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM users WHERE User_ID = $id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang = "en">
<head>
	
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edgge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href= "StarbsL.png" type="image">
    <link rel="stylesheet" href="try.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Starbucks</title>
	
       
</head>

<body>
    <header>
        <div class="nav container">
            <a href="#" class="logo">Starbucks</a>
            <i class='bx bxs-cart' id="cart-icon"></i>
            <div class="cart">
                <h2 class="cart-title">Your Cart</h2>

                <div class="cart-content">
                    
                </div>
                <div class="total">
                    <div class="total-title">Total: </div>
                    <div class="total-price">₱0</div>
                </div>
              
                <i class="bx bx-x" id="close-cart"></i>
                <div class="payment">
                    <div class="pay-title">Payment:</div>
                    <input type="text" id="payments" class="payments">
                </div>
                <div class="change">
                    <div class="change-title">Change: </div>
                    <div class="change-price">₱0</div>
                </div>
                <button type="button"class="btn-buy">Buy</button>
                <button type="button"class="btn-clr">Clear</button>
               
            </div>
        </div>
    </header>
	
    <section class="shop container">
        <h2 class="section-title">MENU</h2>
        <div class="shop-content">
            <!--BOX 1-->
            <div class="product-box">
                <img src="cafe/ChaiTeaCreamFrappuccino.jpg" alt="" class="product-img">
                <h2 class="product-title">Chai Tea Cream Frappuccino</h2><br>
                <span class="price">₱155.00</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
            <!--BOX 2-->
            <div class="product-box">
                <img src="cafe/CaffeMisto.jpg" alt="" class="product-img">
                <h2 class="product-title">Caffe Misto</h2><br>
                <span class="price">₱115.00</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
            <!--BOX 3-->
            <div class="product-box">
                <img src="cafe/Espresso.jpg" alt="" class="product-img">
                <h2 class="product-title">Espresso</h2><br>
                <span class="price">₱125.00</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
            <!--BOX 4-->
            <div class="product-box">
                <img src="cafe/FlatWhite.jpg" alt="" class="product-img">
                <h2 class="product-title">FlatWhite.</h2><br>
                <span class="price">₱205.00</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
            <!--BOX 5-->
            <div class="product-box">
                <img src="cafe/GreenTeaCreamFrappuccino.jpg" alt="" class="product-img">
                <h2 class="product-title">Green Tea Cream Frappuccino</h2><br> 
                <span class="price">₱205.00</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
            <!--BOX 6-->
            <div class="product-box">
                <img src="cafe/IcedMatchaandEspressoFusion.jpg" alt="" class="product-img">
                <h2 class="product-title">Iced Matcha and Espresso Fusion</h2><br>
                <span class="price">₱215.00</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
            <!--BOX 7-->
            <div class="product-box">
                <img src="cafe/JavaChipFrappuccino.jpg" alt="" class="product-img">
                <h2 class="product-title">Java Chip Frappuccino</h2><br>
                <span class="price">₱210.00</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
            <!--BOX 8-->
            <div class="product-box">
                <img src="cafe/TripleMochaFrappuccino.jpg" alt="" class="product-img">
                <h2 class="product-title">Triple Mocha Frappuccino</h2>
                <span class="price">₱205.00</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
			<a href="LogOut.php">Log Out</a>
        </div>
    </section>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/main.js"></script>
</body>    
</html>