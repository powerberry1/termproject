<? include ("header.php") ?>
	<div class="marg" align="center">
	<form enctype="multipart/form-data" name="form" action="storage_quantity_insert.php" method="post">
	<div align="center">
	<table width="433" border="1">
	
			
		
    	<tr><th width="100" scope="row"> PRODUCT CODE</th>
		<td width="317"><input type="text" name="p_code_storage"/></td></tr>

		<tr><th scope="row">QUANTITY</th>
		<td><input type="text" name="p_quantity_storage"/></td></tr>

		</tr>
		</table>
		</div>

		<div align="center">
<br>			<input type="submit" name="send" value="UPDATE STORAGE QUANTITY"/>
		</div>
	</form>
	</div>
	<? include ("footer.php") ?>	
