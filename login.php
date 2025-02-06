<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
     <?php if(isset($_GET['error'])){ ?>
        <b style="color: #f00;"><?=$_GET['error']?></b><br>
        <?php } ?>
    <form action="page/page2.php" method="POST">
        <label>Email</label><br>
        <input type="email" name="email"><br>
        <label>Password</label><br>
        <input type="password" name="password"><br><br>
        <button type="submit">Login</button>
        <a href="signup.php">Sign Up</a>
    </form>
</body>
</html>