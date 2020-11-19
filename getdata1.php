<?php
/* file to get get data displays fname lname in order based on input
 By Bradley Assaly-Nesrallah
*/
   $whatorder= "firstasc";
if ($whatorder == "firstasc"){   //depending on what order different querry order by changes
   $query = 'SELECT fName, lName, licenseNumber FROM doctor ORDER BY fName';
   $result=mysqli_query($connection,$query);
}else if ($whatorder == "firstdsc"){
   $query = 'SELECT fName, lName, licenseNumber FROM doctor ORDER BY fName DESC$
   $result=mysqli_query($connection,$query);
}else if ($whatorder == "lastasc"){
   $query = 'SELECT fName, lName, licenseNumber FROM doctor ORDER BY lName';
   $result=mysqli_query($connection,$query);
}else{
   $query = 'SELECT fName, lName, licenseNumber FROM doctor ORDER BY lName DESC$
   $result=mysqli_query($connection,$query);
}
if (!$result) {
   die("database query failed."); //handles errors
}
while ($row=mysqli_fetch_assoc($result)) {   //displays doctor licence and name 
   echo 'input type="radio" name ="doctorname" value ="';
   echo $row["licenseNumber];
   echo $row["fName"]." ".$row["lName"]."<br>";
}
?>
