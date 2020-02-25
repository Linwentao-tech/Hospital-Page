<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Information Page</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Doctor Information Displayed!</h1>
<ol>
<?php
   $whichDoctor= $_POST["doctor"];
   $query = 'select firstNamedoctor,lastNamedoctor,specialty,dateOfLicensed,hospitalName,city,province from doctor,hospital where hospitalCode = workat AND licenseNum ="' .$whichDoctor. '" ';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
     if(empty($whichDoctor)){ die("Choose the doctor please..");}   //error if user does not choose anyone 
    while ($row=mysqli_fetch_assoc($result)) {
      echo "<li>";  
      echo $row["lastNamedoctor"].' '.$row["firstNamedoctor"].'   '.'is a '.$row["specialty"].', the date of license is  '.$row["dateOfLicensed"].' and works in  '.$row["hospitalName"].', '.$row["city"].', '.$row["province"]."</li>";
        
     }
     mysqli_free_result($result);
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>
