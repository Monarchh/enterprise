<?php
/**
 * Created by PhpStorm.
 * User: quincy
 * Date: 2019-04-03
 * Time: 16:02
 */
if(!isset($_POST['tittle'])){
    die("tittle not define");
}
if(!isset($_POST['news'])){
    die("news not define");
}

$tittle = $_POST['tittle'];
if(empty($tittle)){
    die("标题为空");
}
$news = $_POST['news'];
if(empty($news)){
    die("内容为空");
}

require_once '../../function.php';

$conn = connectDb();


$result = mysqli_query($conn,"select * from news");

$insert = mysqli_query($conn,"INSERT INTO `news` ( `tittle`, `news`) VALUES ( '$tittle', '$news')");

if(mysqli_errno($insert)){
    echo mysqli_error($insert);
}else{
    echo '<script language="JavaScript">;alert("添加新闻成功。");location.href="addnews.html";</script>;';
}