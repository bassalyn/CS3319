<?php
/* file that gets info from patient
By Bradley Assaaly-Nesrallah
*/
   $query = "SELECT * FROM patient"; //gets data from patient
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed."); //handles errors
    }
   echo "What patient do you want to modify? </br>";
   while ($row = mysqli_fetch_assoc($result)) {
        echo '<input type="radio" name="ohip" value="';  //radio button displays patient names
        echo $row["OHIPnumber"];
        echo '">'.$row["fName"]." ".$row["lName"]."<br>";
   }
   mysqli_free_result($result); //frees data
?>
