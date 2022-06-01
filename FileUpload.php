<!-- PHP SCRIPT FOR SUBMISSION TO DATABASE -->
<?php
    include 'connection.php';
    if(isset($_POST['submit']))
    {
        $name = $_POST['title'];
        $author = $_POST['author'];
        $size = $_POST['size'];
        $file_name = trim($_FILES['upload']['name']);
        $file_tmpname = $_FILES['upload']['tmp_name'];
        $file_size = $_FILES['upload']['size'];
        $file_type = $_FILES['upload']['type'];
        $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
        if(!empty($file_name)){
            if($file_size <= 100000000){
                    if($file_ext == "pdf"){
                        $final_file = "img/images/".$file_name;
                        $upload = move_uploaded_file($file_tmpname, $final_file);
                        
                        if($upload) {
                            $query = "INSERT INTO `notes` (`title`, `author`, `size`, `filepath`) VALUES ('$name', '$author', '$file_size', '$final_file')";
                            $fire = mysqli_query($conn,$query) or die("Cannot insert ".mysqli_error($conn));
                            if($fire){
                                echo "Inertion successful";
                            }
                            
                        }
                    }else{echo "File type must be PDF";}
            }else{echo "File sizei s too large";}
        }else{echo "Please add an pdf file";}
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
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
    title
    <input type="text" name="title" id="title"><br>
    Author
    <input type="text" name="author" id="author"><br>
    Size
    <input type="text" name="size" id="size"><br>
    File
    <input type="file" name="upload" id="upload"><br>
    <input type="submit" name="submit" value="Upload">
    </form> 


</body>
</html>