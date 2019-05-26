<?php
/**
 * Created by PhpStorm.
 * User: quincy
 * Date: 2019-03-09
 * Time: 18:43
 */

if(empty($_GET['id'])){
    die('id is empty');
}

require_once 'connectfunction.php';

$conn = connectDb();

$id = intval($_GET['id']);

mysqli_query($conn,"delete from people where id = '$id'");

if(mysqli_error()){
    die('Fail to delete user with id '.$id);
}else{
    header("Location:allusers.php");
}