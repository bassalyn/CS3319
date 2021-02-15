<?php
/* file to update hospital name
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
   include 'connectdb.php'; //connects to db
?>
<h1>Updating hospital name:</h1>
<ol>
<?php
   $hospitalCode= $_POST["hospitalCode"]; //gets hospital code from post
   $newname = $_POST["newname"];  //query to set new hospital name
   $query = 'UPDATE hospital SET hospitalName ="'.$newname.'" WHERE hospitalCode="'.$hospitalCode.'"';
   if (!mysqli_query($connection, $query)) {
        die("Error: insert failed" . mysqli_error($connection)); //handle error
    }
   echo "Hospital Name was updated!";
   mysqli_close($connection); //disconnects from db
?>
</ol>
</body>
</html>
