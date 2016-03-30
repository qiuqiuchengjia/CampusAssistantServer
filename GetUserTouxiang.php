<?php
include("connection.php");
/**
这个是用来获取用户头像的URL
 */
$_key = $_POST["KEY"];
$_username= $_POST["logingetuserpicture"];//用户名
$arr=array();
$_sql = "select touxiang from users where username='$_username'";
if($_row = mysql_fetch_array(mysql_query($_sql))){
    $arr["touxiang"]=$_row['touxiang'];
    echo json_encode($arr);
}else {
    $arr["touxiang"]="0";
    echo json_encode($arr);

}

?>