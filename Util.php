<?
function dbconnect($host,$id,$pass,$db)  //�����ͺ��̽� ����
{
	$connect=mysql_connect("localhost","db03","db03");
	mysql_select_db("db03");
	return $connect;
}
function msg($msg) // ��� �޽��� ��� �� ���� �������� �̵�
{
	echo "
	<script>
	window.alert('$msg');
	history.go(-1);
	</script>";
	exit;
}
function s_msg($msg) //�Ϲ� �޽��� ���
{
	echo "
	<script>
	window.alert('$msg');
	</script>";
}
function check_pass($pass,$c_pass) //�н����� ��ġ ���� �˻�
{
	$ret = strcmp($pass,$c_pass);
	return $ret;
}

function trans_clothestype($dbcategory)
{
	switch($dbcategory)
	{
		case "OUTER":
			return "OUTER";
			break;
			
		case"TOPS":
			return "TOPS";
			break;
			
		case"SKIRT":
			return "SKIRT";
			break;
			
		case"SWEATERS":
			return "SWEATERS";
			break;
			
		case"JEANS":
			return "JEANS";
			break;
	}
}
?>
