<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO user_details (username, password) VALUES ('$username', '$password')";
    if ($conn->query($sql) === TRUE) {
        session_start();
        $_SESSION['username'] = $username;
        header('Location: Gadget Store.html');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
