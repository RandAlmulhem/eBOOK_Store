<?php

require_once('config.php');
if ($_SESSION["loggedin"] !== true || !isset($_SESSION["loggedin"])) {
  header("Location: index.php");
  exit();
}?>
<?php

if(isset($_POST['coniform'])){
  $total_price = $_POST['Total_price'];
  $email = $_SESSION['email'];
  $date = date("Y-m-d");
  $Order_num = rand(10000,99999);
  
  $sql = "INSERT INTO customersorders (customer_email, Order_date, Total_price, Order_number)
  VALUES ('$email', '$date', '$total_price','$Order_num')";
  

  if ($con->query($sql) === TRUE) {
  
    

    foreach($_SESSION['Cart'] as $title => $quantity){
      

     $sql = "SELECT * FROM book WHERE isbn='$title'";
      $result = $con->query($sql);
      
     if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          $product_id = $row['isbn'];
          $quantity_left = $row['quantity'] - $quantity;
             
          
            if ($con->query($sql) === TRUE) {
            $sql = "UPDATE book SET quantity='$quantity_left' WHERE isbn='$product_id'";
            
            if ($con->query($sql) === TRUE) {
              echo "<p> Your Order Has Been Placed</p>";
              
              unset($_SESSION['Cart']);
            }
         }
        }
      }
    }
  }
  unset($_SESSION['Cart']); //if database connection failed
}

$con->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/png" href="https://i.pinimg.com/originals/58/3d/7f/583d7f01e073e30843296968480d8843.png">
    <title>Raff</title>
    <meta charset="utf-8">
    

    <link rel="stylesheet" href="productvendor.css"> 
    <link rel="stylesheet" href="css/productstyle.css"> 
	<meta charset="UTF-8" />
    <head> Thank you! </head>
   <p> <a href="home.php">Home</a> </p>
				 
				 <p>  <a href="logout.php">Signout</a> </p>

</head>
</html>
