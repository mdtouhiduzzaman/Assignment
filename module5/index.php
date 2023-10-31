
<!DOCTYPE html>
<html>
<head>
    <title>Login or Registration</title>
</head>
<body>
    
<form method="POST" action="login.php" >
        Email: <input type="email" name="email" required><br>
        Password: <input type="password" name="password" required><br>
        <input type="submit" value="Login">
    </form>
    <p style="font-size:30px">New User Please Register</p>
    <form method="POST" action="register.php" >
        Username: <input type="text" name="username" required><br>
        Email: <input type="email" name="email" required><br>
        Password: <input type="password" name="password" required><br>
        <input type="submit" value="Register">
    </form>
</body>
</html>


