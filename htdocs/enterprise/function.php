<?php
/**
 * Created by PhpStorm.
 * User: quincy
 * Date: 2019-03-09
 * Time: 13:26
 */
require_once 'config.php';


function connectDb(){
    $conn = mysqli_connect(MYSQL_HOST,MYSQL_USER,MYSQL_PW,'enterprise',MYSQL_PORT,MYSQL_SOCKET);
    if(!$conn){
        die("连接不到数据库。");
    }
    return $conn;
}