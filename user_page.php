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

 
 $conn = mysqli_connect('localhost','root','','users_DB');
         $sql = "SELECT  * FROM user_form WHERE user_type='company' ";
         $result = $conn->query($sql);
        
        if ($result !== false && $result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              
                 $si= $row['name'];

 $sqli="SELECT * FROM maid_form WHERE broker='$si'and book='unbooked' or book='booked' LIMIT $start_from,$num_per_page";
 $rs_result=mysqli_query($conn,$sqli);
            }}
?>

<!DOCTYPE html>

<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style1.css">
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
    <div class="heading" style="background:url(images/postjob.webp) no-repeat; width:100%">

</div>
</div>

<section class="services">
  

<div class="cta">
    <div class="wrapper">
        
   
       
    </div>
</div>

  

<div class='maid'>
  <p> <?php
  $conn = mysqli_connect('localhost','root','','users_DB');
         $sql = "SELECT  * FROM user_form WHERE user_type='company' ";
         $result = $conn->query($sql);
        
        if ($result !== false && $result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              
                 $si= $row['name'];
                $ssql="SELECT * FROM maid_form WHERE broker='$si' and book='unbooked' or book='booked' "; 
                $res = $conn->query($ssql);

                if($res !== false && $res->num_rows > 0) {
                // $fid = $row["name"];
                 
                echo ' <div class="container my-5">';
                echo ' <div class="shadow-4 rounded-5 overflow-hidden">';
                echo'   <table class="table align-middle mb-0 bg-white">';
                 echo'    <thead class="bg-light">';
                      echo' <tr>';
                      echo'  <th>Brokers &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</th>';
                       echo'  <th>Broker Name &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</th>';
                       echo'  <th>Maids &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </th>';
                         
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
                            <div class="ms-3">
                         <p class="fw-bold mb-1">'.'&nbsp;'.$row["name"].'</p>';
                              echo '';
                             echo'</div>
                           </div>
                         </td>
                         <td>';
                        echo '<p class="fw-bold mb-1">'.$res->num_rows.'</p>';
                        echo'  
                        
                         
                         <td>
                         <button class="btn btn-danger"><a href="view_job.php?view='.$si.'" class="text-light">view</a></button>
                             
                           </button></a>
                         </td>
                       </tr>
                      
                     </tbody>
                   </table>';
                   
           
              echo'   </div>
               </div>';
        
                          
                  // echo '<td>
                  // <button class="btn btn-danger"><a href="view_job.php?view='.$si.'" class="text-light">view</a></button>
                  // </td>';
                  // echo "<hr>" ;
            };
          
           
          
        } 
        }
     //   $sql = "SELECT  * FROM user_form WHERE user_type='company' ";
        //$result = $conn->query($sql);
         $sqlii= "SELECT * FROM maid_form WHERE broker='$si' and book='unbooked' or book='booked' ";
            $rs_result=mysqli_query($conn,$sql);
            $total_records=mysqli_num_rows($rs_result);
            $total_pages=ceil($total_records/$num_per_page);
            echo "Pages"."&emsp;";
  
            for($i=1;$i<=$total_pages;$i++)
            {
              echo "<a href='user_page.php?page=".$i."'>".$i."</a>"."&emsp;";
            }
        
    
        ?>


        </maid>

        
<style>
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
  
}
.cta a{
  color:#9FE4E0;
  border:1px solid #9FE4E0;
  background-color:black;
  border-radius: 10px;
  
}
.cta{
   padding: 60px 0;
   
 
   background-color: white;
   color: rgb(0, 0, 0);
}

.maid{
  font-size:20px;
}
</style>


<style>.pbtn {
  margin-left:30% ;
  background-color: #9FE4E0;
  color: white;
  padding: 15px 25px;
  text-decoration: none;
}</style>

<!-- footer section starts  -->

</body>
</html>
