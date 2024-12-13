<?php
session_start();
$servername = "localhost"; 
$username = "root"; 
$password = "01032004"; 
$dbname = "happy"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $password1 = trim($_POST['password1']);
    $number=$_POST['number'];
    $number=2645282;

    $sql = "SELECT * FROM users WHERE email = ?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $errors[] = "Email is already registered!";
        }
        $stmt->close();
    }

    if (empty($errors)) {
        $sql = "INSERT INTO users (username, email, password, number) VALUES (?, ?, ?, ?)";
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("sssi", $username, $email, $password, $number);
            $stmt->execute();
            $userId = $conn->insert_id;

            $_SESSION['username']=$username;
            $_SESSION['password']=$password;
            $_SESSION['email']=$email;
            $_SESSION['userId']=$userId;
            echo "success"; 
            exit();
        }
    } else {
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
    }
    
}
?>















