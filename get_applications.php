<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>get application</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style1.css">

</head>
<body>
<!-- header -->
<div class="nav">
        <h1 class="logo">Maid<span>SITE</span></h1>
        <ul>
        <li><a href="logout.php">logout</a></li>
        <li><a href="maids.php">maid</a></li>
        
      
      </ul>
    </div>
    <div class="heading" style="background:url(images/back.png) no-repeat">
   <h1>get appelication</h1>
</div>

    <!-- <form action="" method="GET">
            <div class="input-group mb-3">
               <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="type your job-id" style="height:50px; width:30%; margin-left:10%;  border-radius: 25px;
  border: 5px solid #9FE4E0; margin-bottom:10px ">
               <button type="submit" class="btn btn-primary"style="width:30%; background-color:white;  "><img src="images\magnifier-icon.svg"style=" width:50px"></button>
            </div>
         </form> -->
   


<div class="cta">
    <div class="wrapper">
        
    <?php 
    session_start();
           $bro=$_SESSION['user_name'];                
                    $conn = mysqli_connect('localhost','root','','users_DB');
                                  
                                      
                                   
                                      
                                        $query = "SELECT * FROM maid_form WHERE   book='requsted' and broker='$bro'";
                                        
                                        $query_run = mysqli_query($conn, $query);

                                        while($row = $query_run->fetch_assoc())
                                        {
                                          $si= $row['fname'] ; 
                                            foreach($query_run as $row)
                                              {
                                                echo '<div class="col">';
                                                echo'<div class="font">';
                                                
                                                echo " Customer name: " ."<span style='color:#6ca3ea ; font-family: cursive;'> " . $row["uname"]."</span>"."<br>".  " Customer Phone number: " ."<span style='color:#6ca3ea ; font-family: cursive;'> ". $row["uph"]."</span>"."<br>"."   Maid name : "."<span style='color:#6ca3ea ; font-family: cursive;'> " . $row["fname"]."</span>"."<br>"." maid last name: "."<span style='color:#6ca3ea ; font-family: cursive;'> " . $row["lname"]."</span>"."<br>";
                                                echo '</div>';
                                                echo'</div>';
                                                echo"<br>";
                                                echo"<br>";
                                                //echo"<br>";
                                               echo' <button class="btn btn-danger"><a href="delete.php?bookmid='.$si.'" class="text-light">Accept</a></button>';
                                               echo"<br>";
                                               echo"<br>";
                                              }  
                                            }

                                          
                                        

                                        
                                ?>
       
    </div>
</div>

<style>
   .col{
   background-color:whitesmoke;
 } 
 .font{
  font-size: 20px;

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
  padding: 10px 25px;
  margin-top:15px;
  
}
.cta{
   padding: 60px 0;
   
 
   background-color: white;
   color: rgb(0, 0, 0);
}
.cta:hover{
    transform: scale(1.2);
    }
</style>





</body>
</html>

