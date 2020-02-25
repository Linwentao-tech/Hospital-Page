<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Doctor Page</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Doctors found!!</h1>
<ol>
<?php
   $date= $_POST["date"];
   $query = 'select firstNamedoctor,lastNamedoctor,specialty,dateOfLicensed from doctor where dateOfLicensed < "'. $date .'"';// print the info
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
   if(empty($date)){die("Please enter the date and follow the form!");} //if user input nothing, error message printed
    while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';
        echo $row["firstNamedoctor"].' '.$row["lastNamedoctor"].' who is a '.$row["specialty"].' doctor and was licensed on '.$row["dateOfLicensed"];
     }
     mysqli_free_result($result);
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>
