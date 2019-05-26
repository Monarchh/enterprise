<?php


if(!isset($_POST['zh2'])){
    die("user account not define");
}
if(!isset($_POST['pd2'])){
    die("user password not define");
}


$zh2 = $_POST['zh2'];
if(empty($zh2)){
    die("请输入账号");
}
$pd2 = $_POST['pd2'];
if(empty($pd2)){
    die("请输入密码");
}




require "../function.php";


$conn = connectDb();

$check_query = mysqli_query($conn,"SELECT * FROM vip WHERE yh = '$zh2' and pd = '$pd2' limit 1;");

if($result = mysqli_fetch_array($check_query))
{
    session_start();
    $_SESSION['username'] = $zh2;
    $_SESSION['userid'] = $result['userid'];
    echo $zh2, ' 欢迎你！进入 <a href="../LqhHome/index.php">LqhHome</a><br />';
    echo '点击此处 <a href="dengluzhuce.html">注销</a> 登录！<br />';
    exit;
}
else
    {
        exit('登录失败！请注册成为会员。点击此处 <a href="javascript:history.back(-1);">返回</a> 重试');
    }