<?php

@include 'config.php';
//use isset() function to check $_POST['submit'] method
//mysqli_real_escape_string() function escapes special characters in a string for use in an SQL query
if(isset($_POST['submit'])){
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $subj = mysqli_real_escape_string($conn, $_POST['message']);
   $for = mysqli_real_escape_string($conn, $_POST['for']);
   $type= mysqli_real_escape_string($conn, $_POST['user_type']);

         $insert = "INSERT INTO feedback_tb(fname, email, messege,foor,uType) VALUES(' $fname', '$email','$subj' ,'$for','$type')";
         mysqli_query($conn, $insert);
         header('location:user_page.php');

};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>feedback</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style1.css">
<!-- swiper css link  -->
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<body>
<!-- header -->
<div class="nav">
        <h1 class="logo">JOB<span>SITE</span></h1>
        <ul>
        <li><a href="logout.php">logout</a></li>
        <li><a href="view_job.php">Home</a></li>
        <li><a href="#about">About</a></li>
      </ul>
    </div>

<!-- header section ends -->

<div class="heading" style="background:url(images/home-hero-background.svg) no-repeat;">
   <h1>feedback</h1>
</div>
   
<div class="fcontainer">

   <form action="" method="post">
      
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <lable for ="fname">name</lable>
      <input type="text" name="fname" id="fname" required placeholder="enter your name">
      
      <lable for ="email">Email</lable>
      <input type="email" name="email" id="email" required placeholder="enter your email">

      <select name="user_type">
         <option value="user">maid</option>
         <option value="company">Broker</option>
         <option value="site">web-site</option>
      </select>
      <lable for ="for">name</lable>
      <input type="text" name="for" id="fname" required placeholder="enter your subjects name">

      <lable for ="subj">Subject</lable>
      <textarea id="subj" name="message" placeholder="Write something.." style="height:200px"></textarea>

      <input type="submit" name="submit" value="submit" class="form-btn">
   </form>
</div>
<style>
/* Style inputs with type="text", select elements and textareas */
input[type=text],input[type=email], select, textarea {
  width: 100%; /* Full width */
  padding: 12px; /* Some padding */ 
  border: 1px solid #9FE4E0; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

/* Style the submit button with a specific background color etc */
input[type=submit] {
  background-color: gray;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
  background-color: #9FE4E0;
}

/* Add a background color and some padding around the form */
.fcontainer {
  border-radius: 5px;
  background-color: white;
  padding: 20px;
  width:85%;
  margin-left:8%;
}
</style>
</body>
</html>