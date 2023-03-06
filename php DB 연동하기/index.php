<?

session_start();

extract($_POST);
extract($_GET);

require_once('include/db_define.php');

$db = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die ("Connect Error");
$status = mysqli_select_db($db, DB_NAME);
mysqli_set_charset($db, 'utf8');
if(!$status) msg("Connect Error");

if(!isset($_SESSION['login_id'])) header("Location: login.php");

if($action != "download") {
	if(!isset($_SESSION['login_id'])) {
		session_destroy();
		$controller = 'pages';
		$action = 'login';
	} 
	else {
		if (isset($controller) && isset($action)) {
			$controller = $controller;
			$action     = $action;
		} 
		else {
			$controller = 'pages';
			$action     = 'home';
		}
	}

	require_once('library/function.php');
	require_once("views/title.php");
	require_once('common/routes.php');

//	require_once ('views/layout.php');
} else {
	// $fname : 다운로드 시킬 파일명을 별도로 전송한다.
	if($fname=="")	$fname = $filename;

	$filepath = "./attach/".$file;
	$filesize = filesize($filepath);
	$path_parts = pathinfo($filepath);
	$filename = $path_parts['basename'];
	$extension = $path_parts['extension'];

	header("Pragma: public");
	header("Expires: 0");
	header("Content-Type: application/octet-stream");
	header("Content-Disposition: attachment; filename=\"$fname\"");
	header("Content-Transfer-Encoding: binary");
	header("Content-Length: $filesize");

	ob_clean();
	flush();
	readfile($filepath);	
}

?>