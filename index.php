<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>

<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1"/>
<meta name="description" content="description"/>
<meta name="keywords" content="keywords"/> 
<meta name="author" content="author"/> 
<link rel="stylesheet" type="text/css" href="default.css" media="screen"/>
<title>KOREA FASHION MALL</title>
</head>

<body>


<div class="left">
	
	<div class="header">


		
	</div>

	<div class="content">
<style>
.sdivde {overflow: hidden;position: relative;height: 900px;width: 1000px;}
.sdivde .image_list {list-style: none;overflow: none;white-space: nowrap;padding: 0;margin: 0;}
.sdivde .images {position:absolute; display:none; border:1px solid #4C4C4C;}
</style>
<div class="sdivde">
 <div class="image_list" id="image_list_1">
  <div class="images" style="display:block"><img src="./img/1.png" /></div>
  <div class="images"><img src="./img/1.png" /></div>
  <div class="images"><img src="./img/2.png" /></div>
  <div class="images"><img src="./img/3.png" /></div>
 </div>
</div>

<script type="text/javascript">
var current_img = 0;
var next_img = 1;
var divs;
var t;
var m_t;
function setRoll(){
 var l = e("image_list_1");
 divs = l.getElementsByTagName("div");
 window.img_cnt = divs.length-1;
 
 window.coord_x1 = 0;
 window.coord_x2 = 800;
 
 divs[next_img].style.display = "block";
 divs[next_img].style.left = window.coord_x2+"px";
 
 imgRoll();
}
function imgRoll(){
 divs[current_img].style.left = window.coord_x1 + "px";
 divs[next_img].style.left = window.coord_x2 + "px";
 window.coord_x1 -= 200;
 window.coord_x2 -= 200;
 
 if(window.coord_x1 < -800) {
  current_img = next_img;
  next_img += 1;
  if(current_img == window.img_cnt) next_img = 0;
  clearTimeout(t); 
  setTimeout("setRoll()",4000); 
  return;
 }
 
 t = setTimeout("imgRoll()",100);
}
setRoll();
function e(id){
 var o = document.getElementById(id);
 if(typeof o == undefined || o == null) { alert(id+" ??? ?? ??? ????."); return;}
 return o;
}

</script>		

	</div>

</div>


<div class="nav">
   <fieldset style="width:290px; height:30px border:10px solid #808080">

		<h1>	<?php
			if(!$_COOKIE[cookie_id] || !$_COOKIE[cookie_name])
			{
				echo"<a href = 'login.php'> |LOGIN| </a><br/>";
				echo"<a href = 'join.php'> |JOIN| </a><br/>";
			}
			else
			{
				if($_COOKIE[cookie_admin] == 0)
				{
					echo"<a href = 'logout.php'> $_COOKIE[cookie_name]<br> |Logout|</a><br/>";
				}
				else
				{
					echo"<a href = 'logout.php'>|Admin Logout|</a><br/>";
					echo"<a href = 'input_product.php'>|INSERT PRODUCT|</a><br/>";
					echo"<a href = 'storage_quantity_input.php'>|UPDATE QUANTITY|</a><br/>";
				}
			}
		?>
	</h1>
	</fieldset>
	<br>
	
	<h1> 2015, The Last CHANCE!! </h1>
	  <div class="images"><img src="./img/seasonoff.jpg" width="290" /></div>
	   <div class="images"><img src="./img/ss.jpg" width="290" /></div>
	    <div class="images"><img src="./img/bestseller.jpg" width="290
	    " /></div>

</div>

<div class="right">

	<div class="round">		
		<div class="roundtl"><span></span></div>
		<div class="roundtr"><span></span></div>
		<div class="clearer"><span></span></div>
	</div>

		<div class="subnav">
	
		    <script>
    function search_value_check()
    {
          var form = document.search_form;
          if(!form.search_word.value){
               alert("Insert your keyword");
               form.search_word.focus();
               return false;
           } else {
               return true;
           }    				
     }
    </script>
      <div class="marg" align="center">
      <form align ="center" name="search_form" method="post" onsubmit="return search_value_check()" action='product_list.php'>
        <h2>SEARCH:
       <input name="search_word" type="text" size="12" maxlength="50" />
       <input type="submit" name="button" id="button" value="GO" />
        </h2>
      </form>
      </div>
	  <br>
	
		<h1>MAIN</h1>
		<ul>
		<li><a href="index.php">HOME</a></li>
		</ul>
		
		<h1>ALL PRODUCT</h1>
		<ul>
			<li><a href="product_list.php">SHOW ALL PRODUCT</a></li>
		</ul>
		<h1>BY BRAND</h1>
		<ul>
			<li><a href="product_list_brand_daks.php">DAKS</a></li>
			<li><a href="product_list_brand_hazzys.php">HAZZYS</a></li>
			<li><a href="product_list_brand_jillstuart.php">JILLSTUART</a></li>
			<li><a href="product_list_brand_tngt.php">TNGT</a></li>
		</ul>

		<h1>WOMEN</h1>
		<ul>
			<li><a href="product_list_w_outer.php">OUTER</a></li>
			<li><a href="product_list_w_tops.php">TOPS</a></li>
			<li><a href="product_list_w_skirt.php">SKIRT</a></li>
			<li><a href="product_list_w_sweaters.php">SWEATERS</a></li>
		</ul>

		<h1>MEN</h1>
		<ul>
			<li><a href="product_list_m_outer.php">OUTER</a></li>
			<li><a href="product_list_m_tops.php">TOPS</a></li>
			<li><a href="product_list_m_jeans.php">JEANS</a></li>
			<li><a href="product_list_m_sweaters.php">SWEATERS</a></li>

		</ul>
		
		<h1>STORAGE</h1>
		<ul>
			<li>  <script>
    function search_value_check()
    {
          var form = document.search_form;
          if(!form.search_word.value){
               alert("Insert your keyword");
               form.search_word.focus();
               return false;
           } else {
               return true;
           }    				
     }
    </script>
      <div class="marg" align="center">
      <form align ="center" name="search_form" method="post" onsubmit="return search_value_check()" action='storage_quantity_list.php'>
        <h2>SEARCH PRODUCT QUANTITY:
       <input name="search_word" type="text" size="12" maxlength="50" />
       <input type="submit" name="button" id="button" value="GO" />
        </h2>
      </form>
      </div></li>
      	<li><a href="storage_quantity_list.php">SHOW ALL QUANTITY</a></li>
		</ul>


		
	</div>

	<div class="round">
		<div class="roundbl"><span></span></div>
		<div class="roundbr"><span></span></div>
		<span class="clearer"></span>
	</div>

</div>

<div class="footer">&copy; 2006 <a href="index.php">Website.com</a>. Valid <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> &amp; <a href="http://validator.w3.org/check?uri=referer">XHTML</a>. Template design by <a href="http://arcsin.se">Arcsin</a>
</div>

</body>

</html>
 
