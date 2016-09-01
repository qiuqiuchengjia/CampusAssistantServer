<?php
include("connection.php");
/**
这个是注册提交用户信息到服务器
 * 这个是我的服务器第二次测试提交
 */
$_key = $_POST["KEY"];
$_username= $_POST["register_to_submit_username"];//用户名
$_password_md5= $_POST["register_to_submit_password_md5"];//密码   测试一下
$_school= $_POST["register_to_submit_school"];//学校
$_college= $_POST["register_to_submit_college"];//学院
$_career= $_POST["register_to_submit_career"];//专业
$_time= $_POST["register_to_submit_open_time"];//入学年份
$_province= $_POST["register_to_submit_province"];//省份
$_token= $_POST["token"];//token
$_city= $_POST["register_to_submit_city"];//城市

$arr = array();
//这里是查询数据库中有没有这个用户
$sql="select * from users where username='$_username'";
$result = mysql_query($sql);
$data = mysql_num_rows($result);
//如果这个用户已经存在
if ($data){
    $arr["userstatus"] = "0";//用户名是否存在，0是存在，1是不存在
    $arr["submitstauts"] = "0";//用户信息提交的状态
    echo json_encode($arr);
}else{//这个用户不存在
    $sql_insert="insert into users(username,password,school,college,career,starttime,province,token,city) 
      value ('$_username','$_password_md5','$_school','$_college','$_career','$_time','$_province','$_token','city')";
    $_result_insert = mysql_query($sql_insert);
    if($_result_insert){
        $arr["userstatus"] = "1";//用户名是否存在，0是存在，1是不存在
        $arr["submitstauts"] = "1";//用户信息提交的状态
        echo json_encode($arr);
    }else{
        $arr["userstatus"] = "1";//用户名是否存在，0是存在，1是不存在
        $arr["submitstauts"] = "0";//用户信息提交的状态
        echo json_encode($arr);
    }
}

?>