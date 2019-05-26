<!
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>编辑用户</title>
</head>
<body>


<?php
/**
 * Created by PhpStorm.
 * User: quincy
 * Date: 2019-03-09
 * Time: 17:35
 */
require_once 'connectfunction.php';

if(!empty($_GET['id'])){

    $conn = connectDb();

    $id = intval($_GET['id']);

    $result = mysqli_query($conn,"SELECT * FROM `people` where id = '$id'");

    if(mysqli_error($conn)){
        die('can not connect database');
    }

    $arr = mysqli_fetch_assoc($result);


}else{
    die('id not define');
}
?>

<form action="edituser_server.php" method="post">
    <div>用户ID
        <input type="text" name="id" value="<?php echo $arr['id'];?>">
    </div>
    <div>用户名字
        <input type="text" name="name" value="<?php echo $arr['name'];?>">
    </div>
    <div>用户年龄
        <input type="text" name="age" value="<?php echo $arr['age'];?>">
    </div>
    <input type="submit" value="提交修改">
</form>
</body>
</html>