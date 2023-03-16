<?php  
	include "/db.php";
	include "../password.php";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>미소마켓 로그인</title>
				<link rel="preconnect" href="https://fonts.googleapis.com">
				<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
				<link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,400;0,700;1,700&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
			
				<link rel="stylesheet" href="css/bootstrap.min.css">
				<link rel="stylesheet" href="css/animate.min.css">
				<link rel="stylesheet" href="css/owl.carousel.min.css">
				<link rel="stylesheet" href="css/owl.theme.default.min.css">
				<link rel="stylesheet" href="css/jquery.fancybox.min.css">
				<link rel="stylesheet" href="fonts/icomoon/style.css">
				<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
			
				<link rel="stylesheet" type="text/css" href="http://localhost/style.css?ver=1">
				<script type="text/javascript" src="./style/js/test.js?ver=1"></script>

    <script src="https://kit.fontawesome.com/53a8c415f1.js" crossorigin="anonymous"></script>


				<link rel="stylesheet" href="/css/loginStyle.css">
</head>
<body>
    <div class="wrap">
        <div class="login">
									<a href="#" onclick="returnPage()" class="logo">미소마켓 쇼핑몰<span class="text-primary">.</span></a>
            <h2>ID 로그인</h2>
            <!-- <div class="login_sns">
            <li><a href=""><i class="fab fa-instagram"></i></a></li>
            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
            <li><a href=""><i class="fab fa-twitter"></i></a></li>
            </div> -->
            <div class="login_id">

                <input type="text" name="아이디를 입력하세요." id="" placeholder="아이디">
            </div>
            <div class="login_pw">
                <input type="password" name="" id="" placeholder="비밀번호">
            </div>
            <div class="login_etc">
                <div class="forgot_pw">
																	<a href="" class="searchIdPw ">비밀번호 찾기</a>
                <a href="" class="searchIdPw ">아이디 찾기</a>
                <a href="" class="searchIdPw joinGo">회원가입</a>
															</div>
														</div>
																<div class="checkbox">
																	<label><input type="checkbox" name="" id="logincheck" style="width:18px; height:18px;" value="1"><span class="loginMaintain"> 로그인 상태 유지</span></label>
																	</div>	
            <div class="submit">
                <a href="#" onclick="submit()"><input type="submit" value="로 그 인" style="font-size:18pt; font-weight: 600;"></a>
            </div>
        </div>
    </div>
</body>
<script>

function returnPage(){
	opener.location.href='/index.php'; 
	window.close();
}

function submit(){
	opener.location.href='/loginConnect.php'; 
	window.close();
}
</script>
</html>