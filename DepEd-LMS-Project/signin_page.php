<!DOCTYPE html>
<html lang="en">
	<head>
		<title>
			Account Login
		</title>
		<style>
			input {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 7px 30px;
			}
			input[type=submit] {
				background-color: #030337;
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: 0px 60px
			}
		</style>
		<meta charset="UTF-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
   		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php require 'links.php'; ?>
	</head>
	<body>
	<?php include 'index-nav.php'; ?>
		<form class="float_form" style="padding-left: 20px" action="login_handler.php" method="POST">
			<fieldset>
				<legend>Login Details:-</legend>
				<strong>Username:</strong><br>
				<input type="text" name="username" placeholder="Enter your username" required><br><br>
				<strong>Password:</strong><br>
				<input type="password" name="password" placeholder="Enter your password" required><br><br>
				<strong>User Type:</strong><br>
				Student <input type='radio' name='user_type' value='student' checked/> Teacher <input type='radio' name='user_type' value='teacher'/>
				<br>
				<?php
					if(isset($_GET['msg']) && $_GET['msg']=='failed')
					{
						echo "<br>
						<strong style='color:red'>Invalid Username/Password</strong>
						<br><br>";
					}
				?>
				<input type="submit" name="Login" value="Login">
			</fieldset>
			<br>
			<a href="signup_page.php"><i class="fa fa-user-plus" aria-hidden="true"> </i> Create New User Account?</a>
		</form>
		<?php include 'script.php'; ?>
	</body>
</html>