<?php
//connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "urbanus";

$conn = mysqli_connect($servername, $username, $password, $dbname);

//check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//retrieve data from the login form
$email = $_POST['email'];
$password = $_POST['password'];

//check if user exists in the users table
$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "Login successful";
} else {
    echo "Invalid email or password";
}

mysqli_close($conn);
?>
