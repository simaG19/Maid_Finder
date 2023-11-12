<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Home</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Home.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.18.5, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
  </head>
  <body data-home-page="Home.html" data-home-page-title="Home" class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-header" id="sec-48b3"><div class="u-clearfix u-sheet u-sheet-1">
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a> 
           
          </div>
         
          <div class="u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="login_form.php" style="padding: 10px 20px;">logout</a>

</li></ul>
          
          </div>
          <div class="u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="About.html">logout</a>

</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-clearfix u-section-1" id="sec-9235">
      <div class="u-clearfix u-gutter-0 u-layout-wrap u-layout-wrap-1">
        <div class="u-layout" style="">
          <div class="u-layout-row" style="">
            <div class="u-align-left u-black u-container-style u-layout-cell u-left-cell u-size-13 u-size-xs-60 u-layout-cell-1" src="">
              <div class="u-container-layout u-container-layout-1">
              <?php
   // Database connection
   $con = mysqli_connect("localhost", "root", "", "users_DB");
   $sql_query = "SELECT * FROM user_form WHERE name='".$_SESSION['admin_name']."'";

   // Fetching image
   $img = mysqli_query($con,$sql_query);
   while ($row = mysqli_fetch_array($img)){
      echo "<img style='width: 100px;height: 100px;border-radius: 20%;' src='images\home_maid.jpg'>";
      echo "<h2 >&nbsp;&nbsp;Name&nbsp;:&nbsp;".$row["name"]."  </h2>";
      echo "<h4>&nbsp;&nbsp;Email&nbsp;:&nbsp;".$row["email"]."  </h4>";

   }   ?>
                <ul class="u-custom-list u-text u-text-default u-text-3">
                  
                    
                  <li>
                    <div class="u-list-icon">
                      <svg class="u-svg-content" viewBox="0 0 56.966 56.966" x="0px" y="0px" id="svg-ddae" style="enable-background:new 0 0 56.966 56.966;"><path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23
	s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92
	c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17
	s-17-7.626-17-17S14.61,6,23.984,6z"></path></svg>
                    </div> <a href="view_feedback.php">View feedback</a>
                  </li></br>
                  <li>
                    <div class="u-list-icon">
                      <svg class="u-svg-content" viewBox="0 0 56.966 56.966" x="0px" y="0px" id="svg-ddae" style="enable-background:new 0 0 56.966 56.966;"><path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23
	s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92
	c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17
	s-17-7.626-17-17S14.61,6,23.984,6z"></path></svg>
                    </div> <a href="pending_maid.php">View maid</a>
                  </li></br>
                  <li>
                    <div class="u-list-icon">
                      <svg class="u-svg-content" viewBox="0 0 56.966 56.966" x="0px" y="0px" id="svg-ddae" style="enable-background:new 0 0 56.966 56.966;"><path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23
	s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92
	c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17
	s-17-7.626-17-17S14.61,6,23.984,6z"></path></svg>
                    </div> <a href="pending_broker.php">View broker</a>
                  </li></br>
                  <li>
                    <div class="u-list-icon">
                      <svg class="u-svg-content" viewBox="0 0 56.966 56.966" x="0px" y="0px" id="svg-ddae" style="enable-background:new 0 0 56.966 56.966;"><path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23
	s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92
	c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17
	s-17-7.626-17-17S14.61,6,23.984,6z"></path></svg>
   </div><a href="pending_customer.php">View User</a>
                  </li></br>
                  <li>
                    <div class="u-list-icon">
                      <svg class="u-svg-content" viewBox="0 0 56.966 56.966" x="0px" y="0px" id="svg-ddae" style="enable-background:new 0 0 56.966 56.966;"><path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23
	s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92
	c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17
	s-17-7.626-17-17S14.61,6,23.984,6z"></path></svg>
                    </div>
                   </li>
                 <a href="edit.php"><li>update contact</li></a>
                </ul>
              </div>
            </div>
            <?php
              $conn=mysqli_connect("localhost","root","","users_db");
              $query = "SELECT * FROM maid_form where book='accepted' ";

              $result = $conn->query($query);
              if($result !== false && $result->num_rows > 0) {
               $num= $result->num_rows;
            //   echo $num;
            
         echo ' <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-47 u-size-xs-60 u-white u-layout-cell-2">';
         echo '    <div class="u-container-layout u-container-layout-2">';
          echo '     <h3 class="u-text u-text-palette-1-dark-1 u-text-4" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000"> ' ."$num ". '</h3>';
            echo '   <h5 class="u-text u-text-default u-text-palette-1-dark-1 u-text-5">ACCEPTED MAIDS</h5> ';
            };

