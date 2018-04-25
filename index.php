<?php
session_start();
include_once 'config/config.php';
include_once 'config/db.php';
include_once 'library/functions.php';
if(isset($_SESSION['users'])){
	$smarty->assign('users',$_SESSION['users']);
	if(isset($_SESSION['content'])){
		$template=$_SESSION['content'];
	}else{
		$template="home";
	}
}else{
	$template="login";
}
if(isset($_SESSION['message'])){
	$smarty->assign('message',$_SESSION['message']);
	unset($_SESSION['message']);
}
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';
$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';
loadPage($smarty,$controllerName,$actionName,$template);
?>