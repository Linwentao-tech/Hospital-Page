<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>match page</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Let's get the match:</h1>
<ol>
<?php
   $OHIPnumber= $_POST["OHIP"]; //find the info based on ohip
   $query = 'select firstNamedoctor,lastNamedoctor,firstNamePatient,lastNamePatient from treat,doctor where doctorNum = licenseNum AND patientsOHIP = "' . $OHIPnumber . '";';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
   
    while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';
        echo $row["firstNamedoctor"]." ".$row["lastNamedoctor"]." is the doctor who treats ",$row["firstNamePatient"]." ".$row["lastNamePatient"];
        echo 'with the OHIP number ' .$OHIPnumber. '';    
 }
   if(mysqli_num_rows($result)==0){   //if OHIP entered not exists
        die("The OHIP you enter does not exist, please try again!");}
     mysqli_free_result($result);
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>
