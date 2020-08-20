<meta charset = "utf-8">
<?
//POST 값 추출 및 DB 저장을 위해 홀따옴표(')를 역슬레쉬(\)로 변환
/*while(list($fildn,$fildv) = each($_POST)) {
	$$fildn = addslashes($fildv);
}*/

$name=$_POST['name'];
$hp=$_POST['hp'];
$model=$_POST['model'];
$location=$_POST['location'];
$regist_day=date("Y-m-d (H:i)"); // 현재 시간(년-월-일-시-분) 저장

include "./db/dbconn.php";              // dconn.php 파일을 불러옴

$sql="select * from sell where name='$name'";
$result=mysql_query($sql, $connect);

  if($_POST["name"] == "" || $_POST["hp"] == "" || $_POST["model"] == "" || $_POST["location"] == "")
  {
    echo("
      <script>
        window.alert('항목을 모두 입력바랍니다.')
        history.go(-1)
      </script>
    ");
    exit;
  }
  else
  { 																
    $sql="insert into sell(name, hp, model, location, regist_day)";
    $sql.="values('$name', '$hp', '$model', '$location', '$regist_day')";
	mysql_query($sql, $connect);       // $sql 에 저장된 명령 실행
  }

  mysql_close();                       // 데이터베이스 연결 끊기
  echo ("
    <script>
	  window.alert('상담신청이 완료되었습니다!')
      location.href = 'index.php';
    </script>
  ");
?>
