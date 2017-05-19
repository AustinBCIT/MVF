<?php

    session_start();

    //Include database connection details
    require_once('mysqli_connect.php');
    
    $list = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    // This is making sure if we connected with the database
    if (!$list) {
        die("Connection failed: ".mysqli_connect_error());
    }

    //Making sure password and re-enter password match
    if ($_POST['password'] == $_POST['password2']) {

        $first = $_POST['firstname'];
        $last = $_POST['lastname'];
        $user = $_POST['username'];
        $passes = $_POST['password'];
        $email = $_POST['email'];
        $sex = $_POST['gender'];
        
        } else {
        echo '* Please ensure the passwords match<br>';
    }

    //Inputting the signin info into the table
    $sql = "INSERT INTO user (first_name, last_name, username, email, password, gender) VALUES('$first', '$last', '$user', '$email', '$passes', '$sex')";

    $data = mysqli_query($list, $sql) or die(mysqli_error($list));

    //Checking to make sure it's true
    if ($data) {
        echo 'Registration successful!';
        header("location: mobileindex.php");
    }
        else {
            echo "Registration failed.";
        }

    exit();
?>