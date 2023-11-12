<?php
 $conn = mysqli_connect('localhost','root','','users_DB');
      
        
        if(isset($_GET['deleteid']))
        {  
            
            $id= $_GET['deleteid'];
             
            $query = "delete from user_form where name=  '".$_GET['deleteid']."'";
            $delete_query= mysqli_query($conn, $query);
           
            if($delete_query){
               echo "deleted";
                header("Location: pending_broker.php");
            }
            else{
                echo 'error';
            }
           
        }

             
        if(isset($_POST['submit'])){
          $s=$row['fname'];
  $phone = mysqli_real_escape_string($conn, $_POST['uph']);
  $book='booked';
 



 }


        if(isset($_GET['bookid'])){
            $s=$row['fname'];
          //  $phone = mysqli_real_escape_string($conn, $_POST['uph']);
            $book='booked';
            $id=$_GET['updaid'];
            $insert = "UPDATE maid_form SET book='booked',uph='$phone' where fname='$id'";
            mysqli_query($conn, $insert);
  
            header('location:user_page.php');
        }
          
        if(isset($_GET['bookmid']))
        {  
            
            $id= $_GET['bookmid'];
             
           $sql="SELECT* FROM maid_form where id='id'";
           $result = mysqli_query($conn ,$sql);
     
           $row = mysqli_fetch_array($result);


            $query = "update maid_form set book='accepted' where id=  '".$_GET['bookmid']."' AND  book='requsted'";
            $delete_query= mysqli_query($conn, $query);
           
             $del = "delete from maid_form where fname=  '".$_GET['bookmid']."' and book='unbooked'";
             mysqli_query($conn, $del);
               header("Location: maids.php");
            }
            
           
        

         
        if(isset($_GET['deletemid']))
        {  
            
            $id= $_GET['deletemid'];
             
            $query = "delete from maid_form where fname=  '".$_GET['deletemid']."'";
            $delete_query= mysqli_query($conn, $query);
           
            if($delete_query){
               echo "deleted sucessfully";
                header("Location: pending_maids.php");
            }
            else{
                echo 'error';
            }
           
        }
        if(isset($_GET['deletebrid']))
        {  
            
            $id= $_GET['deletebrid'];
             
            $query = "delete from maid_form where fname=  '".$_GET['deletebrid']."'";
            $delete_query= mysqli_query($conn, $query);
           
            if($delete_query){
               echo "deleted";
                header("Location: get_application.php");
            }
            else{
                echo 'error';
            }
           
        }

        if(isset($_GET['deletecid']))
        {  
            
            $id= $_GET['deletecid'];
             
            $query = "delete from user_form where name=  '".$_GET['deletecid']."'";
            $delete_query= mysqli_query($conn, $query);
           
            if($delete_query){
               echo "deleted";
                header("Location: pending_customer.php");
            }
            else{
                echo 'error';
            }
           
        }
        ?>
        