<!doctype html>

<html>
	<head>
		<title>EspacoGeek</title>
		<meta charset="utf-8">

		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0">

		<link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.css">

		<style type="text/css">
			body {
				padding-top: 100px;
			}
		</style>

		<script type="text/javascript" src="/bower_components/jquery/dist/jquery.js"></script>
		<script type="text/javascript" src="/bower_components/bootstrap/dist/js/bootstrap.js"></script>
	</head>
	<body>
		
		<nav class="navbar navbar-default navbar-fixed-top">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#">
		      	<img width="70" src="/espacogeek.png"></a>
		      </a>
		    </div>

		    <div class="collapse navbar-collapse">
		      <ul class="nav navbar-nav">
		        <li><a href="/">Home</a></li>
				<li><a href="?pagina=posts">Posts</a></li>
				<li><a href="?pagina=about">About</a></li>

				<?php if ($user): ?>
				<li><a href="?pagina=sair">(<?=$user['email'] ?>) Sair</a></li>
				<?php else: ?>
				<li><a href="?pagina=signin">Sign In</a></li>
				<li><a href="?pagina=signup">sign Up</a></li>
				<?php endif ?>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
		
		<div class="container">