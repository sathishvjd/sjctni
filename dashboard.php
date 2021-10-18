<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="dash">
        <p>welcome, <?php echo $_SESSION['username']; ?>!</p>
        <p></p>
        <p><a href="logout.php">Logout</a></p>
    </div>
</body>
</html>
