<?php
/* file to addnew doctor, connects to DB gets variables then inserts into query 
by Bradley Assaly-Nesrallah
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
   include 'connectdb.php'; // connects to DB
?>
<h1>Added new doctor:</h1>
<?php
   $fName= $_POST["fName"];
   $lName = $_POST["lName"];   //gets variables from post and stores
   $specialty =$_POST["specialty"];
   $licenseNum =$_POST["licenseNumber"];
   $licenseDate =$_POST["licenseDate"];
   $worksAt =$_POST["hospitalCode"];   //inserts variables with query
   $query = 'INSERT INTO doctor (licenseNumber,fName,lName,specialty,licenseDate,worksAt) values("'.$licenseNum.'","'.$fName.'","'.$lName.'","'.$specialty.'","'.$licenseDate.'","'.$worksAt.'")';
   if (!mysqli_query($connection, $query)) {
    die("Error: insert failed" . mysqli_error($connection));
   }
   echo "Your doctor was added!";   //catches errors and outputs success if poss
?>
<?php
mysqli_close($connection);  //disconnects from db
?>
</body>
</html>
