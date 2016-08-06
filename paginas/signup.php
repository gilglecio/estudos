<?php

include ROOT_PATH . DS . 'php' . DS . 'pdo.php';
include ROOT_PATH . DS . 'php' . DS . 'helpers.php';
include ROOT_PATH . DS . 'php' . DS . 'cadastrar.php';

if (isset($_POST['email'])) {
	
	$errors = [];

	required($_POST, ['email', 'password'], $errors);	

	if ( ! email_valido($_POST['email'])) {
		$errors[] = 'E-mail inválido';
	}

	if ( ! $errors) {
		
		try {
			cadastrar($_POST);

			echo 'Usuário cadastrado';

		} catch (\Exception $e) {
			$errors[] = $e->getMessage();
		}

	}
	
	exibir_erros($errors);
}

?>

<section>
	<form method="post" enctype="multipart/form-data" action="?pagina=signup">
		<fieldset>
			<legend>Cadastro</legend>
			
			<label>
				Email:
				<input  name="email">
			</label>

			<label>
				Senha:
				<input  type="password" name="password">
			</label>

			<label>
				<button type="submit">Cadastrar</button>
				<button type="reset">Limpar</button>
			</label>

		</fieldset>
	</form>
</section>

<style type="text/css">
	label {
		display: block;
		margin-bottom: 10px;
	}
</style>