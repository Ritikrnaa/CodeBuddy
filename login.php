<?php
include "connection.php";
session_start();
if(!isset($_SESSION['is_login'])){
if(isset($_POST['login']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = "SELECT * FROM users WHERE username = '$username' AND password ='$password'";
        $data = mysqli_query($conn,$query);
        if($data)
        {
            if(mysqli_num_rows($data) == 1)
            {
                $_SESSION['is_login'] = true; 
                $_SESSION['username'] = $username;
                header("Location: dashboard.php");
            }
            else
            { ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>WARNING</strong> <?php echo "Invalid Username or Password"; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php    
            }
        }
    }
}
else{
    header("Location: dashboard.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Login</title>
</head>
<body>
<form action="login.php" method="post">
    Enter username <br>
    <input type="text" name="username" id="username"> <br>
    enter password <br>
    <input type="password" name="password" id="password"> <br>
    <input type="submit" name="login" value="LOGIN">
</form>



</body>
</html>