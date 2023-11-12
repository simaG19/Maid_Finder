

<?php

$con = mysqli_connect('localhost','root','','users_DB');


$num_per_page=05;

if(isset($_GET["page"]))
{
 $page=$_GET["page"];
}
else{
  $page=1;
}
$start_from=($page-1)*05;

$sql="SELECT * FROM maid_form LIMIT $start_from,$num_per_page";
$rs_result=mysqli_query($con,$sql);



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
                       
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Mid</th>
                                    <th>First Name</th>
                                    <th>last Name</th>
                                    <th>birth date</th>
                                    <th>Address</th>
                                    <th>salary</th>
                                    <th>exprience</th>
                                    <th>language</th>
                                    <th>description</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php 


                                    $query = "SELECT * FROM maid_form where book='unbooked' ";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $student)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $student['id']; ?></td>
                                                <td><?= $student['fname']; ?></td>
                                                <td><?= $student['lname']; ?></td>
                                                <td><?= $student['age']; ?></td>
                                                <td><?= $student['address']; ?></td>
                                                <td><?= $student['salary']; ?></td>
                                                <td><?= $student['experience']; ?></td>
                                                <td><?= $student['language']; ?></td>
                                                <td><?= $student['disc']; ?></td>
                                               
                                                <td>
                                                   
                                                    
                                                    <form action="code.php" method="POST" class="d-inline">
                                                    
                                                    <?php
                                                     $si= $student['fname'] ;    
                                                   
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
          $sql="SELECT * FROM maid_form WHERE book='unbooked'";
          $rs_result=mysqli_query($con,$sql);
          $total_records=mysqli_num_rows($rs_result);
          $total_pages=ceil($total_records/$num_per_page);
          echo "Pages"."&emsp;";

          for($i=1;$i<=$total_pages;$i++)
          {
            echo "<a href='pending_maid.php?page=".$i."'>".$i."</a>"."&emsp;";
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
    table{
        width:420px;
        font-size:20px;
 }
.lis{
    font-size:15px;
    margin-left:1175px;
 }

</style>
</html>





