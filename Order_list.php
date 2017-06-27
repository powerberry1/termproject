<? include ("header.php") ?>

<?php
	include "config.php";
	include "util.php";

	$connect = dbconnect("localhost", "db03", "db03","db03");

	if(!$_COOKIE[cookie_id] || !$_COOKIE[cookie_name])
	{
		echo("<font size='3'> PLEASE LOGIN</font>");
	}
	else
	{
		$id = $_COOKIE[cookie_id];
		$products = array();
		$result = mysql_query("select * from order_list a, order_information b, clothes_product c where a.order_id = b.order_id and b.item_code = c.item_code and a.member_id like '$id'",$connect);
		$order_ret = mysql_query("select * from order_list where member_id like '$id'",$connect);
    
		echo 
		"
			<table border=2  width=540>
			<tr>
				<th width=100><p align=center>ORDER NO.</p></th>
				<th width=100><p align=center>ORDER DATE</p></th>
				<th width=240><p align=center>ORDER PRODUCT</p></th>
				<th width=100><p align=center>TOTAL COST</p></th>
			</tr>
		";	

		while ($row =mysql_fetch_array($result))
		{
			$index = $row[order_id];
			$products[$index] = $products[$index].$row[item_name].":".$row[quantity]."</br>";
		}

		while($row2=mysql_fetch_array($order_ret))
		{
			$index = $row2[order_id];

			echo 
			"	
				<th width=100><p align = center>$row2[order_id]</p></th>
				<th width=100><p align = center>$row2[order_date]</p></th>
				<th width=240><p align = center>$products[$index]</p></th>
				<th width=100><p align = center>$row2[total_cost]</p></th>
				</tr>
			";

		}echo"</table>";

	}

?>

<? include ("footer.php") ?>
