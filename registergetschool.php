<?php
include("connection.php");
/**
  这个是获取学校列表
 */
$_KEY = $_POST["KEY"];
$_province = $_POST["register_send_province"];//省份
$_city = $_POST["register_send_city"];//城市

$arr = array ();
$arr["schoolstatus"] = "1";
$arr["1"] = "湖南工程学院";
$arr["2"] = "湘潭大学";
$arr["3"] = "湖南科技大学";
$arr["4"] = "长沙理工大学";
$arr["5"] = "中南大学";
$arr["6"] = "湖南师范大学";
echo json_encode($arr);


?>