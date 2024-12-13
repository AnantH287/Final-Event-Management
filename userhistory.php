<?php
session_start();
$name = $_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="userhistory.css">
    <title>User History</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Welcome, <?php echo $name; ?>!</h1>
            <p>Your event history is displayed below.</p>
        </div>

        <div class="user-profile">
            <h2>User Profile</h2>
            <p><strong>Name:</strong> <?php echo $name; ?></p>
            <p><strong>Email:</strong> <?php echo $_SESSION['email']; ?></p>
            <p><a href="./pro.php">Back</a></p>
            <p><a href="../Login/log.php">Logout</a></p>
        </div>

        <div class="event-history">
            <h2>Your Event History</h2>
            <?php  
            $servername = "localhost";
            $username = "root";
            $password = "01032004";
            $database = "happy";
            $conn = new mysqli($servername, $username, $password, $database);

            if ($conn->connect_error) {
                echo "Database connection failed.";
            }

            $userId = isset($_SESSION['userId']) ? $_SESSION['userId'] : (isset($_SESSION['loginuserId']) ? $_SESSION['loginuserId'] : '');
            $sql = "SELECT * FROM event WHERE userId = ?";
            $users = $conn->prepare($sql);
            $users->bind_param('i', $userId);

            if ($users->execute()) {
                $result = $users->get_result();
                if ($result && $result->num_rows > 0) {
                    echo "<table class='event-table'>
                            <tr>
                                <th>Event Type</th>
                                <th>Event Date</th>
                                <th>Event Location</th>
                                <th>Status</th>
                            </tr>";

                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $row['eventtype'] . "</td>
                                <td>" . $row['eventdate'] . "</td>
                                <td>" . $row['location'] . "</td>
                                <td>" . $row['status'] . "</td>
                              </tr>";
                    }

                    echo "</table>";
                } else {
                    echo "<p>No events found for this user.</p>";
                }
            } else {
                echo "<p>Error executing query.</p>";
            }
            ?>
        </div>
    </div>
</body>
</html>
