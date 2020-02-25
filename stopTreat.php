
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
   $check = 'SELECT * from treat where doctorNum = "' .$doctorAssigned. '" AND patientsOHIP = "' .$patientAssigned. '"';
   $checkResult = mysqli_query($connection,$check);
   if(mysqli_num_rows($checkResult)==0){die("This doctor has no patient or is not treating the patient you choose!");} //error message
   $query = 'DELETE from treat where doctorNum = "' .$doctorAssigned. '" AND patientsOHIP = "' .$patientAssigned. '"';
   if (!mysqli_query($connection, $query)) {
        die("Error: delete failed" . mysqli_error($connection));
    }
   echo "You just stopped a doctor treating patient!";
   mysqli_close($connection);
?>
</ol>
</body>
</html>

