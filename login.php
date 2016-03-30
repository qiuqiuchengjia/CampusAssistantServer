<?php
include("connection.php");
/**
  这个是用来获取检测用户登录
 */
$_key = $_POST["KEY"];
$_username= $_POST["username"];//用户名
$_password_md5= $_POST["password_md5"];//用户名
$_token= $_POST["token"];//用户名
$arr=array();

//这里是查询数据库中有没有这个用户
$sql="select * from users where username='$_username'";
$result = mysql_query($sql);
$data = mysql_fetch_array($result);
//如果这个用户已经存在
if ($data){
    //密码正确
    if($data["password"]==$_password_md5){
        $sql_update = "update users set token='$_token'where username='$_username'";
        if(mysql_query($sql_update)){//token更新成功
            $arr["username"]=$data["username"];
            $arr["password_md5"]=$_password_md5;
            $arr["tokenstatus"]=$_token;
            $arr["kebiaotokenstatus"]="1";
            $arr["id"]=$data["id"];
            $arr["school"]=$data["school"];
            $arr["touxiang"]=$data["touxiang"];
            $arr["starttime"]=$data["starttime"];
            $arr["banji"]=$data["banji"];
            $arr["sex"]=$data["sex"];
            $arr["phonenumber"]=$data["phonenumber"];
            $arr["college"]=$data["college"];
            $arr["age"]=$data["age"];
            $arr["email"]=$data["email"];
            $arr["city"]=$data["city"];
            $arr["activetime"]=$data["activetime"];
            $arr["name"]=$data["name"];
            $arr["province"]=$data["province"];
            $arr["career"]=$data["career"];
            $arr["studentnumber"]=$data["studentnumber"];
            $arr["studentnumberpassword"]=$data["studentnumberpassword"];
            echo json_encode($arr);
        }else{
            $arr["username"]=$data["username"];
            $arr["password_md5"]=$_password_md5;
            $arr["tokenstatus"]="0";
            $arr["kebiaotokenstatus"]="0";
            echo json_encode($arr);
        }

    }else{//密码错误
        $arr["username"]=$data["username"];
        $arr["password_md5"]="0";
        $arr["tokenstatus"]="0";
        $arr["kebiaotokenstatus"]="0";
        echo json_encode($arr);
    }

}else {//这个用户不存在
  $arr["username"]="0";
  $arr["password_md5"]="0";
  $arr["tokenstatus"]="0";
  $arr["kebiaotokenstatus"]="0";
    echo json_encode($arr);
}
?>