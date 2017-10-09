<?php include ('header.php');?>
<div id="mainBody">
	<div class="container">
	<div class="row">
		<div class="span9">		
			<div class="well well-small">			
		</div>
		<center><h2 style= color:red>Welcome To Our Website</h2></center>
		<h4>Latest Ads </h4>
			  <ul class="thumbnails">
			  <?php 
			  $sql="select * from advertise order by id desc limit 0 , 6";
			  $qr=mysql_query($sql);
			  while($row=mysql_fetch_array($qr)){
				  extract($row);
			  ?>
				<li class="span3">
				  <div class="thumbnail">
					<a  href="product_details.php?id=<?php echo $id;?>"><img src="themes/images/products/ad<?php echo $id;?>photo1.jpg" alt=""/></a>
					<div class="caption">
					  <h5><?php echo $title;?></h5>
					  <p> 
						<?php echo $brand." ".$model;?>
					  </p>
					  <p> 
						<?php echo "BDT ".$price."/-";?>
					  </p><p> 
						<?php echo "Location: ".$location;?>
					  </p>
					 </div>
				  </div>
				</li>
			  <?php }?>
				
				
			  </ul>	
		</div>
		</div>
	</div>
</div>
<?php include('footer.php');?>