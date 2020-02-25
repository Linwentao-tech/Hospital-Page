<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Doctor Add Page</title>
</head>
<body>
<?php
   include 'connectdb.php';
?>
<h1>Here are your doctors:</h1>
<ol>
<?php
   $firstName= $_POST["firstName"];
   $lastName = $_POST["lastName"];
   $specialty = $_POST["special"];
   $licensedDate = $_POST["licensedDate"];
   $hospital = $_POST["hospitalName"];
   $licenseNumber = $_POST["licenseNum"];
   if(empty($firstName)){die("FILL IN ALL THE OPTIONS PLEASE");}
   if(empty($lastName)){die("FILL IN ALL THE OPTIONS PLEASE");}
   if(empty($specialty)){die("FILL IN ALL THE OPTIONS PLEASE");}
   if(empty($licensedDate)){die("FILL IN ALL THE OPTIONS PLEASE");}
   if(empty($hospital)){die("FILL IN ALL THE OPTIONS PLEASE");}
   if(empty($licenseNumber)){die("FILL IN ALL THE OPTIONS PLEASE");} //check if user choose all the options
  

   $checkQuery = 'SELECT * from doctor WHERE licenseNum = "'.$licenseNumber.'"';
   $checkResult = mysqli_query($connection,$checkQuery);
   if(mysqli_num_rows($checkResult)!=0){die("This doctor already exists!");}  //check if doctor already exists

   $query = 'INSERT INTO doctor values("' . $licenseNumber . '","' . $firstName . '","' . $lastName . '","' . $specialty . '","' .$licensedDate .'",NULL,NULL)';
   $query1= 'Update doctor SET workat = "' . $hospital. '" where licenseNum = "' . $licenseNumber . '"';
   $result=mysqli_query($connection,$query);
   $result1=mysqli_query($connection,$query1);
   if (!result){
        die("Error: insert failed" . mysqli_error($connection));
    }
   if (!result1) {
        die("Error: Updated failed" . mysqli_error($connection));
    }
      
 echo "Your doctor is added!"; 
   mysqli_close($connection);
?>
</ol>
</body>
</html>
