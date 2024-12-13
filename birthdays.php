<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="birthday.css">
</head>
<body>
    <div class="login-container">
       
        <form action="database.php" method="POST">
        
        <h1><span>B</span>ook Your Order</h1>
            <label >Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>
           
            <label>Mobile Number:</label>
            <input type="text" id="number" name="number" placeholder="Enter your number" required>
            <label>Location:</label>
            <input type="text" id="location" name="location" placeholder="Enter your location" required>

            <label>Event Date:</label>
            <input type="date" name="eventdate" required><br>
            
            <label>Cake Variety:</label>
            <input type="text" name="cakevariety" required><br>

            <label>Theme:</label>
            <input type="text" name="theme" required><br>
            
            <label>DO You Want Catering:</label>
            <select name="catering" required>
            <option >select</option>
            <option value="1">Yes</option>
            <option value="0">No</option>
            </select><br>
            
            <label>Do You Want Photography:</label>
            <select name="photography" required>
            <option >select</option>
            <option value="1">True</option>
            <option value="0">False</option>
            </select><br>
            
            <input type="hidden" name="eventtype" value="Birthday">

            <button type="submit" name='save'>Book</button>
        </form>
    </div>
</body>
</html>
