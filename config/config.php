<?php

$usuario = exec('whoami');
$maquina = exec('hostname');

$arquivo = $usuario . '@' . $maquina . '.json';
$arquivo = __DIR__ . DIRECTORY_SEPARATOR . $arquivo;

if ( ! file_exists($arquivo)) {

	$env = file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'env.json');

	$fo = fopen($arquivo, 'w+');
	fwrite($fo, $env);
	fclose($fo);
}

$config = file_get_contents($arquivo);
$config = json_decode($config);

return $config;