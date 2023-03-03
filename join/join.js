//form_check 함수로 유효성 검사
$('#j_complete').click(function form_check(){

	//변수에 담아주기
	var idname = document.getElementById("idname");
	var name = document.getElementById("name");
	var pwd1 = document.getElementById("password1");
	var repwd = document.getElementById("password2");
	var email = document.getElementById("uEmail");
	var addrPost = document.getElementById("member_post");
	var address2 = document.getElementById("address2");
	var phoneNum = document.getElementById("phoneNum");
	var corNum = document.getElementById("correctNum");


	


	// 아이디입력
	if (idname.value == "") { //해당 입력값이 없을 경우 같은말: if(!uid.value)
		alert("아이디를 입력하세요.");
		idname.focus(); //focus(): 커서가 깜빡이는 현상, blur(): 커서가 사라지는 현상
		return false; //return: 반환하다 return false:  아무것도 반환하지 말아라 아래 코드부터 아무것도 진행하지 말것
};

//아이디유효성검사
var idCheck = /^[a-zA-z0-9]{4,12}$/;

if (!idCheck.test(idname.value)) {
	alert("아이디는 영문 대소문자와 숫자 4~12자리를 사용해야 합니다.");
	idname.focus();
	return false;
};


// 이름입력
if (name.value == "") { //해당 입력값이 없을 경우 같은말: if(!uid.value)
	alert("이름을 입력하세요.");
	name.focus(); //focus(): 커서가 깜빡이는 현상, blur(): 커서가 사라지는 현상
	return false; //return: 반환하다 return false:  아무것도 반환하지 말아라 아래 코드부터 아무것도 진행하지 말것
};


// 1번째 비밀번호 입력
if (pwd1.value == "") {
	alert("비밀번호를 입력하세요.");
	pwd1.focus();
	return false;
};


// 비밀번호 유효성 검사
var pwdCheck = /^(?=.*[a-zA-Z])(?=.*[!@#$%^*+=-])(?=.*[0-9]).{8,25}$/;

  if (!pwdCheck.test(pwd1.value)) {
    alert("비밀번호는 영문자+숫자+특수문자 조합으로 8~25자리 사용해야 합니다.");
    pwd1.focus();
    return false;
  };


		// 비밀번호 확인
		if (repwd.value !== pwd1.value) {
			alert("비밀번호가 일치하지 않습니다..");
			repwd.focus();
			return false;
	};


	// 이메일 입력
if (email.value == "") {
	alert("이메일을 입력하세요.");
	email.focus();
	return false;
	};

	// 주소 검색
	if (addrPost.value == "") {
		alert("주소를 검색하세요.");
		addrPost.focus();
		return false;
		};
	

	// 상세주소 입력
	if (address2.value == "") {
		alert("상세주소를 입력하세요.");
		emaddress2ail.focus();
		return false;
	};


	// 휴대폰번호 입력
	if (phoneNum.value == "") {
		alert("휴대폰번호를 입력하세요.");
		phoneNum.focus();
		return false;
	};


	// 인증번호 입력
	if (corNum.value == "") {
		alert("인증번호를 입력하세요.");
		corNum.focus();
		return false;
	};


	// 개인정보 동의
	if($("input:checkbox[id='persnalCheck']").prop(":checked") != true){
		// e.stopPropagation();
		alert('개인정보 수집 및 이용에 동의에 체크해 주세요');
		return;
}	


	  //입력 값 전송
			document.form_check.submit(); //유효성 검사의 포인트   
		});

		//아이디 중복체크 팝업창(현재 공백문서)
function id_check() {
	//window.open("팝업될 문서 경로", "팝업될 문서 이름", "옵션");
	window.open("", "", "width=600, height=200, left=200, top=100");
}
