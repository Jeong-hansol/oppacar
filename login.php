<?
	session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>OPPA CAR</title>
<link rel="stylesheet" href="css/login.css" text="text.css">
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR" rel="stylesheet">
<script src="//code.jquery.com/jquery-1.12.4.min.js"></script>
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
	<li><a href="http://d20153244.dothome.co.kr/project/join_before.php">회원가입</a></li>
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
	</div><!--엠블럼 끝-->
	</div>
	
	<div id="login_main">
	<a href="http://d20153244.dothome.co.kr/project"><img id="Login_logo" src="img/login_logo.png"/></a>
	</div>

	<div class="login">
	<h1 align="center">MEMBER JOIN</h1>

	<form action="login_check.php" method="post" style="text-align:center;">

	<input type="text" placeholder="아이디를 입력해주세요!" id="id" name="id"><br/><br/>

	<input type="password" placeholder="비밀번호를 입력해주세요!" id="pw" name="pw"><br/><br/>

	<input type="submit" value="로그인 하기" name="submit">
	
	</div>
	
	<div class="under_bar">
		<a href="http://d20153244.dothome.co.kr/project/join_before.php"><li>회원가입</li></a>
		<li>|</li>
		<a href="http://d20153244.dothome.co.kr/project/find.php"><li>아이디·비밀번호 찾기</li></a>
	</div>
	

<!-- Error Message -->
<span><?php echo $error; ?></span>

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