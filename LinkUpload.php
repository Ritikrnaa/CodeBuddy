<!-- PHP SCRIPT FOR SUBMISSION TO DATABASE -->
<?php
    include 'connection.php';
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $author = $_POST['creator'];
        $link = $_POST['link'];
        $query = "INSERT INTO `link` (`title`, `author`, `videolink`) VALUES ('$name', '$author', '$link')";
        $fire = mysqli_query($conn,$query) or die("Cannot insert ".mysqli_error($conn));
        if($fire){
            echo "Inertion successful";
        }
    }
    
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload page</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
<!-- FORM SUBMISSION -->
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
    Name
    <input type="text" name="name" id="name"><br>
    Creator
    <input type="text" name="creator" id="creator"><br>
    link
    <input type="text" name="link" id="link"><br>
    <input type="submit" name="submit" value="Upload">
    </form> 


</body>
</html>