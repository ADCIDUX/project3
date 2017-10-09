<?php 
include('header.php');
include('../db_config.php');
dbconnect();
if(!isset($_SESSION['admin_id'])){
	header("Location:index.php");
	
}
?>
                <div id="content" class="span10">
	

<ul class="breadcrumb">
                        <li>
                            <i class="icon-home"></i>
                            <a href="admin_master.php">Home</a> 
                            <i class="icon-angle-right"></i>
                        </li>
                        <li><a href="brand_location.php">Brand / Location</a></li>
                    </ul>
	<h3>Brands</h3>	
	<div class="well">
<?php 
if(isset($_POST['add_brand'])){
extract($_POST);	
	$sql="insert into brands values('','$brand')";
	mysql_query($sql);
	echo "Brand Added.";
}
if(isset($_POST['add_location'])){
extract($_POST);	
	$sql="insert into locations values('','$location')";
	mysql_query($sql);
	echo "Location Added.";
}
?>
	<form class="form-horizontal" name="registerform" action="" enctype="multipart/form-data" method="post">
		<h4>Add Brand</h4>
		<div class="control-group">		
		<label class="control-label" for="inputFname1">Brand Name</label>
		<div class="controls">
<input type="text" name="brand" placeholder="brand name"/>
		</div>
		</div>
	<!--	
		<div class="control-group">
		<label class="control-label">Location</label>
		<div class="controls">
		  <select type="text" name="location" style="width:220px">
		  <?php 
		  $sql="select * from locations order by location asc";
		  $qr=mysql_query($sql) or print("error");
		  while($row=mysql_fetch_array($qr)){
			  $location=$row[1];
			//  echo "<option value=\"$location\">$location</option>";
		  }
		  ?>
		  </select>
		</div>
	  </div>
	-->
	<div class="control-group">
			<div class="controls">
				<input class="btn btn-large btn-success" name="add_brand" type="submit" value="Add Brand" />
			</div>
		</div>		
	</form>

	<form class="form-horizontal" name="registerform" action="" enctype="multipart/form-data" method="post">
		<h4>Add Location</h4>
		<div class="control-group">		

		<label class="control-label" for="inputFname1">Location</label>
		<div class="controls">
<input type="text" name="location" placeholder="location"/>
		</div>
		</div>
		
<!--		<div class="control-group">
		<label class="control-label">Location</label>
		<div class="controls">
		 
		  <?php 
		  $sql="select * from locations order by location asc";
		  $qr=mysql_query($sql) or print("error");
		  while($row=mysql_fetch_array($qr)){
			  $location=$row[1];
			 // echo "<option value=\"$location\">$location</option>";
		  }
		  ?>
		  
		</div>
	  </div>-->
	
	<div class="control-group">
			<div class="controls">
				<input class="btn btn-large btn-success" name="add_location" type="submit" value="Add Location" />
			</div>
		</div>		
	</form>


</div>
</div>
<?php include('footer.php');?>