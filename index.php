<?php 

/**
 * FRONT CONTROLLER
 */

/**
 * Header
 */
include 'layout/header.php';

$posts = [
	[
		'title' => 'Posts 01',
		'img' => 'img1.jpg',
		'content' => '<p>Uma célula brasileira da Anonymous acabou de divulgar que teve sucesso.</p>'
	],
	[
		'title' => 'Posts 02',
		'img' => 'img1.jpg',
		'content' => '<p>Uma célula brasileira da Anonymous acabou de divulgar que teve sucesso.</p>'
	],
	[
		'title' => 'Posts 03',
		'img' => 'img1.jpg',
		'content' => '<p>Uma célula brasileira da Anonymous acabou de divulgar que teve sucesso.</p>'
	],
	[
		'title' => 'Posts 04',
		'img' => 'img1.jpg',
		'content' => '<p>Uma célula brasileira da Anonymous acabou de divulgar que teve sucesso.</p>'
	]
];

$paginas = [
	'home', 'posts', 'article', 'about', 'signin', 'signup'
];

if ( ! in_array($_GET['pagina'], $paginas)) {
	$_GET['pagina'] = '404';
}

/**
 * Páginas
 */
include 'paginas/' . $_GET['pagina'] . '.php';

/**
 * Header
 */
include 'layout/footer.php';
