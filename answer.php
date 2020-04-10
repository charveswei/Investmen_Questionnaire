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



// 顯示內容陣列
$showContentArray = [];
// 抓出最大值
$maxsumans=max($conservativesumAns,$steadysumAns,$growthsumAns,$valuesumAns,$activesumAns,$technologysumAns);

// 抓出需要顯示的目標
// 保守型
if ($maxsumans==$conservativesumAns){
	array_push($showContentArray, "conservative");
}
// 穩健型
if ($maxsumans==$steadysumAns){
	array_push($showContentArray, "steady");
}
// 成長型
if ($maxsumans==$growthsumAns){
	array_push($showContentArray, "growth");
}
// 價值型
if ($maxsumans==$valuesumAns){
	array_push($showContentArray, "value");
}
// 積極型
if ($maxsumans==$activesumAns){
	array_push($showContentArray, "active");
}
// 技術型
if ($maxsumans==$technologysumAns){
	array_push($showContentArray, "technology");
}


?>


<html>
    <head>
        <meta charset="utf-8">
        <title>投資天賦測驗</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
		<link rel="stylesheet" href="css/questions.css?<?php echo time()?>">  	    
		<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
		<script>
			window.onload = function () {
				var ctx = document.getElementById('anspie').getContext('2d');
				var radarChart = new Chart(ctx,{
					type: 'radar',
					data : {
						labels: ["保守型", "穩健型", "成長型", "價值型", "積極型", "技術型"],
						datasets:[{
							backgroundColor :'rgba(0, 0, 0, 0.5)',
							borderColor :'rgba(0, 0, 0, 0.5)',
							label:"投資類型",
							data:[<?php echo $conservativesumAns . "," . $steadysumAns . "," . $growthsumAns . "," . $valuesumAns . "," . $activesumAns . "," . $technologysumAns; ?>],
						}],
						},
						options :{
							legend: {
								labels: {
									fontColor: 'black'
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
							scale: {
								angleLines:{
									color :'rgba(0, 0, 0, 1)',
								},
								gridLines:{
									color :'rgba(0, 0, 0, 1)',
								},
								pointLabels:{
									fontColor : '#000' ,
								},
								ticks: {
									backdropColor:'rgba(0, 0, 0, 0)',
									min:0,
									max:25,
									stepSize: 5
								}
							}
						}
				});
			}
		</script>

    </head>
    <body>
        <div id="header" class="header-background">
            <div class="header-text center-vertical">投資天賦測驗</div>
        </div>
		<div class="content-background-repeat">
			<div class="content-background-repeat-alpha">
				<div>
					<div>
						<p class="ans-title"> 你的投資天賦為...</p>
					</div>
					<div style="background-color: #ffffff; margin-left:15%;margin-right:15% ;border:2px solid black;">
						 <div style ="max-width: 400px; max-height:400px">
						<canvas id="anspie"></canvas>
						</div>
					</div>				
				</div>
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
						include('./ansTemplate.php');

						// 處理最後一項的時候不加入分隔線
						$count++;
						if ( $count != $size ){
							echo "<hr>";
						};


					}
				?>
				
					
            </div>
        </div>
    </body>
</html>