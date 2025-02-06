<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <h1>Sign UP</h1>

    <?php if(isset($_GET['error'])){ ?>
        <b style="color: #f00;"><?=$_GET['error']?></b><br>
        <?php } ?>
    <?php if(isset($_GET['success'])){ ?>
        <b style="color: #0f0;"><?=$_GET['success']?></b><br>
        <?php } ?>
    <form action="page/page.php" method="POST" >
        <label>Name</label><br>
        <input type="text" name="name"><br>
        <label>Email</label><br>
        <input type="email" name="email"><br>
        <label>Password</label><br>
        <input type="password" name="password"><br>
        <label>Confirm Password</label><br>
        <input type="password" name="confirm_password"><br><br>
        <button type="submit">Sign Up</button>
        <a href="login.php">Login</a>
    </form>
</body>
</html>