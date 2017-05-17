<?php

    session_start();

    $_SESSION['username'] = '';  

    $username = $_POST['user'];
    $password = $_POST['pass'];

    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysql_real_escape_string($username);
    $password = mysql_real_escape_string($password);

    mysql_connect("localhost","root","");
    mysql_select_db("mvf");

    if(!$conn){
        die("Connection failed: ".mysqli_connect_error()); // Remove this after done testing because of hacking issues. For sure, mhmm.
    }

    $result = mysql_query("SELECT * FROM users WHERE username = '$username' AND password = '$password'") or 
                die("Failed to query database " . mysql_error()); // Remove this as well when done? I dunno... I'll look at this function another day; Damn, when does this comment thing end?

    $row = mysql_fetch_array($result);

    if ($row['username'] == $username && $row['password'] == $password ){
        $_SESSION['username'] = $row['username'];   
    } else {
        "<span style=color:red>Failed to login.</span>"; 
    }

    header("Location: mobileindex.html");

    exit();
?>