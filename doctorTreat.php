<?php
   $query = "SELECT * FROM doctor";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   while ($row = mysqli_fetch_assoc($result)) {
        echo '<input type="radio" name="doctor" value="';
        echo $row["licenseNum"];
        echo '">' . $row["firstNamedoctor"] . " " . $row["lastNamedoctor"] . "<br>";
   }
   mysqli_free_result($result);
?>
