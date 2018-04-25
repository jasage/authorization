<?php
$checkSum=$_GET['checkSum'];
$email=$_GET['email'];
include_once 'config/db.php';

$result=mysqli_query($db,"SELECT * FROM users WHERE email='{$email}'");
$row=mysqli_fetch_assoc($result);

$name=$row['name'];
$date=$row['date'];

$time=time();

if($date!=$time){
    die("Просрочена активация аккаунта !");
}

$email_name=explode("@",$email);
$new_checkSum=base64_encode($name.$email_name[0]);

if($checkSum!=$new_checkSum) {
    die("Ошибка ключа !");
}else{
    unset($result);
    $result=mysqli_query($db,"UPDATE users SET status='1' WHERE email='{$email}'");
    if($result){
        echo("Ваш аккаунт активирован ! Через 10 секунд страница перейдет в главном сайте.");
        sleep(10);
        header('Location: index.php');
    }
}
?>