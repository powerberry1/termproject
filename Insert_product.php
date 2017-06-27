<?php
include "config.php";
include "util.php";

$connect = dbconnect("localhost","db03","db03","db03");

$p_name = $_POST['p_name'];
$p_brand = $_POST['p_brand'];
$p_code = $_POST['p_code'];
$p_dec = $_POST['p_dec'];
$p_size = $_POST['p_size'];
$p_color = $_POST['p_color'];
$p_price = $_POST['p_price'];
$WOMENORMEN = $_POST['WOMENORMEN'];
$clothestype = $_POST['clothestype'];


$pathimg="/home/db03/public_html/img/";
$p_image = $pathimg.basename($_FILES['p_image']['name']);
$p_imagename = basename($_FILES['p_image']['name']);

if(move_uploaded_file($_FILES['p_image']['tmp_name'], $p_image))
{
	$ret = mysql_query("insert into clothes_product(item_name, item_brand, item_code, item_detail, item_size, item_color, item_price, item_image, item_WM, item_type)
			values ('$p_name', '$p_brand','$p_code','$p_dec', '$p_size','$p_color','$p_price','$p_imagename', '$WOMENORMEN','$clothestype')",$connect);
	//$error = mysql_error();
	if(!$ret)
	{
		msg('ERROR OCCUR! TRY AGAIN');
	}
	else
	{
		s_msg('INSERT SUCCESSFUL!');
		echo"<meta http-equiv='refresh' content='0;url=input_product.php'>";
	}
}
else
{
	msg('FILE UPLOAD ERROR!');
}

?>
