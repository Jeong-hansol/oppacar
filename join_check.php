<meta charset="utf-8">
<?
//POST 값 추출 및 DB 저장을 위해 홀따옴표(')를 역슬레쉬(\)로 변환
/*while(list($fildn,$fildv) = each($_POST)) {
	$$fildn = addslashes($fildv);
}*/

$ID=$_POST['id'];
$pw=$_POST['pw'];
$name=$_POST['name'];
$email=$_POST['email'];
$regist_day=date("Y-m-d (H:i)"); // 현재 시간(년-월-일-시-분) 저장

include "./db/dbconn.php";              // dconn.php 파일을 불러옴

$sql="select * from member where id='$ID'";
$result=mysql_query($sql, $connect);
$exist_id=mysql_num_rows($result);

  if($exist_id)
  {
    echo("
      <script>
        window.alert('해당 아이디가 존재합니다.')
        history.go(-1)
      </script>
    ");
    exit;
  }
  else
  {                                    // 레코드 삽입 명령을 $sql에 입력 
    $sql="insert into member(id, pw, name, email, regist_day)";
    $sql.="values('$ID', '$pw', '$name', '$email', '$regist_day')";
    mysql_query($sql, $connect);       // $sql 에 저장된 명령 실행
  }

  mysql_close();                       // 데이터베이스 연결 끊기
  echo ("
    <script>
      location.href = 'index.php';
    </script>
  ");
?>
