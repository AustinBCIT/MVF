<?php

    session_start();

    $_SESSION['username'] = '';

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "userdb";

    
    $mysqli = new mysqli($servername, $username, $password, $database);

    // This is making sure if we connected with the database
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if ($_POST['password'] == $_POST['password2']) {

            $usernames = $mysqli->real_escape_string($_POST['username']);
            $emails = $mysqli->real_escape_string($_POST['email']);
            $passwords = $mysqli->real_escape_string($_POST['password']);

            $_SESSION['username'] = $usernames;
            $_SESSION['email'] = $emails;

            $sql = "INSERT INTO users (USERNAME, PASSWORD, EMAIL) "
                    . "VALUES ('$usernames', '$passwords', '$emails')";

            if ($mysqli->query($sql) === true) {
                $_SESSION['message'] = 'Registration successful!  Added $username to the database!';
                header("location: mobileindex.html");
            }
            else {
                $_SESSION['username'] = 'Registration failed.';
            }

        }
        else {
            $_SESSION['username'] = '* Please ensure the passwords match<br>';
        }
    }

    exit();
?>