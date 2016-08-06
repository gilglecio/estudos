<?php 

/**
 * FRONT CONTROLLER
 */
define('DS', DIRECTORY_SEPARATOR);
define('ROOT_PATH', __DIR__);

session_start();

/**
 * Postagens staticas
 * @var array
 */
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

/**
 * Paginas permitidas
 * @var array
 */
$paginas = [
	'home', 'posts', 'article', 'about', 'signin', 'signup', 'sair'
];

/**
 * Quando o usuário nao nformar uma pagina mandar para a home
 */
if ( ! isset($_GET['pagina']) || ! $_GET['pagina']) {
	$_GET['pagina'] = $paginas[0];
}

/**
 * Quando a pagina que o usupário informar não existir
 * manda para a 404
 */
if ( ! in_array($_GET['pagina'], $paginas)) {
	$_GET['pagina'] = '404';
}

/**
 * Sessão do usuário que estiver logado
 * @var array
 */
$user = isset($_SESSION['usuario']) ? $_SESSION['usuario'] : null;

/**
 * Header
 */
include 'layout/header.php';

/**
 * Páginas
 */
include 'paginas/' . $_GET['pagina'] . '.php';

/**
 * Header
 */
include 'layout/footer.php';
