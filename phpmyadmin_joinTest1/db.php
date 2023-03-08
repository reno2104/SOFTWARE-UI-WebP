 <?php
  session_start();
  
  $db = mysqli_connect('localhost','mutalroot','suin!QAZ','test1');
  $db->set_charset("utf8");
  if($db -> connect_errno){
    die('Connect Error : '.$db->connect_error);
  }
  ?>
<?php
$id = $_POST['userid'];
$pw = password_hash($_POST['userpw'], PASSWORD_DEFAULT);
$nm = $_POST['name'];
$age = $_POST['age'];

$query = "INSERT INTO joinDB VALUE('$id','$pw','$nm','$age')";
$db->query($query) or die ("INSERT ERRor : $db->error");

echo "id: $id <br>";
echo "pw: $pw <br>";
echo "nm: $nm <br>";
echo "age: $age <br>";
echo "등록성공";
?>
