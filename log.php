<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="log.css">
</head>
<body>
    <div class="container">
        <form id="loginform" method="POST" action="login.php" class="form" autocomplete="on">
            <h1>Login Form</h1>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" placeholder="Enter Email" required>
                <p class="error-message"></p>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter Password" required>
                <p class="error-message"></p>
            </div>
            <button type="submit">Login</button>
            <br>
            <a href="../Resister/resis.php"class='anchor' style="    text-decoration: none; color: blue; padding:5px;">Don't have an account ?</a>
        </form>
    </div>
    <script src="log.js"></script>
</body>
</html>
