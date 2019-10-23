<!DOCTYPE html>
<html>
<head>
	<title>search product by cat</title>
	<style><?php include 'css/ASM2style.css' ?>
		body{
			background-image: url("ASM2_wallpaper.jpg");
		}
	</style>
</head>
<body>
	<?php
	require_once("./ASM2_db.php");
	require_once('./ASM2_headermain.php') ;
	require_once('./ASM2_category.php') ;
	?>
	<div class="contentasm" >
		<?php 
		//this is the left menu
		require_once("./ASM2_sidenav.php");
		?>		
		<div class="row" style="background-color:#aaa;">
		<?php 
		//get CatId which was sent from client by GET Method
		if(isset($_GET['CatId']))
		{
			$catid = $_GET['CatId'];
			$sql = "Select * from product where CatId=" . $catid;
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
			
		} 
		else
		{
			echo "CatId not found!";
		}		
		?>
		</div>


</body>
</html>