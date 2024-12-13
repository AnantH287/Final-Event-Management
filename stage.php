<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stage.css">
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
        
            <label>Do You Want Magic Arrangement:</label>
            <select name="magic" required>
            <option >select</option>
            <option value="1">Yes</option>
            <option value="0">No</option>
            </select><br>    
            
            <label>Catering:</label>
            <select name="catering" required>
            <option >select</option>
            <option value="1">Yes</option>
            <option value="0">No</option>
            </select><br>

            

            <input type="hidden" name="eventtype" value="stage">

           
    
        <button type='submit' name='book'>Book</button>
    
        
    </form>
    </div>
</body>
</html>