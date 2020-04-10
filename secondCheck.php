<?php
include_once('./config.php');
// 啟動 session 
session_start();
// 引入  資料庫連線 $conn
include_once('./models/db.php');

// 判斷資料是否正確傳入
if ( "" == trim($_SESSION['userId']) ) {
	header("Location:" . $CONFIG['HOST']);
	return ;
} 
// 資料到 seesion 內
$lineUUID = $_SESSION["userId"];
// 檢查是否曾經輸入過
try{
	// 抓資料
	$sql="SELECT * FROM answer WHERE lineUUID = '$lineUUID' ORDER BY `createdAt` DESC LIMIT 1";
	$result =$conn ->query($sql);
	$row=$result->fetch(PDO::FETCH_ASSOC);
}catch(PDOException $e){
	// echo $sql . "<br>" . $e -> getMessage();
	include_once('./404.html');   
	return ;
}

// 假如存在資料，前往第二頁
if ( !empty($row) ){
	header("Location:" . $CONFIG['HOST'] ."/answer.php");
	return ;
}