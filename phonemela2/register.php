<?php include('header.php');?>
<div id="mainBody">
	<div class="container">
	<div class="row">
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.php">Home</a> <span class="divider">/</span></li>
		<li class="active">Registration</li>
    </ul>
	<h3> Registration</h3>	
	<div class="well">
<?php 
if(isset($_POST['register'])){
extract($_POST);	
	$reg=true;
	$error="";
	if($fname==''){$error.="First name is empty! ";$reg=false;}
	if($lname==''){$error.="Last name is empty! ";$reg=false;}
	if($email==''){$error.="Email is empty! ";$reg=false;}
	if($password==''){$error.="Password is empty! ";$reg=false;}
	if($dob==''){$error.="Date of birth is empty! ";$reg=false;}
	if($address==''){$error.="Address is empty! ";$reg=false;}
	if($city==''){$error.="City is empty! ";$reg=false;}
	if($mobile==''){$error.="Mobile Number is empty! ";$reg=false;}
	if($reg==true){
$sql="insert into users values ('','$title','$fname','$lname','$email','".md5($password)."','$dob','$address','$city','$mobile')";
$result=mysql_query($sql);
		echo "<script>alert('Registration successful. Now you can login.');
		location.href='login.php';
		</script>";
	}
	else echo $error;	
}
?>
	<form class="form-horizontal" name="registerform" action="" method="post">
		<h4>Your personal information</h4>
		<div class="control-group">		
		<label class="control-label">Title </label>
		<div class="controls">
		<select class="span1" name="title">
			<option value="Mr.">Mr.</option>
			<option value="Mrs.">Mrs.</option>
			<option value="Miss">Miss</option>
		</select>
		</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputFname1">First name </label>
			<div class="controls">
			  <input type="text" name="fname" placeholder="First Name">
			</div>
		 </div>
		 <div class="control-group">
			<label class="control-label" for="inputLnam">Last name </label>
			<div class="controls">
			  <input type="text" name="lname" placeholder="Last Name">
			</div>
		 </div>
		<div class="control-group">
		<label class="control-label" for="input_email">Email </label>
		<div class="controls">
		  <input type="text" name="email" placeholder="Email">
		</div>
	  </div>	  
	<div class="control-group">
		<label class="control-label" for="inputPassword1">Password </label>
		<div class="controls">
		  <input type="password" name="password" placeholder="Password">
		</div>
	  </div>	  
		<div class="control-group">
		<label class="control-label">Date of Birth </label>
		<div class="controls">
		  <input type="text" name="dob" placeholder="1990-12-31"/>
		</div>
	  </div>
		<div class="control-group">
			<label class="control-label" for="address">Address</label>
			<div class="controls">
			  <input type="text" name="address" placeholder="Adress"/> 
			</div>
		</div>		
		<div class="control-group">
			<label class="control-label" for="city">City</label>
			<div class="controls">
			  <input type="text" name="city" placeholder="city"/> 
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="mobile">Mobile Phone </label>
			<div class="controls">
			  <input type="text"  name="mobile" id="mobile" placeholder="Mobile Phone"/> 
			</div>
		</div>
	<div class="control-group">
			<div class="controls">
				<input class="btn btn-large btn-success" name="register" type="submit" value="Register" />
			</div>
		</div>		
	</form>
</div>
</div>
</div>
</div>
</div>
<?php include('footer.php');?>