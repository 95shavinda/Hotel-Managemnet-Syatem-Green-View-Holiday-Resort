<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Page</title>
    <link rel = "stylesheet" href = "assets/css/logstyle.css">
</head>
<body>
    <img src = "assets/img/back.jpg" class = "bgimage">
    <div class="contact-form">
        <img src = "assets/img/user.jpg" alt = "" class = "avatar">
        <h2>Login</h2>
        <form action="loginAdmin.php" method = "POST">
            <p>Username</p>
            <input type="text" name="user" placeholder = "Enter Your User Name">
            <p>Password</p>
            <input type="password" name="pass" placeholder = "Enter Your Password">
            <input type="submit" name="submit" value = "Sign In">
            <p><input type="checkbox">Remember Me</p>
        </form>
    </div>
</body>
</html>