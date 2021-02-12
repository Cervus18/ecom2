
<?php session_start();
if(isset($_SESSION['user_id'] ) && $_SESSION['user_id']==1): ?>

<?php
include '../connect/conn.php';
$query="SELECT users.user_id,users.username,achat.adress,product.name,achat.quantity FROM users JOIN achat ON achat.user_id=users.user_id JOIN product ON product.id=achat.product_id";
$result=mysqli_query($db,$query);

$users_data=mysqli_fetch_all($result,MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <nav>
        <a class="logo" href="">
            <spanv style="font-family: 'Montserrat Alternates', sans-serif;">WeeShopin</span>
            <i class="fas fa-gem"></i>
        </a>
        <a href="../logout/logout.php">logout</a>
    </nav>
     
     <main>
        <div class="head">
           <span>id</span>
           <span>username</span>
           <span>adress</span>
           <span>product</span>
           <span>quantity</span>

        </div>
        

        <div class="body">
        <?php foreach($users_data as $data):?>
           <div class="info">
           <span><?php echo $data['user_id'] ?></span>
           <span><?php echo $data['username'] ?></span>
           <span><?php echo $data['adress'] ?></span>
           <span><?php echo $data['name'] ?></span>
           <span><?php echo $data['quantity'] ?></span>
           </div>
        <?php endforeach ?>
   
        </div>
     </main>
    <footer></footer>




<script src="app.js"></script>
</body>
</html>

<?php else:  ?>
    You are not allowed to access  this page
<?php endif ?>
