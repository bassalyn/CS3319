<?php
/* get data from hospital and doctor where head doctor
 By Bradley Assaly-Nesrallah
*/
   $query = 'SELECT * FROM hospital, doctor WHERE doctor.licenseNumber = hospital.headIDnumber  ORDER BY hospitalName';
   $result = mysqli_query($connection,$query);  //selects head doctors from hospital
   if (!$result) {
        die("databases query failed."); //handles errors
    }
 
   while ($row = mysqli_fetch_assoc($result)) {
        echo '<li>';    //displays hospital name and head doctor info
	echo "Hospital Name: ".$row["hospitalName"]." Head Doctor: ".$row["fName"]." ".$row["lName"]." Start Date: ".$row["startDate"]."<br>";
   }
   mysqli_free_result($result); //frees results
?>
