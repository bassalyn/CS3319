<?php
/* file to delete a doctor from the database
By Bradley Asasly-Nesrallah
*/
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>CS3319 Assignment 3</title>
</head>
<body>
<?php
include 'connectdb.php';  //include db
?>
<h2>Trying to delete a doctor:</h2>
<?php
   $licenseNumber= $_POST["licenseNumber"];  //get licence from post and query
   $query = 'SELECT * FROM doctor, seeing WHERE doctor.licenseNumber=seeing.licenseNumber AND doctor.licenseNumber="' . $licenseNumber . '"';
   $result=mysqli_query($connection,$query);
   if($result->num_rows ==0){    //if result 0
      $query1 = 'DELETE FROM doctor WHERE licenseNumber ="'.$licenseNumber.'"';
      $result1=mysqli_query($connection,$query1); //deletes doctor
      if (!$result1) {
         die("database query failed.");  //handles errors
      }
      echo "Doctor was successfully deleted (No need to confirm delete)";
    }else{         //echos success or failure and displays licence num
      echo "The doctor is currently treating patients do you still want to delete?"."<br>";
      echo "The doctors license number is: ".$licenseNumber;
	}
               //form deletdoctor 2 radio buttons gets yes or no if sure doctor
?>
<form action="deletedoctor2.php" method="post">    
<input type="radio" name="delete" value="yes"> Yes<br>
<input type="radio" name="delete" value="no"> No<br>
Re-enter license Number to confirm<input type="text" name="license"><br>
<input type="submit" value="Delete Doctor"> 
</form>

<?php
   mysqli_close($connection);  //closes db connection
?>
</body>
</html>
