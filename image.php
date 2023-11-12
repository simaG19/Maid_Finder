<!DOCTYPE html>
<html>
<head>
<title>Store and retrieve image</title>
</head>
<body>
  
  <form method="POST" action="index.php" enctype="multipart/form-data">
  	  	
  	  <input type="file" name="image">  	
  	  <button type="submit" name="upload">Upload Image</button>
  	
  </form>
  <?php
  ?>
  
  <?php
  // database connection
  $conn = mysqli_connect("localhost", "root", "", "users_DB");
  
  // Fetch image from database
	$img = mysqli_query($conn, "SELECT * FROM user_form");
     while ($row = mysqli_fetch_array($img)) {     
		
      	echo "<img src='images/".$row["img"]."' >";   
      
    }     
?>
</body>
</html>