<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="wedding.css">
</head>
<body>
    <div class='booking-form'>
    <form action="database.php" method='POST'>
        <label>Name:</label>
        <input type="text" name='name' id='name' placeholder='Enter your name' required>

        <label>Mobile Number:</label>
        <input type="text" name='number' id='number' placeholder='Enter your number' required>

        <label>Location:</label>
        <input type="text" name='location' id='location' placeholder='Enter your location' required>

        <label>Event Date:</label>
        <input type="date" name='date' id='date'  required>

            <label>Venue:</label>
            <select name="venue" id="venue" required>
            <option value="" disabled selected>Select your venue</option>
            <option value="hall">Banquet Hall</option>
            <option value="hotel">Hotel</option>
            <option value="garden">Garden</option>
            <option value="beach">Beachside</option>
            <option value="park">Park</option>
            <option value="other">Other</option>
            </select>

            <label>Do You Want Catering:</label>
            <select name="catering" required>
            <option >select</option>
            <option value="1">Yes</option>
            <option value="0">No</option>
            </select><br>

            
            <label>Do You Want Photography:</label>
            <select name="photography" required>
            <option >select</option>
            <option value="1">Yes</option>
            <option value="0">No</option>
            </select><br>

            <input type="hidden" name="eventtype" value="marriage">

           
    
        <button type='submit' name='book'>Book</button>
    
        
    </form>
    </div>
</body>
</html>