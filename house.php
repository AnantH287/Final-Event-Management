<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="house.css">
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
        <label>Theme:</label>
    
        <select name="theme" id="theme" required>
        <option value="" disabled selected>Select your theme</option>
        <option value="cozy">Cozy & Rustic</option>
        <option value="modern">Modern & Minimalist</option>
        <option value="garden">Garden or Outdoor</option>
        <option value="vintage">Vintage & Classic</option>
        <option value="cultural">Cultural or Traditional</option>
        <option value="beach">Beach or Tropical</option>
        <option value="elegant">Elegant & Sophisticated</option>
        <option value="diy">DIY & Handmade</option>
        </select>


            <label>Do You Want Catering:</label>
            <select name="catering" required>
            <option >select</option>
            <option value="1">Yes</option>
            <option value="0">No</option>
            </select><br>

            
            <label>Do You Want Photography::</label>
            <select name="photography" required>
            <option >select</option>
            <option value="1">Yes</option>
            <option value="0">No</option>
            </select><br>

            <input type="hidden" name="eventtype" value="house">

           
    
        <button type='submit' name='book'>Book</button>
    
        
    </form>
    </div>
</body>
</html>