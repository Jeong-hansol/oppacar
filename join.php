<?
	session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>OPPA CAR</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/join.css" text="text.css">
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR" rel="stylesheet">

<script language="javascript">
   function validate() {
       var re = /^[a-zA-Z0-9]{4,12}$/ // 아이디와 패스워드가 적합한지 검사
       var re2 = /^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*.[a-zA-Z]{2,3}$/i;
       // 이메일이 적합한지 검사할 정규식
       var id = document.getElementById("id");
       var pw = document.getElementById("pw");
       var email = document.getElementById("email");
       var num1 = document.getElementById("num1");
       var num2 = document.getElementById("num2");

       var arrNum1 = new Array(); // 주민번호 앞자리숫자 6개
       var arrNum2 = new Array(); // 주민번호 뒷자리숫자 7개

       // ------------ 이메일 까지 -----------

       if(!check(re,id,"아이디는 4~12자의 영문 대소문자와 숫자로만 입력")) {
           return false;
       }

       if(!check(re,pw,"패스워드는 4~12자의 영문 대소문자와 숫자로만 입력")) {
           return false;
       }

       if(join.pw.value != join.checkpw.value) {
           alert("비밀번호가 다릅니다. 다시 확인해 주세요.");
           join.checkpw.value = "";
           join.checkpw.focus();
           return false;
       }

       if(email.value=="") {
           alert("이메일을 입력해 주세요");
           email.focus();
           return false;
       }

       if(!check(re2, email, "적합하지 않은 이메일 형식입니다.")) {
           return false;
       }

       if(join.name.value=="") {
           alert("이름을 입력해 주세요");
           join.name.focus();
           return false;
       }

       // -------------- 주민번호 -------------

       for (var i=0; i<num1.value.length; i++) {
           arrNum1[i] = num1.value.charAt(i);
       } // 주민번호 앞자리를 

       for (var i=0; i<num2.value.length; i++) {
           arrNum2[i] = num2.value.charAt(i);
       } // 주민번호 뒷자리를  

       var tempSum=0;

       for (var i=0; i<num1.value.length; i++) {
           tempSum += arrNum1[i] * (2+i);
       } // 주민번호 앞 번호를 모두 계산

       for (var i=0; i<num2.value.length-1; i++) {
           if(i>=2) {
               tempSum += arrNum2[i] * i;
           }
           else {
               tempSum += arrNum2[i] * (8+i);
           }
       } // 앞 번호 계산한것의 합에 뒷번호 계산한것을 모두 더함

       if((11-(tempSum%11))%10!=arrNum2[6]) {
           alert("올바른 주민번호가 아닙니다.");
           num1.value = "";
           num2.value = "";
           num1.focus();
           return false;
       }
	   else{
     	// ------------ 생일 자동 등록 -----------
           if(arrNum2[0]==1 || arrNum2[0]==2) {
               var y = parseInt(num1.value.substring(0,2));
               var m = parseInt(num1.value.substring(2,4));
               var d = parseInt(num1.value.substring(4,6));
               join.years.value = 1900 + y;
               join.month.value = m;
               join.day.value = d;
           }

           else if(arrNum2[0]==3 || arrNum2[0]==4) {
               var y = parseInt(num1.value.substring(0,2));
               var m = parseInt(num1.value.substring(2,4));
               var d = parseInt(num1.value.substring(4,6));
               join.years.value == 2000 + y;
               join.month.value = m;
               join.day.value = d;
           }
       }

       // 관심분야, 자기소개 미입력시 하라는 메시지 출력

       if(join.inter[0].checked==false &&
           join.inter[1].checked==false &&
           join.inter[2].checked==false &&
           join.inter[3].checked==false &&
           join.inter[4].checked==false) {
           alert("관심분야를 골라주세요");
           return false;
       }

       if(join.self.value=="") {
           alert("자기소개를 적어주세요");
           join.self.focus();
           return false;
       }
		
       alert("회원가입이 완료되었습니다.");
   }

   function check(re, what, message) {
       if(re.test(what.value)) {
           return true;
       }
       alert(message);
       what.value = "";
       what.focus();
       //return false;
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

		<div id="join_main">
		<a href="http://d20153244.dothome.co.kr/project"><img id="Login_logo" src="img/login_logo.png"/></a>
		</div>

		<form name="join" onsubmit="return validate();" action="join_check.php" method="post">
		<div id = "main_2">
		
		<div class="all">
		<table width="800" height="600" border="1" align="center" cellspacing="0">       
			<tr height="10" align="center">
				<td colspan="2" style="background:navy;" ><font color="white"><b>회원기본정보</b></font></td>
			</tr>

			<tr>
				<td><b>&nbsp&nbsp아이디:</b></td>
				<td class="id">  &nbsp&nbsp<input type="text" style="width:170px" id="id" name="id" maxlength="12" /> ※4-12자의 영문 대소문자와 숫자로만 입력</td>
			</tr>

			<tr>
				<td><b>&nbsp&nbsp비밀번호:</b></td>
				<td>   &nbsp&nbsp<input type="password"  style="width:170px" id="pw" name="pw" maxlength="12"/> ※4-12자의 영문 대소문자와 숫자로만 입력</td>
			</tr>

			<tr>
				<td><b>&nbsp&nbsp비밀번호 확인:</b></td>
				<td>   &nbsp&nbsp<input type="password" style="width:170px" id="checkpw" name="checkpw" maxlength="12"/></td>
			 </tr>

			 <tr>
				<td><b>&nbsp&nbsp메일주소:</b></td>
				<td>   &nbsp&nbsp<input type="text" style="width:170px" id="email" name="email" /> ex)wjdxo513@naver.com</td>
			 </tr>

			 <tr>
				<td><b>&nbsp&nbsp이름:</b></td>
				<td>   &nbsp&nbsp<input type="text" style="width:170px" name="name" maxlength="12" /></td>
			 </tr>

			 <tr height="10" align="center">
				 <td colspan="2" style="background:navy;"><font color=white><b>개인정보</b></font></td>
			 </tr>

			 <tr>
				<td><b>&nbsp&nbsp주민등록번호:</td>
				<td>   &nbsp&nbsp<input type="text" name="num1" id="num1" size="10" maxlength="6">-</input>
           			<input type="password" name="num2" id="num2" size="10" maxlength="7"></input>
           			예) 123456-1234567
				</td>
			 </tr>

			 <tr>
				<td><b>&nbsp&nbsp생일:</b></td>
				<td>   &nbsp
					<input type="text" style="width:80px" id="years" readonly/>년
					<input type="text" style="width:80px" id="month" readonly/>월
					<input type="text" style="width:80px" id="day" readonly/>일
				</td>
			</tr>

			<tr>
				<td><b>&nbsp&nbsp관심분야:</b></td>
				<td>   &nbsp<input type="checkbox" name="inter" value="컴퓨터">컴퓨터</input>
                       <input type="checkbox" name="inter" value="인터넷">인터넷</input>
                       <input type="checkbox" name="inter" value="여행">여행</input>
                       <input type="checkbox" name="inter" value="영화감상">영화감상</input>
                       <input type="checkbox" name="inter" value="음악감상">음악감상</input>
				</td>
			</tr>

			<tr>
				<td>
					 <b>&nbsp&nbsp자기소개:</b>
				</td>
				<td>&nbsp&nbsp<textarea name="self" cols="40" rows="7"></textarea></td>
			</tr>
   </table>
   <center>
       <br/>
       <br>
	   <br>

		<div class="form-group text-center">
              <button type="submit" class="btn btn-info">회원가입<i class="fa fa-check spaceLeft"></i></button>
			  &nbsp&nbsp&nbsp&nbsp
              <button type="reset" class="btn btn-warning">다시입력<i class="fa fa-times spaceLeft"></i></button>
        </div>
   </center>
</form>
</div class="all">
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