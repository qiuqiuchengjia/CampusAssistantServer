<?php
include("connection.php");
/**
这个是用来获取课程表
 */
$_key = $_POST["KEY"];
$_token= $_POST["token"];//token ，用来识别用户的身份
$arr = array ();

$sql="select * from userkebiao where token='$_token'";
$result = mysql_query($sql);
$data = mysql_fetch_array($result);
if($data){
    $arr["kechengstatue"]="1";
    $arr["startWeek"]=$data["startWeek"];//课程开始的周数
    $arr["name"]=$data["name"];//课程的名字
    $arr["credit"]=$data["credit"];//学分数据
    $arr["period"]=$data["period"];//课程的总学时
    $arr["teachPeriod"]=$data["teachPeriod"];//老师授课的学时
    $arr["computerPeriod"]=$data["computerPeriod"];//上机的学时
    $arr["computerPeriod"]=$data["computerPeriod"];//上机的学时
    $arr["teachWay"]=$data["teachWay"];//老师的授课方式
    $arr["checkStudent"]=$data["checkStudent"];//考试还是考察
    $arr["teacher"]=$data["teacher"];//任课老师
    $arr["place"]=$data["place"];//课程地点
    $arr["serialNumber"]=$data["serialNumber"];//课程序号
    $arr["dayOfWeek"]=$data["dayOfWeek"];//一周中的哪一天
    $arr["classes"]=$data["classes"];//课程类型
    $arr["classTime"]=$data["classTime"];//课程时间
    $arr["week"]=$data["week"];//周数
    $arr["schoolYear"]=$data["schoolYear"];//学年
    $arr["semester"]=$data["semester"];//学期
    echo json_encode($arr);


}else{
    $arr["kechengstatue"]="0";
    echo json_encode($arr);
}



?>