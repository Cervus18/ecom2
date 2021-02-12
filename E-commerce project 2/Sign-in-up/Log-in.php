<?php
  include "../connect/conn.php";

  if(isset($_POST['submit'])){

     $username=$_POST['username'];
     $password=$_POST['password'];

     if(!empty($username) && !empty($password)){
         //read from data base
    
         $query="SELECT * FROM users WHERE username='$username' ";
         $result=mysqli_query($db,$query);
         
         if($result && mysqli_num_rows($result)>0){
            $user_data=mysqli_fetch_assoc($result);
            if($user_data['password']===$password &&$user_data['status']==='admin' ){
                session_start();
                $_SESSION['user_id']=$user_data['user_id'];
                header("Location: ../dashboard/dashboard.php");
                die;
            }elseif($user_data['password']===$password){
                session_start();
                $_SESSION['user_id']=$user_data['user_id'];
                header("Location: ../Landing page/Landing.php");
                die;
            }
          

         }
        
         
         
    
        

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
    <title>Log in</title>
</head>
    
<body>

    <nav>
        <a class="logo" href="../Landing page/Landing.php">
            <spanv style="font-family: 'Montserrat Alternates', sans-serif;">WeeShopin</span>
            <i class="fas fa-gem"></i>
        </a>
    </nav>
    <form class="container" action="" method="POST">
        <input type="text" placeholder="Username " name="username" required>
        <input type="password" placeholder="password" name="password" required>
        <input type="submit" value="Log in" name="submit">
        <span style="color:#818181;">Don't have an account?<a href="Sign-up.php"> Sign up</a></span>

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