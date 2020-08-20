<?
	session_start();
?>
<!DOCTYPE HTML>
<html>
<head> 
<title>OPPA CAR</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/common.css" text="text.css">

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

<div id = "main"><!--main 시작-->
<div id = "sch_main">
	
	<div class = "banner">
	<a href="http://d20153244.dothome.co.kr/project"><img src="img/banner_1.png" alt="배너1"></a>
	</div>

	<div class = "banner_2">
	<a href="http://chacha-cars.com" target = "_blank"><img src="img/banner_2.jpg" alt="배너2"></a>
	</div>

	<div id = "sch">
		<div class = "sch_1">
			<a href="http://d20153244.dothome.co.kr/project/korea.php"><img src = "img/sch`1.JPG" alt = "제조사별 검색"></a>
		</div>
		<div class = "sch_2">
			<a href="http://d20153244.dothome.co.kr/project/korea.php"><img src = "img/sch`2.JPG" alt = "가격대별 검색"></a>
		</div>
		<div class = "sch_3">
			<a href="http://d20153244.dothome.co.kr/project/korea.php"><img src = "img/sch`3.JPG" alt = "차종별 검색"></a>
		</div>
	</div>

	<div id="main_ad">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
				<script src="http://malsup.github.com/jquery.cycle2.js"></script>
					<ul>
						<li class="cycle-slideshow"
							cycle-slideshow data-cycle-loader="wait"
							data-cycle-timeout=2000>

								<img src="img/ad-1.jpg" alt="광고1">
								<img src="img/ad-2.jpg" alt="광고2">
								<img src="img/ad`3.jpg" alt="광고3">
								<img src="img/ad-4.jpg" alt="광고4">
								<img src="img/ad-5.jpg" alt="광고5">
						</li>
					</ul>
	</div>
<div class="main_consult">
	<div class="consultBox">
		<div class="tab">
			<div class="btn b02"><a id="mainSearchBtn2" href="javascript:mainSearchCho(2);" class="on"><h3>구매상담</h3></a></div>
			<div class="btn b01"><a id="mainSearchBtn1" href="javascript:mainSearchCho(1);"><h3>판매상담</h3></a></div> 
		</div> <!--상담버튼-->
			<div class="inputArea">
				<iframe name="processIframe" style="display:none;"></iframe>
				<form name="addSell" method="post" target="processIframe">
					<input type="hidden" name="afterAction" value="replace" />
					<input type="hidden" name="mode" value="addSell" />
					<input type="hidden" name="name" value="빠른상담" />
					<input type="hidden" name="subject" value="빠른상담" />
					<input type="hidden" name="passwd" value="1541509832" />
					<input type="hidden" name="posGubun" value="1면상담" />
						<div id="consultSell" style="display:none;">
						<div class="input_padding" style="padding-top:30px;">
							<strong>모델명</strong>
								<input type="text" name="c_name" id="inputSellSubject" title="모델명" placeholder="ex) 싼타페 DM" required="required"/>
							<strong>연락처</strong>
							<input type="tel" name="hp" id="inputSellPhone" title="연락처" placeholder="ex) 01012341234" required="required">
								<div class="checksWrap_st1">
									<div class="checks main">
										<input type="checkbox" name="input[policyPersonalYN]" id="inputSellPhoneAgree" value="Y">
										<label for="inputSellPhoneAgree">개인정보 취급방침 동의</label>
									</div>
										<a href="javascript:;" class="btn_popPrivacy">보기</a>
								</div>
						</div>
							<div class="btnSet" id="smsBtn">
								<a href="javascript:;" onclick="formConsult(this, 'sell');" class="submit_btn" title="상담신청" na-type="inquiry/sell" na-incomeYN="Y" title="상담신청">
									<img src="img/sub`btn.png" alt="상담신청하기" />
								</a>
							</div>
						</div>
							</form>
							<form action="consult_list" name="addBuy" method="post" target="processIframe">
								<input type="hidden" name="afterAction" value="replace" />
								<input type="hidden" name="mode" value="addBuy" />
								<input type="hidden" name="name" value="빠른상담" />
								<input type="hidden" name="subject" value="빠른상담" />
								<input type="hidden" name="passwd" value="1541509832" />
								<input type="hidden" name="posGubun" value="1면상담" />
							<div id="consultBuy">
								<div class="input_padding">
									<strong>모델명</strong>
										<select name="manu" selectAjax="true">
											<option value="">제조사 선택</option>
											<option>BMW</option>
											<option>벤츠</option>
											<option>재규어</option>
											<option>렉서스</option>
											<option>혼다</option>
											<option>아우디</option>
											<option>현대</option>
											<option>기아</option>
											<option>쉐보레</option>
											<option>폭스바겐</option>
											<option>벤틀리</option>
											<option>람보르기니</option>
											<option>포르쉐</option>
											<option>링컨</option>
											<option>지프</option>
											<option>랜드로버</option>
											<option>부가티</option>
										</select>
										<input type="text" name="model" placeholder="모델 입력">
										</select>

								<div class="clear"></div>

									<strong>연락처</strong>
										<input type="tel" name="hp" id="inputBuyPhone" title="연락처" placeholder="ex) 01012341234" required="required">
									<div class="checksWrap_st1">
										<div class="checks_main">
											<input type="checkbox" name="input[policyPersonalYN]" id="inputBuyPhoneAgree" value="Y">
											<label for="inputBuyPhoneAgree">개인정보 취급방침 동의</label>
										</div>
									</div>
								</div>

									<div class="btnSet" id="smsBtn">
										<a href="javascript:choiceDealer('addBuy');" class="submit_btn" title="상담신청">
											<img src="img/sub`btn.png" onclick="alert('상담신청이 완료되었습니다. \n상담원이 직접 연락드리겠습니다!');" alt="상담신청하기" />
										</a>
									</div>
								</div>
							</form>
	</div>
