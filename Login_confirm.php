<?php
include "config.php";   //�����ͺ��̽� ���� ��������
include "util.php";     //��ƿ �Լ�

$connect = dbconnect("localhost","db03","db03","db03");
mysql_select_db("db03");

$id = $_POST['txt_ID'];
$pass = $_POST['passwd'];

$mem_ret = mysql_query("select * from join_member where member_id = '$id'");
$mem_num = mysql_num_rows($mem_ret);


if(!$mem_num) // id�� �˻��� ȸ���� ���� ���
{
	msg('�߸��� ���̵� �Դϴ�!');
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
		msg('�߸��� �н����� �Դϴ�!');
	}
}
mysql_close($connect);
?>
