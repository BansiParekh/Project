<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname= 'db';

    // Establish connection
    $conn = mysqli_connect($host, $user, $pass, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Check if the email already exists
    $check_query = "SELECT * FROM detail WHERE email='$email'";
    $result = mysqli_query($conn, $check_query);

    // Check if query execution was successful
    if ($result !== false) {
        if(mysqli_num_rows($result) > 0) {
            // Email exists, check if password matches
            $row = mysqli_fetch_assoc($result);
            $stored_password = $row['password'];
            if($password == $stored_password) {
                echo '<script>alert("Logged in successfully !")</script>';
                include 'order.html'; 
            } else {
                echo '<script>alert("Wrong password !")</script>';
                include 'lg.html'; 
            }
        } else {
            // Email doesn't exist, proceed to registration
            $sql = "INSERT INTO detail(email,password) VALUES('$email','$password')";
            if(mysqli_query($conn, $sql)) {
                echo '<script>alert("Registration Successful !")</script>';
                include 'order.html';  
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
    } else {
        echo "Error executing query: " . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);
}
?>

