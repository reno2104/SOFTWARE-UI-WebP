<?php
	include "db.php";
	include "password.php";

	$userid = $_POST['userId'];
	$username = $_POST['userName'];
	$userpw = password_hash($_POST['pwd1)'], PASSWORD_DEFAULT);
	$email = $_POST['emailId'].'@'.$_POST['emailAddr'];
	$addMiddle = $_POST['addMiddle'];
	$adress = $_POST['addAddr'];
	$number = $_POST['cellPhone'];

	// $adress = $_POST['addAddr'];
	// $number = $_POST['cellPhone'];


$sql = mq("INSERT INTO test1(id,nm,pw1,em,addr2,addr3,pass) values('{$userid}','{$username}','{$userpw}','{$email}','{$addMiddle}','{$adress}','{$number}')") or die ("Can't access DB");


echo "id : $userid <br>";
echo "name : $username <br>";
echo "pw : $useuserpwrid <br>";
echo "email : $email <br>";
echo "adress2 : $addMiddle <br>";
echo "adress3 : $adress <br>";
echo "number : $number <br>";
echo "등록 성공";


?>

<!-- https://kldp.org/node/80549 -->
<!-- https://www.pinkcoding.com/class/web/PHP/signUp-join/ -->