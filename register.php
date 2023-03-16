
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

//retrieve data from the registration form
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

//insert data into the users table
$sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

if (mysqli_query($conn, $sql)) {
    echo "Registration successful";
    echo'<p>You have successfully registered. Click <a href="login.php">here</a> to login.</p>';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
