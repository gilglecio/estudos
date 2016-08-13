<?php

include ROOT_PATH . DS . 'php' . DS . 'pdo.php';
include ROOT_PATH . DS . 'php' . DS . 'helpers.php';
include ROOT_PATH . DS . 'php' . DS . 'cadastrar.php';

$sucesso = null;
$errors = [];

if (isset($_POST['email'])) {

	required($_POST, ['email', 'password'], $errors);	

	if ( ! email_valido($_POST['email'])) {
		$errors[] = 'E-mail inválido';
	}

	if ( ! $errors) {
		
		try {
			cadastrar($_POST);

			$sucesso = 'Usuário cadastrado';

		} catch (\Exception $e) {
			$errors[] = $e->getMessage();
		}
	}
}

?>

<section>
	<div class="row vertical-offset-100">
        <div class="col-md-4 col-md-offset-4">

	        <?php if ($sucesso): ?>
	        <div class="alert alert-success" role="alert"><?= $sucesso ?></div>
	        <?php endif ?>

	        <?php if ($errors) exibir_erros($errors); ?>

        	<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Registre-se, por favor</h3>
			 	</div>
			  	<div class="panel-body">
			    	<form accept-charset="UTF-8" method="post" role="form" enctype="multipart/form-data" action="?pagina=signup">
	                    <fieldset>
				    	  	<div class="form-group">
				    		    <input class="form-control" placeholder="email" name="email" type="text">
				    		</div>
				    		<div class="form-group">
				    			<input class="form-control" placeholder="password" name="password" type="password" value="">
				    		</div>

				    		<input class="btn btn-lg btn-success btn-block" type="submit" value="Cadastrar">
				    	</fieldset>
			      	</form>
			    </div>
			</div>
		</div>
	</div>
</section>

<style type="text/css">
	label {
		display: block;
		margin-bottom: 10px;
	}
</style>