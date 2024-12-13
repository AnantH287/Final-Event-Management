<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    
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
// =========total==============
$total=0;
$totaluser="SELECT COUNT(userId) as count FROM users";
$result=$conn->query($totaluser);
if($result && $result->num_rows > 0){
    while($row=$result->fetch_assoc()){
        $total=$row['count'];
    }
}
// ==========calculate=============
$confirm=0;
$cancel=0;
$finish=0;
$sql="SELECT status ,COUNT(*) as count FROM event GROUP BY status";
$result=$conn->query($sql);

if($result && $result->num_rows > 0){
    while ($row=$result->fetch_assoc()) {
        if($row['status']=='confirm'){
            $confirm=$row['count'];
        } else if($row['status']=='canceled'){
            $cancel=$row['count'];
        } else if($row['status']=='finish'){
            $finish=$row['count'];
        }
    }
}
// ============Last User Name========
$lastname='';
$sql="SELECT username FROM users ORDER BY userId desc LIMIT 1";
$result=$conn->query($sql);
if($result && $result->num_rows > 0 ){
    while($row=$result->fetch_assoc()){
        $lastname=$row['username'];
    }
}
// ========last event===========
$lastevent='';
$sql="SELECT eventtype from event ORDER BY eventId desc LIMIT 1";

$result=$conn->query($sql);
if($result && $result->num_rows > 0){
    while ($row=$result->fetch_assoc()){
        $lastevent=$row['eventtype'];
    }
}
// =========Again last event=================
$atuser='';
$atevent='';
$sql="SELECT customername,eventtype from event ORDER BY eventId desc LIMIT 1 OFFSET 1 ";
$result=$conn->query($sql);
if($result && $result->num_rows > 0){
    while ($row=$result->fetch_assoc()){
        $atuser=$row['customername'];
        $atevent=$row['eventtype'];
    }
}
?>

    <div class="container-fluid py-3">
        <div class="mb-4">
            <a href="../main/main.php" class="back-icon">
                <i class="fas fa-arrow-left"></i> Back to Home
            </a>
        </div>

        <div class="dashboard-header text-center mb-5">
            <h1>Admin Dashboard</h1>
            <p>Track user activities and event statistics in one place.</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-3 col-sm-6">
                <div class="card stats-card">
                    <div class="card-body text-center">
                        <h5>Total Users</h5>
                        <p class="stat-number"><?php echo $total; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card stats-card">
                    <div class="card-body text-center">
                        <h5>Confirmed Events</h5>
                        <p class="stat-number"><?php echo $confirm; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card stats-card">
                    <div class="card-body text-center">
                        <h5>Canceled Events</h5>
                        <p class="stat-number"><?php echo $cancel; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card stats-card">
                    <div class="card-body text-center">
                        <h5>Finished Events</h5>
                        <p class="stat-number"><?php echo $finish; ?></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="recent-activities mt-5">
            <h4 class="section-title">Recent Activities</h4>
            <div class="card shadow-sm">
                <div class="card-body">
                    <ul class="activity-list">
                        <li><strong><?php echo $lastname; ?></strong> registered as a user.</li>
                        <li>Recently added event: <strong><?php echo $lastevent; ?></strong>.</li>
                        <li><strong><?php echo $atuser; ?></strong> booked a <strong><?php echo $atevent; ?></strong> event.</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="manage-events mt-5 text-center">
            <h4 class="section-title">Manage Events</h4>
            <a href="./manage.php" class="btn btn-custom">View All Events</a>
        </div>
    </div>

</body>
</html>
