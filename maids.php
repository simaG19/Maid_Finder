<?php
session_start();

$con = mysqli_connect('localhost','root','','users_DB');



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
           
            <li><a href="get_applications.php">Home</a></li>
            </ul>
</div>
    </div>
    
</div>

<?php
    if(isset($_SESSION['status'])){
        ?>
                     <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong > <?php  echo $_SESSION['status'] ;?></strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
               
        <?php
       
        unset($_SESSION['status']);
    }
?>
  
    <div class="container mt-4">


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Maid Details
                            <a href="job_insert.php" class="btn btn-primary float-end">Add Maid</a>
                        </h4>
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
                                    
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php 


$bro=$_SESSION['user_name'];  
                                    $query = "SELECT * FROM maid_form where book='unbooked' and broker='$bro'";
                                    $query_run = mysqli_query($con, $query);
                                    $no=1;
                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $student)
                                        {
                                            
                                            ?>
                                            <tr>
                                                <td><?=$no ?></td>
                                                <td><?= $student['fname']; ?></td>
                                                <td><?= $student['lname']; ?></td>
                                                <td><?= $student['age']; ?></td>
                                                <td><?= $student['address']; ?></td>
                                                <td><?= $student['salary']; ?></td>
                                                <td><?= $student['experience']; ?></td>
                                                
                                               
                                               
                                                <td>
                                                   
                                                    
                                                    <form action="code.php" method="POST" class="d-inline">
                                                    
                                                    <?php
                                                     $si= $student['id'] ;    
                                                     echo'    <button ><a href="update_maid.php?upid='.$si.'" class="btn btn-success btn-sm">edit</a></button>';
                                                     echo'    <button ><a href="delete.php?deletemid='.$si.'" class="btn btn-danger btn-sm">delete</a></button>';
                                                     $no=$no+1;
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
. button{
 
  font-size: 45px;
}
</style>
</html>
