
<?php


$to= "b20269@students.iitmandi.ac.in";
// $to= "aishalgupta3008@gmail.com";
$subject = "Assignment 2";
$txt = "Hello!";

function clean_string($string){
    $bad= array("content-type", "bcc:", "to:" , " cc:" ,"href");
    return str_replace($bad,"",$string);

}



$first_name= $_POST['first_name'];
$last_name= $_POST['last_name'];
$email= $_POST['email'];
$phone= $_POST['phone'];
// $messagesub= $_POST['messagesub'];
$comments= $_POST['comments'];

// $to= "aishalgupta3008@gmail.com";
$email_message="";
$email_message .= "First Name: ".clean_string($first_name)."\n";
$email_message .= "Last Name: ".clean_string($last_name)."\n";
$email_message .= "Email: ".clean_string($email)."\n";
$email_message .= "Telephone: ".clean_string($phone)."\n";
$email_message .= "Comments: ".clean_string($comments)."\n";




mail($to,$subject,$email_message);  





?>