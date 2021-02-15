<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>CS3319 Assignment3</title>
</head>
<body>
<?php
/* file to view image
By Bradlye Assaly
*/
include 'connectdb.php';  //includes db and update file 
include 'upload_file.php';
?>
<ol>
<?php
   $license= $_POST["petowners"];
   $query = 'SELECT docimage FROM doctor pet WHERE doctor.licenseNumber="'.$license.'"';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
   $row=mysqli_fetch_assoc($result);
   echo '<img src="'.$row["docimage"].'"height="60" width="60">';
   mysqli_free_result($result);
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>
