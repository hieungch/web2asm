<!DOCTYPE html>
<html>
<head>
	<title>ADMIN PAGE</title>
	<style> <?php include 'css/ASM2style.css' ?> 
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

		<?php 
		//this is the side navigation menu
		require_once("./ASM2_sidenav.php");
		?>		

			<?php 
		if (isset($_POST['delete'])) {
		$key = $_POST['deletekey'];

		$sqldelete = execsql("delete from product where productid= '$key'");?>

		<div class="alert alert-success">
			<p>Deleted!</p>
		</div>
		<?php
	}
	 ?>
		<div class="row">
			<table border="1" cellspacing="0" class="letter">
				<tr>
					<th>Id</th>
					<th>Name</th>
					<th>Image</th>
					<th>Price</th>
					<th>CatId</th>
					<th>Checkbox</th>
					<th>Action</th>
				</tr>
		<?php 
		$sql = "Select * from product";
		$pros = query($sql);
		for($i=0; $i<count($pros); $i++)
		{
			?> <form action="" method="post" role = "form">
				<tr>
					<td><?=$pros[$i][0]?></td>
					<td><?=$pros[$i][1]?></td>
					<td><?=$pros[$i][2]?></td>
					<td><?=$pros[$i][3]?></td>
					<td><?=$pros[$i][4]?></td>
					<td>
						<input type="checkbox" name="deletekey" value="<?=$pros[$i][0]?>">
					</td>
					<td>
						<a href="" class="letter" >Edit</a>
						<input type="submit" name="delete" class="btn btn-info">
					</td>
				</tr>
				</form>
			<?php
		}
		?>
			</table>
		<a href="./ASM2_addproduct.php" class="letter" >Add new Product</a>
		</div>
</body>
</html>