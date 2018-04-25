<?php 
include_once 'models/UserModel.php';
/*Registry*/
function registryAction(){
	$name = trim(isset($_REQUEST['name']) ? $_REQUEST['name'] : null);

	$email = trim(isset($_REQUEST['email']) ? $_REQUEST['email'] : null);

	$pass = isset($_REQUEST['password']) ? $_REQUEST['password'] : null;
	$passconfirm = isset($_REQUEST['confirm_pass']) ? $_REQUEST['confirm_pass'] : null;

	$phone = isset($_REQUEST['phone']) ? $_REQUEST['phone'] : null;

	$address = isset($_REQUEST['address']) ? $_REQUEST['address'] : null;

	$rsData = null;
	$rsData = checkEmail($email);
	$rsData = checkRegistredEmail($email);
	$rsData = checkPass($pass,$passconfirm); 
	if(!$rsData){
		$passMD5 = md5($pass);
		$rsData['success']=registryUser($name,$email,$passMD5,$phone,$address); 
	}
	echo json_encode($rsData);
}
/*********************************/

/*Login*/
function loginAction(){
	$email = trim(isset($_REQUEST['email']) ? $_REQUEST['email'] : null);
	$password= trim(isset($_REQUEST['password']) ? $_REQUEST['password'] : null);
	$userData = loginUser($email,$password);
	if($userData){
		$_SESSION['users'] = $userData;
		header('Location: index.php');
	}else{
		$_SESSION['message'] ='Email or password is incorrect.';
		header('Location: index.php');	
	}
}
/**********************************/

/*Logout*/
function logoutAction(){
	unset($_SESSION['users']);
	unset($_SESSION['message']);
	unset($_SESSION['content']);
	header('Location: index.php');
}
/**********************************/

/*Home Site*/
function homeAction(){
	$_SESSION['content']='home';
	header('Location: index.php');
}
/**********************************/

/*Profile Site*/
function profileAction(){
	$_SESSION['content']='profile';
	header('Location: index.php');
}
/**********************************/

/*Change Password Site*/
function changePassAction(){
	$_SESSION['content']='changePass';
	header('Location: index.php');
}
/**********************************/

/*Update Profile*/
function updateAction(){
	$id = $_SESSION['users']['id'];

	$name = trim(isset($_REQUEST['name']) ? $_REQUEST['name'] : null);

	$email = trim(isset($_REQUEST['email']) ? $_REQUEST['email'] : null);

	$pass = isset($_REQUEST['password']) ? $_REQUEST['password'] : null;
	$passconfirm = isset($_REQUEST['confirm_pass']) ? $_REQUEST['confirm_pass'] : null;

	$phone = isset($_REQUEST['phone']) ? $_REQUEST['phone'] : null;

	$address = isset($_REQUEST['address']) ? $_REQUEST['address'] : null;

	$rsData = null;
	if(isset($email)){
		$rsData = checkEmail($email);
		if(!$rsData){
			$rsData['success']=updateUser($id,$name,$email,null,$phone,$address);
			$_SESSION['users']['name']=$name;
			$_SESSION['users']['email']=$email;
			$_SESSION['users']['phone_number']=$phone;
			$_SESSION['users']['address']=$address;
		}
	}
	if(isset($pass)){
		$rsData = checkPass($pass,$passconfirm);
		if(!$rsData){
			$passMD5=md5($pass);
			$rsData['success']=updateUser($id,null,null,$passMD5,null,null); 
		}
	}
	echo json_encode($rsData);
}
/*********************************/
?>