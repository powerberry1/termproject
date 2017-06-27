<?php
include "config.php";
include "util.php";

function totalcost($tmparr, $tmparr2)
{
	$total=0;
	for($i=0; $i<sizeof($tmparr); $i++)
	{
		$total = $tmparr[$i]*$tmparr2[$i] + $total;
	}
	
	return $total;
}

$connect = dbconnect("localhost","db03","db03","db03");
$check_arr = $_POST['check_arr'];
$price_arr = $_POST['price_arr'];
$count = $_POST['count'];

if(!$_COOKIE[cookie_id] || !$_COOKIE[cookie_name])
{
	msg('LOGIN PLEASE!');
}
else
{
	$id = $_COOKIE[cookie_id];
	$name = $_COOKIE[cookie_name];
	$dtime = time();
	$date = date('Y/m/d',$dtime);
	$sum = totalcost($count, $price_arr);
	
	$ret = mysql_query("insert into order_list(member_id, name, order_date, total_cost) values ('$id','$name','$date','$sum')",$connect);
	
	$numb = mysql_insert_id();
	
	for($i=0; $i<sizeof($check_arr); $i++)
	{
		$ret2 = mysql_query("insert into order_information(order_id, item_code, order_quantity) values ('$numb','$check_arr[$i]', '$count[$i]')",$connect);
		
	}
	
	echo"<meta http-equiv = 'refresh' content='0;url=order_list.php'>";
	
	
}


?>
