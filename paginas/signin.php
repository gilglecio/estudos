<?php

include ROOT_PATH . DS . 'php' . DS . 'pdo.php';
include ROOT_PATH . DS . 'php' . DS . 'helpers.php';
include ROOT_PATH . DS . 'php' . DS . 'logar.php';

if (isset($_POST['email'])) {
	
	$errors = [];

	required($_POST, ['email', 'password'], $errors);	

	if ( ! email_valido($_POST['email'])) {
		$errors[] = 'E-mail inválido';
	}

	if ( ! $errors) {
		
		try {
			logar($_POST);

			header('Location: /');

		} catch (\Exception $e) {
			$errors[] = $e->getMessage();
		}

	}
	
	exibir_erros($errors);
}

?>

<section>
	<div class="row vertical-offset-100">
        <div class="col-md-4 col-md-offset-4">
        	<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Identifique-se, por favor</h3>
			 	</div>
			  	<div class="panel-body">
			    	<form accept-charset="UTF-8" method="post" role="form" enctype="multipart/form-data" action="?pagina=signin">
	                    <fieldset>
				    	  	<div class="form-group">
				    		    <input class="form-control" placeholder="email" name="email" type="text">
				    		</div>
				    		<div class="form-group">
				    			<input class="form-control" placeholder="password" name="password" type="password" value="">
				    		</div>

				    		<input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
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