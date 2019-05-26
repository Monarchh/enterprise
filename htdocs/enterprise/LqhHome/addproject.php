<?php
/**
 * Created by PhpStorm.
 * User: quincy
 * Date: 2019-05-07
 * Time: 15:11
 */

if(!isset($_POST['name'])){
    die("user name not define");
}
if(!isset($_POST['picture'])){
    die("picture not define");
}
if(!isset($_POST['message'])){
    die("message not define");
}
$name = $_POST['name'];
if(empty($name)){
    die("user name is empty");
}
$picture = $_POST['picture'];
if(empty($picture)){
    die("picture is empty");
}
$message = $_POST['message'];
if (empty($message)){
    die("user message is empty");
}

require_once '../function.php';

$conn = connectDb();


$result = mysqli_query($conn,"select * from project");
$dataCount = mysqli_num_rows($result);

$insert = mysqli_query($conn,"INSERT INTO `project` (`tittle`, `details`, `img`) VALUES ('$name', '$message', '$picture')");

if(mysqli_errno($insert)){
    echo mysqli_error($insert);
}else{
    echo '<script language="JavaScript">;alert("发布成功");location.href="projects.php";</script>;';
    //header("location:allusers.php");
}