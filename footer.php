<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home page</title>
    <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style1.css">
    <!-- fontawesome css link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <!--feedback -->
   <link  href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
  
  </head>
<body>
    <!-- footer section starts  -->

<section class="footer">

   <div class="box-container">      

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="login_form.php"> <i class="fas fa-angle-right"></i> login</a>
         <a href="register_form.php"> <i class="fas fa-angle-right"></i> register</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> feedback</a>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         
      </div>
      <?php
         $conn=mysqli_connect('localhost','root','','users_DB');
         $sql="SELECT * FROM about";
         $result = $conn->query($sql);
         while($row = $result->fetch_assoc()) {
            echo'<div class="box">
         <h3>contact info</h3>';
       echo ' <a href="https://gmail.com"> <i class="fas fa-envelope"></i>'.  $row["email"] . '</a>';
         echo '<a href="https://goo.gl/maps/Msz3w3NzAN1454yz8"> <i class="fas fa-map"></i> '. $row["location"] .'</a>';
     echo '</div>';
         }

      ?>

      

      <div class="box">
         <h3>follow us</h3>
         <a href="https://www.facebook.com"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="https://twitter.com/"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="https://www.instagram.com/"> <i class="fab fa-instagram"></i> instagram </a>
         
      </div>

   </div>

   
</section>

<!-- footer section ends -->
</body>


</html>