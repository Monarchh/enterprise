<?php
require_once 'connectfunction.php'
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
<a href="adduser.html">点我添加用户</a>
<table style="text-align: left" border="1">
    <tr><th>ID</th><th>名字</th><th>年龄</th><th>修改 删除</th></tr>
<?php
/**
 * Created by PhpStorm.
 * User: quincy
 * Date: 2019-03-09
 * Time: 13:19
 */
$conn = connectDb();
$result = mysqli_query($conn,"select * from people");
$dataCount = mysqli_num_rows($result);


for($i=0;$i<$dataCount;$i++){
    $result_arr = mysqli_fetch_assoc($result);

    $id = $result_arr['id'];
    $name = $result_arr['name'];
    $age = $result_arr['age'];

    echo"<tr><td>$id</td><td>$name</td><td>$age</td><td><a href='edituser.php?id=$id'>修改</a> <a href='deleteuser.php?id=$id'>删除</a></td></tr>";
}

?>
</table>
</body>
</html>
