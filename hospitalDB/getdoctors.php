<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>CS3319 Assignment3</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h2>Here are the ordered doctors</h2>
<?php
   $whatorder= $_POST["order"];
if ($whatorder == "firstasc"){
   $query = 'SELECT fName, lName, licenseNumber FROM doctor ORDER BY fName';
   $result=mysqli_query($connection,$query);
}else if ($whatorder == "firstdsc"){
   $query = 'SELECT fName, lName, licenseNumber FROM doctor ORDER BY fName DESC';
   $result=mysqli_query($connection,$query);
}else if ($whatorder == "lastasc"){
   $query = 'SELECT fName, lName, licenseNumber FROM doctor ORDER BY lName';
   $result=mysqli_query($connection,$query);
}else{
   $query = 'SELECT fName, lName, licenseNumber FROM doctor ORDER BY lName DESC';
   $result=mysqli_query($connection,$query);
}
if (!$result) {
   die("database query failed.");
}
?>
<form action="getdoctors2.php" method="post">
<?php    
while ($row=mysqli_fetch_assoc($result)) {
        echo '<input type="radio" name ="doctorname" value ="';
        echo $row["licenseNumber"];
        echo '">'.$row["fName"]." ".$row["lName"]."<br>";
     }
mysqli_free_result($result);
?>
<input type="submit" value="Get Doctor Info">
</form>
<?php
   mysqli_close($connection);
?>
</body>
</html>
