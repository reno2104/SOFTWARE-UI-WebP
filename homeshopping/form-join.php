<?php  
	include "db.php";
	include "password.php";
?>

<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>미소마켓 회원가입</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="stylesheet" href="css/joinStyle.css">

		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>


	</head>

<body>
  <div class="container">
    <div class="input-form-backgroud row">
      <div class="input-form col-md-12 mx-auto">
        <h4 class="mb-3">회원가입</h4>
        <form class="validation-form" name="form_check" action="member_ok.php" method="post">
        <!-- <form class="validation-form" name="form_check" action="member_ok.php" method="post" novalidate> -->
								<div class="row">
            <div class="col-md-6 mb-3 idcheckSection">
              <label for="id">아이디</label>
              <input type="text" name="userId" class="form-control idname" id="idname" placeholder="아이디 입력" value="" required>
														<input type="hidden" name="decide_id" id="decide_id">
    <p><span id="decide" style='color:red;'>ID 중복 여부를 확인해주세요.</span>
														<button value="" id="idCheck" onclick="id_check()">ID중복확인</button>
														<div class="invalid-feedback">
                아이디를 입력해주세요.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="name">이름</label>
              <input type="text" name="userName" class="form-control name" id="name" placeholder="성함 입력" value="" required>
              <div class="invalid-feedback">
                이름을 입력해주세요.
              </div>
            </div>
          </div>

										<div class="mb-3">
											<label for="address2">비밀번호입력</label>
											<input type="password" class="form-control password" name="password1" id="password1" placeholder="영문 대소문자, 숫자, 특수문자 포함, 8~12자 입력해주세요.">
									</div>
									<div class="invalid-feedback">
										비밀번호를 입력해주세요.
								</div>

									<div class="mb-3">
										<label for="address2">비밀번호확인</label>
										<input type="password" class="form-control password" name="password2" id="password2" placeholder="비밀번호 확인">
								</div>
								<div class="invalid-feedback">
									비밀번호를 확인해주세요.
							</div>

          <div class="mb-3">
            <label for="email">이메일</label>
												<div class="emailBox">
            <input type="email" class="form-control emailForm" name="emailId" id="uEmail" placeholder="이메일ID입력" required>
												&emsp;<h4>@</h4>&ensp;
												<input class="form-control selectEmail2" id="selectEmail" name="emailAddr" type="text" style="width:120px" placeholder="이메일주소입력" value="">													
												<!-- <input name="e2" class="form-control selectEmail2" id="selectEmail" name="emailAddr" type="text" style="width:120px" value="">													 -->
												<!-- <form class="emailChoose" name='frm'>
													<input name="e2" class="form-control selectEmail2" id="selectEmail" name="emailAddr" type="text" style="width:120px" value="">													
													<select name="email_server" class="form-control selectEmail2" id="email_server" onchange="input_email();">
													
														<option value="1">직접입력</option>													
														<option value="naver.com">naver.com</option>													
														<option value="nate.com">nate.com</option>													
														<option value="hanmail.net">hanmail.net</option>													
														<option value="gmail.com">gmail.com</option>													
														<option value="hotmail.com">hotmail.com</option>
													
													</select>
													</form> -->

												<div class="invalid-feedback">
              이메일을 입력해주세요.
													</div>
            </div>
          </div>

          <div class="mb-3">
            <label for="address">주소</label>
												<div class="addSearchSec">
												<input id="member_post" type="text" name="addPost" class="form-control zipcode"  placeholder="우편번호" onclick="findAddr()" readonly>
            <input id="member_addr" type="text" name="addMiddle" class="form-control addSearch"  placeholder="주소검색" onclick="findAddr()" readonly>
												<button value="searchAdd" onclick="findAddr()"> 주소검색</button>
											</div>
											<input type="text" class="form-control" name="addAddr" id="address2" placeholder="상세주소를 입력해주세요.">

											<div class="invalid-feedback">
              주소를 입력해주세요.
            </div>
          </div>

										<div class="mb-3">
											<label for="address2">연락처</label>
											<div class="numberSec">
												<input type="text" name="cellPhone" class="form-control" id="phoneNum" placeholder="'-'없이 핸드폰번호 입력" maxlength="13" />
											<button value="searchAdd" id="searchCorractNum" onclick="openPASSWindow(this.name, 'a', 'b', 'c', '', 'testcode11', 'app')">인증번호 받기</button>
										</div>
										<div class="invalid-feedback">
											휴대폰번호를 입력해주세요.
									</div>
											<input type="number" class="form-control" id="correctNum" placeholder="인증번호">
											<div class="invalid-feedback">
												인증번호를 입력해주세요.
										</div>
									</div>
		

          <hr class="mb-4">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" id ="persnalCheck" name="checkAgree" class="custom-control-input" value="1" required>
            <label class="custom-control-label" for="persnalCheck">개인정보 수집 및 이용에 동의합니다.</label>
          </div>
          <div class="mb-4"></div>
										<div class="submitForm">
										<!-- <button id="j_complete" class="btn btn-primary btn-lg btn-block j_complete" type="button" onclick="form_check();">가입완료</button> -->
										<button id="j_complete" class="btn btn-primary btn-lg btn-block j_complete" type="submit" onclick="form_check();">가입완료</button>
											<button id="j_back" class="btn btn-primary btn-lg btn-block j_back" type="button" onclick="history.back();">이전페이지로</button>
									</div>
									</form>
      </div>
    </div>  

			
    <footer class="my-3 text-center text-small">
      <p class="mb-1">&copy; <script>document.write(new Date().getFullYear());</script> Misomarket</p>
    </footer>
  </div>

  <script>
			window.addEventListener('load', () => {
					const forms = document.getElementsByClassName('validation-form');

					Array.prototype.filter.call(forms, (form) => {
							form.addEventListener('submit', function (event) {
									if (form.checkValidity() === false) {
											event.preventDefault();
											event.stopPropagation();
									}

									form.classList.add('was-validated');
							}, false);
					});
			}, false);

			// 이메일 입력방식 선택
