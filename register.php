<?php

    session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form method="POST" action="confirm.php" name="submissionfld">
        <div>
            Username: <input type="text" name="user" id="user" placeholder="username">
        </div>

        <div>
            <input type="radio" name="gender" value="M">Male</br>
            <input type="radio" name="gender" value="F">Female</br>
        </div>
        <div>
            <input type="submit" name="submit" value="Register">
        </div>
    </form>

</body>
</html>