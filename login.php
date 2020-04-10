<?php
// 啟動 session 
session_start();

// 檢查 POST 資料
if ( "" == trim($_POST['accessToken']) ){
	echo 'false';
	return;
}

// 使用 LINE API 獲得用戶資料
$lineLoginAccessToken = $_POST['accessToken'] ;
$url = "https://api.line.me/v2/profile";
$ch = curl_init();
$header[] = "Cache-Control: no-cache";
$header[] = "Pragma: no-cache";
// 設定驗證 TOKEN
$header[] = "Authorization: Bearer $lineLoginAccessToken";
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// 獲得回傳資料，注意這邊回傳的內容為 JSON 格式的 string 需要 decode 還原才能正常使用
$response = curl_exec($ch);
curl_close($ch);

// 假設資料存在，JSON String to Array
if ( "" != trim($response) ) {
	 $response = json_decode($response,true);
}

if ( "" != trim($response["userId"]) ){
	// 寫入 seesion 
	$_SESSION["userId"] = $response["userId"] ;
	echo 'true';
}else{
	echo 'false';
}
	

return ;