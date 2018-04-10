<?php
//echo 'http://'. $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
//print_r($_GET['page']);
include ('layout_function.php');
if (!isset($_SESSION)) {
	session_start();
}

$db = mysqli_connect('localhost', 'root', '')
	or die("MySql connection error, please contact us at help@sensor.it");

	$_SESSION['db'] = $db;

	mysqli_select_db($db, 'adminlte');


function redirect($url){
	print('<script type="text/javascript">window.location.href=\'?page='.$url.'\'</script>');
	die();
}
//print_r($_SESSION); die;
if (!isset($_GET['page'])) { $_GET['page']='dashboard'; }
if (!is_file('contents/pages/'.$_GET['page'].'.php')) {
	header ("HTTP/1.0 404 Not Found");
	include ('err404.html');
	
} else {
	if (!isset($_SESSION['user']['id']) && $_GET['page'] != 'login') { //autenticazione
		redirect('login');
	}

	if (is_file('contents/headers/h_'.$_GET['page'].'.php'))
		include ('contents/headers/h_'.$_GET['page'].'.php');
	
	if ($_GET['page'] != 'login') {
		require ('_header.php');
		require ('_sidebar.php');
		include ('contents/pages/'.$_GET['page'].'.php');
		require ('_footer.php');
	} else
		include ('contents/pages/'.$_GET['page'].'.php');
}
