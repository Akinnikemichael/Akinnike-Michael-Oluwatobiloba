//<?php
//error_reporting(E_ERROR|E_PARSE);
//$name=$_POST["name"];
//$email=$_POST["email"];
//$PhoneNumber=$_POST["PhoneNumber"];
//$Message=$_POST["Message"];
//?>

//<?php

//$file=fopen("text.txt","a");
//fwrite($file,$name);
//fwrite($file,$email);
//fwrite($file,$PhoneNumber);
//fwrite($file,$Message);
//fclose($file);
//?>
<h2>
Welcome <?php echo $_GET["name"]; ?><br>
Your email address is: <?php echo $_GET["email"]; ?><br>
Your Phone Number is: <?php echo $_GET["PhoneNumber"]; ?><br>
Your Message for Michael is: <?php echo $_GET["Message"]; ?><br>
Message received will be back shortly.
  </h2>
