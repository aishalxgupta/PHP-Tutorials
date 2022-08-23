<!DOCTYPE html>




<?php

$message_sent=false;
if (isset($_POST['email'])){


    $firstname= $_POST['firstname'];
$lastname= $_POST['lastname'];
$email= $_POST['email'];
// $phone= $_POST['phone'];
$messagesub= $_POST['messagesub'];
$message= $_POST['message'];

$to= "aishalgupta3008@gmail.com";

$body="";
$body .="From: ".$firstname." ".$lastname. "\r\n";
$body .="Email: ".$email. "\r\n";
// $body .="Phone: ".$phone"\r\n";
$body .="Message: ".$message. "\r\n";




mail($to,$messagesub,$body);  

$message_sent=true;

}

?>




<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.php">
    <title>Document</title>
</head>
<body>

<?php
if ($message_sent):

?>
<h3>thanks</h3>

<?php
else:
?>

    <!-- <h2>Contact Us</h2> -->

	<form action="index.php" method="post" autocomplete="off">
		
		<label for="name">First Name*</label>
		<input type="text" name="firstname" placeholder="First Name">
        <br> <br>

        <label for="name">Last Name*</label>
		<input type="text" name="lastname" placeholder="Last Name"> <br> <br>

		<label for="email">Email Address*</label>
		<input type="email" name="email" placeholder="Email"> <br> <br>

        <!-- <label for="phone">Telephone Number</label>
<input type="tel" id="phone" name="phone" > <br> <br> -->

<label for="messagesub">Message Subject*</label>
		<input type="text" name="messagesub" placeholder="Subject"> <br> <br>

		<label for="message">Comments*</label>
		<textarea name="message" placeholder="Message"></textarea> <br> <br>

		<input type="submit" value="Submit">

	</form>

    <style>
        *{
  margin-top: 10px;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Raleway', sans-serif;
}
body, html {
  color: #333;
  display: grid;
  max-width: 100%;
  
}





    </style>

<?php 
endif;
?>

</body>
</html>