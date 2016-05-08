<?php

   $conn = mysqli_connect("localhost","root","","mydata");
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_connect_error());
   }
   
  $sql = "INSERT INTO pres (sreg,presence) VALUES ('".$_POST['sreg']."', '".$_POST['presence']."')";
      echo "\n";
   $retval = mysqli_query($conn, $sql);
   
   if(! $retval ) {
      die('Could not enter data... ' . mysql_error());
   }
   
   echo "Entered data successfully\n";
   
   mysqli_close($conn);
?>