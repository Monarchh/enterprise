<?php
require_once '../../function.php'
?>
<!
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>所有新闻</title>
</head>
<body>
<h1><a href="addnews.html">添加新闻</a></h1>
<table style="text-align: left" border="1">
    <tr><th>ID</th><th>标题</th><th>新闻内容</th><th>删除</th></tr>
    <?php

    $conn = connectDb();
    $result = mysqli_query($conn,"select * from news");
    $dataCount = mysqli_num_rows($result);


    for($i=0;$i<$dataCount;$i++){
        $result_arr = mysqli_fetch_assoc($result);

        $id = $result_arr['id'];
        $tittle = $result_arr['tittle'];
        $news = $result_arr['news'];


        echo"<tr><td>$id</td><td>$tittle</td><td>$news</td><td><a href='deletenews.php?id=$id'>删除</a></td></tr>";
    }

    ?>
</table>
</body>
</html>
