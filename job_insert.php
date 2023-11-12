


<?php


@include 'config.php';

if (isset($_POST['submit']) && isset($_FILES['my_image'])){

   $img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];

   $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
   $img_ex_lc = strtolower($img_ex);

   $allowed_exs = array("jpg", "jpeg", "png","jfif"); 

   if (in_array($img_ex_lc, $allowed_exs)) {
      $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
      $img_upload_path = 'uploads/'.$new_img_name;
      move_uploaded_file($tmp_name, $img_upload_path);}

//   $pname=rand(1000,1000)."-".$_FILES["file"]["name"];

//   $tname=$_FILES["files"]["tmp_name"];

//   $uploads_dir='/images';

//   move_uploaded_file($tname,$uploads_dir.'/'.$pname);

 


    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    
    $age = mysqli_real_escape_string($conn, $_POST['age']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $experience = mysqli_real_escape_string($conn, $_POST['experience']);
    $salary = mysqli_real_escape_string($conn, $_POST['salary']);
  $lang = mysqli_real_escape_string($conn, $_POST['language']);
$disc = mysqli_real_escape_string($conn, $_POST['disc']);
    $broker = mysqli_real_escape_string($conn,$_POST['broker']);
    
    
 
         $insert = "INSERT INTO Maid_form(fname, lname, age, address, experience, salary, broker, idpic,disc,language,book) VALUES('$fname', '$lname', '$age', '$address', '$experience','$salary', '$broker','$new_img_name','$disc','$lang','unbooked')";
         mysqli_query($conn, $insert);
         header('location:maids.php');

};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
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
        <li><a href="logout.php">logout</a></li>
       
        <li><a href="home.php">Home</a></li>
        <li><a href="get_applications.php">applications</a></li>
      </ul>
    </div>

<!-- header section ends -->

<div class="heading" style="background:url(images/home-hero-background.svg) no-repeat">
   <h1>Register Maid</h1>
</div>
   
<div class="form-container">

   <form action="" method="post" enctype="multipart/form-data">
      <h3>insert Maid</h3>
      <?php
      session_start();
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="fname" required placeholder="enter Name">
      <input type="text" name="lname" required placeholder="enter Father name">
      <input type="date" name="age" required placeholder="age">
      <input type="text" name="address" required placeholder="enter address">
      <input type="number" name="experience" required placeholder="enter experience of years">
      <input type="number" name="salary" required placeholder="enter salary">
      <input type="text" name="language" required placeholder="Language">
      <input  type="text" name="disc" required placeholder="self-description" style="height:120px; width:750px;">
      
      <lable><h4>identification Card</h4><lable>
      <input type="file" name="my_image" required placeholder="id">
     
     
      <input type="text" name="broker"  value="<?php echo $_SESSION['user_name']?>">
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>already registerd a maid? <a href="get_applications.php?"> see applications</a></p>
     
   </form>

</div>




</body>
</html>