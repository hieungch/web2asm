<div class="row">
  <div class="content1" >
  <?php 
		$sql = "Select * from product";
		$pros = query($sql);
		for($i=0; $i<count($pros); $i++)
		{
			?>

			<div class="products">
				<div class="name"><?=$pros[$i][1]?></div>
				<div class="image">
					<a href="./ASM2_producdetail.php?pid=<?=$pros[$i][0]?>">
						<img src="<?=$pros[$i][2]?>" alt="" width="100%" height="100%">
					</a>
				</div>
				<div class="price"><?=$pros[$i][3]?></div>
			</div>
			<?php
		}
		?>

  </div>

</div>