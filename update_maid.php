<?php
session_start();
@include 'config.php';
$id=$_GET['upid'];

if(isset($_POST['submit'])){

 

   $fname = mysqli_real_escape_string($conn, $_POST['fname']);
   $lname = mysqli_real_escape_string($conn, $_POST['lname']);
   $age = mysqli_real_escape_string($conn, $_POST['age']);
   $address = mysqli_real_escape_string($conn, $_POST['address']);
   $experience = mysqli_real_escape_string($conn,$_POST['experience']);
   $salary = mysqli_real_escape_string($conn,$_POST['salary']);
   $language = mysqli_real_escape_string($conn,$_POST['language']);
   $desc = mysqli_real_escape_string($conn,$_POST['desc']);
  // $idpic = mysqli_real_escape_string($conn,$_POST['idpic']);
  // $salary = mysqli_real_escape_string($conn,$_POST['salary']);
   //$user_type = 'company';

   $query = "update maid_form set  fname='" . $_POST['fname'] . "', lname='" . $_POST['lname'] . "', age='" . $_POST['age'] . "', address='" . $_POST['address'] . "',experience='" . $_POST['experience'] . "',salary='" . $_POST['salary'] . "',language='" . $_POST['language'] . "' ,disc='" . $_POST['desc'] . "'  where id= '".$_GET['upid']."' ";
   $result = mysqli_query($conn, $query);

   if($result){

    $_SESSION['status']="Updated Successfully";
     header('location:maids.php');

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
      $sql = "SELECT  * FROM maid_form  WHERE id=  '".$_GET['upid']."'";

      $result = mysqli_query($conn ,$sql);
      $row = mysqli_fetch_array($result);

      $bro=$row['broker'];
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <lable>Fisrt Name<lable>
      <input type="text" name="fname" value="<?php echo $row['fname'];?>">
      <lable>Last Name<lable>
      <input type="text" name="lname" value="<?php echo $row['lname'];?>">
      <lable>Birth Year<lable>
      <input type="text" name="age" value="<?php echo $row['age'];?>">
      <lable>Address<lable>
      <input type="text" name="address" value="<?php echo $row['address'];?>">
      <lable>Experiance<lable>
      <input type="text" name="experience" value="<?php echo $row['experience'];?>">
      <lable>Salary<lable>
      <input type="text" name="salary" value="<?php echo $row['salary'];?>">
      <lable>Language<lable>
      <input type="text" name="language" value="<?php echo $row['language'];?>">
      <lable>Description<lable>
      <input type="text" name="desc" value="<?php echo $row['disc'];?>">
      
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