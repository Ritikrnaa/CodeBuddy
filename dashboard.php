<?php require "connection.php"; ?>
<?php
    session_start();
    if($_SESSION['is_login'])
    {
            $username = $_SESSION['username'];
    }else{
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Hello <?php echo $username;?></h1>
    <p>You can <a href="include/logout.php">logout</a></p>
</body>
</html>