$query1 = "SELECT * FROM user_form where user_type='admin' ";

              $result1 = $conn->query($query1);
              if($result1 !== false && $result1->num_rows > 0) {
               $num1= $result1->num_rows;
             
                echo '<div class="u-list u-list-1">';
                 echo ' <div class="u-repeater u-repeater-1">';
                    echo '<div class="u-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-white u-list-item-1">';
                     echo '<div class="u-container-layout u-similar-container u-valign-middle u-container-layout-3"><span class="u-custom-item u-file-icon u-icon u-icon-circle u-palette-2-base u-icon-1"><img src="images/2206368.png" alt=""></span>';
                      echo ' <h3 class="u-custom-font u-font-montserrat u-text u-text-6" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">' ."$num1 ". '</h3>';
                      echo'  <h4 class="u-custom-font u-font-montserrat u-text u-text-grey-40 u-text-7">ADMINS</h4>';
                   echo  ' </div> ';
                    };

                    $query2 = "SELECT * FROM user_form where user_type='user' ";

              $result2 = $conn->query($query2);
              if($result2 !== false && $result2->num_rows > 0) {
               $num2= $result2->num_rows;
           
                  echo ' </div>';
                 echo'   <div class="u-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-white u-list-item-2">';
                  echo'    <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-4"><span class="u-custom-item u-file-icon u-icon u-icon-circle u-palette-3-base u-icon-2"><img src="images/3137941.png" alt=""></span>';
                   echo'     <h3 class="u-custom-font u-font-montserrat u-text u-text-8" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">' ."$num2 ". '</h3>'; 
              };


                
                    $query3 = "SELECT * FROM maid_form where book='unbooked' ";

              $result3 = $conn->query($query3);
              if($result3 !== false && $result3->num_rows > 0) {
               $num3= $result3->num_rows;
                 
                       echo '<h4 class="u-custom-font u-font-montserrat u-text u-text-grey-40 u-text-9">CLIENTS</h4>';
                     echo'</div>';
                   echo' </div>';
                   echo ' <div class="u-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-white u-list-item-3">';
                    echo'  <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-5"><span class="u-custom-item u-file-icon u-icon u-icon-circle u-palette-2-base u-icon-3"><img src="images/4614969.png" alt=""></span>';
                        echo '<h3 class="u-custom-font u-font-montserrat u-text u-text-10" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">'  ."$num3 ". '</h3>';
                       echo' <h4 class="u-custom-font u-font-montserrat u-text u-text-grey-40 u-text-11">MAIDS</h4>';
                        
              };
              $query4 = "SELECT * FROM user_form where user_type='company' ";

              $result4 = $conn->query($query4);
              if($result4 !== false && $result4->num_rows > 0) {
               $num4= $result4->num_rows;
                                     
                    echo'  </div>';
                  echo ' </div>';
                    echo '<div class="u-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-white u-list-item-4">';
                     echo ' <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-6"><span class="u-custom-item u-file-icon u-icon u-icon-circle u-palette-3-base u-icon-4"><img src="images/470317.png" alt=""></span>';
                      echo ' <h3 class="u-custom-font u-font-montserrat u-text u-text-12" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000"> '  ."$num4 ". '</h3>';
                        
                };  ?>
                        <h4 class="u-custom-font u-font-montserrat u-text u-text-grey-40 u-text-13">BROKER</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-77c2"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1"></p>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">
        <span></span>
      </a>
      <p class="u-text">
        <span></span>
      </p>
      <a class="u-link" href="" target="_blank">
        <span></span>
      </a>
    </section>
   
</body>

</html>