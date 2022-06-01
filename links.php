<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<div class="content">
        <table  class="border-collapse border border-slate-500 data">
            <thead>
                <tr>
                  <th>Serial No.</th>
                  <th>Title</th>
                  <th>Author</th>
                  <th>Link</th>
                </tr>
              </thead>
              <tbody>
                <?php
                include 'connection.php';
                $query = 'Select * from link';
                $data = mysqli_query($conn, $query);
                $total = mysqli_num_rows($data);
                
                if($total != 0)
                {
                    while($result = mysqli_fetch_array($data))
                    {
                      // https://www.youtube.com/playlist?list=PLu0W_9lII9aikXkRE0WxDt1vozo3hnmtR
                      // https://www.youtube.com/playlist?list=PLu0W_9lII9aikXk
                        echo "
                            <tr>
                            <td>".$result['srno']."</td>
                            <td>".$result['name']."</td> 
                            <td>".$result['creator']."</td> 
                            <td> <a href=".$result['link'].">Click Here</a></td>
                            </tr>
                        ";
                    }
                }
                else
                {
                    echo "table has no data";
                }
                  $link1 = "https://www.youtube.com/playlist?list=PLu0W_9lII9aikXk";
                  echo strlen("https://www.youtube.com/playlist?list=PLu0W_9lII9aikXk");
                  echo "   ".strlen("https://www.youtube.com/playlist?list=PLu0W_9lII9aikXkRE0WxDt1vozo3hnmtR");
                ?>
              </tbody>
        </table>
    </div>
</body>
</html>
