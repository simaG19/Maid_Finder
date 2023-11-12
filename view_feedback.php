<?php
@include 'config.php';

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
        <h1 class="logo">Maid<span>SITE</span></h1>
        <ul>
        <li><a href="logout.php">logout</a></li>
       
        <li><a href="admin_page1.php">Home</a></li>
      </ul>
    </div>

<!-- header section ends -->

<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   <h1>view feedback</h1>
</div>
   

<div class="cta">
    <div class="wrapper">
        
        <p> <?php
        $sql = "SELECT  * FROM feedback_tb ";
        $result = $conn->query($sql);
        
        if ($result !== false && $result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $fid = $row["fname"];
                echo "  - Name: " . $row["fname"]."<br>"." - email : " . $row["email"]."<br>"." - feedback: " . $row["messege"]."<br>"." - for " . $row["foor"] ."<br>". "<a href='delete.php?remove={$fid}'>Delete</a>" . "<hr>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?> </p>
       
    </div>
</div>
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

</style>

<!-- footer section starts  -->

<?php
@include 'footer.php';?>
</body>
</html>
