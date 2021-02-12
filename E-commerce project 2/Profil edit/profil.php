<?php 
include '../connect/conn.php';

session_start();
if(isset($_SESSION['user_id'])){
$id=$_SESSION['user_id'];

if(isset($_POST['submit'])){
   $username=$_POST['username'];
   $password=$_POST['password'];
   $phone=$_POST['phone'];

   if(!empty($username) && !empty($password)  && !empty($phone)){
       $query="UPDATE users SET username='$username' ,password='$password', phone='$phone' WHERE user_ id='$id'";
       mysqli_query($db,$query);
       header('Location: ../Landing page/Landing.php');
       die;

   }
}


$query="SELECT * FROM users WHERE user_id='$id'";
$result=mysqli_query($db,$query);
$user_data=mysqli_fetch_assoc($result);


}


?>

<?php if(isset($_SESSION['user_id'])): ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="../Sign-in-up/style.css">
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
        <input type="text" placeholder="Username " name="username" value="<?php echo $user_data['username'] ?>" required>
        <input type="number" placeholder="Phone number " name="phone" value="<?php echo $user_data['phone'] ?>"  required>
        <input type="password" placeholder="new password" name="password" required>
        <input type="submit" value="Save changes" name="submit">
       

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

<?php else: ?>
ERROR:you can't access this page directly
<?php endif ?>