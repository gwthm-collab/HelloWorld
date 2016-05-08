<?php

   $conn = mysqli_connect("localhost","root","","mydata");
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_connect_error());
   }
   
	$sql = "SELECT count(sreg),sreg,presence FROM pres where sreg='".$_POST["sreg"]."' AND presence='yes'";
      echo "\n";
   $result = mysqli_query($conn, $sql);
   
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "Register number " . $row["sreg"]. " had attended " . $row["count(sreg)"]. " days.";
    }
} else {
    echo "0 results";
}

   mysqli_close($conn);
?>
