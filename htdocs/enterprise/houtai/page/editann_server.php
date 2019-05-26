<?php
/**
 * Created by PhpStorm.
 * User: quincy
 * Date: 2019-04-03
 * Time: 17:07
 */
require_once '../../function.php';

if(empty($_POST['details'])){
    die('内容为空');
}


$details = $_POST['details'];
$id = intval($_POST['id']);

$conn = connectDb();

mysqli_query($conn,"UPDATE `announcement` SET `details` = '$details' WHERE `announcement`.`id` = '$id'");

if(mysqli_error()){
    echo mysqli_error();
}else{
    echo '<script language="JavaScript">;alert("修改成功。");location.href="announcement.php";</script>;';
}