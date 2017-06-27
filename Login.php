<?php include "header.php";?>
		<div align="center">
   <fieldset style="width:100px; height:30px border:3px solid #808080">
	<legend align="center">LOGIN</legend>
	<form name ="form" action="login_confirm.php" method="post">
            <p>
                <font color="#0000CC" size="2">ID: </font> 
                <input name="txt_ID" type="text" size="15" />
            </p>
            <p>
                <font color="#0000CC" size="2">Passwd: </font> 
                <input name="passwd" type="password" class="marg" size="15" />
            </p>
            <p>
                <input type="submit" name="button2" value="로그인" />
                <a href="join.php">회원가입</a>
            </p>
        </form>
	</fieldset>
<?php include "footer.php";?>
