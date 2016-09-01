<?php
/**
 * 这个是链接数据库的代码
*/
//创建连接
$conn = mysql_connect("localhost","root","")or die("链接失败");
//设置字符集
mysql_query("set names 'utf8'");
//链接数据库
mysql_select_db("qiu",$conn)or die("数据库连接失败");

?>