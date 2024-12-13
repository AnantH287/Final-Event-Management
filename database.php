<?php
$servername = "localhost";
$username = "root";
$password = "01032004";
$dbname = "happy";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection error: " . $conn->connect_error);
}

session_start();

$userId = isset($_SESSION['userId']) ? $_SESSION['userId'] : (isset($_SESSION['loginuserId']) ?  $_SESSION['loginuserId']:$userId = '');


unset($_SESSION['marriage_name']);
unset($_SESSION['marriage_number']);
unset($_SESSION['marriage_location']);
unset($_SESSION['marriage_date']);
unset($_SESSION['marriage_venue']);
unset($_SESSION['marriage_catering']);
unset($_SESSION['marriage_photo']);

if (isset($_POST['book']) === true) {
    $name = $_POST['name'];
    $number = $_POST['number'];
    $location = $_POST['location'];
    $eventtype = $_POST['eventtype'];
    $date = $_POST['date'];
    $venue = $_POST['venue'];
    $catering = $_POST['catering'];
    $photo = $_POST['photography'];

    $sql="INSERT INTO event ( userId, eventtype, eventdate, customerNo, customername, location) VALUES (?, ?, ?, ?, ?, ?)";

    $stmtEvent=$conn->prepare($sql);

    $stmtEvent->bind_param("ississ", $userId, $eventtype, $date, $number, $name, $location);

        if($stmtEvent->execute()){

            $eventid=$stmtEvent->insert_id;

            $sqlwedding = "INSERT INTO marriage (eventId, userId, customername, customerNo, weddingdate, location, venue, catering, photography) 
                            VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $final=$conn->prepare($sqlwedding);
            $final->bind_param('iisssssss',$eventid,$userId,$name,$number,$date,$location,$venue,$catering,$photo);

            if ($final->execute()) {

                $_SESSION['marriage_name'] = $name;
                $_SESSION['marriage_number'] = $number;
                $_SESSION['marriage_location'] = $location;
                $_SESSION['eventtype']=$eventtype;
                $_SESSION['eventdate'] = $date;
                $_SESSION['marriage_venue'] = $venue;
                $_SESSION['marriage_catering'] = $catering;
                $_SESSION['marriage_photo'] = $photo;

                header("Location: success.php");
                exit();
            } else {
                echo "Wedding booking error: " . $conn->error;
            }
        }      
    }

?>
