<!DOCTYPE html>

<html>
<head>
  <meta name="generator" content="HTML Tidy for HTML5 (experimental) for Windows https://github.com/w3c/tidy-html5/tree/c63cc39">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="author" content="1337 Team - Pwnz.dk">
  <meta name="description" content="Secure user login and registration">

  <title>Secure login</title><!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen"><!-- Responsive -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/bootstrap-responsive.css" rel="stylesheet"><!--Custom Styles-->
  <link href="css/style.css" rel="stylesheet"><!--Icon home Screen Touch -->
  <link rel="apple-touch-icon-precomposed" href="icon.png">
</head>

<body>
<?php
	$image = "../img/yoogle.jpg";
	$width = 600;
	$height = 200;
	echo '<img src="'.$image.'" style=width:"' . $width . 'px;height:' . $height . 'px;">';
?>
  <div class="container-fluid" id="mainwrapper">
    <div class="container-fluid" id="content">
      <h1>Secure Login</h1>

      <p>Registration Form</p>

      <div class="row-fluid">
        <div class="span4 offset3">
          <form action="secure/sec_reg.php" method="post" name="registration_form" class="form-horizontal" id=
          "registration_form">
            <div class="control-group">
              <label class="control-label" for="inputUser">Username</label>

              <div class="controls">
                <input type="text" id="username" name="username" placeholder="Username">
              </div>

              <div class="control-group">
                <label class="control-label" for="inputEmail">Email</label>

                <div class="controls">
                  <input type="text" id="email" name="email" placeholder="Email">
                </div>
              </div>

              <div class="control-group">
                <label class="control-label" for="inputPassword">Password</label>

                <div class="controls">
                  <input type="password" name="password" id="password" placeholder="Password"> <input type="hidden" name="p" id=
                  "p" value="">
                </div>
              </div>

              <div class="control-group">
                <div class="controls">
                  <button type="submit" class="btn" onclick=
                  "formhash(this.form, this.form.password, this.form.p);">Register</button>
                  <!-- If registration successfull show everything ok info -->
                   <?php if(isset($_GET['success'])) {?>
                  <div class="alert alert-success fade in" id="success">
                    <button type="button" class="close" data-dismiss="alert">x</button> <strong>Registration done!<br>
                    Please log in...</strong>
                  </div><?php }?><!-- if registration error show this -->
                  <?php if(isset($_GET['registrationfailed'])) {?>
                  <div class="alert alert-error fade in error">
                    <button type="button" class="close" data-dismiss="alert">x</button> <strong>Ups! Something went
                    wrong...</strong>
                  </div><?php }?>
                </div>
              </div>
            </div>
          </form>
        </div><!--/span4-->
      </div><!--/row-fluid-->
    </div>
      <ul id="circles">
      <li class="circle"></li>
      <li class="circle"></li>
      <li class="circle"></li>
      <br>
      <a href="http://www.pwnz.dk">Pwnz.dk</a>
     </ul>
  </div><!--/container-fluid-->
  <!--/container-fluid-->
  <!--Scripts-->
  <script src="js/jquery-1.8.2.min.js">
</script> <script src="http://code.jquery.com/jquery-latest.js">
</script> <script src="js/bootstrap.min.js">
</script> <script src="secure/sha512.js">
</script> <script src="secure/forms.js">
</script> <script>
 //FADE IN MESSAGES
      $(document).ready(function () {
      $(".error").fadeIn("slow");
      $("#success").fadeIn("slow");
    });
    </script>
</body>
</html>
