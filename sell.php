<?
	session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>OPPA CAR</title>
<meta charset="utf-8">
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR" rel="stylesheet">
<link rel="stylesheet" href="css/sell.css" text="text.css">

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

<div id = "main_2">

<div class="top">
<div class="counsel-all">
<span class="cousel-title">무료상담</span> <span class="cousel-title2">신청하기</span>


<p>전체문의
&nbsp;&nbsp;
<span class="cousel-title3">768,498</span>건
&nbsp;&nbsp;
|
&nbsp;
전체완료
&nbsp;&nbsp;
<span class="cousel-title4">768,323</span>건
</p>
</div>
</div class="top">

<div class="jul">
<hr>
</div class="jul">



<br>
<br>

<div id = "car_main">
<div class="car-1">
  차량 <span style="color:#fc825d">정보</span>
</div>

<form onsubmit="return validate();" action="sell_list.php" method="post">
<div class="car2">
                <tr>
                <td></td>
                <td><select name="model" size="0">
				<option>제조사</option>                        
                        <option value="현대">현대</option>
                        <option value="제네시스">제네시스</option>                     
                        <option value="기아">기아</option>                        
                        <option value="르노삼성">르노삼성</option>                        
                        <option value="쌍용">쌍용</option>                        
                        <option value="BMW">BMW</option>
                        <option value="벤츠">벤츠</option>
                        <option value="아우디">아우디</option>                        
                        <option value="폭스바겐">폭스바겐</option>                        
                        <option value="렉서스">렉서스</option>                        
                        <option value="닛산">닛산</option>                        
                        <option value="다이하즈">다이하츠</option>                        
                        <option value="닷지">닷지</option>                                            
                        <option value="람보르기니">람보르기니</option>                        
                        <option value="랜드로버">랜드로버</option>
                        <option value="롤스로이스">롤스로이스</option>   
                        <option value="링컨">링컨</option>                     
                        <option value="마세라티">마세라티</option>                        
                        <option value="마쯔다">마쯔다</option>                        
                        <option value="머큐리">머큐리</option>
                        <option value="미니">미니</option>
                        <option value="미쯔비시">미쯔비시</option>
                        <option value="벤틀리">벤틀리</option>   
                        <option value="볼보">볼보</option>
                        <option value="부가티">부가티</option>
                        <option value="쉐보레">쉐보레</option>
                        <option value="인피니티">인피니티</option>            
                        <option value="재규어">재규어</option>         
                        <option value="지프">지프</option>      
                        <option value="캐딜락">캐딜락</option>
                        <option value="테슬라">테슬라</option>   
                        <option value="도요타">토요타</option>
                        <option value="페라리">페라리</option>
                        <option value="포드">포드</option>
                        <option value="포르쉐">포르쉐</option>                     
                        <option value="혼다">혼다</option>                  
                            </select>
            </select>
            </td>
                </tr>
</div>

<div class="car3">
                <tr>
                <td></td>
                <td><select name="emadress2" size="0">
            <option value="0">등급</option>
            <option value="0">등급(상세정보에 작성해주세요)</option>
            <option value="0">등급모름</option>
            </select>
            </td>
                </tr>
</div>

<div class="car4">
                <tr>
                <td></td>
                <td><select name="emadress3" size="0">
            <option value="0" selected>연식</option>
                        
                        <option value="2018" >2018</option>                        
                        <option value="2017" >2017</option>
                        <option value="2016" >2016</option>                        
                        <option value="2015" >2015</option>                        
                        <option value="2014" >2014</option>                        
                        <option value="2013" >2013</option>                        
                        <option value="2012" >2012</option>                        
                        <option value="2011" >2011</option>                        
                        <option value="2010" >2010</option>                        
                        <option value="2009" >2009</option>                        
                        <option value="2008" >2008</option>                     
                        <option value="2007" >2007</option>                        
                        <option value="2006" >2006</option>                        
                        <option value="2005" >2005</option>                        
                        <option value="2004" >2004</option>                        
                        <option value="2003" >2003</option>                                                <option value="2002" >2002</option>                        
                        <option value="2001" >2001</option>                        
                        <option value="2000" >2000</option>                        
                        <option value="1999" >1999</option>                        
                        <option value="1998" >1998</option>                        
                        <option value="1997" >1997</option>                        
                        <option value="1996" >1996</option>                        
                        <option value="1995" >1995</option>                        
                        <option value="1994" >1994</option>                        
                        <option value="1993" >1993</option>                        
                        <option value="1992" >1992</option>                        
                        <option value="1991" >1991</option>   
                        
                            </select>
            </td>
                </tr>
</div>

<div class="car4">
                <tr>
                <td></td>
                <td><select name="emadress4" size="0">
            <option value="0" selected>변속</option>
                <option value="1">자동</option>
                <option value="2">수동</option>
            </select>
            </td>
                </tr>
</div>

<div class="car4">
                <tr>
                <td></td>
                <td><select name="location" size="0">
            <option value="" selected>지역</option>
                        <option value="서울">서울</option>
                        <option value="경기">경기</option>
                        <option value="부산">부산</option>
                        <option value="강원">강원</option>
                        <option value="경남">경남</option>
                        <option value="경북">경북</option>
                        <option value="광주">광주</option>
                        <option value="대구">대구</option>
                        <option value="대전">대전</option>
                        <option value="울산">울산</option>
                        <option value="인천">인천</option>
                        <option value="전남">전남</option>
                        <option value="전북">전북</option>
                        <option value="제주">제주</option>
                        <option value="충남">충남</option>
                        <option value="충북">충북</option>
                        <option value="세종">세종</option>
                            </select>
            </td>
                </tr>
</div>
<!---->
<!---->
<br>
</div>

