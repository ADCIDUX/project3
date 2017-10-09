<?php include('header.php');
if(!isset($_SESSION['userfname'])){
	header("Location:login.php");
}
?>
<div id="mainBody">
	<div class="container">
	<div class="row">
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.php">Home</a> <span class="divider">/</span></li>
		<li class="active">Post Ads</li>
    </ul>
	<h3>Post Your Ad</h3>	
	<div class="well">
<?php 
if(isset($_POST['post-ad'])){
extract($_POST);	
	$reg=true;
	$error="";
	$userid=$_SESSION['userid'];
	if($model==''){$error.="Model is empty! ";$reg=false;}
	if($display<1){$error.="Display size is invalid! ";$reg=false;}
	if($features==''){$error.="Features is empty! ";$reg=false;}
	if($price<1){$error.="Price is invalid! ";$reg=false;}
	if($mobile==''){$error.="Mobile Number is empty! ";$reg=false;}
	//if($img1==''){$error.="Main Image is not inserted! ";$reg=false;}	
	
	if($reg==true){
		$sql="insert into advertise values ('','$features','$brand','$model','$display','$price','$mobile','$location','$condition','$userid','".date('Y-m-d H:i:s')."')";
		mysql_query($sql);
		$sql="select id from advertise where userid=$userid order by id desc limit 0,1";
		$qr=mysql_query($sql);
		$rowid=mysql_fetch_row($qr)[0];
	if ($_FILES["img1"]["error"] == 0) {
$imgname="ad".$rowid."photo1.jpg";
 move_uploaded_file($_FILES["img1"]["tmp_name"],
      "themes/images/products/". $imgname);
	}
	
	if ($_FILES["img2"]["error"] == 0) {
$imgname="ad".$rowid."photo2.jpg";
 move_uploaded_file($_FILES["img2"]["tmp_name"],
      "themes/images/products/". $imgname);
	}
	
	if ($_FILES["img3"]["error"] == 0) {
$imgname="ad".$rowid."photo3.jpg";
 move_uploaded_file($_FILES["img3"]["tmp_name"],
      "themes/images/products/". $imgname);
	}
	
	if ($_FILES["img4"]["error"] == 0) {
$imgname="ad".$rowid."photo4.jpg";
 move_uploaded_file($_FILES["img4"]["tmp_name"],
      "themes/images/products/". $imgname);
	}
	
	
		echo "<script>alert('Your ad has been posted.');
		location.href='product_details.php?id=$rowid';
		</script>";
	}
	else echo $error;	
}
?>
	<form class="form-horizontal" name="registerform" action="" enctype="multipart/form-data" method="post">
		<h4>Add Your Product Details</h4>
		<div class="control-group">		
		<label class="control-label">Brand</label>
		<div class="controls">
		  <select type="text" name="brand" style="width:220px">
		  <?php echo $sql="select * from brands order by brand_name asc";
		  $qr=mysql_query($sql);
		  while($row=mysql_fetch_array($qr)){
			  $location=$row[1];
			  echo "<option value=\"$location\">$location</option>";
		  }
		  ?>
		  </select>
		</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputFname1">Model</label>
			<div class="controls">
			  <input type="text" name="model" placeholder="Model">
			</div>
		 </div>
		 <div class="control-group">
			<label class="control-label" for="inputLnam">Condition</label>
			<div class="controls">
			  <label style="display:inline;width:100px" for="used"> <input name="condition" id="used" type="radio" value="Used" checked/> Used </label>&nbsp;&nbsp;&nbsp;
			  <label style="display:inline"><input name="condition" type="radio" value="New"/> New</label>
			</div>
		 </div>
		<div class="control-group">
		<label class="control-label" for="input_email">Display size</label>
		<div class="controls">
		  <input type="number" value="0.0" name="display" placeholder="Display size">
		</div>
	  </div>	  
	<div class="control-group">
		<label class="control-label" >Features</label>
		<div class="controls">
		<textarea name="features">
</textarea>
		</div>
	  </div>	  
		<div class="control-group">
		<label class="control-label">Location</label>
		<div class="controls">
		  <select type="text" name="location" style="width:220px">
		  <?php $sql="select * from locations order by location asc";
		  $qr=mysql_query($sql);
		  while($row=mysql_fetch_array($qr)){
			  $location=$row[1];
			  echo "<option value=\"$location\">$location</option>";
		  }
		  ?>
		  </select>
		</div>
	  </div>
		<div class="control-group">
			<label class="control-label" for="address">Price</label>
			<div class="controls">
			  <input type="number" name="price"  min-value="1"  placeholder="Price"/> 
			</div>
		</div>	
		<div class="control-group">
			<label class="control-label" for="address">Mobile</label>
			<div class="controls">
			  <input type="text" name="mobile" placeholder="Mobile"/> 
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="address">Main Image</label>
			<div class="controls">
			  <input type="file" name="img1" placeholder="Mobile"/> 
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="address">Image 02</label>
			<div class="controls">
			  <input type="file" name="img2" placeholder="Mobile"/> 
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="address">Image 03</label>
			<div class="controls">
			  <input type="file" name="img3" placeholder="Mobile"/> 
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="address">Image 04</label>
			<div class="controls">
			  <input type="file" name="img4" placeholder="Mobile"/> 
			</div>
		</div>		
	<div class="control-group">
			<div class="controls">
				<input class="btn btn-large btn-success" name="post-ad" type="submit" value="Post Ad" />
			</div>
		</div>		
	</form>
</div>
</div>
</div>
</div>
</div>
<?php include('footer.php');?>