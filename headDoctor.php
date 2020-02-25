<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>head doctor</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Here are the head doctors!:</h1>
<ol>
<?php
   $query = 'SELECT hospitalName,firstNamedoctor,lastNamedoctor,dateOfBecomingHead,province from hospital,doctor  where workat = hospitalCode And dateOfBecomingHead IS NOT NULL ORDER BY hospitalName';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';
        echo $row["firstNamedoctor"].' '.$row["lastNamedoctor"].' is the head doctor of  '.$row["hospitalName"].' , '.$row["province"].' starting head doctor career on '.$row["dateOfBecomingHead"];
     }
     mysqli_free_result($result);
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>
