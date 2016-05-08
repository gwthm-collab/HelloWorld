<?php

   $conn = mysqli_connect("localhost","root","","mydata");
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_connect_error());
   }
   
  $sql = "INSERT INTO mytable (sname,sreg,sclass,email) VALUES ('".$_POST['sname']."', '".$_POST['sreg']."', '".$_POST['sclass']."', '".$_POST['email']."')";
      echo "\n";
   $retval = mysqli_query($conn, $sql);
   
   if(! $retval ) {
      die('Could not enter data... ' . mysql_error());
   }
   
   echo "Entered data successfully\n";
   
   mysqli_close($conn);
?>
