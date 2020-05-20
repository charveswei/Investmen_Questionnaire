<!DOCTYPE html>
<?php 
include_once('./config.php');

// 引入 資料庫連線 $conn
include_once('./models/db.php');
// 引入 量表問題
include_once('./data/questionsArray.php');  
// 引入 結果資料
include_once('./data/answerArray.php');  

// 引入 抓取資料統計
include_once('./controller/getUserAnswer.php');

$Content = "";

// 顯示內容陣列
$showContentArray = [];
// 抓出最大值
$maxsumans=max($conservativesumAns,$steadysumAns,$growthsumAns,$valuesumAns,$activesumAns,$technologysumAns);

// 抓出需要顯示的目標
// 保守型
if ($maxsumans==$conservativesumAns){
	array_push($showContentArray, "conservative");
	$Content="保守型";
	$Compasstitle="保守";
}
// 穩健型
else if ($maxsumans==$steadysumAns){
	array_push($showContentArray, "steady");
	$Content="穩健型";
	$Compasstitle="穩健";
}
// 成長型
else if ($maxsumans==$growthsumAns){
	array_push($showContentArray, "growth");
	$Content="成長型";
	$Compasstitle="成長";
}
// 價值型
else if ($maxsumans==$valuesumAns){
	array_push($showContentArray, "value");
	$Content="價值型";
	$Compasstitle="價值";
}
// 積極型
else if ($maxsumans==$activesumAns){
	array_push($showContentArray, "active");
	$Content="積極型";
	$Compasstitle="積極";
}
// 技術型
else if ($maxsumans==$technologysumAns){
	array_push($showContentArray, "technology");
	$Content="技術型";
	$Compasstitle="技術";
}



?>


<html>
    <head>
        <meta charset="utf-8">
        <title>結果</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
		<link rel="shortcut icon" href="./favicon.ico" />
		<link rel="stylesheet" href="css/questions.css?<?php echo time()?>">  	    
		<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
		<script src="./libs/iconselect.js?<?php echo time()?>"></script>
		
    </head>
    <body class="answer-background" id="background"  style="background-image:url('./img/answerbackground.png'); background-size: 100% 100%">
    
    <script>
			window.onload = function () {
				var ctx = document.getElementById('anspie').getContext('2d');
				var radarChart = new Chart(ctx,{
					type: 'radar',
					data : {
						labels: ["保守型", "穩健型", "成長型", "價值型", "積極型", "技術型"],
						datasets:[{
							backgroundColor :'rgba(185,225,237,0.55)',
							borderColor :'#468DCC',
							label:"投資類型",
							data:[<?php echo $conservativesumAns . "," . $steadysumAns . "," . $growthsumAns . "," . $valuesumAns . "," . $activesumAns . "," . $technologysumAns; ?>],
						}],
						},
						options :{
							legend: {
								labels: {
									fontColor: '#40210F',
									
								}
							}
							,
							layout: {
								padding: {
									left: 0,
									right: 0,
									top: 0,
									bottom: 20
								}
							}
							,
							point: {
								backgroundColor:'#468DCC',
								borderColor:'#468DCC',
						
							}
							,
							scale: {
								angleLines:{
									color :'#40210F',
								},
								gridLines:{
									color :'#40210F',
								},
								pointLabels:{
									fontColor : '#40210F' ,
									fontSize: 18,
								},
								ticks: {
									display:false,
									min:0,
									max:25,
									stepSize: 5
									
								}
								
							}
						}
				});
			}
		</script>
	</script>
	
	<div style="heigh=100%;display:;padding-top:50%" id="rader" >
				
										
					<div style=" margin-left:auto;margin-right:auto ;opacity:40%;background-image:url('./img/radarbackground.png');background-size:contain;background-repeat: no-repeat;width:75%;height:75%">
					<br>
					<div style="background-image:url('./img/radarname.png');background-position: center;background-repeat: no-repeat;background-size: cover;height:31px;text-align:center;font-size:20px;color:white;margin-left:10%;margin-right:10%;"><?php echo $Content?>投資人格</div>
						 <div style ="position: relative;width:250px;height:250px;margin:auto">
						 
						<canvas id="anspie"  ></canvas>
						</div>
					</div>		
    </div>
	
	<div style="heigh=120%;display:none;" id="investment">
	<br>
	<?php
					$count = 0 ;
					$size = count($showContentArray);
					foreach( $showContentArray as $val ){
						// 引入資料
						$targetPeople = $ansConentPeopleArray[$val];
						$targetType = $ansConentTypeArray[$val];
						$targetAdvertisement = $ansAdvertisementArray[$val];
						// 引入 模板
						include('./investment.php');

						// 處理最後一項的時候不加入分隔線
						$count++;
						if ( $count != $size ){
							echo "<hr>";
						};


					}
				?>
			
	</div>

	<div style="heigh=100%;display:none;" id='celebrity'>
	<br><br>
		<?php 
		// 特殊判斷是否存在投資名人
		if(!empty($targetPeople)):
		?>
		<div>
			<div>
				<p class="ans-title"> 你最像的投資名人是....</p>
			</div>
			<br>
			<div class="ans-img-frame img-responsive center-block">
				<img class="ans-img" src="<?=$targetPeople['imgPath']?>">
			</div>
		
			<div class="ans-people-text" >
			<?=$targetPeople['content'];?>
			</div>	
		</div>	
		
		<?php
		endif;
		?>
	</div>
	
	<div style="heigh=120%;display:none;" id='learn'>
	<br>
	<br>
	<div>
				<p class="ans-title"><?php echo $Compasstitle; ?>星的投資指南</p>
			</div>
	<?php 
			// 設定位置 css class
			$className = "ad-";
			$classCount = 1;
			foreach( $targetAdvertisement as $val ):
				$thisClassName = $className.$classCount ;
				$classCount++;
				$thisData= $ansAdvertisementContentArray[$val];
		?>
			
			<div class="<?=$thisClassName?>">
				 <a href="<?=$thisData['link']?>" target="_blank">
					<div class= "ad-border">
					<div class="ad-img">
						<img class="ad-img" src="<?=$thisData['imgPath']?>" >
					</div>
					<div class="ad-title">
						<?=$thisData['title']?>
					</div>
					<div class="ad-content">
						<?=$thisData['content']?>
					</div>
			</div>
				 </a>
				 
			</div>
		<?php	
			endforeach;
		?>		
</div>
<br>


	<div>
    <table  style="width:100%;margin-top:5%;position:fixed;bottom:0">
        <tr>
            <td align="center" onclick="icon(1)"><img id="radericon" src="./img/icon/icon-01.png" alt="雷達圖"  width="95%" ></a></td>
            <td align="center" onclick="icon(2)"><img id="investmenticon" src="./img/icon/icon-06.png" alt="投資學院" width="95%" ></a></td>
            <td align="center" onclick="icon(3)"><img id="celebrityicon" src="./img/icon/icon-07.png" alt="名人代表"  width="95%"></a></td>
            <td align="center" onclick="icon(4)"><img id="learnicon" src="./img/icon/icon-08.png" alt="推薦學習管道"   width="95%"></a></td>
	</table>
		</div>
        </body>
</html>