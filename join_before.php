<?
	session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>OPPA CAR</title>
<meta charset="utf-8">
<head>
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR" rel="stylesheet">
<link rel="stylesheet" href="css/join_before.css" text="text.css">

<script> 
var chk = document.getElementsByName('chk'); 
function allChk() { 
  var all = chk.length-1; 
  for(i=0; i<chk.length; i++) { 
    if(chk[all].checked == false) { 
      chk[i].checked = false; 
      }
	else { 
      chk[i].checked = true; 
   } 
} 
} 

function join() { 
  for(i=0; i<chk.length-1; i++) { 
    if(chk[i].checked == false) { 
      alert('모두 동의해주세요.'); 
      return false; 
   } 
} 

location.href = "http://d20153244.dothome.co.kr/project/join.php"; 
}

function f_link(){
        location.href = "http://d20153244.dothome.co.kr/project";
    }

</script>

<script src="//code.jquery.com/jquery-1.12.4.min.js"></script><!--왼쪽 엠블럼 상단고정-->
    <script>
      $( document ).ready( function() {
        var jbOffset = $( '.jbMenu' ).offset();
        $( window ).scroll( function() {
          if ( $( document ).scrollTop() > jbOffset.top ) {
            $( '.jbMenu' ).addClass( 'jbFixed' );
          }
          else {
            $( '.jbMenu' ).removeClass( 'jbFixed' );
          }
        });
      } );
	</script>

</head>

<body>

<div id="header"><!--header 시작-->
	<a href="http://d20153244.dothome.co.kr/project"><img class="Logo" src="img/logo.png"/></a>
<ul id="main_menu">
	<li><a href="http://d20153244.dothome.co.kr/project/korea.php">국산차</a></li>
	<li><a href="http://d20153244.dothome.co.kr/project/global.php">수입차</a></li>
	<li><a href="http://d20153244.dothome.co.kr/project/sell.php">내차팔기</a></li>
	<li><a href="http://d20153244.dothome.co.kr/project/map.php">지점안내</a></li>
</ul>
<ul id="login_menu">
	<?php
	 if(!isset($_SESSION['userid']) || !isset($_SESSION['username'])) {
                echo "<a href=\"login.php\">로그인</a>";
            } else {
                $userid = $_SESSION['userid'];
                $username = $_SESSION['username'];
                echo "<strong>$username</strong>님 환영합니다.<br>";
                echo "<a href=\"logout.php\">로그아웃</a>";
            }
	?>
	<li><a href="http://d20153244.dothome.co.kr/project/join.php">회원가입</a></li>
	<li><a href="http://d20153244.dothome.co.kr/project/find.php">ID/PW 찾기</a></li>
