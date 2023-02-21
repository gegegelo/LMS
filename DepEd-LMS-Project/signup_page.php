<!DOCTYPE html>
<html lang="en">
	<head>
		<title>
			DepEd E-Learning Management
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
    			margin: 0px 135px
			}
		</style>
		<meta charset="UTF-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
   		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php require 'links.php'; ?>
	</head>
	<body>
    <?php include 'index-nav.php'; ?>
		<form class="center_form" action="new_user_form_handler.php" method="POST" id="new_user_from">
			<h2><i class="fa fa-user-plus" aria-hidden="true"></i> CREATE NEW USER ACCOUNT</h2>
			<br>
			<table cellpadding='10'>
				<strong>ENTER LOGIN DETAILS</strong>
				<tr>
					<td>Enter a username  </td>
					<td><input type="text" name="username" required><br><br></td>
				</tr>
				<tr>
					<td>Enter your  password  </td>
					<td><input type="password" name="password" required><br><br></td>
				</tr>
                <tr>
					<td>Enter confirmed  password  </td>
					<td><input type="password" name="confirmPassword" required><br><br></td>
				</tr>
				<tr>
					<td>Enter your Email ID</td>
					<td><input type="text" name="email" required><br><br></td>
				</tr>
			</table>
			<br>
			<table cellpadding='10'>
				<strong>PERSONAL DETAILS</strong>
				<tr>
					<td>Enter your first name  </td>
					<td><input type="text" name="name" required><br><br></td>
				</tr>
                <tr>
					<td>Enter your last name  </td>
					<td><input type="text" name="name" required><br><br></td>
				</tr>
				<tr>
					<td>Enter your phone number</td>
					<td><input type="text" name="phone_no" required><br><br></td>
				</tr>
			</table>
			<br>
			<input type="submit" value="Submit" name="Submit">
			<br>
		</form>
		<?php include 'script.php'; ?>
	</body>
</html>