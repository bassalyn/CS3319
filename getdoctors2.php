<?php
/* file to get info for doctors
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
include 'connectdb.php';  //connect to db
?>
<h2>Here is the doctors info</h2>
<ol>
<?php
   $whichDoctor= $_POST["doctorname"];  //get which doctor from post
   $query = 'SELECT * FROM doctor, hospital WHERE doctor.worksAt= hospital.hospitalCode AND doctor.licenseNumber="' . $whichDoctor . '"';
   $result=mysqli_query($connection,$query); //queries and checks if valid
    if (!$result) {
         die("database query2 failed.");  //handles errors 
     }
    while ($row=mysqli_fetch_assoc($result)) { //prints infor on doctor
        echo "Name: ".$row["fName"]." ".$row["lName"]." License: ".$row["licenseNumber"]." Specialty: ".$row["specialty"]." Date Licensed:  ".$row["licenseDate"]." Works At:  ".$row["hospitalName"];
     }
     mysqli_free_result($result); //frees result
?>
</ol>
<?php
   mysqli_close($connection); //disconnects from db
?>
</body>
</html>
