<?php
include 'secure/db_connect.php';
include 'secure/functions.php';
sec_session_start();
?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <title>Secure Site</title>
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">

        <!-- Responsive -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap-responsive.css" rel="stylesheet">

        <!--Custom Styles-->
        <link href="css/style.css" rel="stylesheet">

        <!--Icon home Screen Touch -->
        <link rel="apple-touch-icon-precomposed" href="icon.png">
    </head>
    <body>
<?php
	$image = "../img/yoogle.jpg";
	$width = 600;
	$height = 200;
	echo '<img src="'.$image.'" style=width:"' . $width . 'px;height:' . $height . 'px;">';
?>
<?php if(login_check($mysqli) == true) { ?>
                <h1>This is a secure site!</h1>
                <h4>You have been logged in</h4>
                <p><a href="logout.php">Logout</a></p>
		<img src="img/granted.jpg" alt="Access Has Been Granted">
<?php } else { ?>
                <h1>This is a secure site!</h1>
                <p><a href="index.php">Login</a></p>
		<img src="img/denied.png" alt="Access Has Been Denied">
<?php } ?>
<ul id="circles">
      <li class="circle"></li>
      <li class="circle"></li>
      <li class="circle"></li>
      <br>
      <a href="http://www.pwnz.dk">Pwnz.dk</a>
     </ul>
</div><!--/container-fluid-->
</div><!--/container-fluid-->

<!--Scripts-->
<script src="js/jquery-1.8.2.min.js"></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="secure/sha512.js"></script>
<script src="secure/forms.js"></script>

</body>
</html>
