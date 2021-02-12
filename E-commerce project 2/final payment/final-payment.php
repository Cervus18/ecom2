<?php
    include '../connect/conn.php';
    include "function.php";
     
    session_start();
    

    if(isset($_POST['pay'])){
        $adress=$_POST['adress'];
        $total_price=$_POST['price'];
         $product_price=$_POST['product_price'];

        $product_id=$_POST['product_id'];
        $user_id=$_SESSION['user_id'];
    
        $achat_id=random_num(20);
        $quantity=$total_price/$product_price;
     if(!empty($adress)){ 
         $query="INSERT INTO achat (user_id,product_id,achat_id,quantity,adress) VALUES ('$user_id','$product_id','$achat_id','$quantity','$adress')";
         mysqli_query($db,$query);
         header("Location: Thankyou.php");
       }
     
         
    }
   




?>

<?php if($_SERVER['REQUEST_METHOD']=='POST'): ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final Payment</title>
</head>
<body>
    <nav>
        <a class="logo" href="../Landing page/Landing.php">
            <span style="font-family: 'Montserrat Alternates', sans-serif;">WeeShopin</span>
            <i class="fas fa-gem"></i>
        </a>
    </nav>
    <div class="container">
        <div class="block1">
            <div class="summary">
                <p><?php  echo $_POST['price'] ;?>$</p>

                <form id="form" action="" method="POST">
                   <input  type="submit" value="End payment" name="pay">
                   <!--<input id="hidden" type="hidden" name="price">-->
                   <input type="hidden" name="price" value="<?php echo $_POST['price'] ?>">
                   <input type="hidden" name="product_price" value="<?php echo $_POST['product_price'] ?>">
                   <input type="hidden" name="product_id" value="<?php echo $_POST['product_id'] ?>">
                </form>
            </div>
            <div class="master-card">
                <input type="radio" name="card" id="master-card" checked><label  for="master-card">Master Card</label>
                <img src="mastercard-logo.png" >
            </div>
            <div class="paypal">
                <input type="radio" name="card" id="paypal"><label for="paypal">PayPal</label>
                <img src="paypal-logo.png" >
            </div>
        </div>
        <form class="block2">
            <input  type="number" placeholder="Phone number">
            <input form="form"  type="text" placeholder="Delivery adress" name="adress">
            <input  type="text" placeholder="Card name">
            <input  type="password" placeholder="Card number">
            <input  type="text" placeholder="MM/YY">
            <input  type="password" placeholder="Security code">
            <div>
                <input type="checkbox" checked id="check">
                <label for="check">Remember this card</label>
            </div>
            
        </form>
    </div>
    <footer>
        <div class="social-media">
            <span>Follow us:</span>
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter-square"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
        </div>

        <div class="copyright">
            WeeShopin | &copy E-commerce 2020 | All rights resrved
        </div>
        <div class="privacy">  <a href="#">Privacy policy</a> </div>
    </footer>


    <script>
        document.getElementById('hidden').value=+document.querySelector('p').innerHTML.replace('$','');;
        
    </script>
</body>
</html>
<?php else: ?>
ERROR:you can't access this page directly
<?php endif ?>