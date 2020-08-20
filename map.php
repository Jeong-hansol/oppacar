<?
	session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>OPPA CAR</title>
<link rel="stylesheet" href="css/map.css" text="text.css">
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

	<div class="titArea">
		<div class="titArea_2">
		<h2 class="tit">전국지점안내</h2>
		<br>
		<br>
		<br>
		<h3 class="tit_2">전국에 있는 ‘오빠차’ 지점을 확인해보세요!</h3>
		</div>
	</div>
	
<div id="map">

<div class="map1">
<div id="daumRoughmapContainer1541989353111" class="root_daum_roughmap root_daum_roughmap_landing"></div>
<script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>
<script charset="UTF-8">
   new daum.roughmap.Lander({
      "timestamp" : "1541989353111",
      "key" : "qsu7",
      "mapWidth" : "400",
      "mapHeight" : "200"
   }).render();
</script>
<ul class = "map11">
   <li>부산지점 매장주소 : 부산 부산진구 가야동 272</a></li><br>
   <li>부산지점 매장번호 : 051-892-5877</a></li><br>
   <li>부산지점 담당자  : 정한솔 010-5022-7516</a></li><br>
   
</ul>


<br>
<br>
</div class="map1">

<div class="map2">
<div id="daumRoughmapContainer1541989712975" class="root_daum_roughmap root_daum_roughmap_landing"></div>
<script charset="UTF-8">
   new daum.roughmap.Lander({
      "timestamp" : "1541989712975",
      "key" : "qsuc",
      "mapWidth" : "400",
      "mapHeight" : "200"
   }).render();
</script>
<ul class = "map22">
   <li>거제지점 매장주소 : 거제시 중곡로42</a></li><br>
   <li>거제지점 매장번호 : 055-633-7516</a></li><br>
   <li>거제지점 담당자  : 제해창 010-2132-4564</a></li><br>
</ul>
<br>
<br>
</div class="map2">

<div class="map3">
<div id="daumRoughmapContainer1544070061725" class="root_daum_roughmap root_daum_roughmap_landing"></div>
<script charset="UTF-8">
	new daum.roughmap.Lander({
		"timestamp" : "1544070061725",
		"key" : "r8md",
		"mapWidth" : "400",
		"mapHeight" : "200"
	}).render();
</script>
<ul class = "map33">
   <li>광주지점 매장주소  : 광주광역시 서구 상무누리로 30</a></li><br>
   <li>광주지점 매장번호  : 051-4546-4564</a></li><br>
   <li>광주지점 담당자   : 김태훈 010-5678-7894</a></li><br>
   
</ul>

<br>
<br>
</div class="map3">

<div class="map4">
<div id="daumRoughmapContainer1544070395038" class="root_daum_roughmap root_daum_roughmap_landing"></div>
<script charset="UTF-8">
	new daum.roughmap.Lander({
		"timestamp" : "1544070395038",
		"key" : "r8mf",
		"mapWidth" : "400",
		"mapHeight" : "200"
	}).render();
</script>
<ul class = "map44">
   <li>대구지점 매장주소 : 대구 중구 동성로5길 25 </a></li><br>
   <li>대구지점 매장번호 : 055-644-4852</a></li><br>
   <li>대구지점 담당자  : 하남기 010-1234-5678</a></li><br>
   
</ul>

<br>
<br>
</div class="map4">

<div class="map5">
<div id="daumRoughmapContainer1541990815133" class="root_daum_roughmap root_daum_roughmap_landing"></div>
<script charset="UTF-8">
   new daum.roughmap.Lander({
      "timestamp" : "1541990815133",
      "key" : "qsv9",
      "mapWidth" : "400",
      "mapHeight" : "200"
   }).render();
</script>

<ul class = "map55">
   <li>서울지점 매장주소 : 서울 종로구 세종로 1-91</a></li><br>
   <li>서울지점 매장번호 : 02-5678-9876</a></li><br>
   <li>서울지점 담당자  : 이경용 010-5328-9465</a></li><br>
   
</ul>

</div class="map5">
</div>

</div id="map">

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





