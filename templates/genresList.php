<section class="List">
	<h2 class="List__Title">Gatunki</h2>
	<ul class="Carousel">
	<?php if(!empty($this->get("genres"))): foreach($this->get("genres") as $genre): ?>
		<li class="List__Item"><a href="index.php?action=listMoviesByGenre&task=<?= $genre['id'] ?>">
			<h3><?= $genre['name'] ?></h3>
		</a></li>
	<?php endforeach; endif; ?>
	</ul>
</section>
