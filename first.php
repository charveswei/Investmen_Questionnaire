<?php

// 檢查是否已經作答過
//include_once('./firstCheck.php');


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>特質檢測</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
		<link rel="stylesheet" href="css/questions.css?<?=time();?>">  
		<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body class="profile-background">
        <div id="header" class="header-profile">
			<br>
			<br>
			<br>
			<br>

			<br>
            <div class="header-text center-vertical">特質檢測</div>
		</div>
		<div style="height:15%"></div>
		<div>
			
				<form action="firstAnswer.php" method="POST">
					<div style="left:10%;right:15%;margin-top:10%;margin-left:5% ;border:0px none;">
					<ol>
						
						<div class="profile-title"><h4>年齡</h4></div>
						<label class='radio-inline radio-color'><input type="radio" name="age" value="10" required>20歲以下</label>
						<label class='radio-inline radio-color'><input type="radio" name="age" value="20" required>21~30歲</label>
						<label class='radio-inline radio-color'><input type="radio" name="age" value="30" required>31~40歲</label><br>
						<label class='radio-inline radio-color'><input type="radio" name="age" value="40" required>41~50歲&nbsp</label>
						<label class='radio-inline radio-color'><input type="radio" name="age" value="50" required>51~60歲</label>
						<br>
						<div class="profile-title"><h4>投資年資</h4></div>
						<label class='radio-inline radio-color'><input type="radio" name="seniority" value="0" required>1年以下&nbsp&nbsp&nbsp</label>
						<label class='radio-inline radio-color'><input type="radio" name="seniority" value="3" required>1~3年&nbsp&nbsp&nbsp&nbsp</label>
						<label class='radio-inline radio-color'><input type="radio" name="seniority" value="6" required>4~6年</label><br>
						<label class='radio-inline radio-color'><input type="radio" name="seniority" value="10" required>7~10年&nbsp&nbsp&nbsp&nbsp</label>
						<label class='radio-inline radio-color'><input type="radio" name="seniority" value="11" required>10年以上</label>
					    <br>
						<div class="profile-title"><h4>商品</h4></div>
						<label class='radio-color'><input type="checkbox" name="product" value="no," >沒有經驗&nbsp&nbsp&nbsp&nbsp&nbsp</label>
						<label class=' radio-color'><input type="checkbox" name="product" value="fixed_deposit," >定存&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
						<label class=' radio-color'><input type="checkbox" name="product" value="fund," >基金</label><br>
						<label class=' radio-color'><input type="checkbox" name="product" value="debt," >債劵&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
						<label class=' radio-color'><input type="checkbox" name="product" value="foreign_exchange," >外匯&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
						<label class=' radio-color'><input type="checkbox" name="product" value="futures,">期貨</label><br>
						<label class=' radio-color'><input type="checkbox" name="product" value="stock," >股票&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
						<label class=' radio-color'><input type="checkbox" name="product" value="other," >其他</label>
						<br>
						<div class="profile-title"><h4>記帳習慣</h4></div>
						<label class='radio-inline radio-color'><input type="radio" name="habit" value="never" required>沒有習慣&nbsp&nbsp</label>
						<label class='radio-inline radio-color'><input type="radio" name="habit" value="sometimes" required>偶爾紀錄</label>
						<label class='radio-inline radio-color'><input type="radio" name="habit" value="always" required>規律紀錄</label><br>
						</ol>
					</div>
					
					
					<div class="col-md-4 text-right" style="height:15% ;width:100%;position: absolute;">
					<div style="position: absolute;bottom:0px;right:0%;">
						<button class="submitbtn" type="submit"></button>
					</div>
					</div>
					<br>
					<br>

				</form>
			
        </div>
        
        
    </body>
</html>
