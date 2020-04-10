<?php
include_once('./config.php');

// 啟動 session 
session_start();

// 引入  資料庫連線 $conn
include_once('./models/db.php');
// 引入  SQL insertSinsertString($tableName,$data)
include_once('./libs/insertString.php');   

// 檢查資料是否完全
if ( 
	"" == trim($_SESSION['userId']) ||

	"" == trim($_POST['age']) ||

	"" == trim($_POST['product']) ||
	"" == trim($_POST['seniority']) ||
	"" == trim($_POST['habit']) 

   )
{
	// 當發生遺漏資料時，不儲存，提示錯誤後返回上頁
	include_once('./lostData.html');
	return ;
}

// 檢查資料是否完全
if ( "" == trim($_SESSION['userId']) ){
	header("Location:" . $CONFIG['HOST']);
	return ;
}

$lineUUID = $_SESSION['userId'];


// 寫入資料庫
try{
	// 個人資訊
	$saveData = [
		'lineUUID' => $lineUUID,
		
		'age' => $_POST["age"],

		'product' => $_POST["product"],
		'seniority' => $_POST["seniority"],
		'habit' => $_POST["habit"],
	
	];
	
	$sql = insertString('userinfo',$saveData);
	$conn->exec($sql);

}catch(PDOException $e){
	// echo $sql . "<br>" . $e -> getMessage();
	// 發生資料庫寫入失敗進入 404 
	include_once('./404.html');   
	return ;
}
   
// 成功轉址去第二頁面
// 特殊用法，使用前端轉址
// 後端轉址 php 可以使用這個方法   
//header("Location: http://欲轉向的網址");
include_once('./gotest1.html');   
return ;

       


?>