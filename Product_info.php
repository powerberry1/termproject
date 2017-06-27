<? include ("header.php") ?>
<form name='form' method ='post' action='buy_product.php'>
	 <div class="marg" align="center">
	 	<table width="535">
<?php
	include "config.php";
	include "util.php";

	$id = $_GET['item_code'];

	$connect = dbconnect("locathost","db03","db03","db03");
	$ret=mysql_query("select * from clothes_product where item_code='$id'",$connect);

	while($row=mysql_fetch_array($ret))
	{
		echo 
		"
			<tr>
			<input type='hidden' name='check[]' value='$row[0]' checked/>
			<th width='80' scope='col'>IMAGE</th>
			<th width='320' scope='col' align='center'>
			<img src='./img/$row[7]' width='90' height='90'/> </th></tr>

		";

		echo 
		"
			<tr>
			<td width='80' scope='col'>NAME</th>
			<td width-'320' scope='col'>$row[0]</th></tr>
			
		";
		echo 
		"
			<tr>
			<td width='80' scope='col'>DETAIL</th>
			<td width-'320' scope='col'>$row[3]</th></tr>
			
		";
		echo 
		"
			<tr>
			<td width='80' scope='col'>BRAND</th>
			<td width-'320' scope='col'>$row[1]</th></tr>
			
		";
		echo 
		"
			<tr>
			<td width='80' scope='col'>SIZE</th>
			<td width-'320' scope='col'>$row[4]</th></tr>
			
		";
		echo 
		"
			<tr>
			<td width='80' scope='col'>PRICE</th>
			<td width-'320' scope='col'>$row[6]</th></tr>
			
		";
		echo 
		"
			<tr>
			<td width='80' scope='col'>COLOR</th>
			<td width-'320' scope='col'>$row[5]</th></tr>
			
		";
	}
?>

</table>
<input type="button" name="buy_button" value="BUY" onclick="submit()"/>
<input type="button" name="modify_button" value="MODIFY" onclick="modify()"/>
</div>
<script>
var form =  document.search_form;
	function submit()
	{
		form.submit();
	}
	function modify()
	{
		form.action='modify_product.php?item_code=<?=$item_code?>'
		submit()
	}
</script>

</form>

<? include ("footer.php") ?>
