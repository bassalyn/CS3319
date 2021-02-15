<?php 
/* index file for main assignment page has all different options for a3
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
include 'connectdb.php';  // connect to db
                 //form for getdoctors has radio buttons
?> 
<h1>CS3319 Assignment3</h1>
<!–– form for doctors in alphabetical order uses radio buttons calls getdata ––>
<h2>Doctor's first or last name in alphabetical order</h2>
<form action="getdoctors.php" method="post">
  <input type="radio" name="order" value="firstasc"> First Ascending<br>
  <input type="radio" name="order" value="lastasc"> Last Ascending<br>
  <input type="radio" name="order" value="firstdsc"> First Descending<br>
  <input type="radio" name="order" value="lastdsc"> Last Descending<br>
<input type="submit" value="Get Doctor Names">
</form>
<p>
<hr>
<p>
<h2>Doctors licensed before a given date</h2>
<!–– form for doctors licenced before a date calls get doctors ––>
<form action="getdoctors3.php" method="post">
Date Before(YYYY-MM-DD): <input type="date" name="datebefore"><br>
<input type="submit" value="Get Doctors">
</form>
<p>
<hr>
<p>
<h2>Enter a new doctor</h2>
<!–– form to get input for a new doctor  ––>
<form action="addnewdoctor.php" method="post">
New Doctor's First Name: <input type="text" name ="fName"><br>
New Doctor's Last Name: <input type="text" name="lName"><br>
New Doctor's LicenseNumber: <input type="text" name="licenseNumber"><br>
New Doctor's Specialty: <input type="text" name="specialty"><br>
New Doctor's Date Licensed(YYYY-MM-DD): <input type="date" name="licenseDate"><br>
New Doctor works at: <input type="text" name="hospitalCode" required><br>
<input type="submit" value="Add New Doctor">
</form>
<p>
<hr>
<p>
<h2>Delete an existing doctor</h2>
<!–– form to delete doctor includes getdata3 ––>
<form action="deletedoctor.php" method="post">
<?php
include 'getdata3.php'; // calls getdata3
?>
<input type="submit" value="Delete Doctor">
</form>
<p>
<hr>
<p>
<h2>Update a hospitals name</h2>
<!–– form to update hospital uses getdata4 ––>
<form action="updatehospital.php" method="post">
<?php
include 'getdata4.php'; //calls getdata4
?>
New Hosptial Name: <input type="text" name="newname"><br>
<input type="submit" value="Update Hospital">
</form>
<p>
<hr>
<p>
<h2>List of hospitals ordered alphabetically</h2>
<!–– list of hospitals alphabetic ––>
<?php
include 'getdata5.php'; //includes getdata5
?>
<p>
<hr>
<p>
<h2>Doctors who treat a patient</h2>
<!–– form for doctors who treat patient inputs ohip number and passes to treats ––>
<form action="treatspatient.php" method="post">
Patient OHIP Number: <input type="text" name="OHIP"><br>
<input type="submit" value="Get Patient Doctors">
</form>
<p>
<hr>
<p>
<h2>Assign a doctor to treat</h2>
<!–– form gets input of licence and includes getdata6 to assign a doctor to treat ––>
<form action="addtreat.php" method="post">
Doctor license Number:<input type="text" name="license"><br>
<?php
include 'getdata6.php'; //includes getdata6
?>
<input type="submit" value="Treat Patient">
</form>
<p>
<hr>
<p>
<h2>Assign a doctor to stop treating patient</h2>
<!–– form for doctors to stop trating a patient includes getdata 6  ––>
<form action="stoptreat.php" method="post">
Doctor license Number:<input type="text" name="license"><br>
<?php
include 'getdata6.php'; //includes getdata6
?>
<input type="submit" value="Stop Treating">
</form>
<p>
<hr>
<p>
<h2>Doctors who are not treating any patients</h2>
<!–– displays doctors not treating patients ––>
<?php
include 'getdata7.php'; //includes getdat7
?>
<p>
<hr>
<p>
<h2>Add or view doctor image</h2>
<!–– page to view doctor image ––>
<form action="viewimage.php" method="post">
<?php
include 'getdata3.php'; //includes getdata3
?>
<input type="submit" value="Check Doctor">
</form>
<?php
mysqli_close($connection); //closes database connection
?>
</body> 
</html>
