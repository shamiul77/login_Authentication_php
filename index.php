<?php
session_start();
if (isset($_SESSION['name']) && isset($_SESSION['user_id'])) { ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    <h2>Welcome to my page, <?php echo $_SESSION['name']; ?></h2>
    <h2><?php echo $_SESSION['email']; ?></h2>

</body>
</html>

<?php 
} else {
    $errorM = "Login First!";
    header("Location: login.php?error=$errorM");  
    exit();
}
?>
