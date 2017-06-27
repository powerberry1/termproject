<?php
include "config.php";
include "util.php";

$connect = dbconnect("localhost","db03","db03","db03");

$p_code_storage = $_POST['p_code_storage'];
$p_quantity_storage = $_POST['p_quantity_storage'];



$ret = mysql_query("insert into storage_quantity (item_quantity, item_code) values('$p_quantity_storage','$p_code_storage')",$connect);
$error=mysql_error();
if(!$ret)
{
	echo"$error";
}
else
{
	s_msg('INSERT SUCCESSFUL!');
	echo"<meta http-equiv='refresh' content='0;url=storage_quantity_input.php'>";
}
?>
