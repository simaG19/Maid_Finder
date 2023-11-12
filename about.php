<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about us</title>
    <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style1.css">
    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
  
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <!-- header -->
   
<div class="head">    
    <div class="nav">
        <h1 class="logo">Maid<span>SITE</span></h1>
        <ul style="margin-left: 70%;">
        <li><a href="login_form.php">login</a></li>
        <li><a href="register_form.php">register</a></li>
        <li><a href="home.php">home</a></li>
      </ul>
    </div>

    
</div>

<div class="heading" style="background:url(images/dark-blue-hero.svg) no-repeat">
   <h1 >About Us</h1>
</div>
<!-- home about section starts  -->

<section class="home-about">

   <div class="image">
      <img src="images/about_maid.jpg" alt="k">
   </div>

   <div class="content">
      <h3>We're not your typical Maid site.</h3>
      <p>We are different and makes it easier to find your next great opportunity.We are dedicated to providing maid seekers with their next amazing opportunity.</p>
      
   </div>
   <div class="content">
      <h3>We're not your typical Maid site.</h3>
      <p>That mission is written in our DNA. It’s who we are. It’s what drives us.</p>
   </div>
   <div class="image">
      <img src="images\laptop-graphic.svg" alt="k">
   </div>

</section>

<!-- home about section ends -->
<!-- services section starts  -->

<section class="services">

   <h1 class="heading-title"> our services </h1>

   <div class="box-container">

      <div class="box">
         <img src="images\verified.svg" alt="">
         <h3>Verified maids</h3>
         <h1>We source maids directly from employer websites so you can get the highest-quality, most accurate listings. No duplicates. No spam.</h1>
      </div>

      <div class="box">
         <img src="images\connections.svg" alt="">
         <h3>Up to date listings</h3>
         <h1>Get there first. Our maids are updated every single day so you can browse the most current listings available, with many you won't find on other job sites.</h1>
      </div>

      <div class="box">
         <img src="images\listings.svg" alt="">
         <h3>Direct connections</h3>
         <h1>Apply without the hassle. Our listings bring you directly to brokers so that you can book without extra signups.</h1>
      </div>

      

      </div>

</section>

<section class="home-testimonial">
    <div class="container-fluid">
        <div class="row d-flex justify-content-center testimonial-pos">
            <div class="col-md-12 pt-4 d-flex justify-content-center">
                <h3>Feedbacks</h3>
            </div>
            <div class="col-md-12 d-flex justify-content-center">
                <h2>What Our clients says</h2>
            </div>
        </div>
        <section class="home-testimonial-bottom">
            <div class="container testimonial-inner">
                <div class="row d-flex justify-content-center"> 
                <div class="box-container">
                <div class="box" >
                  <p> <?php
        @include 'config.php';
        $sql = "SELECT * FROM feedback_tb WHERE uType='site'";
        $result = $conn->query($sql);
        
        if ($result !== false && $result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              
                        echo ' <div class="tour-text color-grey-3 text-center">';echo  $row["messege"]. '<div class="link-name d-flex justify-content-center">';echo $row["fname"] . '<div class="link-position d-flex justify-content-center">'. "<br>";echo  $row["email"]; echo '</div>' ;echo '</div>' ; echo '</div>';
                        echo '</div>';       
                     echo '</div>';   
                  echo '</div>';
               echo '</div>';
                }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?> </p>
                   
                    
                    </div>
                </div>
        </section>
</section>

<style>
hr {
  display: block;
  margin-top: 0.5em;
  margin-bottom: 0.5em;
  margin-left: auto;
  margin-right: auto;
  border-style: inset;
  border-width: 1px;
}
.cta a{
    color:#9FE4E0;
  border:1px solid #9FE4E0;
  background-color:black;
  border-radius: 10px;
  
}
.cta{
   padding: 60px 0;
   
  font-size:larger;
   background-color: white;
   color: rgb(0, 0, 0);
}
.home-testimonial{background-color: #9FE4E0;height: 380px}
.home-testimonial-bottom{transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;margin-top: 0;margin-bottom: 0px;position: relative;height: 130px;top: 190px}
.home-testimonial h3{color: var(--orange);font-size: 14px;font-weight: 500;text-transform: uppercase}
.home-testimonial h2{color: gray;font-size: 28px;font-weight: 700}
.testimonial-inner{position: relative;top: -174px}
.testimonial-pos{position: relative;top: 24px}

.tour-desc{border-radius: 5px;padding: 40px}
.color-grey-3{font-family: "Montserrat", Sans-serif;font-size: 14px;color: #6c83a2}
.link-name{font-family: "Montserrat", Sans-serif;font-size: 14px;color: #6c83a2}.link-position{font-family: "Montserrat", Sans-serif;font-size: 12px;color: #6c83a2}

</style>

<!-- services section ends -->

<section class="services"style="padding: 0">

   <h1 class="heading-title">Team Members </h1>

   <div class="box-container">

      <div class="box" >
         <img src="images\tg.jfif"style="height:15vh" alt="">
         <h3>Mekdes</h3>
         </div>
         <div class="box" >
         <img src="images\"style="height:15vh" alt="">
         <h3>Abrham</h3>
         </div>

      <div class="box">
         <img src="images\simon.jfif"style="height:15vh" alt="">
         <h3>Simon</h3>
           </div>

      <div class="box">
         <img src="images\" style="height:15vh"alt="">
         <h3>Eyuel</h3>
           </div>

      <div class="box">
         <img src="images\eden.jfif"style="height:15vh" alt="">
         <h3>Ayu</h3>
          </div>

      </div>
      

</section>





<!-- footer section starts  -->

<?php
@include 'footer.php';?>
</body>


</html>