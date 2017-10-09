<?php 
include('header.php');
include('function.php');
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
                        <li><a href="users.php">Users</a></li>
                    </ul>
	<h3>Users</h3>	
	<div class="well">	<hr class="soft"/>
	<div class="tab-pane  active" id="blockView">
		<ul class="thumbnails">		
<table border="1" ><tr>
<th>Name		
</th><th>Email		
</th><th>Date of Birth		
</th><th>Address		
</th><th>City		
</th><th>Mobile		
</th>	<th>Total Posts		
</th></tr>		
		<?php
		$max_results = 6;
			$total_results = mysql_result(mysql_query("SELECT COUNT(*) as Num FROM users where 1 order by  id asc"),0);
			$total_pages = ceil($total_results / $max_results);
	if(!isset($_GET['page']))
	{$page=1;}
	else $page=$_GET['page'];
$from = (($page * $max_results) - $max_results);
if($from<0)$from=0;
		$sql="select * from users order by id desc limit $from , $max_results";
			  
			  $qr=mysql_query($sql);
			  if(mysql_num_rows($qr)>0){
			  while($row=mysql_fetch_array($qr)){
				  extract($row);
			  ?>
			  <tr>
<th><?php echo $fname." ".$lname;?>		
</th><th><?php echo $email;?>	
</th><th><?php echo date('d M, Y',strtotime($dob));?>	
</th><th><?php echo $address;?>	
</th><th><?php echo $city;?>	
</th><th><?php echo $mobile;?>	
</th>	<th><?php $sql="select count(*) from advertise where userid=$id";
$qr=mysql_query($sql);
$n=0;
$row=mysql_fetch_array($qr);
$n=$row[0];
echo $n;?>
</th></tr>		

			  <?php }
			  }?>
		  </ul>
		  
		  </table><br>
		 <?php 
		  Navigation($page,$max_results,"users","1","id",$asc="ASC","");?>

</div>
</div>
<?php include('footer.php');?>