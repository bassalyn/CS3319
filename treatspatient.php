<?php
/* file to treat a patient and displays who treats patient
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
include 'connectdb.php';  //include db
?>
<h2>Doctors who treat the patient:</h2>
<?php
   $patientNumber= $_POST["OHIP"];  //get patient num from post
   $query1 = 'SELECT * FROM patient WHERE OHIPnumber="'.$patientNumber.'"';
   $result=mysqli_query($connection,$query1);  //queries and handles error
   if ($result->num_rows == 0){
     echo "The OHIP number entered does not exist!"; //if no result displays
   }else{
     $query = 'SELECT patient.fName AS pfName, patient.lName AS plName, doctor.fName, doctor.lName FROM patient, doctor,seeing WHERE seeing.OHIPnumber = patient.OHIPnumber AND seeing.licenseNumber = doctor.licenseNumber AND patient.OHIPnumber="'.$patientNumber.'"';
    $result1=mysqli_query($connection,$query);  //else gets names 
    if (!$result1) {
         die("database query failed.");  //handles errors
     }
    while ($row=mysqli_fetch_assoc($result1)) { //displays names of those treating
        echo '<li>';
        echo "Patient: ".$row["pfName"]." ".$row["plName"]." Treated by: ".$row["fName"]." ".$row["lName"]."<br>";
     }
     }
     mysqli_free_result($result);
?>
<?php
mysqli_close($connection);  //disconnects from db
?>
</body>
</html>
