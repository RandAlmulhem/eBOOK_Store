<?php
require_once("config.php");
if ($_SESSION["loggedin"] !== true || !isset($_SESSION["loggedin"])) {
	header("Location: index.php");
	exit;
} ?>
<!DOCTYPE html>

<html lang="en">

<head>
    <link rel="icon" type="image/png" href="https://i.pinimg.com/originals/58/3d/7f/583d7f01e073e30843296968480d8843.png">
    <title>Raff</title>
    <meta charset="utf-8">

    <link rel="stylesheet" href="css/productvendor.css"> 
    <link rel="stylesheet" href="css/productstyle.css"> 

</head>
<body>
	    <div id="header-wrap">
		<div class="main-logo">
		<!--  <img src="https://i.pinimg.com/originals/9b/ef/d1/9befd152f7213880c7df0a084b72ef79.png" alt="logo"> comment for now-->
		</div>

		<div class="col-md-10">
		 <nav id="navbar">
			<div class="main-menu stellarnav">
                <br>
				<ul class="menu-list">
                    <li class="menu-item"><a href="home.php" class="nav-link" >Back to Home</a></li>
                    <li class="menu-item"><a href="logout.php" class="nav-link" >Signout</a></li>
					
				</ul>
			</div>
		 </nav>
		</div>	
		</div><!--top-content-->
</body>
<?php

if(isset($_GET['isbn'])){
if(isset($_GET['quantity'])){
    $quantity=$_GET['quantity'];
}else{
    $quantity=1;
}

$book_isbn=$_GET['isbn'];
$_SESSION['Cart'][$book_isbn] = array('quantity'=> $quantity);

}
?>


<?php 


$cart =  $_SESSION['Cart'];




?>

 
<div class="container">


   <table class="table table-bordered bg-white">
       <tr>
           
           <th>Title</th>
           <th>Price</th>
           <th>Quantity</th>
           <th>Total</th>
           
       </tr>

       <?php
       $total = 0;
       foreach($cart as $book_isbn => $value){
        // echo $key ." : ". $value['quantity'] . "<br>";
        $sql = "SELECT * FROM book where isbn = $book_isbn";
        $result = mysqli_query($con, $sql);
       // unset($_SESSION["Cart"]);
        $row = mysqli_fetch_assoc($result)
        ?>
   <tr>
           
           <td><a href="product.php?isbn=<?php echo $row['isbn']?>"><?php echo $row['title']?></a></td>
           <td><?php echo $row['price']?> </td>
           <td><?php echo $value['quantity']?></td>
           <td><?php echo $row['price'] * $value['quantity'] ?> </td>
           
            </tr>

        <?php

        $total = $total +  ($row['price'] * $value['quantity']);
        }
        ?>
      
   </table>

   <div class="text-right">
    <!-- <button class="btn mr-3">Update Cart</button> -->

    <?php echo "<form action='thank.php' method='post'>";
     echo "<input type='hidden' name='Total_price' value='$total'>";
 echo "<input value='Conifrm' name='coniform' type='submit'>";
echo "</form>"; ?>
</div>
<div class="card">

<div class="card-body">
Total Amount: ريال<?php echo $total; ?>.00
</div>
</div>
</html>