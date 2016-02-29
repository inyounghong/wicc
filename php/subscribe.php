<?php 
$error   = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
  if (empty($_POST["netid"])) {
    $error = "Please enter your Cornell NetID.";
  }
  else{
    $to      = 'wicc-l-request@cornell.edu';
    $subject = 'join';
    $message = 'hello';
    $headers = 'From: ' . $_POST["netid"] . '@cornell.edu';
    $error = "The following email has been added: <br>" . $_POST["netid"] . "@cornell.edu";
  }

  echo $error;
    //mail($to, $subject, $message, $headers);
  
}
?>