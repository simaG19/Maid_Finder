
<?php

@include 'config.php';




$num_per_page=05;

if(isset($_GET["page"]))
{
 $page=$_GET["page"];
}
else{
  $page=1;
}
$start_from=($page-1)*05;

$sql="SELECT * FROM user_form WHERE user_type='company' LIMIT $start_from,$num_per_page";
$rs_result=mysqli_query($conn,$sql);
 



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home page</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">

    <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style1.css">
    <!-- fontawesome css link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <!--feedback -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
  
  </head>
<body>
    
<!-- header -->
   
<div class="head">    
   <div class="nav">
      <h1 class="logo">Maid<span>SITE</span></h1>
         <ul style="margin-left: 70%;">
            <li><a href="login_form.php">login</a></li>
            <li><a href="register_form.php">register</a></li>
            <li><a href="about.php">About</a></li>
         </ul>
   </div>

   <div id="hero"  >
      <div class="search-content"style="background:url(images/background.svg) no-repeat ">
         <div class="wrapper"> 
            <h2><strong>Millions of Maid for you.</strong>
                     Verified by us.</h2>
         
            
            <a href="login_form.php" class="button-1">search Maid</a>
         </div>
      </div>
   </div>
</div>

<!-- home about section starts  -->

<section class="home-about">
   <div class="image">
      <img src="images/home_maid.jpg" alt="">
   </div>
   <div class="content">
      <h3>We're not your typical Maid site.</h3>
      <p>We're different and makes it easier to find your next good maid.</p>
      <a href="about.php" class="btn">read more</a><br>
   </div>
</section>
<div class='maid'>
 <?php
  $conn = mysqli_connect('localhost','root','','users_DB');
      //   $sql = "SELECT  * FROM user_form WHERE user_type='company' ";
      //   $result = $conn->query($sql);
        
        if ($rs_result !== false && $rs_result->num_rows > 0) {
            // output data of each row
            while($row =$rs_result->fetch_assoc()) {
              
                 $si= $row['name'];
                $ssql="SELECT * FROM maid_form WHERE broker='$si' "; 
                $res = $conn->query($ssql);

                if($res !== false && $res->num_rows > 0) {
                // $fid = $row["name"];
            //   echo' <section class="services">';
            //     echo ' <div class="box-container">';

            //     echo '<div class="box">';
            //    echo' <img src="images\connections.svg" alt="">';
            //     echo "  - Broker: " . $row["name"]. "&emsp;";
            //       echo "&emsp;"."Maids"."&emsp;". $res->num_rows. "&emsp;"."<a href='login_form.php'>View</a>" ;
            //       echo '</div>';
            //       echo '</div>';

            //       echo '</section>';




         //    echo ' <section class="services"> ';
         //    echo '<h1 class="heading-title"> our services </h1>';
         //   echo' <div class="box-container">';

         //      echo ' <div class="box">';

         //     // echo "<h2 >&nbsp;&nbsp;Name&nbsp;:&nbsp;".$row["name"]."  </h2>";

         //    echo  "<h2> <img src='images\verifie.svg' alt=''>" .$row["name"]."  </h2>";
         //       // echo " <h1>"."&emsp;"."Maids"."&emsp;" ; echo  $res->num_rows; echo "&emsp;"."<a href='login_form.php'>View</a>" ."</h1>";
         //     echo'  </div>';

         //     echo'</section>';




        echo ' <div class="container my-5">';
        echo ' <div class="shadow-4 rounded-5 overflow-hidden">';
        echo'   <table class="table align-middle mb-0 bg-white">';
         echo'    <thead class="bg-light">';
              echo' <tr>';
               echo '<th> Brokers &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</th>';
               echo'  <th>Broker Name &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</th>';
               echo'  <th>Maids &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</th>';
                 
              echo ' </tr>';
            echo ' </thead>';
           echo'  <tbody>';
              echo ' <tr>';
                 echo '<td>';
                  echo ' <div class="d-flex align-items-center">';
                     echo '<img
                          src="images\broker.png"
                          alt=""
                          style="width: 45px; height: 45px"
                          class="rounded-circle"
                          /></td>
                          <td>
                     <div class="ms-3">';
                    echo '  <p class="fw-bold mb-1">'.'&nbsp;'.$row["name"].'</p>';
                      echo '';
                     echo'</div>
                   </div>
                 </td>
                 <td>';
                echo '<p class="fw-bold mb-1">'.$res->num_rows.'</p>';
                echo'
                </td>  
                
                 
                 <td>
                   <a href="login_form.php"><button type="button" class="btn btn-link btn-sm btn-rounded">
                     View
                   </button></a>
                 </td>
               </tr>
              
             </tbody>
           </table>
         </div>
       </div>';

         };
                
        } 
        }
        
        $sql="SELECT * FROM user_form WHERE user_type='company'";
          $rs_result=mysqli_query($conn,$sql);
          $total_records=mysqli_num_rows($rs_result);
          $total_pages=ceil($total_records/$num_per_page);
          echo "Pages"."&emsp;";

          for($i=1;$i<=$total_pages;$i++)
          {
            echo "<a href='home.php?page=".$i."'>".$i."</a>"."&emsp;";
          }
         
        $conn->close();
        ?>
</div>

<!-- home about section ends -->
<div class="heading" style="text-align:center; background:url(images/dark-blue-hero.svg) no-repeat">
   <h2>Partner with Business Leaders<p style="margin-left:20px; ">
      Development of successful, long term, strategic relationships between customers and suppliers, based on achieving best practice and sustainable competitive advantage. In the business partner model, HR professionals work closely with business leaders and line managers to achieve shared organisational objectives.
      </p>
   </h2>  
 </div>

<!-- services section starts  -->
<section class="services">
   <h1 class="heading-title"> our services </h1>
   <div class="box-container">

      <div class="box">
      <img src="images\verifie.svg" alt="">
         <h3>Verified Maids</h3>
         <h1>We source Maids directly from Brokers so you can get the highest-quality, most accurate listings. No duplicates. No spam.</h1>
      </div>
      <div class="box">
         <img src="images\connections.svg" alt="">
         <h3>Up to date listings</h3>
         <h1>Get there first. Our Maids are updated every single day so you can browse the most current listings available, with many you won't find on other Maid sites.</h1>
      </div>

      <div class="box">
         <img src="images\listings.svg" alt="">
         <h3>Direct connections</h3>
         <h1>Find without the hassle. Our listings bring you directly to company websites so you can apply at the source, without extra signups.</h1>
      </div>

      

      </div>

</section>

<!-- services section ends -->
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
                <div class="row d-flex justify-content-center"> <p>
                    <?php
        @include 'config.php';
        $sql = "SELECT * FROM feedback_tb where uType='site'";
        $result = $conn->query($sql);
        
        if ($result !== false && $result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
               
                        echo ' <div class="tour-text color-grey-3 text-center">';echo  $row["messege"]. "<br>".'<div class="link-name d-flex justify-content-center">';echo  '<div class="link-position d-flex justify-content-center">'; echo '---'; echo  $row["email"]; echo '---'; echo '</div>' ;echo '</div>' ; echo '</div>';
                               
                      
                }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
         </p>
                   
                    
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
.maid{
   text-align:center;
   font-size:15px;
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





<!-- footer section starts  -->
<?php
@include 'footer.php';?>
</body>


</html>