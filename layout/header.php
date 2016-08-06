<!doctype html>

<html>
	<head>
		<title>EspacoGeek</title>
		<meta charset="utf-8">
	</head>
	<body>
		
		<h1><a href="/"><img width="300" src="/espacogeek.png"></a></h1>

		<hr>
		
		<nav>
			<ul>
				<li><a href="/">Home</a></li>
				<li><a href="?pagina=posts">Posts</a></li>
				<li><a href="?pagina=about">About</a></li>

				<?php if ($user): ?>
				<li><?=$user['email'] ?> | <a href="?pagina=sair">Sair</a></li>
				<?php else: ?>
				<li><a href="?pagina=signin">Sign In</a></li>
				<li><a href="?pagina=signup">sign Up</a></li>
				<?php endif ?>
			</ul>
		</nav>

		<hr>