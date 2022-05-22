<?php
$name=$_POST['fname'];
$email=$_POST['femail'];
$phone=$_POST['fphone'];
$password=$_POST['fpass'];
$cpassword=$_POST['fcpass'];

$file = fopen("details.txt", 'a+');
$s=fread($file, filesize("details.txt"));
$pos = strpos($s, $email);
if(!$pos){
$text=$name."::".$email."::".$phone."::".$password."::".$cpassword."::\r\n";
fwrite($file, $text);
fclose($file);
echo "Your data has been submitted successfully<br>";
}
else {
echo "You are already registered<br>";
}
echo "<a href=sign-in.html>Click Here to login</a>";
?>