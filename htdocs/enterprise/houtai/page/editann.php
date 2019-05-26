<!
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>编辑公告</title>
</head>
<body>


<?php
/**
 * Created by PhpStorm.
 * User: quincy
 * Date: 2019-04-03
 * Time: 17:03
 */
require_once '../../function.php';

if(!empty($_GET['id'])){

    $conn = connectDb();

    $id = intval($_GET['id']);

    $result = mysqli_query($conn,"SELECT * FROM `announcement` where id = '$id'");

    if(mysqli_error($conn)){
        die('can not connect database');
    }

    $arr = mysqli_fetch_assoc($result);


}else{
    die('id not define');
}
?>

<form action="editann_server.php" method="post">
    <div>公告ID(无需修改)
        <input type="text" name="id" value="<?php echo $arr['id'];?>">
    </div>
    <br>
    <div>
        <textarea name="details" rows="10"  cols="40" placeholder="<?php echo $arr['details'];?>"></textarea>
    </div>

    <input type="submit" value="提交修改">
</form>
</body>
</html>