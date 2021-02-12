<?php
include "../../connect/conn.php";

if(isset($_POST['submit'])){
header("Location:../../Sign-in-up/Log-in.php");
}
$id=$_GET['id'];
$query="SELECT * FROM product WHERE id='$id'";
$result=mysqli_query($db,$query);

$data=mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="../style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['name'] ?></title>
</head>
<body>
    <nav>
        <a class="logo" href="../../Landing page/Landing.php">
            <span style="font-family: 'Montserrat Alternates', sans-serif;">WeeShopin</span>
            <i class="fas fa-gem"></i>
        </a>
        <div class="search-bar-container">
            <input type="text" class="search-bar" placeholder="What are you looking for...">
            <button class="search">Search</button>
        </div>

    </nav>
    <div class="container">
        <div class="block1">
            <img src="../../Categories/TVs/<?php echo $data['path'] ?>" >
        </div>
        <div class="block2">
            <div></div>
            <form action="<?php
            session_start();
            if(isset($_SESSION['user_id'])){
               echo "../../final payment/final-payment.php";
            }
             ?>" method="POST">
                <input id="buy"  type="submit" name="submit" value="Proceed to buy">
                <input id="hidden" type="hidden" name="price">
                <input type="hidden" id="product_id" name="product_id" value="<?php echo $data['id'] ?>">
                <input type='hidden' id="product_price"  name="product_price" value="<?php echo $data['price'] ?>">
            </form>
            <input type="number" class="pieces" min="1" max="20" value="1">
            <div class="price"><?php echo $data['price'] ?>$</div>
            <div class="product-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem sed reprehenderit a sequi. Fugiat consectetur beatae impedit dignissimos libero dolorum debitis iusto enim autem nihil quo inventore rerum fuga animi adipisci molestiae praesentium eveniet perspiciatis ullam voluptate fugit, suscipit delectus? Est sit qui quasi repellendus consectetur, dolorem dicta aspernatur deserunt, delectus cumque mollitia, repellat tempore nam minima in dolorum ipsam consequatur necessitatibus inventore? Debitis itaque rerum impedit quisquam officiis! Harum eum, consequatur, repellat cupiditate, quis magnam maiores ipsam consequuntur unde quam id sunt inventore. Ratione quae itaque laboriosam, optio dicta assumenda nostrum obcaecati et earum, ipsam velit magni praesentium omnis!</div>
        </div>
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
    <script src="../app.js"></script>

</body>
</html>