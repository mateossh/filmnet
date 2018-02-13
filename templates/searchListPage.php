<section class="List">
	<h2 class="List__Title">Wyniki wyszukiwania:</h2>
	<ul class="Carousel">
		<?php foreach($this->get("movies") as $movie): ?>
			<li class="List__Item"><a href="index.php?action=singleMovie&task=<?= $movie['id'] ?>">
				<img src="<?= $movie['poster'] ?>" />
				<h3><?= $movie['title'] ?></h3>
			</a></li>
		<?php endforeach; ?>
	</ul>
</section>
