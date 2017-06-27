<? include ("header.php") ?>
	<div class="marg">
	<form enctype="multipart/form-data" name="form" action="insert_product.php" method="post">
	<div align="center">
	<table width="433" border="1">
		<tr><th width="100" scope="row"> PRODUCT NAME</th>
		<td width="317"><input type="text" name="p_name"/></td></tr>

		<tr><th width="100" scope="row"> BRAND</th>
		<td width="317"><input type="text" name="p_brand"/></td></tr>

		<tr><th scope="row">PRODUCT CODE</th>
		<td><input type="text" name="p_code"/></td></tr>

		<tr><th scope="row">PRODUCT DETAIL</th>
		<td><textarea name="p_dec"></textarea></td></tr>

		<tr><th scope="row">SIZE</th>
		<td><input type="text" name="p_size"/></td></tr>

		<tr><th scope="row">COLOR</th>
		<td><input type="text" name="p_color"/></td></tr>

		<tr><th scope="row">PRODUCT IMAGE</th>
		<td><input type="hidden" name="MAX_FILE_SIZE"/>
		<input type="file" name="p_image"/></td></tr>

		<tr><th scope="row">PRICE</th>
		<td><input type="text" name="p_price"/></td></tr>

		<tr><th scope="row">WOMEN OR MEN</th>
		<td><select name="WOMENORMEN">
			<option value="W">WOMEN</option>
			<option value="M">MEN</option>
		</select></td></tr>

		<tr><th scope="row">TYPE OF CLOTHES</th>
		<td><select name="clothestype">
			<option value="OUTER">OUTER</option>
			<option value="TOPS">TOPS</option>
			<option value="SWEATERS">SWEATERS</option>
			<option value="SKIRTS">SKIRTS</option>
			<option value="JEANS">JEANS</option>
		</select></td>
		</tr>
		</table>
		</div>

		<div align="center">
			<input type="submit" name="send" value="INSERT PRODUCT"/>
		</div>
	</form>
	</div>
	<? include ("footer.php") ?>
