<?php 
  require_once('config.php');
  
  if (isset($_POST['Reg'])) {

  $user_name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $select = " SELECT * FROM user WHERE email = '$email'";
  $result = mysqli_query($con, $select);
   if(mysqli_num_rows($result) > 0  ){
      $error[] = 'user already exist!';
      }
      else if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){

      $query = "INSERT INTO user ( fname,  email, password ) VALUES ('$user_name', '$email', '$password')";
      mysqli_query($con, $query);

      header("Location: index.php");
      die;
      }else {
        $error[] = 'Please enter some valid information!';
  }
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Register</title>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="https://i.pinimg.com/originals/58/3d/7f/583d7f01e073e30843296968480d8843.png">
    <link rel="stylesheet" href="css/functions.css">
    <link rel="stylesheet" href="css/indextst.css?v=<?php echo time(); ?>">
    <script src="validate.js" defer></script>

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

    <?php
         if(isset($error)){
         foreach($error as $error){
         echo '<span class="error-msg">'.$error.'</span>';
         }; };
         ?>

    <div class="form-box-reg">
 
      <div class="header-text"> Sign Up </div>
      <form id="signup" name="signup" action='register.php' method="POST" onsubmit="return validate();" >

         <div class="field">
         <input type="text" name="name" placeholder="Name" required> 
        </div>

         <div class="field">
          <input type="email" id="email" name="email" placeholder="Email" required> 
          <small>Error message</small>
         </div>
         
          <div class="field">
          <input type="password" id="password" name="password"  minlength="8" placeholder="Password (8 characters minimum)" required> 
         </div>

          <div class="field">
          <input type="password" id="Conf_pass" name="Conf_pass" placeholder="Confirm Password " required> 
          <small>Error message</small>
          </div>
          <br>

          <div class="field">
          <input type="submit" name="Reg" value="Register"> </div>
          
          <span>Already a member? <a href="index.php">Login Here!</a>
      </form>
    </div>
  </body>
</html>