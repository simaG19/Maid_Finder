
<?php

$conn = mysqli_connect('localhost','root','','users_DB');



 $num_per_page=05;

 if(isset($_GET["page"]))
 {
  $page=$_GET["page"];
 }
 else{
   $page=1;
 }
 $start_from=($page-1)*05;

 $sql="SELECT * FROM user_form WHERE user_type='user' LIMIT $start_from,$num_per_page";
 $rs_result=mysqli_query($conn,$sql);

?>





<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style1.css">
   
</head>
<body>
<div class="nav">
        <h1 class="logo">Maid<span>SITE</span></h1>
        <div class="lis">
            <ul>
            <li><a href="logout.php">logout</a></li>
           
            <li><a href="admin_page1.php">Home</a></li>
            </ul>
</div>
    </div>
    
</div>


  
    <div class="container mt-4">


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>user Details
                            
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Mid</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                   
                                    
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php 

 
                                    $query = "SELECT * FROM user_form where user_type='user' ";
                                    $query_run = mysqli_query($conn, $sql);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $student)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $student['id']; ?></td>
                                                <td><?= $student['name']; ?></td>
                                                <td><?= $student['email']; ?></td>
                                               
                                                
                                               
                                                <td>
                                                   
                                                    
                                                    <form action="code.php" method="POST" class="d-inline">
                                                    
                                                    <?php
                                                     $si= $student['name'] ;    
                                                   
                                                     echo'    <button ><a href="delete.php?deletemid='.$si.'" class="btn btn-danger btn-sm">delete</a></button>';
                        ?>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>
                        <?php
          $sql="SELECT * FROM user_form WHERE user_type='user'";
          $rs_result=mysqli_query($conn,$sql);
          $total_records=mysqli_num_rows($rs_result);
          $total_pages=ceil($total_records/$num_per_page);
          echo "Pages"."&emsp;";

          for($i=1;$i<=$total_pages;$i++)
          {
            echo "<a href='pending_broker.php?page=".$i."'>".$i."</a>"."&emsp;";
          }
         ?>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
<style>
  .table{
        width:1120px;
        font-size:20px;
 }
.lis{
    font-size:15px;
    margin-left:1175px;
 }
 

</style>
</html>






