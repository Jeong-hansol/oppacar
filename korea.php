<?
	session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>OPPA CAR</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/korea.css" text="text.css">

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
	</div>
	</div><!--엠블럼 끝-->

<form>
<div id="menubar">
<span class = "price_name">가격 &nbsp;|&nbsp;</span> 
<select class="price1">
	<option value="select">전체</option>
	<option>500만원 ~ 1000만원</option>
	<option>1001만원 ~ 1500만원</option>
	<option>1501만원 ~ 2000만원</option>
	<option>2001만원 ~ 2500만원</option>
	<option>2501만원 ~ 3000만원</option>
	<option>3001만원 ~ 3500만원</option>
	<option>3501만원 ~ 4000만원</option>
	<option>4001만원 ~ 4500만원</option>
	<option>4501만원 ~ 5000만원</option>
</select>

<span class = "year_name">연식 &nbsp;|&nbsp;</span> 
<select class="year">
	<option value="select">전체</option>
	<option>2000년~2005년</option>
	<option>2006년~2010년</option>
	<option>2011년</option>
	<option>2012년</option>
	<option>2013년</option>
	<option>2014년</option>
	<option>2015년</option>
	<option>2016년</option>
	<option>2017년</option>
	<option>2018년</option>
</select>

<span class = "distance_name">주행거리 &nbsp;|&nbsp;</span> 
<select class="distance">
	<option value="select">전체</option>
	<option>0Km ~ 10000Km</option>
	<option>10001Km ~ 20000Km</option>
	<option>20001Km ~ 30000Km</option>
	<option>30001Km ~ 40000Km</option>
	<option>40001Km ~ 50000Km</option>
	<option>50001Km ~ 60000Km</option>
	<option>60001Km ~ 70000Km</option>
	<option>70001Km 초과</option>
</select>
	<div class = "search_btn">
		<a href="#"><img src = "img/search_btn.jpg"></a>
	</div>
</div>
</form>


