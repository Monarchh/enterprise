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
    <title>所有项目</title>
</head>
<body>

<table style="text-align: left" border="1">
    <tr><th>ID</th><th>标题</th><th>项目内容</th><th>项目图片</th><th>删除</th></tr>
    <?php

    $conn = connectDb();
    $result = mysqli_query($conn,"select * from project");
    $dataCount = mysqli_num_rows($result);


    for($i=0;$i<$dataCount;$i++){
        $result_arr = mysqli_fetch_assoc($result);

        $id = $result_arr['id'];
        $tittle = $result_arr['tittle'];
        $details = $result_arr['details'];
        $img = $result_arr['img'];

        echo"<tr><td>$id</td><td>$tittle</td><td>$details</td><td>
        <img src='../../LqhHome/img/works/$img.jpg' style='width: 200px;height: 100px;'></td>
        <td><a href='deletepaoject.php?id=$id'>删除</a></td></tr>";
    }

    ?>
</table>
</body>
</html>
