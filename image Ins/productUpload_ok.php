<?php
	include "db.php";
	include "password.php";
	include_once "php.ini";


// 설정
$upload_path = './img';
$allowed_ext = array('jpg','jpeg','png','gif');
 
// 변수 정리
$error = $_FILES['myfile']['error'];
$name = $_FILES['myfile']['name'];
$ext = array_pop(explode('.', $name));
 
// 오류 확인
if( $error != UPLOAD_ERR_OK ) {
	switch( $error ) {
		case UPLOAD_ERR_INI_SIZE:
		case UPLOAD_ERR_FORM_SIZE:
			echo "파일이 너무 큽니다. ($error)";
			break;
		case UPLOAD_ERR_NO_FILE:
			echo "파일이 첨부되지 않았습니다. ($error)";
			break;
		default:
			echo "파일이 제대로 업로드되지 않았습니다. ($error)";
	}
	exit;
}
 
// 확장자 확인
if( !in_array($ext, $allowed_ext) ) {
	echo "허용되지 않는 확장자입니다.";
	exit;
}

// 파일 임시저장경로설정
$uploads_dir = './var/www/html/img';
$fin_path = "222";
$upload_ok = "NOT";
$tmp_name = $_FILES["myfile"]["tmp_name"];
$name = $_FILES["myfile"]["name"];
$fin_path = "img/$name";

if( file_exists($fin_path) ) {
    // 파일이 존재할 때함
	$upload_ok = "이미 같은 이름의 파일이 존재함";
}else{
    // 파일이 없을때
	if ($error == UPLOAD_ERR_OK) {
        $imageUpload = move_uploaded_file($tmp_name, $fin_path);
		if($imageUpload){
			//업로드 성공시
			$upload_ok = "Success!";
		}else{
			//업로드 실패
			$upload_ok = "Fail";
		}
	}
}


// DB넣기 위한 변수 작업
	$product = $_POST['pname'];
	$writer = $_POST['wname'];
	$price = $_POST['price'];
	$img = "$uploads_dir/$name";
	$content = $_POST['content'];


// PHPMYADMin DB에 넣기 
$sql = mq("INSERT INTO upload(title,wname,price,img,content) values('{$product}','{$writer}','{$price}','{$img}','{$content}')") or die ("Can't access DB");


//결과물 출력(확인용)
echo "제목 : $product <br>";
echo "글쓴이 : $writer <br>";
echo "가격 : $price <br>";
echo "이미지 : $img <br>";
echo "<h2>파일 정보</h2>
<ul>
	<li>파일명: $name</li>
	<li>확장자: $ext</li>
	<li>파일형식: {$_FILES['myfile']['type']}</li>
	<li>파일크기: {$_FILES['myfile']['size']} 바이트</li>
 <li>파일저장경로: $uploads_dir/$name</li>
 <li>에러수: $error</li> 
 <li>임시저장경로: $tmp_name</li>
</ul>";
echo "<img src='{$fin_path}' width='200' />";
echo "상세설명 : $content <br>";
echo "등록 성공";

?>

<meta charset="utf-8" />
<script type="text/javascript">alert('등록이 완료되었습니다.');</script>		



<!-- https://www.pinkcoding.com/class/web/PHP/signUp-join/ -->