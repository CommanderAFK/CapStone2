<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>
	 
	  <div class="content-wrapper" style="background-color: #647075;">
	    <div class="container">

	      <!-- Main content -->
	      <section class="content">
	        <div class="row">
	        	<div class="col-sm-9">
	        		<?php
	        			if(isset($_SESSION['error'])){
	        				echo "
	        					<div class='alert alert-danger'>
	        						".$_SESSION['error']."
	        					</div>
	        				";
	        				unset($_SESSION['error']);
	        			}
	        		?>

					<!--
	        		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		                <ol class="carousel-indicators">
		                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		                  <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
		                  <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
		                </ol>
		                
		                  </div>
		                </div>
		                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
		                  <span class="fa fa-angle-left"></span>
		                </a>
		                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
		                  <span class="fa fa-angle-right"></span>
		                </a>
		            </div>
					-->

					<!--
		            <h1>Welcome To E-Commerce Online Shopping Store</h1>
                    
					<h2>Frequently Asked Questions</h2>
					<h2>How does this site work?</h2>
					<p>How it works just browse through the website and pick a desired item to complete a purchase and delivery to your door-step NOTE you Must Create an Account</p>
					<h2>Method of payment?</h2>
					<p>Users will e able to make payment via paypal users will be redirected to a secure paypal page to complete payment of selected product</p>
					<h2>How long will delivery take?</h2>
					<p>Delivery time varies from place to place but ordered items will be delivered before 30 working days</p>
					<h2>Is it safe to make purchases here?</h2>
					<p>Yes payment has to be made via paypal a secure banking system</p>

					-->

                    

                    
					
					
					<html>
					
<head>
<style>
p {
  color: black;
  text-indent: 10px;
  text-transform: uppercase;
}

</style>
</head>
<body>



</body>
</html>


		       		
<?php include 'includes/scripts.php'; ?>
</body>
</html>