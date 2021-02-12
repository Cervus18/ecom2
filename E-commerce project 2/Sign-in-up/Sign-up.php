<?php 
include '../connect/conn.php';


if(isset($_POST['submit'])){
   $username=$_POST['username'];
   $password=$_POST['password'];
   $phone=$_POST['phone'];

   if(!empty($username) && !empty($password)  && !empty($phone)){
       $query="INSERT INTO users (username,password,phone) VALUES ('$username','$password','$phone') ";
       mysqli_query($db,$query);
       header('Location: Log-in.php');
       die;

   }
   
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
    
<body>

    <nav>
        <a class="logo" href="../Landing page/Landing.php">
            <span style="font-family: 'Montserrat Alternates', sans-serif;">WeeShopin</span>
            <i class="fas fa-gem"></i>
        </a>
    </nav>
    <form class="container" action="" method="POST">
        <input type="text" placeholder="Username " name="username" required>
        <input type="number" placeholder="Phone number " name="phone" required>
        <input type="password" placeholder="password" name="password" required>
        <input type="submit" value="Sign up" name="submit">
        <span style="color:#818181;">Already member?<a href="Log-in.php"> Log in</a></span>

    </form>

    <footer>
        <div class="social-media">
            <span>Follow us:</span>
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter-square"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
        </div>

        <div class="copyright">
            WeeShopin |&copy  E-commerce 2020 | All rights resrved
        </div>
        <div class="privacy">  <a href="#">Privacy policy</a> </div>
    </footer>
</body>
</html>