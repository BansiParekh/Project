<?php
// $email = $_POST['email'];
// $password = $_POST['password'];

// if( empty($email) || empty($password))
// {
//     echo"Please fill in all fields.";
//     exit;
// }
// $email = filter_var($email,FILTER_SANITIZE_EMAIL);
// $password = htmlspecialchars($password);

// echo"Thank you for registering!!<br>";
// echo"Your email is:$email<br>";
// echo"Your password is:$password<br>";
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
