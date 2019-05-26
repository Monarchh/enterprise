<?php
/**
 * Created by PhpStorm.
 * User: quincy
 * Date: 2019-03-09
 * Time: 18:14
 */

require_once 'connectfunction.php';

if(empty($_POST['id'])){
    die('id is empty');
}
if(empty($_POST['name'])){
    die('name is empty');
}
if(empty($_POST['age'])){
    die('age is empty');
}

$id = intval($_POST['id']);
$name = $_POST['name'];
$age = intval($_POST['age']);

$conn = connectDb();

mysqli_query($conn,"UPDATE `people` SET `name`='$name',`age`='$age' WHERE `id` = '$id'");

if(mysqli_error()){
    echo mysqli_error();
}else{
    header("Location:allusers.php");
}