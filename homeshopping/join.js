//form_check 함수로 유효성 검사
$('#j_complete').click(function form_check(){

	//변수에 담아주기
	var idname = document.getElementById("idname");
	var dname = document.getElementById("name");
	var pwd1 = document.getElementById("password1");
	var repwd = document.getElementById("password2");
	var email = document.getElementById("uEmail");
	var emailAddr = document.getElementById("selectEmail");
	var addrPost = document.getElementById("member_post");
	var address2 = document.getElementById("address2");
	var phoneNum = document.getElementById("phoneNum");
	var corNum = document.getElementById("correctNum");


	// console.log(idname.value);
	// console.log(dname.value);
	// console.log(pwd1.value);
	// console.log(email.value);
	// console.log(emailAddr.value);
	// console.log(addrPost.value);
	// console.log(address2.value);
	// console.log(address3.value);
	// console.log(phoneNum.value);

// });


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
if (dname.value == "") { //해당 입력값이 없을 경우 같은말: if(!uid.value)
	alert("이름을 입력하세요.");
	dname.focus(); //focus(): 커서가 깜빡이는 현상, blur(): 커서가 사라지는 현상
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

	
	// 이메일주소 입력
	if (emailAddr.value == "") {
		alert("이메일주소를 입력/선택하세요.");
		emailAddr.focus();
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


	// 인증번호 유효성 검사(얘만 id값 적용함)
	if(!persnalCheck.checked) {
		alert('개인정보 수집 및 이용에 동의에 체크해 주세요');
		persnalCheck.focus();
		return false;
};

// 처음에 썻다가 안쓰는 코드
	// if($(":checkbox[id='persnalCheck']").prop(":checked") == false){
	//  e.stopPropagation();
	// 	alert('개인정보 수집 및 이용에 동의에 체크해 주세요');
	// 	this.focus();
	// 	return false;
	// }; 

	  //입력 값 전송
			document.form_check.submit(); //유효성 검사의 포인트   
		 alert("회원가입이 완료 되었습니다.");


		});

		//아이디 중복체크 팝업창(현재 공백문서)
function id_check() {
	var userid = document.getElementById("idname").value;
	if(userid)  //userid로 받음
	{
		url = "check.php?userid="+userid;
		window.open(url,"chkid","width=400,height=200");
	} else {
		alert("아이디를 입력하세요.");
	}
}

//  [이 ID 사용] 버튼을 눌렀을 때 수행될 부분
function decide(){
	document.getElementById("j_complete").disabled = false;
	window.close();
}


// 아이디 확정 후 변심에 의해 [다른 ID로 변경] 버튼을 눌렀을 때 수행될 부분
function change(){
	document.getElementById("decide").innerHTML = "<span style='color:red;'>ID 중복 여부를 확인해주세요.</span>";
	document.getElementById("idname").disabled = false;
	document.getElementById("idname").value = "";
	document.getElementById("j_complete").disabled = true;
}

