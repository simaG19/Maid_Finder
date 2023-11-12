<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $phone = mysqli_real_escape_string($conn, $_POST['phone']);
   $address = mysqli_real_escape_string($conn, $_POST['address']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn,$_POST['password']);
   $cpass = mysqli_real_escape_string($conn,$_POST['cpassword']);
   $user_type = 'company';

   $select = " SELECT * FROM user_form WHERE phone = '$phone' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user_form(name, phone, address, password, user_type) VALUES('$name','$phone','$address' ,'$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:pending_broker.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>
   
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style1.css">
<!-- swiper css link  -->
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<body>
<!-- header -->
<div class="nav">
        <h1 class="logo">Maid<span>SITE</span></h1>
        <ul>
     
        <li><a href="admin_page1.php">Home</a></li>
        <li><a href="logout.php">Logout</a></li>
        
      </ul>
    </div>


<div class="form-container">

   <form action="" method="post">
      <h3>register now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="enter name">
     
      <input type="text" name="phone" required placeholder="phone number">
      <input type="text" name="address" required placeholder="enter address">
      
      <input type="password" name="password" required placeholder="enter password">
      <input type="password" name="cpassword" required placeholder="confirm password">
      
      <input type="submit" name="submit" value="register now" class="form-btn">
     
   </form>

</div>



</body>
</html>