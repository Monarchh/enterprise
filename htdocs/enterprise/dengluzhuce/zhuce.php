<?php
/**
 * Created by PhpStorm.
 * User: quincy
 * Date: 2019-03-10
 * Time: 15:16
 */
if(!isset($_POST['zh'])){
    die("user account not define");
}
if(!isset($_POST['pd'])){
    die("user password not define");
}
if(!isset($_POST['email'])){
    die("user email not define");
}
if(!isset($_POST['pwd'])){
    die("user password2 not define");
}

$zh = $_POST['zh'];
if(empty($zh)){
    die("请输入用户名");
}
$pd = $_POST['pd'];
if(empty($pd)){
    die("请输入密码");
}
$email = $_POST['email'];
if(empty($email)){
    die("请输入邮箱");
}
$pwd = $_POST['pwd'];
if(empty($pwd)){
    die("请输入去人密码");
}
//if(!preg_match('/^[\w\x80-\xff]{3,15}$/',$zh)){
//    exit('错误：用户名不符合规定。<a href="javascript:history.back(-1);">返回</a>');
//}
//if(strlen($pd<6||$pd>20)){
//    exit('错误：密码长度不符合规定。<a href="javascript:history.back(-1);">返回</a>');
//}
require_once '../function.php';

$conn = connectDb();
if($pd == $pwd) {
    //检查两个密码是否相同，判断用户名是否存在
    $che = mysqli_query($conn, "SELECT yh FROM vip where yh='$zh' limit 1");
    if (mysqli_fetch_array($che)) {
        echo '错误：用户名'.$zh.'已经存在。<a href="javascript:history.back(-1);">返回</a>';
        exit;
    }
    $insert = mysqli_query($conn, "INSERT INTO `vip` (`id`,`yh`, `pd`,`pd2`, `email`) VALUES (NULL,'$zh','$pd','$pwd','$email')");

        if (mysqli_errno($insert)) {
        echo mysqli_error($insert);
    } else {
        echo '<script language="JavaScript">;alert("注册成功，恭喜你成为 LqhHome 的会员。");location.href="dengluzhuce.html";</script>;';
    }
}else{
    echo'密码不一致，请重新输入';
    echo'点击返回：<a href="javascript:history.back(-1);">重试</a>';
}
//
//    if (mysqli_errno($insert)) {
//        echo mysqli_error($insert);
//    } else {
//        echo '<script language="JavaScript">;alert("注册成功，恭喜你成为 LqhHome 的会员。");location.href="dengluzhuce.html";</script>;';
//    }
