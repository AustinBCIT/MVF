<?php

    session_start();

    //Include database connection details
//	require_once('mysqli_connect.php');

    $_SESSION['username'] = '';  

    //Sanitizing the POST
    $username = $_POST['user'];
    $password = $_POST['pass'];
    $username = stripcslashes($username);
    $password = stripcslashes($password);

    //Connecting to da database, babeh!
    $list = mysqli_connect("localhost","root", "", "userdb");

    //If we don't connect to the database it will spit out an error for us to fix
    if(!$list){
        die("Connection failed: ".mysqli_connect_error()); // Remove this after done testing because of hacking issues. For sure, mhmm.
    }

    //Goes to the database and collects the usernames and passwords
    $result = mysqli_query("SELECT * FROM users WHERE username = '$username' AND password = '$password'") or 
                die("Failed to query database " . mysqli_error()); // Remove this as well when done? I dunno... I'll look at this function another day; Damn, when does this comment thing end?
    
    //Fetches those results and stores them in $row
    $row = mysql_fetch_array($result);

    //Cross referencing the usernames and passwords from the database with the user input
    if ($row['user'] == $username && $row['pass'] == $password ){
        $_SESSION['user'] = $row['user'];   
    } else {
        "<span style=color:red>Failed to login.</span>"; 
    }
    
    //Sends the user to the home page upon successful login
    header("Location: mobileindex.html");

    exit();
?>