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
    <title>公告</title>
</head>
<body>
<table style="text-align: left" border="1">
    <tr><th>ID</th><th>公告内容</th><th>修改</th></tr>
<?php

$conn = connectDb();
$result = mysqli_query($conn,"select * from announcement");
$dataCount = mysqli_num_rows($result);


for($i=0;$i<$dataCount;$i++){
    $result_arr = mysqli_fetch_assoc($result);

    $id = $result_arr['id'];
    $details = $result_arr['details'];


    echo"<tr><td>$id</td><td>$details</td><td><a href='editann.php?id=$id'>修改</a></td></tr>";
}

?>
</table>
</body>
</html>
