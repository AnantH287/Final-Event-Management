<?php
$servername="localhost";
$user="root";
$password="01032004";
$database="happy";

$conn=new mysqli ($servername,$user,$password,$database);
if($conn->connect_error){
    echo "Database not connect";
}


?>