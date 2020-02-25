<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Doctor delete</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<ol>
<?php
    $doctorName = $_POST["doc"];
    $query = 'DELETE FROM doctor WHERE licenseNum = "' . $doctorName . '"';   //delete directly if no patients
    $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
    echo "Doctor deleted!";  
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>
