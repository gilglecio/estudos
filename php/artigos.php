<?php

/**
 * Cadastra um artigo no banco de dados
 * 
 * @param  array
 * @return boolean
 */
function cadastrar_artigo(array $campos): bool
{
	$query = pdo()->prepare('
		insert into artigos set 
		title = :title, 
		content = :content,
		author_id = :user_id,
		created_at = now()
	');

	$execute = $query->execute([
		'title' => $campos['title'], 
		'content' => $campos['content'],
		'author_id' => $campos['author_id']
	]);

	return true;
}