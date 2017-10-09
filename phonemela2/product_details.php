<?php include('header.php');?>
<div id="mainBody">
	<div class="container">
	<div class="row">
	<div class="span9">
    <ul class="breadcrumb">
    <li><a href="index.php">Home</a> <span class="divider">/</span></li>
    <li><a href="products.php">Products</a> <span class="divider">/</span></li>
    <li class="active">product Details</li>
    </ul>	
	<div class="row">	  
	<?php
			if(isset($_GET['id'])){
		$sql="select * from advertise where id='".$_GET['id']."'";
		$qr=mysql_query($sql);
		if(mysql_num_rows($qr)>0){
		$ad=mysql_fetch_array($qr);
		extract($ad);
		$img1="themes/images/products/ad$ad[0]photo1.jpg";
		$img2="themes/images/products/ad$ad[0]photo2.jpg";
		$img3="themes/images/products/ad$ad[0]photo3.jpg";
		$img4="themes/images/products/ad$ad[0]photo4.jpg";
		//echo print_r($ad);
			?>
			<table><tr rowspan="2"><td>
			<div id="gallery" class="span3">
            <a href="<?php echo $img1;?>" title="<?php echo $ad[1];?>">
				<img src="<?php echo $img1;?>" style="width:100%" alt="<?php echo $ad[1];?>"/>
            </a>
			<div id="differentview" class="moreOptopm carousel slide">
                <div class="carousel-inner">
                  <div class="item active">
				  <?php if(file_exists($img2)){?>
                   <a href="<?php echo $img2;?>"> <img style="width:29%" src="<?php echo $img2;?>" alt=""/></a>
				  <?php }?>
                   <?php if(file_exists($img3)){?>
                   <a href="<?php echo $img3;?>"> <img style="width:29%" src="<?php echo $img3;?>" alt=""/></a>
				  <?php }?>
                   <?php if(file_exists($img4)){?>
                   <a href="<?php echo $img4;?>"> <img style="width:29%" src="<?php echo $img4;?>" alt=""/></a>
				  <?php }?>
                  </div>
                  <div class="item">
                   <?php if(file_exists($img2)){?>
                   <a href="<?php echo $img2;?>"> <img style="width:29%" src="<?php echo $img2;?>" alt=""/></a>
				  <?php }?>
                   <?php if(file_exists($img3)){?>
                   <a href="<?php echo $img3;?>"> <img style="width:29%" src="<?php echo $img3;?>" alt=""/></a>
				  <?php }?>
				  <?php if(file_exists($img4)){?>
                   <a href="<?php echo $img4;?>"> <img style="width:29%" src="<?php echo $img4;?>" alt=""/></a>
				  <?php }?>
                  </div>
                </div>
              </div>
			</div>
			</td><td>
			<div class="span6">
				<h3><?php echo $ad[2]." ".$ad[3];?></h3>

			</div>			
			<div class="span9">
            <ul id="productDetail" class="nav nav-tabs">
              <li class="active"><a href="#home" data-toggle="tab">Product Details</a></li>              
            </ul>
            <div id="myTabContent" class="tab-content">
              <div class="tab-pane fade active in" id="home">
			  <h4>Product Information</h4>
                <table class="table table-bordered">
				<tbody>
				<tr class="techSpecRow"><td class="techSpecTD1">Brand: </td><td class="techSpecTD2"><?php echo $brand;?></td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Model:</td><td class="techSpecTD2"><?php echo $model;?></td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Display size:</td><td class="techSpecTD2"><?php echo $displaysize;?> inches</td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Price</td><td class="techSpecTD2">BDT <?php echo $price;?>/-</td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Location</td><td class="techSpecTD2"><?php echo $location;?></td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Contact Number</td><td class="techSpecTD2"><?php echo $mobile;?></td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Posted</td><td class="techSpecTD2"><?php echo date('Y M d',strtotime($datetime));?></td></tr>
				</tbody>
				</table>				
				<h5>Features</h5>
				<p>
				<?php echo $features;?>
				</p>				
              </div>	
			<?php }
			}
			?>			  
		</div>
				<br class="clr">
					 </div>
					 </td></tr></table>
		</div>
          </div>
	</div>
</div>
</div> 
<?php include('footer.php');?>