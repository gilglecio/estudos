<?php

/**
 * Cadas um usuário no banco de dados
 * 
 * @param  array
 * @return boolean
 */
function logar(array $campos): bool
{
	$query = pdo()->prepare('select * from usuarios where email = :email');

	$execute = $query->execute([
		'email' => $campos['email']
	]);

	$usuario = $query->fetch(\PDO::FETCH_ASSOC);

	if ( ! $usuario) {
		// throw new \Exception('Usuário não cadastrado', 1);
	}

	if ( ! password_verify($campos['password'], $usuario['password'])) {
		throw new \Exception('Email ou senha inválidos', 1);
	}

	$_SESSION['usuario'] = [
		'id' => $usuario['id'],
		'email' => $usuario['email']
	];

	return true;
}