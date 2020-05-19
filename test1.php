<!DOCTYPE html>
<?php


// 檢查是否已經作答過
//include_once('./secondCheck.php');


// 引入 量表問題
include_once('./data/questionsArray.php');   

/**
	亂數產生方式我修改了
	亂輸方式百百種，差異在效能
	
	我原本想用這個 array_rand() ，但是不吃亂數種子
	https://www.w3schools.com/php/func_array_rand.asp
	
	這個地方用法出錯  mt_rand(); 
	https://www.w3school.com.cn/php/func_math_mt_rand.asp
	array 是從  0 開始編號
**/
//設定亂數種子
mt_srand((double)microtime()*1000000);  
//取得問券題目總數
$arraySize = count($questionsArray);
//產生亂數陣列 0~29
/*$randArray = range(0, $arraySize-1); 	
for ($i = 0; $i < $arraySize; $i++) {		
	//取得範圍為0~29亂數		
	$randVal = mt_rand(0,$arraySize-1); 		
	//交換
	$tempVal = $randArray[$i];
	$randArray[$i] = $randArray[$randVal];
	$randArray[$randVal] = $tempVal;
}
*/
?>


<html>
    <head>
		<meta charset="utf-8">
		<link rel="shortcut icon" href="./favicon.ico" />
        <title>測驗一</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
        <link rel="stylesheet" href="css/questions.css?<?=time();?>">  	    
		<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script>			
			window.onload = function () {
				$("td").click(function () {
				   $(this).find('input:radio').attr('checked', true);
				});
			}
		</script>
		<script>
			var check1=11;
			var check2=21;
			var check3=31;
			var check4=41;
			var check5=51;
		</script>
	<script src="./libs/select.js"></script>
    </head>
    <body style="background-image:url('./img/test1background.png');background-repeat: no-repeat;background-size: 100% 136%;">
			<div style="height:10%;"></div>
		
			<div >

				<form class="form-div" action="test1Answer.php" method="POST" >
					<br>
			
			  <?php
				  // 執行產生題目，注意接收端對應 POST name
				  for($i= 0;$i<5;$i++)
				  {
					$questionsName = "n".($i+1);				
				
					echo "<div class='questions-text'>".($i+1)."、".$questionsArray[$i]."</div>";
					echo "<br>";
					echo "<table class='test-table'>";
					echo "<tr>";
					
					echo "<td align='center' onclick='ansimg(".($i+1)."1)'><img id='".($i+1)."1' class='img-responsive' src='./img/no.png' ></td>";
					echo "<td align='center' onclick='ansimg(".($i+1)."2)'><img id='".($i+1)."2' class='img-responsive' src='./img/no.png' ></td>";
					echo "<td align='center' onclick='ansimg(".($i+1)."3)'><img id='".($i+1)."3' class='img-responsive' src='./img/no.png' ></td>";
					echo "<td align='center' onclick='ansimg(".($i+1)."4)'><img id='".($i+1)."4' class='img-responsive' src='./img/no.png' ></td>";
					echo "<td align='center' onclick='ansimg(".($i+1)."5)'><img id='".($i+1)."5' class='img-responsive' src='./img/no.png' ></td>";
				
					echo "</tr>";
					echo "<tr>";
					echo "<td align='center' valign='top' ><font size='1px' color='#CDEFF7'>非常不同意</font></td>";
					echo "<td align='center' valign='top' ><font size='1px' color='#CDEFF7'>不同意</font></td>";
					echo "<td align='center' valign='top' ><font size='1px' color='#CDEFF7'>普通</font></td>";
					echo "<td align='center' valign='top' ><font size='1px' color='#CDEFF7'>同意</font></td>";
					echo "<td align='center' valign='top' ><font size='1px' color='#CDEFF7'>非常同意</font></td>";
					
					echo "</table>";
					
					echo "<input type=hidden name=".$questionsName." id=".($i+1)." value=''> ";
					if($i!=4){
					echo "<br>";
					}
				  }
				
				?>				
				
				<br>
				<div class="col-md-4 text-center" style="color:#595757;font-weight:bold;">
					1/6
				</div>
				<div class="col-md-4 text-center">
					<button type="submit" class="nextbtn"></button>
				</div>
				
				</div>

				</form>
            
        </div>
        

      
    </body>
</html>