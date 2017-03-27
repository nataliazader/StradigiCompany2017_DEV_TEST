<?php $directoryURI = $_SERVER['REQUEST_URI']; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="UTF-8">
		<title>KRAKEN</title>
		<link rel="icon" href="../public/img/img-kraken.png">
		<link href="../public/css/bootstrap.min.css" rel="stylesheet">
		<link href="../public/css/navbar-fixed-top.css" rel="stylesheet">
		<link href="../public/css/style.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<nav class="navbar navbar-default navbar-fixed-top">
		  <div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand">
					<img class="logo-desktop" src="../public/img/logo-desktop.png" alt="logo-desktop">
				</a>
				<a class="navbar-brand">
					<img class="logo-mobile" src="../public/img/logo-mobile.png" alt="logo-mobile" >
				</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">LOGOUT</a></li>
					<li class="<?= (isset($images)) ? 'active':''; ?>"><a href="#">GALLERY</a></li>
					<li class="<?= (isset($items)) ? 'active':''; ?>"><a href="#">LIST ITEMS</a></li>
					<li>
						<a class="user-profilepic">
							<img class="img-circle" src="../public/img/user-profilepic.jpg" alt="user">
							<span class="badge pull-right">2</span>
						</a>
						<a class="user-messages">
							MESSAGES
							<span class="badge pull-right">2</span>
						</a>			
					</li>
				</ul>
			</div>
		  </div>
		</nav>

