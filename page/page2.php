<?php
session_start();
function validate_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST['email']) && isset($_POST['password'])) {
    include "../connection.php";

    $email = validate_input($_POST['email']);
    $password = validate_input($_POST['password']);

    if (empty($email)) {
        $errorM = "Email is required";
        header("Location:../signup.php?error=$errorM");
    } elseif (empty($password)) {
        $errorM = "Password is required";
        header("Location:../signup.php?error=$errorM");
    } else {
        $sql = "SELECT * FROM users WHERE email=?";
        $stmt = $con->prepare($sql);
        $stmt->execute([$email]);

        if ($stmt->rowCount() > 0) {
            $user = $stmt->fetch();
            $name = $user['name'];
            $db_email = $user['email'];
            $id = $user['id'];
            $hash_password = $user['password'];
            
            if ($email == $db_email) {
                if (password_verify($password, $hash_password)) {
                    $_SESSION['name'] = $name;
                    $_SESSION['email'] = $email;
                    $_SESSION['user_id'] = $id;
                    header("Location:../index.php");
                } else {
                    $errorM = "Incorrect password";
                    header("Location:../signup.php?error=$errorM");
                }
            } else {
                $errorM = "Incorrect email";
                header("Location:../signup.php?error=$errorM");
            }
        } else {
            $errorM = "No user found";
            header("Location:../signup.php?error=$errorM");
        }
    }
} else {
    header("Location:../login.php");
}


?>