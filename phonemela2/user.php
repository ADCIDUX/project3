<?php include('header.php');
if(!isset($_SESSION['userfname'])){
	header("Location:login.php");
}
if(isset($_POST['delete'])){
	$id=$_POST['id'];
	$sql="delete from advertise where id=$id";
	mysql_query($sql);
	$file="themes/images/products/ad".$id."photo";
	if(file_exists($file."1.jpg"))unlink($file."1.jpg");
	if(file_exists($file."2.jpg"))unlink($file."2.jpg");
	if(file_exists($file."3.jpg"))unlink($file."3.jpg");
	if(file_exists($file."4.jpg"))unlink($file."4.jpg");
	?>
	<script>
	location.href='user.php';
	</script>
	<?php
}
?>
<script>
function del(id)
				{
				
var r = confirm("Do you Really Want to Delete!");
if (r == true) {
var fn="delf"+id+"";
    document.forms[fn].submit();
} else {
    
}
				}
</script>
<div id="mainBody">
	<div class="container">
	<div class="row">
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.html">Home</a> <span class="divider">/</span></li>
		<li class="active">User</li>
    </ul>
	<h3> Welcome <?php echo $_SESSION['userfname'];?></h3>	
	<hr class="soft"/>	
	<div class="row">
		<div class="span1"> <a href="post_ad.php" style="width: 150px;" class="btn btn-large btn-success">POST AD</a></div>
	</div>	
	
<table>
<tr>
<th>Your posted Ads</th>
</tr><?php
$sql="select * from advertise where userid='".$_SESSION['userid']."' order by id desc limit 0 , 50";
			  //echo $sql;
			  $qr=mysql_query($sql);
			  while($row=mysql_fetch_array($qr)){
			  extract($row);
			  ?>
			  <tr>
			  <td>
			  <table border="2">
			  <tr style="vertical-align:top"><td>
			  <a  href="product_details.php?id=<?php echo $id;?>"><img style="width: 100px;" src="themes/images/products/ad<?php echo $id;?>photo1.jpg" alt=""/></a>
			  </td>
			  <td style="padding:10px"><a  href="product_details.php?id=<?php echo $id;?>"><b style="font-size:16px"><?php echo $brand." ".$model;?></b></a>
			  <br>Price: BDT<?php echo $price;?>/-
			  <br>Posted: <?php echo date('d M Y h:i:s A',strtotime($datetime));?>
			  </td>
			  <td style="vertical-align:middle"><form name="delf<?php echo $id;?>" method="post" action=""><input type="hidden" name="id" value="<?php echo $id;?>"/><input type="hidden" name="delete"/><button onclick="del('<?php echo $id;?>')"> Delete</button></form></td>
			  </tr></table>
			  </td>
			  </tr>
			  <?php }?>
</table>	
</div>
</div>
</div>
</div>
<?php include('footer.php');?>