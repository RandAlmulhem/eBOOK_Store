<?php
    require_once('config.php');
?>
<!DOCTYPE html>
<html>
	<head>
        <title>Raff Bookstore</title>
		<meta charset="utf-8">
        <link rel="stylesheet" href="css/functions.css">
        <link rel="stylesheet" href="css/indextst.css?v=<?php echo time(); ?>">
        <link rel="icon" type="image/png" href="https://i.pinimg.com/originals/58/3d/7f/583d7f01e073e30843296968480d8843.png">
	</head>
	<body>
    <header>
            <div class="content-wrapper">
                <h1><br>Raff Bookstore</h1>
                <div id="wrapperHeader"> <div id="header_img">
                <img src="https://i.pinimg.com/originals/9b/ef/d1/9befd152f7213880c7df0a084b72ef79.png" alt="logo" /> </div> </div>  
                 <nav>
                    <a href="mailto:RaffBookStore2023@gmail.com">Contact Us</a> 
                </nav>   
            </div>
    </header>
        <div class="form-box">
		<div class="header-text"> Login </div>

        <form name="login" action='index.php' method="POST" >
	    <span id="errorLogin"></span>

		<div class="input">
			<input type="text" name="email" id="email" placeholder="Enter your email address" required>
		</div>

		<div class="input">
			<input type="password" name="password" id="password" placeholder="Enter your password" required>
			</div>

        <span>Don't have an account? 
        <a href="register.php">Register Here!</a>
        </span>     
        <br><br>
           <input type="submit" name = "Login" value="Login" id="loginsubmit" /> 
        
        </form>   
        </div>
        <?php
         if (isset($_POST['Login'])) 
        {
            $email = $_POST['email'];
            $password = $_POST['password'];
            if(!empty($email) && !empty($password)) {
    
                //read from database
                $query = "select * from user where email = '$email' limit 1";
                $result = mysqli_query($con, $query);
    
                if($result)
                {
                    if($result && mysqli_num_rows($result) > 0) {

                        $user_data = mysqli_fetch_assoc($result);
                        if($user_data['password'] === $password) {

                            $_SESSION['name'] = $user_data['fname'];
                            $_SESSION['email'] = $user_data['email'];
                            $_SESSION["loggedin"] = true;
                            header("Location:home.php");
                        }
                    }
                }
                $error[] = '.   Invalid username or password!!';
                
               
            }else {
                $error[] = '.   Invalid username or password!!';
            }
         }
         ?>
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