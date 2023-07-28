<?php 
  require_once('config.php');
  ?>

  <?php

    if (!isset($_SESSION['adminlogged']) || $_SESSION['adminlogged'] != true) 
    {
	header('Location: admin.php');
    }
  
  if (isset($_POST['submitPR'])) {

    $title =       $_POST['title'];
	$img =         $_POST['img'];
	$price =       $_POST['price'];
	$description = $_POST['description'];
	$quantity =    $_POST['quantity'];
	$isbn =        $_POST['isbn'];
	$author =      $_POST['author'];

  $select = " SELECT * FROM book WHERE isbn = '$isbn'";
  $result = mysqli_query($con, $select);
   if(mysqli_num_rows($result) === 1  ){
    $error[] = '.  This book already exists!!'; 
      }
      else if (!empty($title) && !empty($img) && is_numeric($price) && !empty($description) && is_numeric($quantity) && !empty($isbn) && !empty($author)) {

      $query = "INSERT INTO book ( title, img, price, description, quantity, isbn, author ) VALUES ('$title', '$img', '$price' , '$description' , '$quantity' , '$isbn' ,'$author' )";
      mysqli_query($con, $query);
  }
}
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
					<img src="https://i.pinimg.com/originals/9b/ef/d1/9befd152f7213880c7df0a084b72ef79.png"alt="logo" />
				</div>
			</div>
		</div>
	</header>
	<div class="form-box" style="width: 500px;  height: 600px;" >
		<div class="header-text">
			ADD PRODUCTS
			</div>
			<form name="form-box" action="" method="POST">
				<div class="container">
					<div class="warpper">
						<div class="image">
						</div>
					</div>
				<input type="text" class="form-control" placeholder="Image URL" id="img" name="img" required>
				</div>
				<input type="text" class="form-control" placeholder="Book Name" id="title" name="title" required>
				<input type="text" class="form-control" placeholder="ISBN" id="isbn" name="isbn" required>
				<input type="text" class="form-control" placeholder="Author" id="author" name="author" required>
				<input type="number" class="form-control" placeholder="Price" id="price" name="price" required>
				<textarea class="form-control" placeholder="Description" id="description" name="description" required></textarea>
				<input type="number" class="form-control" placeholder="Quantity" id="quantity" name="quantity" required>
				<input type="submit"  name="submitPR" value="SUBMIT">
			</form>
	</div>
    <?php
         if(isset($error)){
         foreach($error as $error){
         echo '<span class="error-msg">'.$error.'</span>';
         }; 
         unset($error);
         };
         ?>
</body>
</html>