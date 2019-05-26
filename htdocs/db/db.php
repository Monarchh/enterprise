<!
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: quincy
 * Date: 2019-03-08
 * Time: 21:30
 */
$conn = mysqli_connect('127.0.0.1','root','root','test','8889','	/Applications/MAMP/tmp/mysql/mysql.sock
');
if($conn){
   mysqli_select_db($conn,'test');

   $result = mysqli_query($conn,'SELECT * FROM PEOPLE');
//
//   $result_arr = mysqli_fetch_assoc($result);
//   print_r($result_arr);
//

//    echo '数据条数：'.mysqli_num_rows($result);

    $data_count = mysqli_num_rows($result);
    for($i=0;$i<$data_count;$i++)
    {
        print_r(mysqli_fetch_assoc($result));

    }
}
else{
    echo '连接失败';
}

?>

</body>
</html>
