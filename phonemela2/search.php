<?php include('header.php');?>
<div id="mainBody">
	<div class="container">
	<div class="row">
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.php">Home</a> <span class="divider">/</span></li>
		<li class="active">Search</li>
    </ul>	
	<hr class="soft"/>
	  
<div class="tab-pane  active" id="blockView">
							
			 <ul class="thumbnails">
			  <?php if(isset($_POST['q'])){
				  $q=$_POST['q'];
				  if($_POST['q']=='' && $_POST['location']=='all')
				  {
					  $sql="select * from advertise order by id desc limit 0 , 50";
				  }
				  elseif($_POST['q']==''){
					  $sql="select * from advertise where location='".$_POST['location']."' order by id desc";
				  }
				  elseif($_POST['location']=='all'){
					  $sql="select * from advertise where (features like '%$q%' or CONCAT(brand,' ',model) like '%$q%' or mobile like '%$q%')  order by id desc";
				  }
				  else{
					  
					  $sql="select * from advertise where ((features like '%$q%' or brand like '%$q%' or model like '%$q%' or mobile like '%$q%') and location='".$_POST['location']."') order by id desc";
				  }
				  
				  
			  }
			  else{	

			  $sql="select * from advertise order by id desc limit 0 , 50";}
			  //echo $sql;
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
	<hr class="soft"/>
	</div>
</div>
</div>
</div>
</div>
<?php include('footer.php');?>