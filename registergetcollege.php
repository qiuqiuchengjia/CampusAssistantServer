<?php
include("connection.php");
/**
这个是获取学院列表
 */
$_key = $_POST["KEY"];
$_school= $_POST["register_send_school"];

$arr = array ();
$arr["collegestatus"] = "1";
$arr["1"] = "计算机与通信学院";
$arr["2"] = "经济学院";
$arr["3"] = "应用技术学院";
$arr["4"] = "电气与信息工程学院";
echo json_encode($arr);

?>