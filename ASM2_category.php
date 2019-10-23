<div class="catedit" >

	<ul>
		<li><a href="ASM2_homepage.php">HOME</a></li>
		<?php 
		$sql = "Select * from category";
		$cats = query($sql);
	
		for($i=0; $i<count($cats); $i++)
		{
		?>
		<li><a href="./ASM2_producbycat.php?CatId=<?=$cats[$i][0]?>"><?=$cats[$i][1]?></a></li>
		<?php
		}
		?>
	</ul>
</div>
