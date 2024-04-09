<?php
$email = $_POST['email'];
$password = $_POST['password'];

if(empty($email) ||  empty($password))
{
    echo"Please fill in all fields.";
    exit;
}

$email = htmlspecialchars($email);
$password = htmlspecialchars($password);

echo"Thank you for registering!!<br>";
echo"Your username is:$email<br>";
echo"Your password is:$password<br>";
?>