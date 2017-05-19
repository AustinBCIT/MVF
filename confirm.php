<?php

    session_start();

    require '/home1/mconnection/.htpasswds/connect.php';
    
    $mysqli = new mysqli($host, $user, $password, $db);

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


            // user_id, first_name, last_name, username, email, password, gender
            $sql = "INSERT INTO users VALUE('', 'first_name', 'last_name', 'username', 'email', 'password', 'gender')";

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