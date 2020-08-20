<?
  session_start();
 
//POST 값 추출 및 DB 저장을 위해 홀따옴표(')를 역슬레쉬(\)로 변환
while(list($fildn,$fildv) = each($_POST)) {
	$$fildn = addslashes($fildv);
}
?>

<meta charset="utf-8">												
<?
	if(!$id)
  {
    echo("
      <script>
        window.alert('아이디를 입력하세요.')
        history.go(-1)
      </script>
    ");
    exit;
  }

	if(!$pw)
{
  echo("
    <script>
      window.alert('비밀번호를 입력하세요.')
      history.go(-1)
    </script>
  ");
  exit;
}

include "./db/dbconn.php";

$sql="select * from member where id='$id'";
$result=mysql_query($sql, $connect);
$num_match=mysql_num_rows($result);

	if(!$num_match) 
{
    echo("
      <script>
        window.alert('등록되지 않은 아이디입니다.')
        history.go(-1)
      </script>
    ");
}
  else
{
    $row=mysql_fetch_array($result);
    $db_pw=$row[pw];

	if($pw!=$db_pw)
{
       echo("
         <script>
           window.alert('비밀번호가 틀립니다.')
           history.go(-1)
         </script>
       ");
       exit;
}
     else
     {
       $userid=$row[id];
       $username=$row[name];
	   $usernick=$row[nick];
	   $userlevel=$row[level];

       $_SESSION['userid']=$userid;
       $_SESSION['username']=$username;
	   $_SESSION['usernick']=$usernick;
	   $_SESSION['userlevel']=$userlevel;
 
       echo("
         <script>
           location.href='index.php';
         </script>
       ");
     }
   } 
?>


