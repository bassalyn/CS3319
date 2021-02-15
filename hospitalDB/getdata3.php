<?php
/* file to get the names and licencenumber of doctors 
 By bradley Assaly-Nesrallah
*/
   $query = "SELECT * FROM doctor"; //gets data from doctors
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed."); //handles errors
    }
   echo "What doctor do you want to modify? </br>";
   while ($row = mysqli_fetch_assoc($result)) {  //radio buttons for reach doctor
        echo '<input type="radio" name="licenseNumber" value="';
        echo $row["licenseNumber"];
        echo '">'.$row["fName"]." ".$row["lName"]."<br>";
   }
   mysqli_free_result($result); //frees results
?>
