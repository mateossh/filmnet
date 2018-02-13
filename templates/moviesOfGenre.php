<?php $genre = $this->get("genre"); ?>

<?php if(!empty($this->get("movies"))): ?>
<section class="List">
	<h2 class="List__Title">Kategoria: <?= $genre['name'] ?></h2>
	<ul class="Carousel">
		<?php foreach($this->get("movies")[1] as $movie): ?>
			<li class="List__Item"><a href="index.php?action=singleMovie&task=<?= $movie['id'] ?>">
				<img src="<?= $movie['poster'] ?>" />
				<h3><?= $movie['title'] ?></h3>
			</a></li>
		<?php endforeach; ?>
	</ul>
</section>
<?php else: ?>
	<div class="NotFound">
		Nie ma filmów z tego gatunku
	</div>
<?php endif; ?>
