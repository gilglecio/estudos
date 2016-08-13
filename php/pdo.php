<?php

if ( ! defined('DS')) {
	define('DS', DIRECTORY_SEPARATOR);
}

/**
 * Retornauma conexao com o PDO
 * 
 * @return \PDO
 */
function pdo()
{
	$config = require dirname(dirname(__FILE__)) . DS . 'config' . DS . 'config.php';

	$dns = sprintf('%s:host=%s;dbname=%s', $config->driver, $config->host, $config->dbname);

	$pdo = new \PDO($dns, $config->username, $config->password);
	$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

	return $pdo;
}