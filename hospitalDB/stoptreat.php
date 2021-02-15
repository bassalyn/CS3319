<?php
/* file that stops treatment of a patient and doctor
By Bradley Assaly-Nesrallah
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
   include 'connectdb.php';  //includes db
?>
<?php
   $patientnum= $_POST["ohip"];   //gets ohip licence from post
   $licenseNum = $_POST["license"];    //queries to delete
   $query = 'DELETE FROM seeing WHERE OHIPnumber="'.$patientnum.'" AND licenseNumber="'.$licenseNum.'"';
   if (!mysqli_query($connection, $query)) {
        die("Error: Delete failed" . mysqli_error($connection)); //handles error
    }
   echo "Doctor no longer treats the patient!";
   mysqli_close($connection);  //displays success and disconnects from db
?>
</body>
</html>
