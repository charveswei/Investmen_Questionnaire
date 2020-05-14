
	
	<div class="investment-content">
	
	<div class="center-horizontal ans-title">最適合你的投資星球是</div>

		<div class="center-horizontal ans-type-title"> 
			<br>
			<br>
		
			<?=$targetType['title']?>
		</div>
		<br>
		<div class="ans-type-text">
			<?=$targetType['content']?>
		</div>
		
	
	<br>
	<br>



	<div>
		<p class=" ans-title"> 適合你的投資策略</p>
	</div>
	<div style="text-align:center;background-image:url('./img/investmentlinkbackground.png');background-size:cover;background-repeat: no-repeat;background-position:center;margin-left:10%;margin-right:10%;">
	<?php 
	$num = 0;
	foreach ($targetType['link'] as $val):
	?>
		&nbsp;&nbsp;&nbsp;
			<a href="<?=$ansConentLinkArray[$val]?>" target="_blank" title="<?=$val?>"><?=$val?></a>
		
		&nbsp;&nbsp;&nbsp;
		<?php 
		
			if ($num<2 && $val !="選擇權")
			{
				
				echo "<img src='./img/investmentlink.png' height='23px'>";
			}
		?>
	<?php
	$num++;
	endforeach;
	?>
	</div>
</div>
