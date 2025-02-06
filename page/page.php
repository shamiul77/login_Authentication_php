<?php

function validate_input($data){
    $data =  trim($data);
    $data =  stripcslashes($data);
    $data =  htmlspecialchars($data);
    return $data;
}


if(isset($_POST['name'])&&
isset($_POST['email'])&&
isset($_POST['password'])&&
isset($_POST['confirm_password'])){

    include "../connection.php";

    $name = validate_input($_POST['name']);
    $email = validate_input($_POST['email']);
    $password = validate_input($_POST['password']);
    $confirm_password = validate_input($_POST['confirm_password']);


    if(empty($name)){
        $errorM = "Name is required";
        header("Location:../signup.php?error=$errorM");
    }else if(empty($email)){
        $errorM = "Email is required";
        header("Location:../signup.php?error=$errorM");
    }else if(empty($password)){
        $errorM = "Password is required";
        header("Location:../signup.php?error=$errorM");
    }else if($password != $confirm_password){
        $errorM = "Password and Confirm Password does not match";
        header("Location:../signup.php?error=$errorM");
    }else{
        $sql = "SELECT * FROM users WHERE email=?";
        $stmt = $con->prepare($sql);
        $stmt-> execute([$email]);
        if($stmt->rowCount() > 0){
            $errorM = "This email already used";
            header("Location:../signup.php?error=$errorM"); 
        }else{
            $password = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (name,email,password) VALUES(?,?,?)";
            $stmt = $con->prepare($sql);
            $stmt-> execute([$name, $email, $password]);

            $successM = "Registered Successfully";
            header("Location:../signup.php?success=$successM");
        }

    }
}else{
        header("Location:../signup.php");
    }




?>