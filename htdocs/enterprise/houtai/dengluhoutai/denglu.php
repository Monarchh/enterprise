<?php


if(!isset($_POST['user'])){
    die("user account not define");
}
if(!isset($_POST['password'])){
    die("user password not define");
}


$user = $_POST['user'];
if(empty($user)){
    die("请输入账号");
}
$password = $_POST['password'];
if(empty($password)){
    die("请输入密码");
}




require "../../function.php";


$conn = connectDb();

$check_query = mysqli_query($conn,"SELECT * FROM houtai WHERE username = '$user' and password = '$password' limit 1;");

if($result = mysqli_fetch_array($check_query)){
    session_start();
    $_SESSION['username'] = $user;
    $_SESSION['userid'] = $result['userid'];
    echo $user,' 欢迎你！进入 <a href="../page/index.html">LqhHome的后台管理页面</a><br />';
    echo '点击此处 <a href="index.html">注销</a> 登录！<br />';
    exit;
} else {
    exit('登录失败！点击此处 <a href="javascript:history.back(-1);">返回</a> 重试');
}