</div>

</div>
</div>


	<div class="clear"></div>

	<div id = "line">
	<hr width="100%" color="#EAEAEA">
	</div>
	
	<div id = "cars">
	<h3>★ 실시간 추천차량 ★</h3>
	</div>
	
	<br>

	<h3>#국산차</h3>	
	
	<br>
	<br>

</div>
	
<div id = "main_2">
	<div id = "new">

		<div id = "testbanner">

		<div class = "manager_1">
			<a href="#"><img src="img/car_manager.PNG"></a>
		</div>

		<div class = "manager_2">
			<a href="https://www.hyundaicapital.com/crln/crlndtl/CPULDT0101.hc" target = "_blank"><img src="img/banner_3.jpg"></a>
		</div>

		</div>

		<ul class = "item">
			<a href="http://www.bobaedream.co.kr/cyber/CyberCar_view.php?no=681494&gubun=K" target = "_blank"><li><img class = "car" src = "img/k3_1.png"></li></a>
			<li class = "subject">더 뉴 K3</li>
			<li class = "comment">17년형 | 10,300km | 가솔린</li>
			<li class = "price">1400만원</li>
		</ul>

		<ul class = "item">
			<a href="http://www.bobaedream.co.kr/cyber/CyberCar_view.php?no=699498&gubun=K" target = "_blank"><li><img class = "car" src = "img/k9_2.png"></li></a>
			<li class = "subject">더 뉴 K9</li>
			<li class = "comment">16년형 | 52,300km | 가솔린</li>
			<li class = "price">3150만원</li>
		</ul>

		<ul class = "item">
			<a href="http://www.bobaedream.co.kr/mycar/mycar_view?no=1916875&gubun=K" target = "_blank"><li><img class = "car" src = "img/kona_1.png"></li></a>
			<li class = "subject">코나</li>
			<li class = "comment">17년형 | 13,600km | 경유</li>
			<li class = "price">1860만원</li>
		</ul>

		<ul class = "item">
			<a href="http://www.bobaedream.co.kr/mycar/mycar_view?no=1916715&gubun=K" target = "_blank"><li><img class = "car" src = "img/stonic_2.png"></li></a>
			<li class = "subject">스토닉</li>
			<li class = "comment">17년형 | 17,300km | 경유</li>
			<li class = "price">1970만원</li>
		</ul>
		
		<div class="clear"></div>

		<br>
		<br>
		
		<div class = "manager_3">
			<a href="http://d20153244.dothome.co.kr/project/global.php"><img src="img/left_ad.PNG"></a>
		</div>

		<div class = "manager_4">
			<a href="http://www.cadillac.co.kr/html/promotion.php" target = "_blank"><img src="img/right_ad.jpg"></a>
		</div>

		<ul class = "item">
			<a href="http://www.bobaedream.co.kr/mycar/mycar_view?no=1917070&gubun=K" target = "_blank"><li><img class = "car" src = "img/tucson_1.png"></li></a>
			<li class = "subject">투싼</li>
			<li class = "comment">16년형 | 24,300km | 경유</li>
			<li class = "price">1890만원</li>
		</ul>

		<ul class = "item">
			<a href="http://www.bobaedream.co.kr/mycar/mycar_view?no=1917007&gubun=K" target = "_blank"><li><img class = "car" src = "img/sorento_1.png"></li></a>
			<li class = "subject">쏘렌토</li>
			<li class = "comment">17년형 | 20,300km | 경유</li>
			<li class = "price">2170만원</li>
		</ul>

		<ul class = "item">
			<a href="http://www.bobaedream.co.kr/mycar/mycar_view?no=1916900&gubun=K" target = "_blank"><li><img class = "car" src = "img/santafe_1.png"></li></a>
			<li class = "subject">싼타페</li>
			<li class = "comment">16년형 | 33,300km | 경유</li>
			<li class = "price">1820만원</li>
		</ul>

		<ul class = "item">
			<a href="http://www.bobaedream.co.kr/mycar/mycar_view?no=1916934&gubun=K" target = "_blank"><li><img class = "car" src = "img/sportage_1.png"></li></a>
			<li class = "subject">스포티지</li>
			<li class = "comment">17년형 | 14,750km | 경유</li>
			<li class = "price">2180만원</li>
		</ul>

		<div class="clear"></div>

		<ul class = "item">
			<a href="http://www.bobaedream.co.kr/mycar/mycar_view?no=1916542&gubun=K" target = "_blank"><li><img class = "car" src = "img/avante_1.jpg"></li></a>
			<li class = "subject">아반떼 스포츠</li>
			<li class = "comment">18년형 | 1,300km | 휘발유</li>
			<li class = "price">2000만원</li>
		</ul>

		<ul class = "item">
			<a href="http://www.bobaedream.co.kr/mycar/mycar_view?no=1915286&gubun=K" target = "_blank"><li><img class = "car" src = "img/g70.jpg"></li></a>
			<li class = "subject">제네시스 G70</li>
			<li class = "comment">17년형 | 9,100km | 휘발유</li>
			<li class = "price">4170만원</li>
		</ul>

		<ul class = "item">
			<a href="http://www.bobaedream.co.kr/mycar/mycar_view?no=1916655&gubun=K" target = "_blank"><li><img class = "car" src = "img/g80.jpg"></li></a>
			<li class = "subject">제네시스 G80</li>
			<li class = "comment">17년형 | 5,780km | 휘발유</li>
			<li class = "price">4820만원</li>
		</ul>

		<ul class = "item">
			<a href="http://www.bobaedream.co.kr/mycar/mycar_view?no=1917050&gubun=K" target = "_blank"><li><img class = "car" src = "img/stinga.jpg"></li></a>
			<li class = "subject">스팅어</li>
			<li class = "comment">18년형 | 4,310km | 휘발유</li>
			<li class = "price">3970만원</li>
		</ul>

		<div class="clear"></div>

		<br>
		<br>
		<br>

		<h3>#수입차</h3>

		<br>
		<br>
		
		<ul class = "item">
			<a href="http://www.bobaedream.co.kr/mycar/mycar_view?no=1916737&gubun=I" target = "_blank"><li><img class = "car" src = "img/520d.jpg"></li></a>
			<li class = "subject">BMW 520d</li>
			<li class = "comment">17년형 | 51,310km | 경유</li>
			<li class = "price">4830만원</li>
		</ul>

		<ul class = "item">
			<a href="http://www.bobaedream.co.kr/mycar/mycar_view?no=1903321&gubun=I" target = "_blank"><li><img class = "car" src = "img/rs7.jpg"></li></a>
			<li class = "subject">아우디 RS7</li>
			<li class = "comment">17년형 | 22,980km | 휘발유</li>
			<li class = "price">12,340만원</li>
		</ul>

		<ul class = "item">
			<a href="http://www.bobaedream.co.kr/mycar/mycar_view?no=1896579&gubun=I" target = "_blank"><li><img class = "car" src = "img/s500.jpg"></li></a>
			<li class = "subject">벤츠 S500</li>
			<li class = "comment">16년형 | 35,310km | 휘발유</li>
			<li class = "price">8770만원</li>
		</ul>

		<ul class = "item">
			<a href="http://www.bobaedream.co.kr/mycar/mycar_view?no=1916371&gubun=I" target = "_blank"><li><img class = "car" src = "img/i8.jpg"></li></a>
			<li class = "subject">BMW i8</li>
			<li class = "comment">18년형 | 10,010km | 휘발유</li>
			<li class = "price">13,570만원</li>
		</ul>

		<div class="clear"></div>

		<br>
		<br>

		<ul class = "item">
			<a href="http://www.bobaedream.co.kr/mycar/mycar_view?no=1913928&gubun=I" target = "_blank"><li><img class = "car" src = "img/m5.jpg"></li></a>
			<li class = "subject">BMW M5</li>
			<li class = "comment">17년형 | 30,150km | 경유</li>
			<li class = "price">11,620만원</li>
		</ul>

		<ul class = "item">
			<a href="http://www.bobaedream.co.kr/mycar/mycar_view?no=1903326&gubun=I" target = "_blank"><li><img class = "car" src = "img/q7.jpg"></li></a>
			<li class = "subject">아우디 Q7</li>
			<li class = "comment">16년형 | 34,230km | 경유</li>
			<li class = "price">6,510만원</li>
		</ul>

		<ul class = "item">
			<a href="http://www.bobaedream.co.kr/mycar/mycar_view?no=1913244&gubun=I" target = "_blank"><li><img class = "car" src = "img/xe.jpg"></li></a>
			<li class = "subject">재규어 XE</li>
			<li class = "comment">17년형 | 20,130km | 휘발유</li>
			<li class = "price">5,210만원</li>
		</ul>

		<ul class = "item">
			<a href="http://www.bobaedream.co.kr/mycar/mycar_view?no=1915921&gubun=I" target = "_blank"><li><img class = "car" src = "img/tiguan.jpg"></li></a>
			<li class = "subject">폭스바겐 티구안</li>
			<li class = "comment">16년형 | 41,900km | 휘발유</li>
			<li class = "price">3,690만원</li>
		</ul>

		<div class="clear"></div>

		<br>
		<br>
		
		<ul class = "item">
			<a href="http://www.bobaedream.co.kr/mycar/mycar_view?no=1916807&gubun=I" target = "_blank"><li><img class = "car" src = "img/rangerover.jpg"></li></a>
			<li class = "subject">랜드로버 레인지로버</li>
			<li class = "comment">16년형 | 49,500km | 경유</li>
			<li class = "price">9,120만원</li>
		</ul>

		<ul class = "item">
			<a href="http://www.bobaedream.co.kr/mycar/mycar_view?no=1914271&gubun=I" target = "_blank"><li><img class = "car" src = "img/xf.jpg"></li></a>
			<li class = "subject">재규어 XF</li>
			<li class = "comment">17년형 | 11,990km | 휘발유</li>
			<li class = "price">5,690만원</li>
		</ul>

		<ul class = "item">
			<a href="http://www.bobaedream.co.kr/mycar/mycar_view?no=1866740&gubun=I" target = "_blank"><li><img class = "car" src = "img/aventador.jpg"></li></a>
			<li class = "subject">람보르기니 아벤타도르</li>
			<li class = "comment">15년형 | 68,550km | 경유</li>
			<li class = "price">9,850만원</li>
		</ul>

		<ul class = "item">
			<a href="http://www.bobaedream.co.kr/mycar/mycar_view?no=1916406&gubun=I" target = "_blank"><li><img class = "car" src = "img/porshe911.jpg"></li></a>
			<li class = "subject">포르쉐 911</li>
			<li class = "comment">16년형 | 20,330km | 경유</li>
			<li class = "price">8,250만원</li>
		</ul>
		
		<div class="clear"></div>
		
		<div id = "line">
		<hr width="100%" color="#EAEAEA">
		</div>

		<br>
		
		<h3>#Best Car Manager</h3>

		<br>
		<br>

		<ul class = "diler">
			<li><img class = "car" src = "img/diler_1.jpg"></li>
			<li class = "diler_name">최현준</li>
			<li class = "phone">010-7556-4457</li>
		</ul>

		<ul class = "diler">
			<li><img class = "car" src = "img/diler_2.png"></li>
			<li class = "diler_name">유선화</li>
			<li class = "phone">010-5704-8410</li>
		</ul>

		<ul class = "diler">
			<li><img class = "car" src = "img/diler_3.png"></li>
			<li class = "diler_name">성베드로</li>
			<li class = "phone">010-5838-9865</li>
		</ul>

		<ul class = "diler">
			<li><img class = "car" src = "img/diler_4.png"></li>
			<li class = "diler_name">이세라</li>
			<li class = "phone">010-4380-5597</li>
		</ul>

		<ul class = "diler">
			<li><img class = "car" src = "img/diler_5.png"></li>
			<li class = "diler_name">이동민</li>
			<li class = "phone">010-5638-5795</li>
		</ul>

		<ul class = "diler">
			<li><img class = "car" src = "img/diler_6.jpg"></li>
			<li class = "diler_name">정려원</li>
			<li class = "phone">010-9816-0712</li>
		</ul>

	</div>
</div>

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