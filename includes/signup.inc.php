<?php
require_once 'passwordLib.php';
if (isset($_POST['submit'])){

    include_once 'dbh.inc.php';

    $firstname = mysqli_real_escape_string($conn,$_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn,$_POST['lastname']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $uid = mysqli_real_escape_string($conn,$_POST['uid']);
    $pwd = mysqli_real_escape_string($conn,$_POST['pwd']);

    //Error handlers
    //Check for empty fields
    if (empty($firstname) || empty($lastname) || empty($email) || empty($uid) || empty($pwd)){
        header("Location: ../signup.php?signup=empty");
        exit();
    } else{
        //check if input characters are valid
        if (!preg_match("/^[a-zA-Z]*$/", $firstname) || !preg_match("/^[a-zA-Z]*$/", $lastname)){
            header("Location: ../signup.php?signup=invalid");
            exit();
        } else{
            //check if email is valid
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                header("Location: ../signup.php?signup=email");
                exit();
            } else{
                $sql = "SELECT * FROM users WHERE user_uid='$uid'";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);

                if($resultCheck > 0){
                    header("Location: ../signup.php?signup=usertaken");
                    exit();
                } else{
                    //hashing the password
                    $hashedPwd = password_hash($pwd,PASSWORD_DEFAULT);
                    //insert user into DB
                    $sql = "INSERT INTO users (user_firstname, user_lastname, user_email, user_uid, user_pwd) VALUES ('$firstname', '$lastname', '$email', '$uid', '$hashedPwd');";
                    mysqli_query($conn, $sql);
                    header("Location:../index.php?signup=success");
                    exit();

                }
            }
        }

    }
} else{
    header("Location: ../signup.php");
    exit();
}
