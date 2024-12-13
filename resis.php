<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="resis.css">
</head>
<body>
    <div class="container">
    <form id="form" class="form" action="register.php" method="POST" autocomplete="on">
                <h3>Resister Form</h3>
            <div class="form-group ">
                <label for="username">User Name</label>
                <input type="text" name="username" id="username" data-name="User Name" placeholder="Enter your name">
            <p>Error message</p>
            </div>
            <div class="form-group ">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" data-name="Email" placeholder="Enter your Email">
                <p>Error message</p>
            </div>
            <div class="form-group">
            <label for="password">Password</label>
            <input type="text" name="password" id="password" data-name="Password" placeholder="Enter your Password">
            <p>Error message</p>
            </div>
            <div class="form-group">
                <label for="password1">confirm Password</label>
                <input type="text" name="password1" id="password1" data-name="Confirm Password" placeholder="Enter Confirm Password">
                <p>Error message</p>
            </div>
            <div class="form-group">
                <label for="number">Number</label>
                <input type="text" id="number" name="number" placeholder="Enter Your Number">
            </div>
          <a href=""><button type="submit"  id='form'>Submit</button></a> <br><br>
        <a href="../Login/log.php"class='anchor'>If you have already account ?</a>
        </form>
    </div>
    <script src="resis.js"></script>
</body>
</html>