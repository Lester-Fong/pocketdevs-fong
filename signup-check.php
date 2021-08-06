<?php
session_start();
include "db_conn.php";


if (isset($_POST['uname']) && isset($_POST['password'])
     && isset($_POST['name']) && isset($_POST['re_password'])) {

    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
        $uname = validate($_POST['uname']);
        $name = validate($_POST['name']);
        
        $pass = validate($_POST['password']);
        $re_pass = validate($_POST['re_password']);

        $user_data = 'uname='. $uname. '&name='. $name;

        echo $user_data;

    if (empty($uname)) {
        header ("Location: signup.php?error=Username is Required&$user_data");
        exit(); 
    } else if (empty($name)) {
        header ("Location: signup.php?error=Your name is Required&$user_data");
        exit();
    } else if (empty($pass)) {
        header ("Location: signup.php?error=Password is Required&$user_data");
        exit();
    } else if (empty($re_pass)) {
        header ("Location: signup.php?error=Please confirm your password&$user_data");
        exit();
    } else if ($re_pass !== $pass) {
        header ("Location: signup.php?error=The Confirmation password does not match&$user_data");
        exit();
    } else {

        #hashing the PASSWORD
        $pass = md5($pass);
        
        $sql = "SELECT * FROM users WHERE user_name='$uname'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            header ("Location: signup.php?error=The Username is already taken, Try another&$user_data");
            exit();
        } else {
            $sql2 = "INSERT INTO users(user_name, password, name) VALUES('$uname', '$pass', '$name') ";
            $result2 = mysqli_query($conn, $sql2);
            if ($result2) {
                header ("Location: index.php?success=Your Account has been created successfully! Please Login now.");
                exit();
            }else {
                header ("Location: signup.php?error=Unknown error occured&$user_data");
                exit();
            }
        }
    }
} else {
    header ("Location: signup.php");
    exit(); 
}