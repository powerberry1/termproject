<?
function dbconnect($host,$id,$pass,$db)  //데이터베이스 연결
{
	$connect=mysql_connect("localhost","db03","db03");
	mysql_select_db("db03");
	return $connect;
}
function msg($msg) // 경고 메시지 출력 후 이전 페이지로 이동
{
	echo "
	<script>
	window.alert('$msg');
	history.go(-1);
	</script>";
	exit;
}
function s_msg($msg) //일반 메시지 출력
{
	echo "
	<script>
	window.alert('$msg');
	</script>";
}
function check_pass($pass,$c_pass) //패스워드 일치 여부 검사
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
