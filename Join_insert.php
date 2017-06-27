<?php
include "config.php";   //데이터베이스 연결 설정파일
include "util.php";
//유틸 함수

$hostname = "localhost";
$username = "db03";
$password = "db03";
$dbname   = "db03";

mysql_connect($hostname, $username, $password);
mysql_select_db("db03");

$connect = dbconnect("localhost","db03","db03","db03");

$id = $_POST['txt_ID'];
$pass = $_POST['passwd'];
$c_pass = $_POST['c_passwd'];
$name = $_POST['txt_name'];
$phone = $_POST['txt_phone'];
$address = $_POST['txt_add'];

$query= "select member_id from join_member where member_id='$id'";
$query_return = mysql_query($query);
echo mysql_error();
$num = mysql_num_rows($query_return);

if($num)
{
	msg('이미 존재하는 회원ID입니다!');
}
else if(check_pass($pass,$c_pass)!=0)   //PASS 조사
{
	msg('패스워드가 맞지 않습니다!');
}
else
{
	$insert_query = "insert into join_member (member_id, password, name, phone, address, admin) values ('$id','$pass','$name','$phone','$address', '0' )";
	$insert_ret = mysql_query($insert_query);
	
	if(!insert_ret)
	{  msg('DB에 에러가 발생!');   }
	else
	{   s_msg('가입되었습니다');
	echo "<meta http-equiv='refresh' content='0;url=login.php'>";     }
}
mysql_close($connect);
?>