</ul>
</div><!--header 끝-->
	
	<div class="jbMenu"><!--왼쪽 엠블럼-->
	<div id="riMaker_bar" class="mCustomScrollbar" data-mcs-theme="minimal-dark">

		<ul>
			<li>
				<a href="http://www.bmw.co.kr" target = "_blank"><img src="img/bmw.jpg" alt="비엠더블유"></a>
			</li>
			<li>
				<a href="http://www.jaguarkorea.co.kr" target = "_blank"><img src="img/jaguar.jpg" alt="재규어"></a>
			</li>
			<li>
				<a href="http://www.mercedes-benz.co.kr" target = "_blank"><img src="img/benz.jpg" alt="벤츠"></a>
			</li>
			<li>
				<a href="http://www.lexus.co.kr" target = "_blank"><img src="img/lexus.jpg" alt="렉서스"></a>
			</li>
			<li>
				<a href="http://www.audi.co.kr" target = "_blank"><img src="img/audi.jpg" alt="아우디"></a>
			</li>
			<li>
				<a href="http://www.mini.co.kr" target = "_blank"><img src="img/mini.jpg" alt="미니"></a>
			</li>
			<li>
				<a href="http://www.volkswagen.co.kr" target = "_blank"><img src="img/volkvagen.jpg" alt="폭스바겐"></a>
			</li>
			<li>
				<a href="http://www.chevrolet.co.kr" target = "_blank"><img src="img/chevoret.jpg" alt="쉐보레"></a>
			</li>
			<li>
				<a href="http://www.hyundai.com" target = "_blank"><img src="img/hyundai.jpg" alt="현대"></a>
			</li>
			<li>
				<a href="http://www.kia.com" target = "_blank"><img src="img/kia.jpg" alt="기아"></a>
			</li>
			<li>
				<a href="http://www.renaultsamsungm.com" target = "_blank"><img src="img/samsung.jpg" alt="삼성"></a>
			</li>
			<li>
				<a href="http://www.smotor.com/kr/index.html" target = "_blank"><img src="img/ssangyong.jpg" alt="쌍용"></a>
			</li>
			<li>
				<a href="http://www.nissan.co.kr" target = "_blank"><img src="img/nissan.jpg" alt="닛산"></a>
			</li>
			<li>
				<a href="http://www.toyota.co.kr" target = "_blank"><img src="img/toyota.jpg" alt="도요타"></a>
			</li>
			<li>
				<a href="http://www.hondakorea.co.kr" target = "_blank"><img src="img/honda.jpg" alt="혼다"></a>
			</li>
			<li>
				<a href="http://www.landroverkorea.co.kr" target = "_blank"><img src="img/landrover.jpg" alt="랜드로버"></a>
			</li>
			<li>
				<a href="http://www.lincoln-korea.com" target = "_blank"><img src="img/lincoln.jpg" alt="링컨"></a>
			</li>
			<li>
				<a href="http://www.jeep.co.kr" target = "_blank"><img src="img/jeep.jpg" alt="지프"></a>
			</li>
			<li>
				<a href="http://www.maserati.com/maserati/kr/ko" target = "_blank"><img src="img/maserati.jpg" alt="마세라티"></a>
			</li>
			<li>
				<a href="http://www.chrysler.co.kr" target = "_blank"><img src="img/Chrysler.jpg" alt="크라이슬러"></a>
			</li>
		</ul>
	</div>
	</div><!--엠블럼 끝-->

<div id="login_main">
	<a href="http://d20153244.dothome.co.kr/project"><img id="Login_logo" src="img/login_logo.png"/></a>
</div>

<div id = "main_2">
<div class="top"><span class="cousel-title">회원가입</span>&nbsp <span class="cousel-title2">약관</span>

<div class="jul">
<hr>
</div class="jul">
</div class="top">
<div class="box">
<br>

<!--------------------------------------------------------------------------------------------------------->

<textarea name="F_content" id="F_content" rows="8" cols="80" style="resize:none";>

제 1조 (목적) 

 이 약관은 전기통신 사업법 및 동 법 시행령에 의하여 오빠카(이하 "회사" 라 합니다.)가 제공하는 인터넷 홈페이지 서비스 (이하 "서비스" 라 합니다.)의 이용조건 및 절차에 관한 사항, 회사와 이용자의 권리와 의무 및 책임사항을 규정함을 목적으로 합니다.

 

제 2조 (약관의 효력과 개정) 

  1. 이 약관은 전기통신사업법 제 31 조, 동 법 시행규칙 제 21조의 2에 따라 공시절차를 거친 후 홈페이지를 통하여 이를 공지하거나 전자우편 기타의 방법으로 이용자에게 통지함으로써 효력을 발생합니다.

 

  2. 회사는 본 약관을 사전 고지 없이 개정할 수 있으며, 개정된 약관은 제9조에 정한 방법으로 공지합니다. 회원은 개정된 약관에 동의하지 아니하는 경우 본인의 회원등록을 취소(회원탈퇴)할 수 있으며, 계속 사용의 경우는 약관 개정에 대한 동의로 간주됩니다. 개정된 약관은 공지와 동시에 그 효력이 발생됩니다.

  

제 3조 (약관이외의 준칙) 

  이 약관에 명시되어 있지 않은 사항은 전기통신 기본법, 전기통신 사업법, 기타 관련법령의 규정에 따릅니다.

</textarea>
<br>
<br>

<span class="agree"><label><input type="checkbox" name="chk" /> 회원가입약관에 <span style="color:#fc825d">동의</span>합니다.</label></span>

</div class="box">

 <!--------------------------------------------------------------------------------------------------------->
<br>
<br>
<br>

<div class="top2"><span class="cousel-title">개인정보</span>&nbsp <span class="cousel-title2">취급방침</span>
<div class="jul">
<hr>
</div class="jul">
</div class="top2">
<div class="box">
<br>

<!--------------------------------------------------------------------------------------------------------->

<textarea name="F_content" id="F_content" rows="8" cols="80" style="resize:none";>