$('#email_server').change(function(){
			$("#email_server option:selected").each(function () {
								
								if($(this).val()== '1'){ //직접입력일 경우
													$("#selectEmail").val("");                        //값 초기화
													$("#selectEmail").attr("disabled",false); //활성화
								}else{ //직접입력이 아닐경우
													$("#selectEmail").val($(this).text());      //선택값 입력
													$("#selectEmail").attr("disabled",true); //비활성화
								}
			});
});

function findAddr(){
		new daum.Postcode({
									oncomplete: function(data) {
										
										console.log(data);
										
													// 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.
													// 도로명 주소의 노출 규칙에 따라 주소를 표시한다.
													// 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
													var roadAddr = data.roadAddress; // 도로명 주소 변수
													var jibunAddr = data.jibunAddress; // 지번 주소 변수
													// 우편번호와 주소 정보를 해당 필드에 넣는다.
													document.getElementById('member_post').value = data.zonecode;
													if(roadAddr !== ''){
																	document.getElementById("member_addr").value = roadAddr;
													} 
													else if(jibunAddr !== ''){
																	document.getElementById("member_addr").value = jibunAddr;
													}
									}
					}).open();
	}



	function autoHypenPhone(str){
            str = str.replace(/[^0-9]/g, '');
            var tmp = '';
            if( str.length < 4){
                return str;
            }else if(str.length < 7){
                tmp += str.substr(0, 3);
                tmp += '-';
                tmp += str.substr(3);
                return tmp;
            }else if(str.length < 11){
                tmp += str.substr(0, 3);
                tmp += '-';
                tmp += str.substr(3, 3);
                tmp += '-';
                tmp += str.substr(6);
                return tmp;
            }else{              
                tmp += str.substr(0, 3);
                tmp += '-';
                tmp += str.substr(3, 4);
                tmp += '-';
                tmp += str.substr(7);
                return tmp;
            }
            return str;
        }
var cellPhone = document.getElementById('phoneNum');
cellPhone.onkeyup = function(event){
        event = event || window.event;
        var _val = this.value.trim();
        this.value = autoHypenPhone(_val) ;
}


	function openPASSWindow(type, coworker, service, a_type, kitid, client_key, machine){
			window.name = "parentPage";
			DRMOK_window = window.open('', 'DRMOKWindow','width=425, height=550, resizable=0, scrollbars=no, status=0, titlebar=0, toolbar=0, left=435, top=250');
	
			document.forml.action="https://www.mobile-ok.com/popup/common/hscert.jsp" ;
			document.forml.target = 'PASSWindow';
			document.forml.submit();
	}

	</script>


</body>
	<script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
	<script src="join.js"></script>
</html>

<!-- https://goddino.tistory.com/52
https://olsh1108o.tistory.com/entry/JS-%ED%9A%8C%EC%9B%90%EA%B0%80%EC%9E%85-%EC%9C%A0%ED%9A%A8%EC%84%B1-%EA%B2%80%EC%82%AC -->