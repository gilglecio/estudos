<section class="row">

	<?php foreach ($posts as $id => $post): ?>

	<article>

	  	<div class="col-sm-6 col-md-4">
	  		<a href="?pagina=article&post=<?php echo $id ?>">
	    		<div class="thumbnail">
	      			<img title="Imagem do Anonimous" alt="Imagem do Anonimous" src="/img/<?php echo $post['img'] ?>">
		      		<div class="caption">
		        		<h3><?php echo $post['title'] ?></h3>
		        		<?php echo $post['content'] ?>
		      		</div>
	    		</div>
	    	</a>
	  	</div>
	</article>

	<?php endforeach ?>
</section>