<?php
/* file to get the information of a specific doctor licensed before date
By Bradley assaly-Nesrallah
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
<h1>Here are the doctors:</h1>
<ol>
<?php
   $whichDate= $_POST["datebefore"];  //gets date from post
   $query1= 'SELECT fName, lName, specialty, licenseDate FROM doctor WHERE licenseDate<"'.$whichDate.'"';
   $result=mysqli_query($connection,$query1);
   if (!$result) {
          die("database query failed."); //handles error
   }
   while ($row=mysqli_fetch_assoc($result)) {  //prints doctor info
        echo '<li>';
        echo $row["fName"]." ".$row["lName"]." ".$row["specialty"]." ".$row["licenseDate"]."<br>";
     }
   mysqli_free_result($result); //frees result
   
?>
</ol>
<?php
mysqli_close($connection); //disconnects from db
?>
</body>
</html>
