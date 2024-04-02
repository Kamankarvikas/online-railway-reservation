<?php
require_once('config.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Perform signup logic
    $query = "INSERT INTO user_login (username, password) VALUES ('$username', '$password')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Successful signup, redirect to login page or home page
        redirect('userlogin.php');
    } else {
        // Signup failed, handle accordingly (e.g., display an error message)
        echo "Signup failed";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
    <form method="post" action="">
        <!-- Username and password fields go here -->
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <!-- Submit button -->
        <button type="submit">Sign up</button>
    </form>
</body>
</html>
