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
<h1>Here are the doctors who has no patients:</h1>
<ol>
<?php
   $query = 'select firstNameDoctor,lastNameDoctor FROM doctor WHERE firstNameDoctor not in(select DISTINCT firstNameDoctor FROM doctor,treat WHERE licenseNum = doctorNum);';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';
        echo $row["firstNameDoctor"].' '.$row["lastNameDoctor"];
     }
     mysqli_free_result($result);
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>