<div class="jul">
<hr>
</div class="jul">
<!---->
<!---->
<br>
<br>
	<div id = "car_main_2">
                 <div class="car-2">
                  상세 <span style="color:#fc825d">정보</span>
                  </div>
                    

               <div class="box">
                        

                       <textarea name="F_content" id="F_content" rows="8" cols="80" style="resize:none";>
 등급 :&nbsp;

 색상 : &nbsp;

 주행거리 : &nbsp;

 사고유무 : &nbsp;

 차량번호 : &nbsp;

 기타 :&nbsp;

                       </textarea>
                          
                      </div class="box">
	</div>
<!---->
<!---->
<br>
<br>
<div class="jul">
<hr>
</div class="jul">
<br>
<br>
<!---->
<!---->
 <div class="idfind3">
            
           <span>*</span>
              <span>이름</span>
                <span><input type="text3" size="10" name="name" placeholder="&nbsp; 이름을 입력해주세요"></span>
              
</div class="idfind3">
<!---->
<!---->

<div class="phonenum">
                <span>*</span>
                <span>연락처</span>
				
                <span>
				<input type="text4" name="hp" size="10" placeholder="&nbsp;&nbsp; 연락처를 입력해주세요 &nbsp;&nbsp;&nbsp; ex)010-1111-2222">
				</span>
</div class="phonenum">
<br>
<br>
<br>


                         
                  

                           <div class="customer2">
                       <div class="customer2">
                    <span class="custom-phone dis-in">* 상담구분</span>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="S_intention" value="A" id="slae-counsel" style="cursor:pointer;" />
                             <label for="slae-counsel" style="margin-right: 10px;">판매상담</label>
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="S_intention" value="B" id="price-counsel" style="cursor:pointer;"/>
                              <label for="price-counsel">시세상담</label>
                          <div class="/customer2"
                          <div class="/customer2">

<br>
                         
                          <div class="counsel-img">
                              <img src="img/counsel-phone.png" alt="f">
                              <p>고객님의 개인정보는<br /><span class="col-org">개인정보보호법</span>에 의해<br />보호됩니다.</p>
                            
                          </div>
						  
                        </ul>
                                    <br>
                   
 <div class="jul">
<hr>
</div class="jul">   
<br>
<br>

                         <div class="customer">
                          <p>
                            *고객님의 개인정보보호를 위해 최소의 정보를 받고 있습니다. <br />
                            <input type="checkbox" name="agreecheck" id="agree-check" value="Y" style="cursor:pointer;"/>
                            <label for="agree-check">개인정보 수집동의</label>&nbsp;&nbsp;
							
							<script src="https://code.jquery.com/jquery-3.3.1.min.js">
							</script>

							<script>
							$(function(){
							$('.per').click(function(){
							$(this).toggleClass('on');
								})
							});
							</script>

							<div class="per">
							<span style="cursor:pointer;" class="viewagree" >[개인정보 수집방침]</span>
							<ul>
								<li>■ 개인정보의 수집 및 이용목적<br/>
								&nbsp&nbsp'oppacar'는 원할한 고객상담 및 서비스 제공을 위하여 아래와 같이 개인정보를 수집하고 있습니다.<br/></li>
								<li>■ 수집하는 개인정보 항목<br/>
								&nbsp&nbsp필수입력사항 : 성명, 연락처, 비밀번호이며, 이는 서비스 이용을 위한 본인식별 등 정보의 전달을 위한 절차에 이용하기 위한 내용<br/></li>
								<li>■ 개인정보의 보유 및 이용기간<br/>
								&nbsp&nbsp해당정보는 2년간 저장되며 회원은 개인정보의 수집, 이용, 제공 등에 대해 동의하신 내용을 언제든지 철회할 수 있습니다.<br/>
								&nbsp&nbsp- 파기요청 : 1588-5578 / oppacar@oppacar.co.kr</li>
							</ul>
						   </div>
                          </p> <br><br> </div class="customer">
                          <button type="button id="sbt" class="org-btn counsel-btn" style="cursor:pointer;">

                          &nbsp&nbsp&nbsp  무료상담신청 &nbsp&nbsp&nbsp<i class="fas fa-angle-right"></i>
                          </button>
                      
						</div>
                 </form>

                    
                </fieldset>
              </form>
			  </form>
          <!--메인 상담문의 종료-->
        <!--메인 폼섹션 종료-->

<br>
<br>
	<div id = "under_ad">
    <div class="guang">
   
   
      <h2 class="guang-1">Why OPPA<span class="col-org2">CAR</span>?</h2>
      <span class="dis-bl">중고차, 내차 팔 땐  왜 </span><span style="color:#fc825d">오빠카</span><span> 일까요?</span><br>
     </div class="guang">


    <div class="guang2">
   <br>
   <br>
   <img src="img/why-carz1.png" alt="">
   <br>
      <h2 class="guang-2">제 값을 받는다.</h2>
      <span class="dis-bl2">삶이 그대를 속일지라도 <br>중고차 만큼은 정직하게</span><br>
     </div class="guang2">
    

    <div class="guang3">
    <br>
    <br>    
    <img src="img/why-carz2.png"  alt="">    
      <h2 class="guang-3">처음부터 끝까지</h2>
      <span class="dis-bl2">모든 순간 감동, 친절한 상담원과<br />빠르고 정확한 진행과정</span><br>
     </div class="guang3">



    <div class="guang4">
    <br>
    <br>
    <img src="img/why-carz3.png"  alt="">
      <h2 class="guang-4">신뢰의 20년</h2>
      <span class="dis-bl2">오빠카 20년 노하우는<br> 고객사랑입니다.</span><br>
     </div class="guang4">
	</div>
<br>
<br>
</div>
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