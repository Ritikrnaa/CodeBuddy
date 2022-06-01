<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--Link for styleSheet-->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    require "include/navbar.php";
    ?>
    <div class="content">
        <table  class="border-collapse border border-slate-500 data">
            <thead>
                <tr>
                  <th>Serial No.</th>
                  <th>PDF</th>
                  <th>Title</th>
                  <th>Author</th>
                  <th>Size</th>
                  <th>Upload Time</th>
                  <th>download</th>
                </tr>
              </thead>
              <tbody>
                <?php
                include 'connection.php';
                $query = 'Select * from notes';
                $data = mysqli_query($conn, $query);
                $total = mysqli_num_rows($data);
                
                if($total != 0)
                {
                    while($result = mysqli_fetch_array($data))
                    {
                        echo "
                            <tr>
                            <td>".$result['srno']."</td>
                            <td> pdf file </td> 
                            <td>".$result['name']."</td> 
                            <td>".$result['author']."</td> 
                            <td>".$result['size']."</td>
                            <td>".$result['time']."</td>
                            <td>".$result['download']."</td>
                            </tr>
                        ";
                    }
                }
                else
                {
                    echo "table has no data";
                }


                ?>
              </tbody>
        </table>
    </div>
</body>
</html>