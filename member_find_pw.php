<meta charset = "utf-8">
<?php
include "./db/dbconn.php";

if($_POST["id"] == ""){
		echo '<script> alert("항목을 입력하세요"); history.back(); </script>';
	}else{

	$ID = $_POST['id'];

$sql = "select * from member where id='$ID'";
$result = mysql_query($sql, $connect);
$row = mysql_fetch_array($result);

echo $row['id'];

if($row["id"] == $ID){
	echo "<script>alert('회원님의 비밀번호는 ".$row['pw']."입니다.'); history.back();</script>";

}else{
	echo "<script>alert('없는 계정입니다.'); history.back();</script>";
}
}
?>