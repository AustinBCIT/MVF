<?php
    define('DB_USER', 'root');
    define('DB_PASSWORD', '1234');
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'userlogin');

    $dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
    OR die('Could not connect to MySQL ' 
            . mysqli_connect_error());
?>