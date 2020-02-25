<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Treat Page</title>
</head>
<body>
<?php
   include 'connectdb.php';
?>
<ol>
<?php
   $doctorAssigned= $_POST["doctor"]; //get the licenseNumber
   $patientAssigned = $_POST["patient"];  //get then OHIP
   $name = 'SELECT firstName,lastName from patient where OHIP = "' .$patientAssigned. '" ';
   $result = mysqli_query($connection,$name);
   $row = mysqli_fetch_assoc($result);
   $firstNamePatient = $row["firstName"]; //pass to the variable
   $lastNamePatient = $row["lastName"];
   $query = 'INSERT INTO treat VALUES ("' .$doctorAssigned. '","' .$firstNamePatient. '","' .$lastNamePatient .'","' .$patientAssigned . '")';
   if (!mysqli_query($connection, $query)) {
        die("Error: insert failed" . mysqli_error($connection));
    }
   echo "You just assigned a doctor to a patient!";
   mysqli_close($connection);
?>
</ol>
</body>
</html>
