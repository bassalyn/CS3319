<?php
/*file to get data from a doctor where not seeing any patients
By Bradley Assaly-Nesrallah
*/
   $query = "SELECT DISTINCT fName, lName FROM doctor, seeing WHERE doctor.licenseNumber NOT IN (SELECT licenseNumber FROM seeing)";
   $result = mysqli_query($connection,$query); //gets distinct doctors
   if (!$result) {
        die("databases query failed."); //handles erros
    }
   while ($row = mysqli_fetch_assoc($result)) {
        echo $row["fName"]." ".$row["lName"]."<br>"; //prints names
   }
   mysqli_free_result($result); //frees results
?>
