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
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $sql = "SELECT * FROM users WHERE email = ?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            if ($password == $user['password']) {
                $_SESSION['username'] = $user['username'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['loginuserId'] = $user['userId'];
                echo 'success'; 
            } else {
                echo 'Invalid password!';
            }
        } else {
        
            $sql = "SELECT * FROM admin WHERE adminemail = ?";
            $check = $conn->prepare($sql);
            $check->bind_param('s', $email);
            $check->execute();
            $result = $check->get_result();

            if ($result && $result->num_rows > 0) {
                $row = $result->fetch_assoc();
                if ($row['password'] == $password) {
                    $_SESSION['adminname'] = $row['adminname'];
                    $_SESSION['adminemail'] = $row['adminemail'];
                    echo 'succeed'; 
                } else {
                    echo "Invalid Admin password";
                }
            } else {
                echo "No admin found with this email";
            }
        }
        $stmt->close();
    }
}
$conn->close();
?>
