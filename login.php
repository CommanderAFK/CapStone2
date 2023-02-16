<?php include 'includes/session.php'; ?>
<?php
  if(isset($_SESSION['user'])){
    header('location: cart_view.php');
  }
?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition login-page" style = "background-color: #647075;">
<div class="login-box">
  	<?php
      if(isset($_SESSION['error'])){
        echo "
          <div class='callout callout-danger text-center'>
            <p>".$_SESSION['error']."</p> 
          </div>
        ";
        unset($_SESSION['error']);
      }
      if(isset($_SESSION['success'])){
        echo "
          <div class='callout callout-success text-center'>
            <p>".$_SESSION['success']."</p> 
          </div>
        ";
        unset($_SESSION['success']);
      }
    ?>
  	<div class="login-box-body" style="border-radius:10px; border: 1px solid; box-shadow: 5px 10px #888888;">
    	<p class="login-box-msg" style="font-family:serif; font-size:20px; font-weight:bold; color: #4c86b0; text-decoration-line:;" >Signup For Registered Account</p>

    	<form action="verify.php" method="POST">

      		<div class="form-group has-feedback">
          <label style="color: #4c86b0">Email address </label>
        		<input type="email" class="form-control" name="email" placeholder="Email" required>
        		<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      		</div>

          <div class="form-group has-feedback">
          <label style="color: #4c86b0">Password </label>
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>

      		<div class="row">
    			<div class="col-xs-4">
          			<button type="submit" class="btn btn-primary btn-block btn-flat" name="login"><i class="fa fa-sign-in"></i> Sign In</button>
        		</div>
      		</div>
    	</form>
      <br>
      <p><a href="password_forgot.php" style="font-weight:bold" >I forgot my password</a><br><p>
      <p><a href="signup.php" class="text-center" style="font-weight:bold" >I Haven't Registered Yet</a><br></p>
      <a href="index.php" style="font-weight:bold"><i class="fa fa-home"></i> Home</a>
  	</div>
</div>
	
<?php include 'includes/scripts.php' ?>
</body>
</html>