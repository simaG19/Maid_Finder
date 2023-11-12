<?php
@include 'config.php';


session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}


$num_per_page=05;

if(isset($_GET["page"]))
{
 $page=$_GET["page"];
}
else{
  $page=1;
}
$start_from=($page-1)*05;

$sqli="SELECT * FROM maid_form where book='unbooked' or book='requsted'  LIMIT $start_from,$num_per_page";
$rs_result=mysqli_query($conn,$sqli);


?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>view job</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style1.css">
   <link rel="stylesheet" href="bootstrap.bundle.min.js">
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
        
        
        <li><a href="get_feedback.php">Feedback</a></li>
        <li><a href="home.php">Home</a></li>
        <li><div class="dropdown">
    
    
  </div></li>
      </ul>
    </div>
    
</div>

<!-- header section ends -->

<div class="heading" style="background:url(images/home-hero-background.svg) no-repeat;">
   <h1>Maid Avaliable </h1>
 
 
</div>
   
<div class="cta">
    <div class="wrapper">
        
        <p> <?php
          
         
             
        $sql = "SELECT * FROM maid_form where book='unbooked' or book='requsted' ";
        $query_run = $conn->query($sqli);
        
        if(mysqli_num_rows($query_run) > 0){
            // output data of each row
         //   $id=$row['fname'];
          
            while($row = $query_run->fetch_assoc()) {
            $cdate=date("Y");
              $id=$row['id'];
              
             $ag=$cdate- $row["age"];
             echo '<div class="col">';
                echo  "<hr>". "  First name:" ."<span style='color:#6ca3ea ; font-family: cursive;'> ".$row["fname"]."</span>"."<br>"." lname: " ."<span style='color:#6ca3ea ; font-family: cursive;'> ". $row["lname"]."</span>"."<br>"."  Age:  " ."<span style='color:#6ca3ea ; font-family: cursive;'> " . $ag."</span>"."<br>"." address: "."<span style='color:#6ca3ea ; font-family: cursive;'>" . $row["address"]."</span>"."<br>"."salary:"."<span style='color:#6ca3ea ; font-family: cursive;'>" . $row["salary"]."</span>"."<br>"."Experience: " ."<span style='color:#6ca3ea ; font-family: cursive;'>". $row["experience"]."</span>"."<br>"."<br>";
                echo "  identification card ".'<br>'.'<br>';
                echo "<img src='uploads/".$row['idpic']." '>";
             
            echo" <form action='' method='post'>";
            // echo ' <input size="30" type="text" name="uph" required placeholder="enter your phone number">'.'<br>';
          echo '  <button class="bttn" ><a href="user_detail.php?detid='.$id.'" class="text-light">Book</a></button>';
            echo "</form>";
             
             
             
             ?>
                 </div> 
<?php
                  
               
            }
         
              }
         else {
          echo "0 results";
         }

     
         $sql="SELECT * FROM maid_form where book='unbooked' or book='requsted' ";
          $rs_result=mysqli_query($conn,$sql);
          $total_records=mysqli_num_rows($rs_result);
          $total_pages=ceil($total_records/$num_per_page);
          echo "Pages"."&emsp;";

          for($i=1;$i<=$total_pages;$i++)
          {
            echo "<a href='view_job.php?page=".$i."'>".$i."</a>"."&emsp;";
          }
         
         
        $conn->close();

     


        ?> </p>
       
    </div>
</div>
<style>
  img{
    max-width: 30%;  
height: auto; 
  }
  body{
    font-size:20px;
  }
 .col{
   background-color:whitesmoke;
 } 
hr {
  display: block;
  margin-top: 0.5em;
  margin-bottom: 0.5em;
  margin-left: auto;
  margin-right: auto;
  border-style: inset;
  border-width: 1px;
  color:#9FE4E0;
}
.bt{
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 10px 26px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
/* .cta a{
    color:#9FE4E0;
  border:1px solid #9FE4E0;
  background-color:black;
  border-radius: 5px;
  
  
} */
.cta{
   padding: 60px 0;
   
  font-size:larger;
   background-color: white;
   color: rgb(0, 0, 0);
}
.bttn{
    background-color: #6ca3ea;
    color: white;
    text-decoration: none;
    border: 2px solid transparent;
    font-weight: bold;
    padding: 10px 25px;
    border-radius: 10px;
    transition: transform .4s;
    margin-left: 10px;
    font-size: 15px;
    margin-bottom: 10px;
    }
    .bttn:hover{
    transform: scale(1.2);
    }
</style>

<!-- footer section starts  -->

<?php
@include 'footer.php';?>
</body>
</html>