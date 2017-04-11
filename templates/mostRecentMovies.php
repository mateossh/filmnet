<section class="List">
	<h2 class="List__Title">Premiery</h2>
	<ul class="Carousel">
		<?php foreach($this->get("mostRecent") as $movie): ?>
		<li class="List__Item">
			<img src="" />
			<h3><?= $movie["title"] ?></h3>
		</li>
		<?php endforeach; ?>
	</ul>
</section>
