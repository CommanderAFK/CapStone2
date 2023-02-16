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
	        	<div class="col-sm-12">
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

					
					<!--<h1 style="color: #f7ff5c; font-family:serifs">Welcome From Yair Device Ecommerce Website</h1>-->
                    <h1 style="color: black; font-family:serifs; text-decoration-line: underline">About Our Project</h1>
                    <h3 style="color: black; font-family:serifs"> This system is for Capstone project intended to do ecommerce which is selling technological devices by using:</h3>
					<p style="color: black; font-family:serifs">
						<ul style="color: black; font-family:serifs;">
							<li style="font-weight:bold;">Virtual Studio code</li>
								<div style="color: black">This application is the open-source code editor to develop the system by supporting verity of languages on this editor. Besides, this platform also used on different OS in terms of Window, MacOS, Linux and etc. In this system, Vs code will be used to write PHP codes in it.  </div>
								<li style="font-weight:bold;">XAMPP</li>
								<div style="color: black">XAMPP is also an open-source software which able to cross-platform web servers. Basically, it’s used to connect the PHP and MySQL (database for websites) components, and it’s built specifically for web hosting servers. </div>
								<li style="font-weight:bold;">Microsoft Virtual Studio code</li>
								<div style="color: black">This platform is also same as Virtual Studio code (open source and support a verity of languages) in this system. Although we have VS code to edit the websites, Microsoft vs code (purple color) will be used for CSS designs because it able to suggest the code of CSS design in this platform meanwhile VS code isn’t support very well.</div>
								<li style="font-weight:bold;">Html</li>
								<div style="color: black">Hypertext Markup Language (html) which is built for web like a skeleton design of the websites to be used in this system. This able to connect and combine with CSS, JavaScript and PHP as well.   </div>
								<li style="font-weight:bold;">CSS</li>
								<div style="color: black">Cascading Style Sheets(CSS) is a style sheet language that able to design and makeup our websites pages by combining with HTML. </div>
								<li style="font-weight:bold;">PHP</li>
								<div style="color: black">This is the server sites scripting language, which is a powerful tool for developing dynamic and interactive Web pages. Moreover, it only can be read on a server that has PHP enabled and they only need to be viewed through an online browser. </div>
								<li style="font-weight:bold;">JavaScript</li>
								<div style="color: black">JS(JavaScript) is a high-level programming language and especially for creating web pages. Basically, it’s also used when a webpage is to be made dynamic and add special effects on pages like rollover, roll out and many types of graphic. </div>
								<li style="font-weight:bold;">MySQL and Bootstrap</li>
								<div style="color: black"> </div>
							
						</ul>
					
					


					</p>

					<h2 style="color: black; font-family:serifs; text-decoration-line: underline"> Payment</h2>
					<h4 style="color: black; font-family:serifs;" > Users able to make payment via PayPal Saftely and Fastly since users able to use any card in the PayPal account, this will be really suitable for the system</h4>

                   
					
					
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