<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update page</title>
</head>
<body>
<?php
   include 'connectdb.php';
?>
<h1>hospital name updated!</h1>
<ol>
<?php
   $newName = $_POST["newHospital"];
   $hospitalCode = $_POST["hospitalName"];
   $query= 'Update hospital SET hospitalName ="' . $newName. '" where hospitalCode =  "' . $hospitalCode. '"'; //update the hospital using the hospital code
   $result=mysqli_query($connection,$query);
   if (!$result) {
          die("database max query failed.");
   }
  echo "hospital updated";
   mysqli_close($connection);
?>
</ol>
</body>
</html>
