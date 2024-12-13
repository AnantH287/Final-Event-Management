<?php  
    session_start();
    // $_SESSION['eventtype']?$eventtype=$_SESSION['eventtype']:'';
    // $_SESSION['eventdate']?$eventdate=$_SESSION['eventdate']:''; 

    $servername = "localhost";
    $username = "root";
    $password = "01032004";
    $dbname = "happy";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Connection error: " . $conn->connect_error);
    }
    // if(isset($_SESSION['customerid'])){
    //     $customerid=$_SESSION['customerid'];
    // } else{
    //     $customerid='';
    // }


    // if(isset($_SESSION['eventtype']) && isset($_SESSION['eventdate'])){
    //     $eventtype=$_SESSION['eventtype'];
    //     $eventdate=$_SESSION['eventdate'];
    // }
    // else{
    //     $eventtype='Not booking';
    //     $eventdate='Not booking';
    // }


    if(isset($_SESSION['username']) || isset($_SESSION['email'])){
        $name = $_SESSION['username']; 
        $email = $_SESSION['email'];
        $userId=$_SESSION['userId'] ?? $_SESSION['loginuserId'];
        // $userId = $_SESSION['userId'] ? $_SESSION['userId'] : $_SESSION['loginuserId'] ? $userId = '';

              $sql="SELECT * FROM event WHERE userId = ? AND status='confirm' ";
              $ptmv=$conn->prepare($sql);
              $ptmv->bind_param('i',$userId);
              $ptmv->execute();
              $result = $ptmv-> get_result();

    //     $sql ="SELECT * FROM event WHERE customerId IN 
    //     (SELECT customerId from customers WHERE customerId = ?)";
    //    $smtp=$conn->prepare($sql);
    //    $smtp->bind_param('i',$customerid);
    //    $smtp->execute();
    //    $result=$smtp->get_result();

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="po.css"> 
</head>
<body>
  

<div class='container'>
    <div class='row'>
    <a href="../main/main.php">
      <img src="back.jpg" alt="Back" width="30" height="30">
    </a>

        <div class='col-6' id='first'>
            <img src="profile.png" alt="Profile Picture" class="img-fluid rounded-circle"> <br>
            <table>
                <tr>
                    <td><strong>Username:</strong> <?php echo ($name); ?></td>
                </tr>
                <tr>
                    <td><strong>Email:</strong> <?php echo ($email); ?></td>
                    <?php
                     $_SESSION['name']=$name ;
                     ?>
                </tr>
                <tr>
                 <td>
                    <div class="user-history-button-container">
                        <a href="./userhistory.php" class="btn btn-info btn-user-history">
                            <i class="fas fa-history"></i> User History
                        </a>
                    </div>
                </td>
                </tr>
                <tr>
                    <td >
                        <a href="../Login/log.php">
                        <button>Logout</button>
                        </a>
                    </td>
                </tr>
            </table>
            <?php  
            } else {
                echo '<p class="text-danger">No user data available.</p>';
            }  
                        
            ?>
        </div>
        <div class='col-6'>
            <h2>Booking Details</h2>
            <!--  Booking Details -->
        <div class="booking-details">

        <?php 
        if($result && $result->num_rows > 0 ){
            echo "<table border='1'>
            <tr>
                <td>Event type:</td>
                <td>Event date:</td>
                <td>Cancel the event:</td>
            </tr>";

        while($row=$result->fetch_assoc()){
           
            echo "<tr>
                    <form action='database.php' method='POST'>
                    <td>".$row['eventtype']."</td>
                    <td>".$row['eventdate']."</td>
                    <td>
                    <input type='hidden' name='eventId' value='".$row['eventId']."'>
                    <button type='submit' name='cancel-event' class='btn btn-danger' data-event-id='".$row['eventId']."'>Cancel event</button>
                    </td>                  
                    </tr>";
        }
        echo "</table>";
      
        } else{
            echo "No booking found";
        }
      ?>


            <!-- <form action="database.php" method="POST">
                <table class="table table-bordered">
                <tbody>  
                       <tr>
                            <td>Event</td>
                            <td>Date</td>
                            <td>Status</td>
                        </tr>
                        <tr>
                            <td> echo($eventtype ? $eventtype:'');</td>
                            <td><hp echo($eventdate ? $eventdate:'');?></td>
                            <td><input type="submit" name="cancel-event" class="btn btn-danger" value="Cancel event"></td>
                        </tr>
                    </tbody>
                </table>
                </form> -->
            </div>
        </div>
    </div>
</div>
</body>
</html>