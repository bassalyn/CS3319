<?php
/* file for deleting a doctor 
By Bradley Assaly-Nesrallah
*/
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>CS3319 Assignment3</title>
</head>
<body>
<?php
   include 'connectdb.php'; //include db
?>
<h1>Trying to delete a doctor</h1>
<?php
   $result= $_POST["delete"];  //get variables from post
   $license= $_POST["license"];
   if ($result == "yes"){          //if result is yes then deletes 
     $query = 'DELETE FROM doctor WHERE licenseNumber="'.$license.'"';
     if (!mysqli_query($connection, $query)) { //handles errors
         die("Error: delete failed" . mysqli_error($connection));
      }
      echo "Doctor was successfully deleted"; //prints if successful or not
   }else{
     echo "Doctor was not deleted";
   }
   mysqli_close($connection);   //disconnects from the db
?>
</body>
</html>
