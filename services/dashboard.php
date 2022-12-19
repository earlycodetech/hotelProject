<?php
    require "../assets/config/db_con.php";
    require "../assets/includes/sessions.php";
    authGuard();
    echo $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="../assets/config/logout">Log Out</a>
    <h1>Logged In</h1>
</body>
</html>