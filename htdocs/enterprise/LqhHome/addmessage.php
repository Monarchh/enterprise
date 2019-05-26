<?php
/**
 * Created by PhpStorm.
 * User: quincy
 * Date: 2019-04-01
 * Time: 15:37
 */

if(!isset($_POST['name'])){
    die("user name not define");
}
if(!isset($_POST['email'])){
    die("user email not define");
}
if(!isset($_POST['message'])){
    die("user message not define");
}
$name = $_POST['name'];
if(empty($name)){
    die("user name is empty");
}
$email = $_POST['email'];
if(empty($email)){
    die("user email is empty");
}
$message = $_POST['message'];
if (empty($message)){
    die("user message is empty");
}

require_once '../function.php';

$conn = connectDb();


$result = mysqli_query($conn,"select * from people");
$dataCount = mysqli_num_rows($result);

$insert = mysqli_query($conn,"INSERT INTO `message` (`name`, `email`, `message`) VALUES ('$name', '$email', '$message')");

if(mysqli_errno($insert)){
    echo mysqli_error($insert);
}else{
    echo '<script language="JavaScript">;alert("留言成功。");location.href="index.php" /script>;';
    //header("location:allusers.php");
}