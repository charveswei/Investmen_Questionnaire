<?php
include_once('./config.php');

// 啟動 session 
session_start();
// 取得 seesion 內 userId 資料
$lineUUID = $_SESSION["userId"];
// 檢查資料是否完全
if ( "" == trim($_SESSION['userId']) ){
	// header("Location:" . $CONFIG['HOST']);
	// return ;
}


// 引入資料庫工具
include_once('./models/db.php');
// 引入 量表問題
include_once('./data/questionsArray.php');   


try{
	$sql="SELECT * FROM answer WHERE lineUUID = '$lineUUID' ORDER BY `createdAt` DESC LIMIT 1";
	$result =$conn ->query($sql);
	$row=$result->fetch(PDO::FETCH_ASSOC);
}catch(PDOException $e){
	// echo $sql . "<br>" . $e -> getMessage();
	// 發生資料庫寫入失敗進入 404 
	include_once('./404.html');   
	return ;
}


// 整理資料 
$conservativesumAns = 0 ;
$steadysumAns = 0;
$growthsumAns = 0;
$valuesumAns = 0;
$activesumAns = 0;
$technologysumAns = 0;

// 保守型數量
for($no=1;$no<=5;$no++)
{
    $ans = $row['n'.$no];
    $conservativesumAns += $ans;
}
// 穩健型數量
for($no=6;$no<=10;$no++)
{
    $ans = $row['n'.$no];
    $steadysumAns += $ans;
}
// 成長型數量
for($no=11;$no<=15;$no++)
{
    $ans = $row['n'.$no];
    $growthsumAns += $ans;
}
// 價值型數量
for($no=16;$no<=20;$no++)
{
    $ans = $row['n'.$no];
    $valuesumAns += $ans;
}
// 積極型數量
for($no=21;$no<=25;$no++)
{
    $ans = $row['n'.$no];
    $activesumAns += $ans;
}
// 技術型數量
for($no=26;$no<=30;$no++)
{
    $ans = $row['n'.$no];
    $technologysumAns += $ans;
}



?>