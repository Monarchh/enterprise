<?php
/**
 * Created by PhpStorm.
 * User: quincy
 * Date: 2019-03-09
 * Time: 15:09
 */

if(!isset($_POST['name'])){
    die("user name not define");
}
if(!isset($_POST['age'])){
    die("user age not define");
}

$name = $_POST['name'];
if(empty($name)){
    die("user name is empty");
}
$age = $_POST['age'];
if(empty($age)){
    die("user age is empty");
}

require_once 'connectfunction.php';

$conn = connectDb();

$age = intval($age);
$result = mysqli_query($conn,"select * from people");
$dataCount = mysqli_num_rows($result);
$id = $dataCount+1;
$insert = mysqli_query($conn,"INSERT INTO `people` (`id`, `name`, `age`) VALUES ('$id', '$name', '$age')");

if(mysqli_errno($insert)){
    echo mysqli_error($insert);
}else{
    header("location:allusers.php");
}