<?php
error_reporting( E_ERROR );
include('db_config.php');
dbconnect();
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Phonemela</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<link id="callCss" rel="stylesheet" href="themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="themes/css/base.css" rel="stylesheet" media="screen"/>
	<link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
	<link href="themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
	<link rel="shortcut icon" href="img/favicon.png"/>
	<style type="text/css" id="enject"></style>
	<script type="text/javascript" src="themes/js/jquery.js"></script>
	<script type="text/javascript" src="themes/js/jquery.lightbox-0.5.js"></script>
	<script>
	function login(){
		document.getElementById('login').style.display='block';
	}
	</script><script>
	function login(){
		document.getElementById('login').style.display='block';
	}
	</script>
  </head>
<body>
<div id="header">
<div class="container">
<div id="welcomeLine" class="row">
	<div class="span6">Welcome <strong> <?php if(isset($_SESSION['userfname']) && $_SESSION['userfname']!=''){echo $_SESSION['userfname'];} else echo "Guest";
		 ?></strong></div>
	<div class="span6">
	</div>
</div>
<div id="logoArea" class="navbar">
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>
  <div class="navbar-inner">
    <a class="brand" href="index.php">
	<img src="themes/images/logo.png" style="max-width: 150px;" alt="Phonemela"/></a>
		<form class="form-inline navbar-search" method="post" action="search.php" >
		<input id="srch" class="srch" name="q" type="text" placeholder="Search Text" />&nbsp;<label class="control-label">Location</label>
		<div class="controls" style="display:inline">
		  <select type="text" name="location" style="width:120px">
		  <option value="all">All Location</option>
		  <?php $sql="select * from locations order by location asc";
		  $qr=mysql_query($sql);
		  while($row=mysql_fetch_array($qr)){
			  $location=$row[1];
			  echo "<option value=\"$location\">$location</option>";
		  }
		  ?>
		  </select>
		</div>
		  <button type="submit" id="submitButton" class="btn btn-primary">Go</button>
    </form>
    <ul id="topMenu" class="nav pull-right">
	 <li class=""><a href="all_ads.php">All Ads</a></li>
	 <li class=""><a href="about.php">About</a></li>
	 <li class=""><a href="contact.php">Contact</a></li>
	 <li class="">
	 <?php if(isset($_SESSION['userfname']) && $_SESSION['userfname']!=''){
		 ?>
		 <li class=""><a href="user.php">My Ads</a></li>
		 <a href="logout.php" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-failed">Logout</span></a>
<?php	 }
else{?>
	 <a href="#login" role="button" onclick="login()" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-success">Login</span></a>
<?php }?>	 
	 
	<div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >
		  <div class="modal-header">
			<button type="button" class="close" onclick="document.getElementById('login').style.display='none';" data-dismiss="modal" aria-hidden="true" style="color: red;">x</button>
			<h3>Login Block</h3>
		  </div>
		  <div class="modal-body">
			<form name="loginform" class="form-horizontal loginFrm" action="login.php" method="post">
			  <div class="control-group">								
				<input type="text" name="email" placeholder="Email">
			  </div>
			  <div class="control-group">
				<input type="password" name="password" placeholder="Password">
			  </div>
			  <div class="control-group">
				<label class="checkbox">
				<input type="checkbox"/> Remember me
				</label>
				<a href="forgetpass.php">Forgot Password</a>
			  </div>
			</form>		
			<button type="submit" onclick="document.forms['loginform'].submit()" class="btn btn-success">Sign in</button>
			<button type="submit" onclick="location.href='register.php'" class="btn btn-success">Register</button>
			<button class="btn" data-dismiss="modal" aria-hidden="true" onclick="document.getElementById('login').style.display='none';" >Close</button>
		  </div>
	</div>
	</li>
    </ul>
  </div>
</div>
</div>
</div>