<meta charset = "utf-8">
<?php
include "./db/dbconn.php"; 

if($_POST["name"] == "" || $_POST["email"] == ""){
		echo '<script> alert("항목을 입력하세요"); history.back(); </script>';
	}else{

	$name = $_POST['name'];
	$email = $_POST['email'];
	$emadress = $_POST['emadress'];
	$email.= "@".$emadress;
$sql = "select * from member where name='{$name}' && email='{$email}'";
$result=mysql_query($sql, $connect);
$row = mysql_fetch_array($result);

echo $row['name'];

if($row["name"] == $name){
	echo "<script>alert('회원님의 ID는 ".$row['id']."입니다.'); history.back();</script>";
}else{
echo "<script>alert('없는 계정입니다.'); history.back();</script>";
}
}

?>