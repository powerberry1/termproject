<? include "header.php" ?>

<form name='form' method='post' action='storage_quantity_insert.php'>

<div class="marg" align="center">
<?php
	include "config.php";
	include "util.php";

	$connect = dbconnect("localhost","db03","db03","db03");

	$query="";

	if(array_key_exists("search_word", $_POST))
	{
		$search_word = $_POST["search_word"];
		echo"SEARCH KEY WORD : $search_word";

		$query="select * from clothes_product a, storage_quantity b where a.item_code=b.item_code and a.item_name like '%$search_word%'";
	}
	else
	{
		$query="select * from clothes_product a, storage_quantity b where a.item_code=b.item_code";

	}

?>

<div align="center">
<table width="700" border = "1">
<tr>
<td width="65" scope="col">PRODUCT NAME</td>
<td width="40" scope="col">PRODUCT CODE</td>
<td width="70" scope="col">BRAND</td>
<td width="30" scope="col">QUANTITY</td>
</tr>

<?php
	

	$connect = dbconnect("localhost","db03","db03","db03");
	mysql_select_db("db03");

	$ret = mysql_query($query);

	while($row = mysql_fetch_array($ret))
	{

		echo " <tr>
		<td width='60'><a href='product_info.php?item_code=$row[2]'>$row[0]</a></td>
		<td width='65'><a href='product_info.php?item_code=$row[2]'>$row[2]</a></td>
		<td width='70'>$row[1]</td>
		<td width='30'>$row[11]</td>
		</tr>";
	}
?>
</table>
</div>
</div>
</form>
<? include "footer.php" ?>
