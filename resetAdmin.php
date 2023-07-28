<?php
require_once('config.php');

$_SESSION['success'] = "";

    if (isset($_POST['ChangePassword'])) {
        $admin = mysqli_real_escape_string($con, $_POST['admin']);
        $pass = $_POST['adminpassword']; 
        $sql = " SELECT * FROM admin WHERE username = '$admin' ";
        $result = $con->query($sql);
        if (mysqli_num_rows($result) === 1) { 

            $upd = "UPDATE admin SET password = '$pass' WHERE username = '$admin' ";
            mysqli_query($con, $upd);
            header('Location: admin.php'); // back to admin.php to log in with new password
            die;
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
    <title>Reset form</title>
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
    </header>
    <div class="form-box">
        <div class="header-text">
            Reset Password form
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
                <input type="text" name="admin" placeholder="Type your initial username here..." id="admin" required>
            </div>
            <div class="input">
                <input type="password" minlength="8" name="adminpassword" placeholder="Type your new password here..." id="Newadminpassword" required>
            </div>
            <div>
                <input type="submit" id="ChangePassword" name="ChangePassword" value="Change">
            </div>
        </form>
    </div>
</body>

</html>