<?php
/* file to add treated to the seeing tables 
by Bradley Assaly-Nesrallah */
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>CS3319 Assignment 3</title>
</head>
<body>
<?php
   include 'connectdb.php';  //includes db
?>
<?php
   $patientnum= $_POST["ohip"];    //gets variables from Post
   $licenseNum = $_POST["license"];   //inserts them with insert query to seeing
   $query = 'INSERT INTO seeing values("'.$patientnum.'","'.$licenseNum. '")';
   if (!mysqli_query($connection, $query)) {
        die("Error: insert failed" . mysqli_error($connection));
    }
   echo "Doctor now treats the patient!";  //catches errors outputs if successful
   mysqli_close($connection);  //closes connection with db
?>
</body>
</html>
