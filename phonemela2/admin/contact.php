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
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
	<h3>Contact Us</h3>	
	<div class="well">
<?php 
if(isset($_POST['contact_save'])){
extract($_POST);	
	$sql="update contents set title='$title', content='".mysql_real_escape_string($content)."' where id=2";
	mysql_query($sql);
	echo "Saved successfully.";
}
 $sql="select * from contents where id=2";
	$qr=mysql_query($sql);
	$row=mysql_fetch_row($qr);
?>

	<form class="form-horizontal" name="registerform" action="" enctype="multipart/form-data" method="post">
		<h4>Title</h4>
		<div class="control-group">		
		<label class="control-label" for="inputFname1">Enter Title</label>
		<div class="controls">
<input type="text" name="title" value="<?php echo $row[1];?>"/>
		</div>
		</div>
		<h4>Content</h4>
		<div class="control-group">		
		<label class="control-label" for="inputFname1">Enter Content</label>
		<div class="controls">
<textarea style="width: 300px;" cols="15" rows="10" name="content">
<?php echo $row[2];?>
</textarea>
		</div>
		</div>
	
	<div class="control-group">
			<div class="controls">
				<input class="btn btn-large btn-success" name="contact_save" type="submit" value="SAVE" />
			</div>
		</div>		
	</form>



</div>
</div>
<?php include('footer.php');?>