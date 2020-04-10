
	
	<div class="investment-content">
	
	<div class="center-horizontal ans-title">最適合你的投資星球是</div>

		<div class="center-horizontal ans-type-title"> 
			<br><br><br>
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
	<div style="text-align:center;">
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
