<!DOCTYPE html>
<html>
<head>
	<title>Add product</title>
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

	</div>
		<?php 
		//this is the side navigation menu
		require_once("./ASM2_sidenav.php");
		?>		

		<div class="third">
			<form action="" method="Post" class="letter">
				Product Id:
				<input type="text" name="Id"> <br>
				Product Name:
				<input type="text" name="Name"> <br>
				Image:
				<input type="text" name="Image"> <br>
				Price:
				<input type="text" name="Price"> <br>
				Category:
				<select name="CatId">
				<?php 
				$sql = "Select * From category";
				$cats = query($sql);
				for($i=0; $i<count($cats); $i++)
				{
					?>
					<option value="<?=$cats[$i][0]?>"><?=$cats[$i][1]?></option>
					<?php
				}
				?>
				</select><br>
				<input type="submit" value="Add">
				<input type="reset" value="Reset">
			</form>
			<?php 
			if(isset($_POST['Id']) && isset($_POST['Name']) && isset($_POST['Image']) && isset($_POST['Price']) && isset($_POST['CatId']))
			{
				$id = $_POST['Id'];
				$name = $_POST['Name'];
				$img = $_POST['Image'];
				$pr = $_POST['Price'];
				$cid = $_POST['CatId'];

				$sql = "Insert Into product values ('" . $id . "', '"
					. $name . "', '" . $img . "', " . $pr . ", " 
					. $cid . ")";
				
				$rs = execsql($sql);
				if($rs != null)
					echo "Product has save successfully!";
				else
					echo "Try again";
			}

			?>
			<a href="./ASM2_admin.php" class="letter">Back to Product Admin</a>
		</div>

</body>
</html>