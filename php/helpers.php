<?php

/**
 * Faz dubug de uma variável
 * Por padrão usa print_r
 * Caso $v seja TRUE usa var_dump
 * 
 * @param  any
 * @param  bool|boolean
 * @return void
 */
function dd($i, bool $v = false)
{
	echo '<pre>';

	if ($v) {
		var_dump($i);
	} else {
		print_r($i);
	}

	die('</pre>');
}

/**
 * Verificar se um valor na coluna ja exista em uma tabela
 * 
 * @param  string
 * @param  string
 * @param  string
 * @return void
 */
function registro_unico(string $coluna, string $valor, string $tabela)
{
	$verificar = pdo()->prepare('select count(*) as `count` from ' . $tabela . ' where email = :email limit 1');
	$verificar->execute([
		'email' => $valor
	]);

	$count = $verificar->fetch(\PDO::FETCH_ASSOC)['count'];

	if ($count) {
		throw new \Exception(ucfirst($coluna) . ' já cadastrado', 1);
	}
}

/**
 * @param  string
 * @return boolean
 */
function email_valido($email): bool 
{
	return filter_var($email, FILTER_VALIDATE_EMAIL);
}

/**
 * Valida os $campos obrigatório em $post
 * 
 * @param  array
 * @param  array
 * @param  array
 * @return void
 */
function required(array $post, array $campos, array &$errors)
{
	foreach ($campos as $campo) {
		if ( ! $post[$campo]) {
			$errors[] = $campo . ' é obrigatório';
		}
	}
}

/**
 * Exibe os erros em forma de lista não ordenada
 * 
 * @param  array
 * @return void
 */
function exibir_erros(array $errors)
{
	echo '<div class="alert alert-danger" role="alert">
		<p>' . implode('</p><p>', $errors) . '</p></div>';
}