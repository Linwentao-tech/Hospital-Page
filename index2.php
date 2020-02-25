<!DOCTYPE html>
<html>
<head>
<title>Hospital Page</title>
<style>
body {
  background-color: lightblue;
}

h1 {
  color: white;
  text-align: center;
}
</style>
</head>
<body>
<?php
include 'connectdb.php';                                  //connect to the database
?>

<h1>Welcome to CS 3319 Hospital 0_0</h1>


<h3>Choose the way you wanna see the doctor!</h3>
<ol>
<form action ="getDoctor.php" method ="post">                            <!-- navigate to a new page -->
<li>which one do you want to sort on?</li>
<input type="radio" name ="nametype" value="firstNameDoctor">First Name<br />
<input type="radio" name ="nametype" value="lastNameDoctor">Last Name<br />
<li>what order do you want to sort on?</li>
<input type="radio" name ="ordertype" value="ASC">Ascending<br>
<input type="radio" name ="ordertype" value="DESC">Descending<br>
<input type="submit" name="button" value="Submit"/>
</form>
</ol>
<p>
<hr>
<p>
<h3>Let's search the doctor licensed before the date you enter!</h3>
<form action = "beforeLicensedDate.php" method ="post">
Enter the date with the form "XXXX-XX-XX" dude:
<input type="text" name ="date">                                      <!-- Let the user input the date following the form -->
<input type = "submit" value ="Let's go babe!">
</form>
<p>
<hr>
<p>
<h3>Let's add a new doctor!</h3>
<form action = "addNewDoctor.php" method="post">
<ol>
<li>Enter the first name:<input type = "text" name = "firstName"></li>
<li>Enter the last name:<input type = "text" name="lastName"></li>
<li>Choose the specialty</li>
<input type="radio" name ="special" value="Surgeon">Surgeon<br />
<input type="radio" name ="special" value="Podiatrist">Podiatrist<br />
<input type="radio" name ="special" value="Urologist">Urologist<br />
<input type="radio" name ="special" value="Pediatrician">Pediatrician<br />
<li>Enter the license date:<input type = "text" name= "licensedDate"></li>
<li>Choose the hospital</li>
<?php
   include 'getHospital.php';                       // get the hospital name
?>
<li>Enter the license Num following the form BU56:<input type = "text" name="licenseNum"></li>
</ol>
<input type="submit" value="Submit">
</form>
<p>
<hr>
<p>
<h3>Update the hospital Name:</h3>
<form action="updateHospital.php" method ="post">
<ol>
<li>Choose the hospital</li>
<?php
   include 'getHospital.php';
?>
<li>Enter the new hospital name:<input type = "text" name="newHospital"></li>
<input type="submit" value="Submit">
</ol>
</form>
<p>
<hr>
<p>
<h3>Let's see the head doctor!</h3>
<form action="headDoctor.php" method="post">               <!--navigate to a new page-->
<input type="submit" value="Go!">
</form>
<p>
<hr>
<p>
<h3>The doctor who has no patients!:</h3>
<form action="noPatients.php" method="post">                <!-- navigate to a new page-->
<input type="submit" value="Go!">
</form>
<p>
<hr>
<p>
<h3>Let's delete a doctor!:</h3>
<form action="delete.php" method ="post">
<ol>
<li>Choose a doctor</li>
<?php
   include 'doctorTreat.php';              // a php file will print out the doctor's name
?>
<input type="submit" value="Delete!">
</ol>
</form>
<p>
<hr>
<p>
<h3>Let's get the match between patient and doctor:</h3>
<form action="match.php" method="post">
Enter the OHIP number: <input type = "text" name="OHIP"></li>
<input type="submit" value="Go!">
</form>
<p>
<hr>
<p>
<h3>Let's assign the doctor!:</h3>
<form action="assign.php" method ="post">
<ol>
<li>Choose the doctor:</li>
<?php
  include 'doctorTreat.php';
?>
<li>Choose a patient:</li>
<?php
  include 'patientTreat.php';
?>
<input type="submit" value="Submit!">
</ol>
</form>
<p>
<hr>
<p>
<h3>Oh you wanna stop a doctor from treating a patient?</h3>
<form action = "stopTreat.php" method = "post">
<ol>
<h4>Let's see who is treating who!:</h4>
<?php
   include 'treat.php';
?>
<li>Choose the doctor:</li>
<?php
  include 'doctorTreat.php';
?>
<li>Choose a patient:</li>
<?php
  include 'patientTreat.php';
?>
<input type = "submit" value="Submit!">
<ol>
</form>

</body>

</html>

