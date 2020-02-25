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
   $query = 'DELETE FROM treat where doctorNum = "' . $doctorName . '"';
   $query1 = 'DELETE FROM doctor where licenseNum = "'. $doctorName .'"';   //delete from treat table first then doctor db
   $result=mysqli_query($connection,$query);
   $result1=mysqli_query($connection,$query1);
   echo "Doctor Deleted!";
   mysqli_close($connection);
?>
</ol>
</body>
</html>
