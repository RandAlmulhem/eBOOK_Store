<?php
require_once('config.php');
$_SESSION['success'] = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$name = mysqli_real_escape_string($con, $_POST['adminname']);
	$pass = ($_POST['adminpassword']);
	if ($name == "admin" && $pass == ('admin123')) {
		$_SESSION['success'] = "You have logged in!";
		header('Location: resetAdmin.php'); 		// Page on which the user will be redirected to after initial log in
		die;
	}
	$select = " SELECT * FROM admin WHERE username = '$name' AND password = '$pass' ";
	$result = mysqli_query($con, $select);
	if (mysqli_num_rows($result) > 0) {

        $_SESSION["adminlogged"] = true; // now admin is logged in with new password 
		header('Location:dashboard.php');
	} else {
		$error[] = 'incorrect username or password!';
	}
} // end if
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="css/functions.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/indextst.css?v=<?php echo time(); ?>">
	<link rel="icon" type="image/png"
		href="https://i.pinimg.com/originals/58/3d/7f/583d7f01e073e30843296968480d8843.png">
</head>

<body>
	<header>
		<div class="content-wrapper">
			<h1><br>Raff Bookstore</h1>
			<div id="wrapperHeader">
				<div id="header_img">
					<img src="https://i.pinimg.com/originals/9b/ef/d1/9befd152f7213880c7df0a084b72ef79.png"
						alt="logo" />
				</div>
			</div>
		</div>
		<title>Login form</title>
	</header>

	<div class="form-box">
		<div class="header-text">
			Admin login form
			<?php

			if (isset($error)) {
				foreach ($error as $error) {
					echo '<span class="error-msg">' . $error . '</span>';

				};
			};
			?>
		</div>

		<form name="login" action="" method="POST">
			<span id="errorLogin"></span>
			<div class="input">
				<input type="text" name="adminname" id=admin placeholder="Type your admin username here... " required>
			</div>

			<div class="input">
				<input type="password" minlength="8" placeholder="Type your password here..." id="password"
					name="adminpassword" required>
			</div>
			<div>
				<input type="submit" id="submitAdmin" value="Login">
			</div>
		</form>
	</div>
</body>

</html>