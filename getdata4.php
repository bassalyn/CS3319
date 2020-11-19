<?php
/* file to get data of hospitals
 By Bradley Assaly-Nesrallah
*/
   $query = "SELECT * FROM hospital";      //gets data from hospital
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed."); //handles errors
    }
   echo "What hospital name do you want to change? </br>";
   while ($row = mysqli_fetch_assoc($result)) {  //displays radio buttons for each hospital
        echo '<input type="radio" name="hospitalCode" value="';
        echo $row["hospitalCode"];
        echo '">'.$row["hospitalCode"]." Name: ".$row["hospitalName"]."<br>";
   }
   mysqli_free_result($result);  //frees results
?>
