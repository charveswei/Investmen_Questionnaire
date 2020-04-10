<?php 
	// 特殊判斷是否存在投資名人
	if(!empty($targetPeople)):
?>
<div>
	<div>
		<p class="ans-title"> 你最像的投資名人是....</p>
	</div>
	<div class="ans-img-frame img-responsive center-block">
		<img class="ans-img" src="<?=$targetPeople['imgPath']?>">
	</div>
	<br>
	<div class="ans-people-text" >
	<?=$targetPeople['content'];?>
	</div>	
</div>	
<br>
<?php
	endif;
?>

<div>
	<div>
		<p class="ans-title"> 你的投資天賦為....</p>
	</div>
	<div class="center-horizontal ans-type-title"> 
		<?=$targetType['title']?>
	</div>
	<div class="ans-type-text">
		<?=$targetType['content']?>
	</div>
	<br>
</div>
<div>
	<div>
		<p class="ans-title"> 適合你的投資組合</p>
	</div>
	<div>
	<?php 
	foreach ($targetType['link'] as $val):
	?>
		&nbsp;&nbsp;&nbsp;
		<button>
			<a href="<?=$ansConentLinkArray[$val]?>" target="_blank" title="<?=$val?>"><?=$val?></a>
		</button>
		&nbsp;&nbsp;&nbsp;
	<?php
	endforeach;
	?>
	</div>
</div>
	<br>


<?php 
	// 特殊判斷是否存在推薦
	if(!empty($targetAdvertisement)):
?>
<div>
	<div>
		<p class="ans-title"> 【你的投資地圖】</p>
	</div>
	<div class="center-horizontal ans-type-title"> 
		接下來可以去...
	</div>
	<div class="ad-background">
		<img src="./img/recommend/background.png">
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
			
					<div class="ad-img">
						<img class="ad-img" src="<?=$thisData['imgPath']?>" >
					</div>
					<div class="ad-title">
						<?=$thisData['title']?>
					</div>
					<div class="ad-content">
						<?=$thisData['content']?>
					</div>
				 </a>
			</div>
		<?php	
			endforeach;
		?>		
	</div>
</div>	
<br>

<?php
	endif;
?>
	