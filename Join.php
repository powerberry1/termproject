<? include ("header.php") ?>
    <div class="marg">
        <form name ="form" action="join_insert.php" method="post">
        <div align="center" style="font-size:2.0em; font-weight:bold;"><span class="margMenu style1">[ ȸ����� ]</span></div>
		<div align="center">
        <table width="440" border="1">
            <tr><SPAN  style="FONT-SIZE: 9pt"><th width="92" scope="row">ID</SPAN></th>
            <td width="332"><input type="text" name="txt_ID"/></td></tr>
            <tr><SPAN  style="FONT-SIZE: 15pt"><th scope="row">PASS</SPAN></th>
            <td><input type="password" name="passwd"/></td></tr>
            <tr><SPAN  style="FONT-SIZE: 9pt"><th scope="row">PASS Ȯ��</SPAN></th>
            <td><input type="password" name="c_passwd"/></td></tr>
            <tr><SPAN  style="FONT-SIZE: 9pt"><th scope="row">�̸�</SPAN></th>
            <td><input type="text" name="txt_name"/></td></tr>
            <tr><SPAN  style="FONT-SIZE: 9pt"><th scope="row">��ȭ��ȣ</SPAN></th>
            <td><input type="text" name="txt_phone"/></td></tr>
            <tr><SPAN  style="FONT-SIZE: 9pt"><th scope="row">�ּ�</SPAN></th>
            <td><textarea name="txt_add" cols="40"></textarea></td></tr>
        </table>  
		</div>		
        <label>
            <div align="center">
                <input type="submit" name="send" value="�����ϱ�" />
            </div>
        </label>
        </form>
    </div>
<? include ("footer.php") ?>
