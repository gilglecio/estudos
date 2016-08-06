<?php

/**
 * Cadastra um usuário no banco de dados
 * 
 * @param  array
 * @return boolean
 */
function cadastrar(array $campos): bool
{
	registro_unico('email', $campos['email'], 'usuarios');

	$query = pdo()->prepare('insert into usuarios set email = :email, password = :password');

	$execute = $query->execute([
		'email' => $campos['email'],
		'password' => password_hash($campos['password'], PASSWORD_DEFAULT)
	]);

	return true;
}