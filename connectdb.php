<?php
/* file connects to database and hundles errors
By Bradley Assaly-Nesrallah
*/
?>

<?php
$dbhost = "localhost";
$dbuser= "root";
$dbpass = "cs3319";   //variable values
$dbname = "250779140assign2db";  //connects to db
$connection = mysqli_connect($dbhost, $dbuser,$dbpass,$dbname);
if (mysqli_connect_errno()) {
     die("database connection failed :" . //handles errors
     mysqli_connect_error() .
     "(" . mysqli_connect_errno() . ")"
         );
    }
?>
