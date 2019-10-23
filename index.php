<!DOCTYPE html>
<html>
<head>
	<title>ENIVID SHOP HOME</title>
	<style>
		<?php include 'css/ASM2style.css' ?>
		body {
		background-image: url("picture/ASM2_wallpaper.jpg"); 
		}
	</style>
</head>
<body>
	<?php 
	require_once("./ASM2_db.php");
	?>
<?php
require_once('./ASM2_headermain.php') ;
 ?>

<?php
require_once('./ASM2_category.php') ;
 ?>

<?php
require_once('./ASM2_sidenav.php') ;
 ?>

<?php
require_once('./ASM2_content.php') ;
 ?>
</body>
</html>
