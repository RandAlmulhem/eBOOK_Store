<?php
require_once('config.php');
?>
<!DOCTYPE html>

	<html lang="en">
	<head>
		<link rel="icon" type="image/png" href="https://i.pinimg.com/originals/58/3d/7f/583d7f01e073e30843296968480d8843.png">
		<title>Raff Bookstore</title>
		<meta charset="utf-8">
	    <link rel="stylesheet" href="css/productvendor.css"> 
	    <link rel="stylesheet" href="css/productstyle.css?v=<?php echo time(); ?>">
		<link rel="stylesheet" href="css/home.css?v=<?php echo time(); ?>">
	
	</head>
	<?php


    if ($_SESSION["loggedin"] !== true || !isset($_SESSION["loggedin"])) {
        header("Location: index.php");
        exit();
    }

	if(isset($_GET["isbn"])){
		$book_isbn= $_GET["isbn"];
	}
	$sql_query = "SELECT * FROM book WHERE isbn = $book_isbn";
	$result = $con->query ($sql_query);
	?>

    <body>
	    <header>
            <div class="content-wrapper">
                <h1><br>Raff Bookstore</h1>
                <div id="wrapperHeader"> <div id="header_img">
                <img src="https://i.pinimg.com/originals/9b/ef/d1/9befd152f7213880c7df0a084b72ef79.png" alt="logo" /> </div> </div>           
                <nav>
				   <a href="home.php">Home</a> 
				   <a href="cart.php">Cart</a> 
				   <a href="logout.php">Signout</a>
                  
                </nav>   
            </div>
    </header>

<div class = "container">
<?php
if ($result -> num_rows > 0){

	while ($row = $result ->fetch_assoc()){
	?>

	  <div class="col-md-6">
			<img src=<?php echo $row["img"]?> style = "width:60%; height : 550px"/>	
	  </div>


	  <div class="col-md-6 pl-5">
		  <div class="product-detail">
		  <h1><?php echo $row["title"]?></h1>
          <h2>By <?php echo $row["author"]?></h2>
		  <p> <?php echo $row["description"]?></p>
          <p> ISBN:<?php echo $row["isbn"]?></p>
		  <span class="price colored">Price: <?php echo $row["price"]?>   &#65020; <?php
          $qty=$row['quantity'];
          if($qty < 5){ 
         echo " ,Low stock! remaing:  $qty";}?> </span></div></br> 
		 
      </div>

	  <div class = "container">
      <div class="row">
     <div class="col-md-2"> <h4> Quantity: </h4> </div>
    
     <form action='cart.php'>  
     <input type="hidden" name='isbn' value='<?php echo  $book_isbn ?>'>
     <input value="1" type="number" class='form-control' name='quantity'>
	 <button  type='submit' class="btn btn-default btn-xs pull-right" name="checkOut" ><i class="fa fa-cart-arrow-down"></i> Add To Cart </button>

	  <?php
	} }
?>
</div>

<footer style="margin-top: 2%; color:beige; text-align:center;">
	<a>&copy; 2023 KSU COMPUTER SCIENTISTS</a>
	<br>
    <a href="mailto:RaffBookStore2023@gmail.com">CONTACT US</a></p>
    </footer>


 </body>
</html>	