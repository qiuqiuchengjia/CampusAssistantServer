<?php
include("connection.php");
/**
   这个是获取省份城市列表的服务器
 */
$_key = $_POST["KEY"];
$_province= $_POST["register_send_province"];

$arr = array ();
$arr["citystatus"] = "1";
$arr["1"] = "长沙市";
$arr["2"] = "株洲市";
$arr["3"] = "湘潭市";
$arr["4"] = "娄底市";
$arr["5"] = "岳阳市";
$arr["6"] = "郴州市";
echo json_encode($arr);

?>