※ 총 칙

1. 오빠카는 "정보통신망이용촉진및정보보호등에관한법률"상의 개인정보보호 규정과 정보통신부가 제정한 "개인정보보

    호지침" 및 "개인정보의 기술적/관리적 보호조치 기준"을 준수하고 있습니다. 또한 오빠카는 "개인정보보호정책"을 

    제정하여 회원들의 개인정보 보호를 위해 최선을 다하겠음을 선언합니다.

2. 오빠카의 "개인정보보호정책"은 관련 법률 및 정부 지침의 변경과 오빠카의 내부 방침 변경에 의해 변경될 수 있습

    니다. 오빠카의 "개인정보보호방침"이 변경될 경우 변경사항은 오빠카 홈페이지의 공지사항에 

    최소 7일간 게시됩니다. 

 

 

※ 개인정보

오빠카는 귀하께서 오빠카의 이용약관의 내용에 대해 "동의한다" 버튼 또는 "동의하지 않는다" 버튼을 클릭할 수 있는 절차를 마련하여, "동의한다" 버튼을 클릭하면 개인정보 수집에 대해 동의한 것으로 봅니다. 또한, 귀하께서 “동의한다” 버튼을 클릭하면 아래의 개인정보 수집 항목 중 “비밀번호”와 “주민등록번호”를 제외한 나머지 항목들은 오빠카가 서비스

를 이행하기 위해 외주업체에 제공하는 것에 대해 동의한 것으로 간주합니다.

 

 

1. "개인정보"의 범위는 정보통신망이용촉진및정보보호등에관한법률에서 규정하는 내용에 따라, "생존하는 개인에 관한 

    정보로서 당해 정보에 포함되어 있는 성명, 주민등록번호 등의 사항에 의하여 당해 개인을 식별할 수 있는 정보(당해 

    정보만으로는 특정 개인을 식별할 수 없더라도 다른 정보와 용이하게 결합하여 식별할 수 있는 것을 포함한다)"를 의미

</textarea>
<br>
<br>

<span class="agree"><label><input type="checkbox" name="chk" /> 회원가입약관에 <span style="color:#fc825d">동의</span>합니다.</label></span>
<span class="agree"><label><input type="checkbox" name="chk" onclick="allChk()"/><span style="color:#fc825d">모두동의</span></label></span> 
</div class="box">      

<br>
<br>

<button type="button" class="org-btn counsel-btn" style="cursor:pointer;" onclick="join()">
  &nbsp&nbsp&nbsp  동의함 &nbsp&nbsp&nbsp
 </button>

 <button type="button" id="sbt" class="org-btn counsel-btn2" style="cursor:pointer;" 
 onclick="f_link(); return false;" onclick="nochk()" >
 &nbsp&nbsp&nbsp  동의안함 &nbsp&nbsp&nbsp<i class="fas fa-angle-right"></i>

 </button>
<br>
<br>
<br>
<br>
<br>

<footer>
	<div id = "footer"><!-- footer 시작-->
		<article id = "address">
			<ul id = "footer_bar">
				<p class = "blind"><b>온라인 기술과 데이터로 자동차 생활을 혁신하는 오빠차!</b></p>
				<li>상호 : 오빠차 &nbsp; | &nbsp; 고객센터 : 1588-1588 &nbsp; | &nbsp; 이메일 : oppacar@naver.com &nbsp; | &nbsp; 사업자 등록 번호 : 174-23-684</li>
				<li>주소 : 부산광역시 부산진구 엄광로 176</li>

				<li><a href="http://www.twitter.com"><img class = "icon" src = "img/twitter_icon.png"></a>
					<a href="http://www.facebook.com"><img class = "icon" src = "img/facebook_icon.png"></a>
					<a href="http://www.instagram.com"><img class = "icon" src = "img/Instagram_icon.png"></a></li>
			</ul>
			<br>
			<ul id = "footer_bar_2">
				<li>오빠차는 통신판매의 중재자로서 매매 및 매매과정에 있어서 어떠한 책임도 지지않습니다.</li>
				<li>오빠차에 등록된 차량매물에 대해 오빠차는 등록서비스만을 제공하고 있습니다.</li>
			</ul>
			<ul id="company_info">
					<li id="copyright">Copyright by OPPA Company All Rights Reserved.</li>
			</ul>
		</article>
	</div>
</footer>
</body>
</html>