<? include ("header.php"); ?>

<form name='form' method='post' action='order_insert.php'>
	<div class="marg" align="center">

	<table width="540" border="1" align="center">
	<tr>
		<th width="63" scope="col">ID</th>
		<td width="144" scope="col">NAME</td>
		<th width="209" scope="col">PRICE</th>
		<th width="96" scope="col">NUMBER OF PRODUCT</th>
	</tr>

<?php
	include "config.php";
	include "util.php";


	$connect = dbconnect("localhost","db03","db03","db03");
	$check = $_POST['check'];

	for($i=0; $i<sizeof($check); $i++)
	{
		$ret = mysql_query("select * from clothes_product where item_code like '$check[$i]'",$connect);
		$row = mysql_fetch_array($ret);
		$error = mysql_error();

		echo
		"
			$error
			<tr>
			<th width='63' scope='col'>$row[2]</th>
			<th width='144' scope='col'>$row[0]</th>
			<th width='209' scope='col'>$row[6]</th>
			<th width='96' scope='col'>
				<input type = 'text' name='count[]' value = '1' size = '5'/>°³</th>
			</tr>
			<input type='hidden' name='check_arr[]' value='$row[2]'/>
			<input type='hidden' name='price_arr[]' value='$row[6]' />

		";

	}


?>

</table>
<input type = "submit" name="button" value="ORDER"/>
</div>

</form>
<? include ("footer.php") ?>
