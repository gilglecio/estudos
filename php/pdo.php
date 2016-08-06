<?php

/**
 * Retornauma conexao com o PDO
 * 
 * @return \PDO
 */
function pdo()
{
	$pdo = new \PDO('mysql:host=localhost;dbname=estudos', 'root', 'root');
	$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

	return $pdo;
}