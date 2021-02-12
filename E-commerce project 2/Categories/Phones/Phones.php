
<?php

require '../../connect/conn.php';

$query="SELECT * FROM product WHERE categorie='phone' ";
$result=mysqli_query($db,$query);

$products=mysqli_fetch_all($result,MYSQLI_ASSOC);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="../style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile</title>
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
  <div class="section"><span style="font-size:16px; font-weight:400;"><a href="../TVs/TVs.php">TVs</a></span><span>Mobile</span><span style="font-size:16px; font-weight:400;"><a href="../Laptops/Laptops.php">Laptops</a></span></div>
  <div class="container">
    <div class="cards">
    <?php foreach($products as $product):?>
        
        <div class="card">
            <a href="../../item description page/Phones/phone.php?id=<?php echo $product['id'] ?>"><img src="<?php echo $product['path'] ?>" alt=""></a> 
            <div class="description">
                <p class="product"><?php echo $product['name'] ?></p>
                <p class='price'><?php echo $product['price']?>$</p>
            </div>
        </div>

    <?php endforeach ?>


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
    
</body>
</html>