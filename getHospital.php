<?php
   $query = "SELECT * FROM hospital";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   while ($row = mysqli_fetch_assoc($result)) {
        echo '<input type="radio" name="hospitalName" value="';
        echo $row["hospitalCode"];
        echo '">' . $row["hospitalName"]. "<br>";
   }
   mysqli_free_result($result);
?>

