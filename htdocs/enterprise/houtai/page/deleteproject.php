<?php
/**
 * Created by PhpStorm.
 * User: quincy
 * Date: 2019-05-07
 * Time: 15:02
 */
if(empty($_GET['id'])){
    die('id is empty');
}

require_once '../../function.php';

$conn = connectDb();

$id = intval($_GET['id']);

mysqli_query($conn,"delete from project where id = '$id'");

if(mysqli_error()){
    die('Fail to delete user with id '.$id);
}else{
    header("Location:allprojects.php");
}