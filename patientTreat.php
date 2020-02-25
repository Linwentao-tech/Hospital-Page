<?php
   $query = "SELECT * FROM patient";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   while ($row = mysqli_fetch_assoc($result)) {
        echo '<input type="radio" name="patient" value="';
        echo $row["OHIP"];
        echo '">' . $row["firstName"] . " " . $row["lastName"] . "<br>";
   }
   mysqli_free_result($result);
?>
