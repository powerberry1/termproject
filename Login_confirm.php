<?php
include "config.php";   //데이터베이스 연결 설정파일
include "util.php";     //유틸 함수

$connect = dbconnect("localhost","db03","db03","db03");
mysql_select_db("db03");

$id = $_POST['txt_ID'];
$pass = $_POST['passwd'];

$mem_ret = mysql_query("select * from join_member where member_id = '$id'");
$mem_num = mysql_num_rows($mem_ret);


if(!$mem_num) // id로 검색된 회원이 없을 경우
{
	msg('잘못된 아이디 입니다!');
}
else
{
	$mem_array = mysql_fetch_array($mem_ret);
	
	$db_name = $mem_array[name];
	$db_pass = $mem_array[password];
	$db_admin = $mem_array[admin];
	if($db_pass == $pass)
	{
		SetCookie("cookie_id", $id,0,"/"); // 0 : browser lifetime ? 0 or omitted : end of session
		SetCookie("cookie_name", $db_name,0, "/");
		SetCookie("cookie_admin", $db_admin,0, "/");
		
		echo "<meta http-equiv='refresh' content='0;url=index.php'>";
	}
	else
	{
		msg('잘못된 패스워드 입니다!');
	}
}
mysql_close($connect);
?>
