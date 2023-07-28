<?php

require_once('config.php');

// check first if the admin is logged in to be able to enter this page 
if (!isset($_SESSION['adminlogged']) || $_SESSION['adminlogged'] != true) 
{
	header('Location: admin.php');
}

$result = $con->query('SELECT order_date, customer_email, order_number, Total_price FROM customersorders ORDER BY order_date DESC');
$con->close();
?>

<!DOCTYPE html>
	<html lang="en">
	<head>
	    <title>Raff Bookstore</title>
		<link href="css/functions.css" rel="stylesheet" type="text/css">

	    <link rel="stylesheet" type="text/css" href="css/normalize.css">
	    <link rel="stylesheet" type="text/css" href="css/vendor.css">

	    <link rel="stylesheet" type="text/css" href="css/stylevco.css">
		<link rel="icon" type="image/png" href="https://i.pinimg.com/originals/58/3d/7f/583d7f01e073e30843296968480d8843.png">
	</head>

<body>
    <header>
        <div class="content-wrapper">
            <h1><br>Raff Bookstore</h1>
            <div id="wrapperHeader"> <div id="header_img">
            <img src="https://i.pinimg.com/originals/9b/ef/d1/9befd152f7213880c7df0a084b72ef79.png" alt="logo" /> </div> </div>  
			<nav></nav>  
        </div>
    </header>

    <section class="bg-sand padding-medium">
	   <div class="container">
		 <div class="row">
			<div class="align-center">
				<div class="product-detail">
				<div class="table-container">
					<h1>customers Orders</h1>
					<table> 
						<tr>
							<th>Order date</th>
							<th>Customer email</th>
							<th>Order number</th>
							<th>Total price</th>
						 </tr>

					  <?php while ($row = $result->fetch_assoc()) { ?>
						 <tr>
                            <td><?php echo $row['order_date']; ?></td>
                            <td><?php echo $row['customer_email']; ?></td>
                            <td><?php echo $row['order_number']; ?></td>
                            <td><?php echo $row['Total_price']; ?></td>
						 </tr>
					   <?php } ?>
				    </table>
				</div>
			    </div>
		    </div>
		  </div>
	    </div>
	
	    <div class="row">
          <div class="btn-wrap align-center">
	         <a href="dashboard.php" class="btn btn-outline-accent btn-accent-arrow" tabindex="0">Back to the dashboard<i class="icon icon-ns-arrow-right"></i></a>
          </div>
        </div>
    </section>

</body>
</html>	