<div id = "main_2">

	<div id = "new">
		<ul class = "item">
			<a href="http://www.bobaedream.co.kr/mycar/mycar_view?no=1916830&gubun=K" target = "_blank"><li><img class = "car" src = "img/santafe2.png"></li></a>
			<li class = "subject">신형 산타페</li>
			<li class = "comment">15년형 | 50,356km | 디젤</li>
			<li class = "price">1200만원</li>
		</ul>

		<ul class = "item">
			<a href="http://www.bobaedream.co.kr/mycar/mycar_view?no=1916804&gubun=K" target = "_blank"><li><img class = "car" src = "img/gene4.PNG"></li></a>
			<li class = "subject">재네시스 g80</li>
			<li class = "comment">16년형 | 20,300km | 디젤</li>
			<li class = "price">3900만원</li>
		</ul>
		
		<ul class = "item">
			<a href="http://www.bobaedream.co.kr/mycar/mycar_view?no=1915195&gubun=K" target = "_blank"><li><img class = "car" src = "img/gene2.jpg"></li></a>
			<li class = "subject">제네시스 g70</li>
			<li class = "comment">17년형 | 10,300km | 디젤</li>
			<li class = "price">4400만원</li>
		</ul>
		
		<ul class = "item">
			<a href="http://www.bobaedream.co.kr/mycar/mycar_view?no=1915910&gubun=K" target = "_blank"><li><img class = "car" src = "img/gene5.PNG"></li></a>
			<li class = "subject">제네시스 g80</li>
			<li class = "comment">16년형 | 30,800km | 디젤</li>
			<li class = "price">3400만원</li>
		</ul>
		
		<div class="clear"></div>
		<br>
		<br>
		<br>

		<ul class = "item">
			<a href="http://www.bobaedream.co.kr/mycar/mycar_view?no=1916656&gubun=K" target = "_blank"><li><img class = "car" src = "img/spo1.jpg"></li></a>
			<li class = "subject">스포티지</li>
			<li class = "comment">16년형 | 30,500km | 디젤</li>
			<li class = "price">2900만원</li>
		</ul>

		<ul class = "item">
			<a href="http://www.bobaedream.co.kr/mycar/mycar_view?no=1916718&gubun=K" target = "_blank"><li><img class = "car" src = "img/spo2.jpg"></li></a>
			<li class = "subject">스포티지</li>
			<li class = "comment">10년형 | 82,300km | 디젤</li>
			<li class = "price">690만원</li>
		</ul>

		<ul class = "item">
			<a href="http://www.bobaedream.co.kr/mycar/mycar_view?no=1915152&gubun=K" target = "_blank"><li><img class = "car" src = "img/spo3.jpg"></li></a>
			<li class = "subject">스포티지</li>
			<li class = "comment">16년형 | 21,700km | 디젤</li>
			<li class = "price">2100만원</li>
		</ul>

		<ul class = "item">

			<a href="http://www.bobaedream.co.kr/mycar/mycar_view?no=1915053&gubun=K" target = "_blank"><li><img class = "car" src = "img/cona1.jpg"></li></a>
			<li class = "subject">뉴 코나</li>
			<li class = "comment">18년형 | 10,300km | 디젤</li>
			<li class = "price">1200만원</li>
		</ul>
		
		<div class="clear"></div>
		<br>
		<br>
		<br>

		<ul class = "item">
			<a href="http://www.bobaedream.co.kr/mycar/mycar_view?no=1914979&gubun=K" target = "_blank"><li><img class = "car" src = "img/cona2.png"></li></a>
			<li class = "subject">뉴 코나</li>
			<li class = "comment">16년형 | 20,300km | 디젤</li>
			<li class = "price">2100만원</li>
		</ul>

		<ul class = "item">
			<a href="http://www.bobaedream.co.kr/mycar/mycar_view?no=1916770&gubun=K" target = "_blank"><li><img class = "car" src = "img/k3_1.png"></li></a>
			<li class = "subject">K 3</li>
			<li class = "commet">15년형 | 25,700km | 가솔린</li>
			<li class = "price">1800만원</li>
		</ul>

		<ul class = "item">
			<a href="http://www.bobaedream.co.kr/mycar/mycar_view?no=1917110&gubun=K" target = "_blank"><li><img class = "car" src = "img/k3_2.png"></li></a>
			<li class = "subject">K 3</li>
			<li class = "comment">16년형 | 17,300km | 가솔린</li>
			<li class = "price">1900만원</li>
		</ul>

		<ul class = "item">
			<a href="http://www.bobaedream.co.kr/mycar/mycar_view?no=1916728&gubun=K" target = "_blank"><li><img class = "car" src = "img/k5_2.png"></li></a>
			<li class = "subject">K 5</li>
			<li class = "comment">16년형 | 19,800km | 가솔린</li>
			<li class = "price">2500만원</li>
		</ul>
		
		<div class="clear"></div>
		<br>
		<br>
		<br>

		<ul class = "item">
			<a href="http://www.bobaedream.co.kr/mycar/mycar_view?no=1915030&gubun=K" target = "_blank"><li><img class = "car" src = "img/k7_1.png"></li></a>
			<li class = "subject">K 7</li>
			<li class = "comment">15년형 | 32,500km | 가솔린</li>
			<li class = "price">3900만원</li>

		</ul>

		<ul class = "item">
			<a href="http://www.bobaedream.co.kr/mycar/mycar_view?no=1917005&gubun=K" target = "_blank"><li><img class = "car" src = "img/k7_2.png"></li></a>
			<li class = "subject">K 7</li>
			<li class = "comment">16년형 | 20,100km | 가솔린</li>
			<li class = "price">4200만원</li>

		</ul>

		<ul class = "item">
			<a href="http://www.bobaedream.co.kr/mycar/mycar_view?no=1911377&gubun=K" target = "_blank"><li><img class = "car" src = "img/stonic_1.png"></li></a>
			<li class = "subject">스토닉</li>
			<li class = "comment">17년형 | 35,300km | 디젤</li>
			<li class = "price">1200만원</li>
		</ul>

		<ul class = "item">
			<a href="http://www.bobaedream.co.kr/mycar/mycar_view?no=1914973&gubun=K" target = "_blank"><li><img class = "car" src = "img/stonic_2.png"></li></a>
			<li class = "subject">스토닉</li>
			<li class = "comment">18년형 | 25,300km | 디젤</li>
			<li class = "price">1800만원</li>
		</ul>
	</div>
	</div><!--차 소개 끝-->

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