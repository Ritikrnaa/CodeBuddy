<!-- PHP SCRIPT FOR SUBMISSION TO DATABASE -->
<?php
    include 'connection.php';
    if(isset($_POST['submit']))
    {
        $question = $_POST['question'];
        $code = $_POST['code'];
        $query = "INSERT INTO `codes` (`question`, `code`) VALUES ('$question', '$code')";
        $fire = mysqli_query($conn,$query) or die("Cannot insert ".mysqli_error($conn));
        if($fire){
            
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
    <!--Link for styleSheet-->
    <link rel="stylesheet" href="style.css">
    <!--Link for javascript-->
    <script src="script.js"></script>
    <!--Link for Fontawesome-->
    <script src="https://kit.fontawesome.com/d413c7d05f.js" crossorigin="anonymous"></script>
    <!--Link for aos-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
<?php
    require "include/navbar.php";
    ?>
<!-- FORM SUBMISSION -->
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
    Question
    <input type="text" name="question" id="question"><br>
    Code
    <textarea name="code" id="code" cols="30" rows="10"></textarea><br>
   
    <input type="submit" name="submit" value="Upload">
    </form> 


</body>
</html>