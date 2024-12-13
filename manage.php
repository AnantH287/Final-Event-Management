<?php 
session_start();

$servername = "localhost";
$username = "root";
$password = "01032004";
$dbname = "happy";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection error: " . $conn->connect_error);
}

$sql="SELECT * FROM event WHERE status='confirm'";
$result=$conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Event Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="admin.css">
</head>
<body>

    <div class="container-fluid py-3">
        <a href="./admin.php" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Back to Dashboard
        </a>
    </div>


    <div class="container-fluid py-3">
        <div class="text-center">
            <h1>Event Management Dashboard</h1>
            <p>Manage and track confirmed events efficiently.</p>
        </div>
    </div>

    <div class="container my-5">
        <h2 class="section-title text-center">Confirmed Events</h2>

        <?php 
        if($result && $result->num_rows > 0){
            echo "<div class='table-responsive'>";
            echo "<table class='table table-bordered'>
                    <thead class='thead-dark'>
                        <tr>
                            <th>Event Type</th>
                            <th>Event Date</th>
                            <th>Customer Name</th>
                            <th>Customer Number</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>";

            while ($row=$result->fetch_assoc()){
                echo "<tr>
                        <td>".$row['eventtype']."</td>
                        <td>".$row['eventdate']."</td>
                        <td>".$row['customername']."</td>
                        <td>".$row['customerNo']."</td>
                        <td>".$row['status']."</td>
                        <td>
                            <form action='database.php' method='POST'>
                                <input type='hidden' name='eventId' value='".$row['eventId']."'>
                                <button type='submit' name='finish-event' class='btn btn-success'>Finish Event</button>
                            </form>
                        </td>
                    </tr>";
            }

            echo "</tbody></table>";
            echo "</div>";
        } else {
            echo "<p class='text-center'>No confirmed events at the moment.</p>";
        }
        ?>
    </div>

    <!-- Admin Tips Section -->
    <div class="container py-5">
        <div class="alert alert-info text-center">
            <strong>Tip for Admins:</strong> Make sure to verify the details of each event before marking it as finished. Always ensure customer satisfaction for future referrals!
        </div>
    </div>

</body>
</html>
