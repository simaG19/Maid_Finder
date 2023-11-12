<?php
@include 'config.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>view job</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
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
        <li><a href="register_form.php">register</a></li>
        <li><a href="home.php">Home</a></li>
      </ul>
    </div>

<!-- header section ends -->

<div class="heading" style="background:url(images/home-hero-background.svg) no-repeat">
   <h1>delete job</h1>
</div>
   
<div class="cta">
    <div class="wrapper">
        
        <p> <?php
        $sql = "SELECT  * FROM job_form ";
        $result = $conn->query($sql);
        
        if ($result !== false && $result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $jobid = $row["jobid"];
                echo "  - Catagory: " . $row["catagory"]."<br>"." - Number required : " . $row["noemp"]."<br>"." - Salary: " . $row["salary"]."<br>"." - Deadline: " . $row["deadline"]."<br>"." - Exprience: " . $row["exp"]."<br>"." - Job Description: " . $row["jobdes"]."<br>"." - Perefered Sex: " . $row["sex"]."<br>"." - Company email: " . $row["cemail"]."<br>"." - Company Location: " . $row["clocation"]."<br>"." - Company Name: " . $row["cname"]."<br>"."- Row no: " .$row["jobid"] ."<br>". "<a href='delete.php?delete={$jobid}'>Delete</a>" . "<hr>";
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