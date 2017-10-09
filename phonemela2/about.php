<?php include('header.php');?>
<div id="mainBody">
	<div class="container">
	<div class="row">
	<div class="span9" id="mainCol">
    <ul class="breadcrumb">
		<li><a href="index.php">Home</a> <span class="divider">/</span></li>
		<li class="active">About Us</li>
    </ul>
	<?php $sql="select * from contents where id=1";
	$qr=mysql_query($sql);
	$row=mysql_fetch_row($qr);?>
	<h3><?php echo $row[1];?></h3>	
	<hr class="soft"/>
	<p><?php echo str_replace(array("\r\n", "\n\r", "\r", "\n"),"<br>",$row[2]);?>	
	</p>
</div>
</div>
</div>
<?php include('footer.php');?>