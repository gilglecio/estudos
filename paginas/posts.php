<section>

	<?php foreach ($posts as $id => $post): ?>

	<article>

		<h2><a href="?pagina=article&post=<?php echo $id ?>"><?php echo $post['title'] ?></a></h2>

		<img width="300px" title="Imagem do Anonimous" alt="Imagem do Anonimous" src="/img/<?php echo $post['img'] ?>">

		<?php echo $post['content'] ?>
	</article>

	<?php endforeach ?>
</section>