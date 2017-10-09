<?php include('header.php');
if(isset($_POST['msg'])){
	extract($_POST);
	$datetime=date('Y-m-d H:i:s');
	$sql="insert into faq values ('','$name','$email','$subject','$msg','$datetime')";
	$qr=mysql_query($sql);
	if($qr){
		?>
		<script>
		alert('Your message has been sent.');
		location.href='contact.php';
		</script>
		<?php
	}
}
?>
<div id="mainBody">
<div class="container">
	<hr class="soften">
	<h1>Visit us</h1>
	<?php $sql="select * from contents where id=2";
	$qr=mysql_query($sql);
	$row=mysql_fetch_row($qr);?>
	<hr class="soften"/>	
	<div class="row">
		<div class="span4">
		<h4><?php echo $row[1];?></h4>
		<p>	<?php echo str_replace(array("\r\n", "\n\r", "\r", "\n"),"<br>",$row[2]);?></p>		
		</div>
			<div class="span4">
		<h4>Email Us</h4>
		<form class="form-horizontal" method="post" action="">
        <fieldset>
          <div class="control-group">          
              <input type="text" placeholder="name" name="name" class="input-xlarge"/>           
          </div>
		   <div class="control-group">          
              <input type="text" placeholder="email" name="email" class="input-xlarge"/>          
          </div>
		   <div class="control-group">           
              <input type="text" placeholder="subject" name="subject" class="input-xlarge"/>          
          </div>
          <div class="control-group">
              <textarea rows="3" id="textarea" name="msg" class="input-xlarge"></textarea>           
          </div>
            <button class="btn btn-large" type="submit">Send Messages</button>
        </fieldset>
      </form>
		</div>
	</div>
	</div>
</div>
<?php include('footer.php');?>