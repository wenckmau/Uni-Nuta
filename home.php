<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/add_cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Acasa</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />


   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">


   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>

<br><br><br><br><br><br><br><br><br><br><br><br>
<div class="title">
Bine ati venit!
</div>
<br><br><br><br><br><br><br><br>
<div style="box">

<p style="color:white" align="center"> sadasd </p>
</div>

<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>
<center>

   <a href="contact.php">
   <div  class="btn">  
   Vreo nelămurire? Click aici!
</div>
</a>

</center>


</body>
</html>