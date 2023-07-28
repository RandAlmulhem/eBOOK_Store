<?php
require_once('config.php');

$con->close();
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
<header>
	<div class="content-wrapper">
		<h1><br>Raff Bookstore</h1>
		<div id="wrapperHeader">
			<div id="header_img">
				<img src="https://i.pinimg.com/originals/9b/ef/d1/9befd152f7213880c7df0a084b72ef79.png" alt="logo" />
			</div>
		</div>
	</div>
</header>

<body>
	<div class="form-box">
		<div class="header-text">
			Welcome On board!
		</div>
		<form method="post" action="addProduct.php">
			<button type="submit">Add Product </button>
		</form>
		<form method="post" action="viewOrders.php">
			<button type="submit">View Orders </button>
		</form>

		<form method="post" action="adminlogout.php">
			<button type="submit" id = "logout" >Logout </button>
		</form>
		</form>
	</div>

</body>

</html>