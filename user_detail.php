<?php

@include 'config.php';

if(isset($_GET['detid']))
{  
    
      $user=$_GET['detid'];  
     
  
 $sql = "SELECT  * FROM maid_form  WHERE id= '$user' ";
   
    
      $result = mysqli_query($conn ,$sql);
     
      $row = mysqli_fetch_array($result);
if(isset($_POST['submit'])){

   $uname = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['phone']);

  
   $fname = mysqli_real_escape_string($conn, $row['fname']);
   $lname = mysqli_real_escape_string($conn, $row['lname']);
   
   $age = mysqli_real_escape_string($conn, $row['age']);
   $address = mysqli_real_escape_string($conn, $row['address']);
   $experience = mysqli_real_escape_string($conn, $row['experience']);
   $salary = mysqli_real_escape_string($conn, $row['salary']);
 $lang = mysqli_real_escape_string($conn, $row['language']);
$disc = mysqli_real_escape_string($conn, $row['disc']);
   $broker = mysqli_real_escape_string($conn,$row['broker']);
   

         $check="SELECT *FROM maid_form where fname='$user' && uph='$email' ";
         $result1 = mysqli_query($conn, $check);

         if(mysqli_num_rows($result1) > 0){
      
            $error[] = "you have already applied to '$user'";
      
         }else{

        $insert = "INSERT INTO Maid_form(fname, lname, age, address, experience, salary, broker,disc,language,book,uph,uname) VALUES('$fname', '$lname', '$age', '$address', '$experience','$salary', '$broker','$disc','$lang','requsted','$email','$uname') ";
       $result= mysqli_query($conn, $insert);

       
if($result){
   echo '<script>alert("aplied")<script>';
header('location:view_job.php');
}
  
}
}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register </title>
   
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
        <li><a href="login_form.php">logout</a></li>
        <li><a href="home.php">Home</a></li>
        <li><a href="about.php">About</a></li>
      </ul>
    </div>


<div class="form-container">

   <form action="" method="post">
      <h3>Apply </h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="enter your name">
      <input type="text" name="phone" required placeholder="enter your phone number">
    
      <input type="submit" name="submit" value="submit" class="form-btn">
     
   </form>

</div>



</body>
</html>