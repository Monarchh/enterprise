<?php
/**
 * Created by PhpStorm.
 * User: quincy
 * Date: 2019-04-03
 * Time: 16:26
 */
if(empty($_GET['id'])){
    die('id is empty');
}

require_once '../../function.php';

$conn = connectDb();

$id = intval($_GET['id']);

mysqli_query($conn,"delete from news where id = '$id'");

if(mysqli_error()){
    die('Fail to delete user with id '.$id);
}else{
    header("Location:allnews.php");
}