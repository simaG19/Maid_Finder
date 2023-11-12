<?php

@include 'config.php';
$id=$_GET['updateid'];

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $phone = mysqli_real_escape_string($conn, $_POST['phone']);
   $address = mysqli_real_escape_string($conn, $_POST['address']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn,$_POST['password']);
   $cpass = mysqli_real_escape_string($conn,$_POST['cpassword']);
   $user_type = 'company';

   $query = "update user_form set  name='" . $_POST['name'] . "', phone='" . $_POST['phone'] . "', email='" . $_POST['email'] . "',address='" . $_POST['address'] . "',password='" . $_POST['password'] . "'  where name= '".$_GET['updateid']."'";
   $result = mysqli_query($conn, $query);

   if($result){

     echo 'updated successfuly';
     header('location:pending_broker.php');

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
      <h3>Update now</h3>
      <?php
      $sql = "SELECT  * FROM user_form  WHERE name=  '".$_GET['updateid']."'";

      $result = mysqli_query($conn ,$sql);
      $row = mysqli_fetch_array($result);
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <lable>Name<lable>
      <input type="text" name="name" value="<?php echo $row['name'];?>">
      <lable>phone<lable>
      <input type="text" name="phone" value="<?php echo $row['phone'];?>">
      <lable>address<lable>
      <input type="text" name="address" value="<?php echo $row['address'];?>">
      <lable>Email<lable>
      <input type="email" name="email" value="<?php echo $row['email'];?>">
      <lable>Password<lable>
      <input type="password" name="password" value="<?php echo $row['password'];?>">
  
      <button type='submit' name='submit'>update</button>
     
   </form>

</div>

<style>
   button{
      background-color: #4CAF50;
      padding: 15px 32px;
      color: white;

   }
</style>

</body>
</html>