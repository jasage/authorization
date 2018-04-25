<?php 
/*Resgistry*/
function registryUser($name,$email,$pass,$phone,$address){
	global $db;
	$name = htmlspecialchars(mysqli_real_escape_string($db,$name));
	$email = htmlspecialchars(mysqli_real_escape_string($db,$email));
	$pass = htmlspecialchars(mysqli_real_escape_string($db,$pass));
	$phone = htmlspecialchars(mysqli_real_escape_string($db,$phone));
	$address = htmlspecialchars(mysqli_real_escape_string($db,$address));

	$email_name = explode("@",$email);
	$checkSum = base64_encode($name.$email_name[0]);
	$date = time();
	/*To Activate "Send Email" function change "false" to "true" or just delete "false"*/
	$status= sendEmailActivation(false) ? 0 : 1; 
	$sql = "INSERT INTO users (name,email,password,phone_number,address,checksum,date_registry,status) VALUES ('{$name}','{$email}','{$pass}','{$phone}','{$address}','{$checkSum}','{$date}','{$status}')";
	$result = mysqli_query($db,$sql);	
	if($result){
		return true;
	}else{
		return false;
	}
}

/*Update*/
function updateUser($id,$name,$email,$pass,$phone,$address){
	global $db;
	$name = htmlspecialchars(mysqli_real_escape_string($db,$name));
	$email = htmlspecialchars(mysqli_real_escape_string($db,$email));
	$pass = htmlspecialchars(mysqli_real_escape_string($db,$pass));
	$phone = htmlspecialchars(mysqli_real_escape_string($db,$phone));
	$address = htmlspecialchars(mysqli_real_escape_string($db,$address));

	$sql = "UPDATE users SET ";
	if($pass!=''){
		$sql.= "password = '{$pass}' WHERE id='{$id}'";
	}
	if($email!=''){
		$sql.= "name = '{$name}',
				email = '{$email}',
				phone_number = '{$phone}',
				address = '{$address}' 
				WHERE id='{$id}'";
	}
	$result = mysqli_query($db,$sql);	
	if($result){
		return true;
	}else{
		return false;
	}
}

/*Functions*/

/*SEND ACTIVATION TO EMAIL, need to edit! */
function sendEmailActivation($confirm=true){
	if($confirm){
		$message="Ссылка для активации доступен до конца дня :<a href='/acceptic/activate.php?checkSum=".$checkSum."&email=".$email."'>Перейти</a>;";
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= 'From: <admin@example.com>' . "\r\n";
		mail($email,"Активация аккаунта",$message,$headers);
	}else{
		return $confirm;
	}
}

function checkEmail($email){
	global $db;
	$res=null;
	
	if(!$email){
		$res['success'] = 0;
		$res['message'] = 'Enter your email.';
	}else{
		$email = mysqli_real_escape_string($db,$email);
		if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
			$res['success'] = 0;
			$res['message'] = 'This email is not valid.';
		}
	}

	return $res;
}

function checkRegistredEmail($email){
	global $db;
	$res=null;
	$sql = "SELECT id FROM users WHERE email = '{$email}'";
	$result = mysqli_query($db,$sql);
	if(!empty(mysqli_fetch_assoc($result))){
		$res['success'] = 0;
		$res['message'] = 'This email is already registred.';
	}
	return $res;
}

function checkPass($pass,$passconfirm){
	$res=null;
	if($pass !== $passconfirm){
		$res['success'] = 0;
		$res['message'] = 'Password is not match.';
	}
	if(!$passconfirm){
		$res['success'] = 0;
		$res['message'] = 'Confirm password.';
	}
	if(!$pass){
		$res['success'] = 0;
		$res['message'] = 'Enter your password.';
	}
	return $res;
}
/*********************************/
/*Login*/
function loginUser($email,$password){
	global $db;
	$email = htmlspecialchars(mysqli_real_escape_string($db,$email));
	$password = md5($password);

	$sql = "SELECT * FROM users WHERE email='{$email}'  AND password='{$password}' AND status='1'";
	$result = mysqli_query($db,$sql);
	if($result){
		return mysqli_fetch_assoc($result);
	}else{
		return false;
	}
}
/*********************************/
?>