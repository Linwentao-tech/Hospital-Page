<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Delete Page</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Delete progress loading...</h1>
<ol>
<?php
   $doctor= $_POST["doctor"];
   $query = 'SELECT doctorNum from treat where doctorNum = "' .$doctor. '"';
   $result = mysqli_query($connection,$query);
   if(mysqli_num_rows($result)==0){        //case if no patients
      echo("No patients assigned!");
      echo " Are you sure to delete this doctor?";
      echo '<form action="deleteNoPatient.php" method="POST">';
      echo '<input type="hidden" name="doc" value="' .$doctor. '">';
      echo '<input type="submit" value="Yes">'; 
      echo '</form>';
      echo '<form action="index2.php" method="post">';
      echo '<input type=submit value= "No" )>';
      echo '</form>';

}else{
      echo "Has patients assigned!";             //case if has patient
      echo " Are you sure to delete this doctor?";
      echo '<form action="deleteHasPatient.php" method="POST">';
      echo '<input type="hidden" name="doc" value="' .$doctor. '">';
      echo '<input type="submit" value="Yes">';
      echo '</form>';
      echo '<form action="index2.php" method="post">';
      echo '<input type=submit value= "No" )>';
      echo '</form>';}

?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>
