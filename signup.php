<?php include 'includes/session.php'; ?>
<?php
  if(isset($_SESSION['user'])){
    header('location: cart_view.php');
  }

  if(isset($_SESSION['captcha'])){
    $now = time();
    if($now >= $_SESSION['captcha']){
      unset($_SESSION['captcha']);
    }
  }

?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition register-page" style="background-color:#647075;">
<div class="register-box" style="margin-top:px;">
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
  	<div class="register-box-body" style="border-radius:10px;border: 1px solid; box-shadow: 5px 10px #888888;">
    	<p class="login-box-msg" style="font-family:serif; font-size:22px; font-weight:bold; color: #4c86b0; text-decoration-line:;">Registration For New Users</p>

    	<form action="register.php" method="POST">
          <div class="form-group has-feedback">
            <label style="color: #4c86b0">First Name </label>
            <input type="text" class="form-control" name="firstname" placeholder="Firstname" value="<?php echo (isset($_SESSION['firstname'])) ? $_SESSION['firstname'] : '' ?>" required>
            <span class=""></span>
          </div>

          <div class="form-group has-feedback">
            <label style="color: #4c86b0">last Name </label>
            <input type="text" class="form-control" name="lastname" placeholder="Lastname" value="<?php echo (isset($_SESSION['lastname'])) ? $_SESSION['lastname'] : '' ?>"  required>
            <span class=""></span>
          </div>

      		<div class="form-group has-feedback">
          <label style="color: #4c86b0">Email address </label>
            <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo (isset($_SESSION['email'])) ? $_SESSION['email'] : '' ?>" required>
        		<span class=""></span>
      		</div>

          <div class="form-group has-feedback">
          <label style="color: #4c86b0">Password </label>
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <span class=""></span>
          </div>

          <div class="form-group has-feedback">
          <label style="color: #4c86b0">Confirm Password </label>
            <input type="password" class="form-control" name="repassword" placeholder="Retype password" required>
            <span class=""></span>
          </div>
          <?php
            if(!isset($_SESSION['captcha'])){
              echo '
                <di class="form-group" style="width:100%;">
                  <div class="g-recaptcha" data-sitekey="6LevO1IUAAAAAFX5PpmtEoCxwae-I8cCQrbhTfM6"></div>
                </di>
              ';
            }
          ?>
          <hr>
      		<div class="row">
    			<div class="col-xs-4">
          			<button type="submit" class="btn btn-primary btn-block btn-flat" name="signup"><i class="fa fa-pencil"></i> Sign Up</button>
        		</div>
      		</div>
    	</form>
      <br>
      <p><a href="login.php" style="font-weight:bold">I have already registered</a><br></p>
      <a href="index.php" style="font-weight:bold"><i class="fa fa-home"></i> Home</a>
  	</div>
</div>
	
<?php include 'includes/scripts.php' ?>
</body>
</html>