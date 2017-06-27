<? include "header.php" ?>

<form name='form' method='post' action='buy_product.php'>

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

		$query="select * from clothes_product where item_name like '%$search_word%'";
	}
	else
	{
		$query="select * from clothes_product a, storage_quantity b where a.item_code = b.item_code";
	}

?>

<div align="center">
<table width="700" border = "1">
<tr>
<td width="20" scope="col"></td>
<td width="22" scope="col">NO.</td>
<td width="100" scope="col">IMAGE</td>
<td width="65" scope="col">PRODUCT NAME</td>
<td width="58" scope="col">PRICE</td>
<td width="70" scope="col">BRAND</td>
<td width="22" scope="col">QUANTITY</td></tr>

<?php
	

	$connect = dbconnect("localhost","db03","db03","db03");
	mysql_select_db("db03");

	$ret = mysql_query($query);
    
	while($row = mysql_fetch_array($ret))
	{
		$clothestype = trans_clothestype($row[9]);

		echo " <tr>
		<td width='20'><input type='checkbox' name='check[]' value = '$row[2]' /></td>
		<td width='22'><a href='product_info.php?item_code=$row[2]'>$row[2]</a></td>
		<td width='100'><a href='product_info.php?item_code=$row[2]'>
		<img src='./img/$row[7]' width='100' height='90' /></a></td>
		<td width='65'><a href='product_info.php?item_code=$row[2]'>$row[0]</a></td>
		<td width='58'>$row[6]</td>
		<td width='70'>$row[1]</td>
		<td width='22'>$row[11]</td>
		</tr>
		";
	}
	
?>

</table>
<input type="submit" name="button" value="BUY"/>
</div>
</div>

</form>

<? include "footer.php" ?>
