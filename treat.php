<?php
   $query = "select firstNamedoctor,lastNamedoctor,firstNamePatient,lastNamePatient,licenseNum,patientsOHIP from doctor,treat where licenseNum = doctorNum;";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   while ($row = mysqli_fetch_assoc($result)) {
        echo $row["firstNamedoctor"] . " " . $row["lastNamedoctor"] ." is treating the patient ". $row["firstNamePatient"] . " " . $row["lastNamePatient"] . "<br>";
   }
   mysqli_free_result($result);
?>
