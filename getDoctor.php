<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Doctor's Name</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Here is the list:</h1>
<form action = "getDoctorInfo.php" method ="post">   <!-- navigate to the info page -->
<?php
$whichName = $_POST["nametype"];
$orderType = $_POST["ordertype"];
$query = "SELECT * FROM doctor ORDER BY ". $whichName ." ". $orderType ."";
$result = mysqli_query($connection,$query);
if (empty($whichName) or empty($orderType)) {    // if user does not choose any of the button or just 1 button will give the error message
     die("Make your choice and come back again!");
}
echo "Who are you looking up?</br>";
while ($row = mysqli_fetch_assoc($result)) {
   echo '<input type="radio" name="doctor" value="';
   echo $row["licenseNum"];
   echo '">' . $row["firstNamedoctor"] . " " . $row["lastNamedoctor"] . "<br>";
    
}
mysqli_free_result($result);
echo "</ol>";
mysqli_close($connection);
?>
<input type = "submit" value =" Get Information!">
</body>
</html>
