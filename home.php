<?php
    require_once('config.php');
?>
<!DOCTYPE html>
	<html lang="en">
	<head>
		<title>Raff bookstore</title>
		<meta charset="utf-8">
	    <link rel="stylesheet" type="text/css" href="css/vendor.css">
	    <link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" href="css/home.css?v=<?php echo time(); ?>">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="icon"  type="image/png" href="https://i.pinimg.com/originals/58/3d/7f/583d7f01e073e30843296968480d8843.png">
	</head>
<body>
<?php

if ($_SESSION["loggedin"] !== true || !isset($_SESSION["loggedin"])) {
	header("Location: index.php");
	exit;
}
?>
     <header>
            <div class="content-wrapper">
                <h1><br>Raff Bookstore</h1>
                <div id="wrapperHeader"> <div id="header_img">
                <img src="https://i.pinimg.com/originals/9b/ef/d1/9befd152f7213880c7df0a084b72ef79.png" alt="logo" /> </div> </div>           
                 <nav>
				   <a class = "form-head" href="mailto:RaffBookStore2023@gmail.com">ContactUs</a> 
				   <a class = "form-head" href="cart.php">Cart</a> 
				   <a class = "form-head" href="logout.php">Signout</a> 
				  <!-- <form class = "form-head" action="logout.php" method ='post'> <button type="submit" name="signout">Sign out</button> </form> -->
                </nav>   
            </div>
    </header>

	<br><br>
	<h3 style= "text-align:center;"> <?php echo "Welcome back " .$_SESSION['name']; ?> <br> Enjoy Shopping! </h3>
	<div class = "body2">
			  
	<?php
       $result = mysqli_query($con,"SELECT * FROM `book`");
	   while($row = mysqli_fetch_assoc($result)){
				 
		$qty=$row['quantity'];
		if($qty <= 0){ 
	     continue; }
		  $book_isbn= $row['isbn'];
	 
		echo "
		<div class='card'>
		<div  style='background-image: url( ".$row['img']."  );'  class='card-image'>  </div>
		<div class='card-text'>
		<span class='author'>   ".$row['author']." </span>
		<h4> ".$row['title']." <br>   &#65020;  ".$row['price']."  </h4>
		 
		</div>
		<div class='card-stats'>
		<div class='stat border'>
	    <a  class='value' href= 'product.php?isbn= $book_isbn' >More Info</a>
		</div>
		</div>
		</div>";
		}
		?>
		 <br>
    <footer style="margin-top: 2%; color:beige; text-align:center;">
	<a>&copy; 2023 KSU COMPUTER SCIENTISTS</a>
	<br>
    <a href="mailto:RaffBookStore2023@gmail.com">CONTACT US</a></p>
    </footer>
    </div>
    </body>
    </html>	