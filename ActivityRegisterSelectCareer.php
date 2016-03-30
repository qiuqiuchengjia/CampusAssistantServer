<?php
include("connection.php");
/**
这个是获取专业
 */
$_key = $_POST["KEY"];
$_college= $_POST["register_send_college"];//学院

$arr = array ();
$arr["careerstatus"] = "1";
$arr["1"] = "计算机科学与技术";
$arr["2"] = "网络工程";
$arr["3"] = "通信工程";
$arr["4"] = "信息管理";
echo json_encode($arr);

?>