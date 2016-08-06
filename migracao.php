<?php

include 'php/pdo.php';

$sql = file_get_contents('db/estudos.sql');

$pdo = pdo();

if ( ! $pdo->query($sql)) {
	echo implode('<br>', $pdo->errorInfo());
}

echo 'OK';