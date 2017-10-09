<?php include('header.php');
include('function.php');
?>
<div id="mainBody">
	<div class="container">
	<div class="row">
	</div>
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.php">Home</a> <span class="divider">/</span></li>
		
		<li class="active">All Ads</li>
    </ul>
	<hr class="soft"/>
	<div class="tab-pane  active" id="blockView">
		<ul class="thumbnails">									
		<?php
		$max_results = 6;
			$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM advertise where 1 order by  id asc"),0);
			$total_pages = ceil($total_results / $max_results);
	if(!isset($_GET['page']))
	{$page=1;}
	else $page=$_GET['page'];
$from = (($page * $max_results) - $max_results);
		$sql="select * from advertise order by id desc limit $from , $max_results";
			  
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
		 <?php 
		  Navigation($page,$max_results,"advertise","1","id",$asc="ASC","");?>
	<hr class="soft"/>
	</div>
</div>
</div>
</div>
<?php include('footer.php');?>