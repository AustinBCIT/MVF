<?php

    session_start();

    //Include database connection details
<<<<<<< HEAD
	require '/home1/mconnection/.htpasswds/connect.php';
=======
	require_once('mysqli_connect.php');
>>>>>>> ryanbranch

    $_SESSION['username'] = '';  

    //Sanitizing the POST
    $username = $_POST['user'];
    $password = $_POST['pass'];
    $username = stripcslashes($username);
    $password = stripcslashes($password);

    //Connecting to da database, babeh!
<<<<<<< HEAD
    $list = mysqli_connect("$host", "$user", "$password", "$db");
=======
    $list = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
>>>>>>> ryanbranch

    //If we don't connect to the database it will spit out an error for us to fix
    if(!$list){
        die("Connection failed: ".mysqli_connect_error()); // Remove this after done testing because of hacking issues. For sure, mhmm.
    }

    //Goes to the database and collects the usernames and passwords
    $result = mysqli_query($list, "SELECT * FROM user WHERE username = '$username' AND password = '$password'") or 
                die("Failed to query database " . mysqli_error($list)); // Remove this as well when done? I dunno... I'll look at this function another day; Damn, when does this comment thing end?
    
    //Fetches those results and stores them in $row
    $row = mysqli_fetch_array($result);

    //Cross referencing the usernames and passwords from the database with the user input
    if ($row['username'] == $username && $row['password'] == $password ){
        $_SESSION['user'] = $row['username'];  
        header("Location: mobileindex.php");
    } else {
        "<span style=color:red>Failed to login.</span>"; 
    }
    
    //Sends the user to the home page upon successful login
//    header("Location: mobileindex.php");

    exit();
?>