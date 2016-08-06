<?php $post = $posts[ $_GET['post'] ] ?>

<section>

	<article>

		<h2><?php echo $post['title'] ?></h2>

		<img width="300px" title="Imagem do Anonimous" alt="Imagem do Anonimous" src="/img/<?php echo $post['img'] ?>">

		<?php echo $post['content'] ?>
	</article>

</section>