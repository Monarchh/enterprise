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
    <title>所有用户</title>
</head>
<body>

<table style="text-align: left" border="1">
    <tr><th>ID</th><th>名字</th><th>邮箱</th><th>留言内容</th><th>删除</th></tr>
    <?php

    $conn = connectDb();
    $result = mysqli_query($conn,"select * from message");
    $dataCount = mysqli_num_rows($result);


    for($i=0;$i<$dataCount;$i++){
        $result_arr = mysqli_fetch_assoc($result);

        $id = $result_arr['id'];
        $name = $result_arr['name'];
        $email = $result_arr['email'];
        $message = $result_arr['message'];

        echo"<tr><td>$id</td><td>$name</td><td>$email</td><td>$message</td><td><a href='deletemessage.php?id=$id'>删除</a></td></tr>";
    }

    ?>
</table>
</body>
</html>
