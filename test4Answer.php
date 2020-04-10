<?php
include_once('./config.php');

// 啟動 session 
session_start();

// 引入  資料庫連線 $conn
include_once('./models/db.php');
// 引入  SQL insertSinsertString($tableName,$data)
//include_once('./libs/insertString.php');   
// 引入  量表問題
include_once('./data/questionsArray.php');   

// 檢查資料是否完全
if ( "" == trim($_SESSION['userId']) ){
	header("Location:" . $CONFIG['HOST']);
	return ;
}
$lineUUID = $_SESSION['userId'];

$arraySize = count($questionsArray);
for($i= 15;$i<20;$i++)
{
	$questionsName = "n".($i+1);	

	if (  "" == trim($_POST[$questionsName]) ){
		// 當發生遺漏資料時，不儲存，提示錯誤後返回上頁
		include_once('./lostData.html');   
		return ;
	}
}
$ans=[];
$ans=$_SESSION["ans"];

for($i=15;$i<20;$i++)
{
	$questionsName = "n".($i+1);	
	array_push($ans, $_POST[$questionsName])	;

}
$_SESSION["ans"]=$ans;
/*
try{
	// 個人資訊
	$saveData = [
		'lineUUID' => $lineUUID
	];
	//取得問券題目總數
	$arraySize = count($questionsArray);

	//抓出 POST 題目答案
	for($i= 15;$i<20;$i++)
	{
		$questionsName = "n".($i+1);		
		$saveData[$questionsName] = $_POST[$questionsName];
	}
	
	
	$sql = insertString('answer',$saveData);
	$conn->exec($sql);

}catch(PDOException $e){
	// echo $sql . "<br>" . $e -> getMessage();
	// 發生資料庫寫入失敗進入 404 
	include_once('./404.html');   
	return ;
}
*/       
          
// 成功轉址去結果頁
// 特殊用法，使用前端轉址
// 後端轉址 php 可以使用這個方法   
//header("Location: http://欲轉向的網址");
include_once('./gotest5.html');   
return ;

       



?>