<?php
/**
 * Created by PhpStorm.
 * User: quincy
 * Date: 2019-04-01
 * Time: 15:56
 */


if(empty($_GET['id'])){
    die('id is empty');
}

require_once '../../function.php';

$conn = connectDb();

$id = intval($_GET['id']);

mysqli_query($conn,"delete from message where id = '$id'");

if(mysqli_error()){
    die('Fail to delete user with id '.$id);
}else{
    header("Location:messages.php");
    //echo'点击返回：<a href="javascript:history.back(-1);">删除成功</a>';
}