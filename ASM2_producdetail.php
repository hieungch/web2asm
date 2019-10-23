<!DOCTYPE html>
<html>
<head>
	<title>Product detail</title>
	<style>
		<?php include 'css/ASM2style.css' ?>
		body{
			background: url("ASM2_wallpaper.jpg");
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
		//this is the side navigation menu
		require_once("./ASM2_sidenav.php");
		?>		
		<div class="row" style="background-color:#aaa;">
		<?php 
		//get CatId which was sent from client by GET Method
		if(isset($_GET['pid']))
		{
			$pid = $_GET['pid'];
			$sql = "Select * from product where ProductId='" . $pid . "'";
			$pro = query($sql);
		?>
			<div class="products">
				<div class="name"><?=$pro[0][1]?></div>
				<div class="image">
					<a href="">
						<img src="<?=$pro[0][2]?>" alt="" width="100%" height="100%">
					</a>
				</div>
				<div class="price"><?=$pro[0][3]?></div>
			</div>
		<?php
		} 
		else
		{
			echo "pid not found!";
		}
		?>
		</div>
		
	</div>

</body>
</html>