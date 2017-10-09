<?php 
include('header.php');
if(isset($_SESSION['userfname'])){?>
	<script>
	location.href='user.php';
	</script>
<?php }
if(isset($_POST['email']) && isset($_POST['password'])){
				extract($_POST);
				$sql="select * from users where email='$email' and password='".md5($password)."'";
				$qr=mysql_query($sql);
				if(mysql_num_rows($qr)>0){
					$row=mysql_fetch_row($qr);
					$_SESSION['userfname']=$row[2];
					$_SESSION['userid']=$row[0];
					header("Location:user.php");
				}
				else{
					$error= "Email or password incorrect.";
				}
			}
			
			
			
			else{$error= "";}
			
			?>
<div id="mainBody">
	<div class="container">
	<div class="row">
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.html">Home</a> <span class="divider">/</span></li>
		<li class="active">Login</li>
    </ul>
	<h3> Login</h3>	
	<hr class="soft"/>	
	<div class="row">

		<div class="span1"> &nbsp;</div>
		<div class="span4">
			<div class="well">
			
			<form action="" method="post" name="loginform2">
			<p style="color:red">
			<?php echo $error;?>
			</p>
			  <div class="control-group">
				<label class="control-label" for="inputEmail1">Email</label>
				<div class="controls">
				  <input class="span3"  type="text" name="email" placeholder="Email">
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="inputPassword1">Password</label>
				<div class="controls">
				  <input type="password" class="span3"  name="password" placeholder="Password">
				</div>
			  </div>
			  <div class="control-group">
				<div class="controls">
				  <button type="submit" onclick="document.forms['loginform2'].submit()" class="btn">Sign in</button> <a href="forgetpass.php">Forget password?</a>
				</div>
			  </div>
			</form>
		</div>
		</div>
	</div>		
</div>
</div></div>
</div>
<?php include('footer.php');?>