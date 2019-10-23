<div class="headermain">
  <div class="header left" style="background-color:#2B2A2A;">
  	<img src="picture/ASM2_ICON.jpg" alt="NOT FOUND" width="200" height="150">

  </div>
  
  <div class="header middle" style="background-color:#2B2A2A;">
  	 <div class="topnav">
  <input type="text" placeholder="Search..">
	 </div>

  </div>
 
  <div class="header right" style="background-color:#2B2A2A;">
  	<table class="letter">
			<form action="" method="Post">
				<tr>
					<td>Username</td>
					<td><input type="text" name="email"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="pass"></td>
				</tr>
				<tr>
					<td><input type="submit" value="SIGN IN"></td>
					<td><input type="submit" value="SIGN UP"></td>
				</tr>
			</form>
		</table>

		<?php 
		if(isset($_POST['email']) && isset($_POST['pass']))
		{
			$em = $_POST['email'];
			$pw = $_POST['pass'];
			$sql = "Select * from account where Username='" . $em 
				. "' and Password='" . $pw . "'";
			$acc = query($sql);
			if(count($acc)>0)
			{
				header("Location: ./ASM2_admin.php");
			}
			else
			{
				echo('<span style="color:red;">Email or Password is not correct</span>');
			}
		}
		?>
  </div>

</div>