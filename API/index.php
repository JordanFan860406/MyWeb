<?php
require 'vendor/autoload.php';

$app = new \Slim\App;
$app->post('/checkpwd', function ($request, $response) {
	require_once("checkpwd.php");
	$account=$_POST['account'];
	$password=$_POST['password'];
	$check=memberCheck($account,$password);
	return $check;
});
$app->post('/register', function ( $request,  $response) {
    require_once("register.php");
	$account=$_POST["account"];
	$password=$_POST["password"];
	$re_password=$_POST["re_password"];
	$name=$_POST["name"];
	$personID=$_POST["personID"];
	$email=$_POST["email"];
	$memberRegister=register($account,$password,$re_password,$name,$personID,$email);
	return $memberRegister;
});
$app->get('/logout', function ( $request, $response) {
	require_once("checkpwd.php");
	$logout=logout();
});
$app->post('/insertToken', function ( $request,  $response) {
    require_once("fcmToken.php");
	$account=$_POST["account"];
	$token=$_POST["token"];
	$getToken=tokenInsert($account, $token);
	return $getToken;
});
$app->post('/notification', function ( $request,  $response) {
  require_once("notification.php");
	$title=$_POST["title"];
	$body=$_POST["body"];
	$token=$_POST["token"];
	$push=sendMessage($title,$body,$token);
	return $push;
});
$app->post('/reservationInsert', function ( $request,  $response) {
  require_once("reservationInsert.php");
	$account=$_POST["account"];
	$seatID=$_POST["seatID"];
	$date=$_POST["date"];
	$beginTime=$_POST["beginTime"];
	$endTime=$_POST["endTime"];
	$getSeat=seatInsert($account, $seatID, $date, $beginTime, $endTime);
	return $getSeat;
});
$app->get('/getIP', function($request, $response){
	require_once("getIP.php");
	$getIP=get_client_ip();
	return $getIP;
});
$app->post('/tokenCheck', function($request, $response){
	require_once("keyTest.php");
	$inputToken = $_POST['token'];
	$inputStuID = $_POST['account'];
	$checkToken = decodeToken($inputToken, $inputStuID);
	return $getIP;
});
$app->post('/appMessage', function ( $request,  $response) {
  require_once("appNotification.php");
	$account=$_POST["account"];
	$seatID=$_POST["seatID"];
	$date=$_POST["date"];
	$beginTime=$_POST["beginTime"];
	$endTime=$_POST["endTime"];
	$arr=$_POST["arr"];
	$sendApp=sendNotification($account, $seatID, $date, $beginTime, $endTime, $arr);
	return $sendApp;
});
$app->run();
?>
