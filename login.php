<?php
$username = $_POST['username'];
$password = $_POST['password'];

if(empty($username) ||  empty($password))
{
    echo"Please fill in all fields.";
    exit;
}

$username = htmlspecialchars($username);
$password = htmlspecialchars($password);

echo"Thank you for registering!!<br>";
echo"Your username is:$username<br>";
echo"Your password is:$password<br>";
?>
