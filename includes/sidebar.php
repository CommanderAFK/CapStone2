<div class="row" style="color:red;">
	<div class="box box-solid">
	  	<div class="box-header with-border">
	    	<h3 class="box-title" ><b>Most Viewed Today</b></h3>
	  	</div>
	  	<div class="box-body">
	  		<ul id="trending">
	  		<?php
	  			$now = date('Y-m-d');
	  			$conn = $pdo->open();

	  			$stmt = $conn->prepare("SELECT * FROM products WHERE date_view=:now ORDER BY counter DESC LIMIT 10");
	  			$stmt->execute(['now'=>$now]);
	  			foreach($stmt as $row){
	  				echo "<li><a href='product.php?product=".$row['slug']."'>".$row['name']."</a></li>";
	  			}

	  			$pdo->close();
	  		?>
	    	<ul>
	  	</div>
	</div>
</div>

<!--<div class="row" style="color:red;">
	<div class="box box-solid">
	  	<div class="box-header with-border">
	    	<h3 class="box-title"><b>Feel Free To Give Feedback</b></h3>
	  	</div>
	  	<div class="box-body">
	    	<p>You may feel free to your opinion for this capstone project called Yair Device website</p>
	    	<form method="POST" action="">
		    	<div class="input-group">
	                <input type="text" class="form-control">
	                <span class="input-group-btn">
	                    <button type="button" class="btn btn-info btn-flat"><i class="fa fa-envelope"></i> </button>
	                </span>
	            </div>
		    </form>
	  	</div>
	</div>
</div>-->

<div class="row" style="color:black; font-family:sans-serif;">
	<div class="box box-solid">
	  	<div class="box-header with-border">
	    	<h3 class="box-title"><b>More About Us</b></h3>
	  	</div>
	  	<div class="box-body">
	    	<p>If you willing to know about ours project and this system purpose just simply click <a href="contact.php"> &diams; About Us &diams;</a></p>
	  	</div>
	</div>
</div>


