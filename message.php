<?php

echo "<h2>Reached</h2>";

$u_name=$_POST["u_name"];
$u_email=$_POST['u_email'];
$u_phone=$_POST['u_phone'];
$u_message=$_POST['u_message'];

/*echo $u_name;
echo $u_email;
echo $u_phone;
echo $u_message;*/



$email_from ="sharikanow@gmail.com";
$email_subject="You have a message from your site";
$email_body="User Name: $u_name.\n ".
              "User Email: $u_email.\n ".
              "User Message: $u_message.\n ";
echo "reached3";

$email_to='raruntvm@gmail.com';

$headers="From:$email_from \r\n";
$headers="Reply-to:$u_email \r\n";

echo "reached4";

mail($email_to, $email_subject, $email_body, $headers);
header("Location: index.html")

echo "reached5";*/

 ?>
