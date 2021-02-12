<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WeeShopin</title>
</head>
<body>
    <nav>
        <a class="logo" href="#">
            <span style="font-family: 'Montserrat Alternates', sans-serif;">WeeShopin</span>
            <i class="fas fa-gem"></i>
        </a>
        
        <?php session_start(); if(isset($_SESSION['user_id'])):?>
        <div class="wrapper">
        <div class="search-bar-container">
            <input type="text" class="search-bar" placeholder="What are you looking for...">
            <button class="search">Search</button>
        </div>
          <ul>
              <li><a  class="navlinks" href="../Profil edit/profil.php">Edit profil </a></li>
              <li><a  class="navlinks" href="../logout/logout.php">Logout</a></li>
          </ul>
        </div>
        <?php else: ?>
        <div class="wrapper">
          <div class="search-bar-container">
              <input type="text" class="search-bar" placeholder="What are you looking for...">
              <button class="search">Search</button>
          </div >
          <a class="navlinks" style="margin:15px;" href="../Sign-in-up/Log-in.php">Login</a>
        </div > 
        <?php endif ;?>
    </nav>
 

   <div class="app-add"><span>Get our new App for FREE on Appstore and Playstore<a href="#"><i class="fas fa-gem"></i></a></span><button id='remove'>x</button></div>
     
     <div class="main">
         <div class="block1">
             <div class="categories">Categories</div>
             <a href="../Categories/Phones/Phones.php">Mobile</a>
             <a href="../Categories/Laptops/Laptops.php">Laptops</a>
             <a href="../Categories/TVs/TVs.php">TVs</a>
         </div>
         <div class="block2">
             <img src="main.png" alt="">
         </div>
     </div>

     <div class="trending">
         <a href="../item description page/Laptops/pc.php?id=1"><img src="../Categories/Laptops/pc1.png" alt=""></a>
         <a href="../item description page/Laptops/pc.php?id=4"><img src="../Categories/Laptops/pc4.jpg" alt=""></a>
         <a href="../item description page/Phones/phone.php?id=22"><img src="../Categories/Phones/phone4.jpg" alt=""></a>
         <a href="../item description page/TVs/tv.php?id=29"><img src="../Categories/TVs/TV2.jpg" alt=""></a>
         <a href="../item description page/TVs/tv.php?id=32"><img src="../Categories/TVs/TV5.jpg" alt=""></a>
         <a href="../item description page/Phones/phone.php?id=20"><img src="../Categories/Phones/phone2.jpg" alt=""></a>
     </div>

     
     <div class="trending top-sales">
        <a href="../item description page/Laptops/pc.php?id=5"><img src="../Categories/Laptops/pc5.jpg" alt=""></a>
        <a href="../item description page/Laptops/pc.php?id=6"><img src="../Categories/Laptops/pc6.jpg" alt=""></a>
        <a href="../item description page/Phones/phone.php?id=23"><img src="../Categories/Phones/phone5.jpg" alt=""></a>
        <a href="../item description page/TVs/tv.php?id=34"><img src="../Categories/TVs/TV7.jpg" alt=""></a>
        <a href="../item description page/TVs/tv.php?id=36"><img src="../Categories/TVs/TV9.jpg" alt=""></a>
        <a href="../item description page/Phones/phone.php?id=27"><img src="../Categories/Phones/phone9.jpg" alt=""></a>
    </div>

     
    
    <div class="black-friday">
        <img src="backfriday.jpg" alt="">
    </div>

    <div class="more">
        <div class="email">
            <input type="email" placeholder="Enter your email to receive the latest news"><button>Subsrcibe</button>
        </div>
        <div class="info">
            <a href="#">About Us</a>
            <a href="#">Contact Us</a>
            <a href="#">Policies & Rules</a>
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
    


    <script>
       document.getElementById('remove').addEventListener('click',()=>{
           document.querySelector('.app-add').style.visibility='hidden'
       }) 
    </script>
</body>
</html>