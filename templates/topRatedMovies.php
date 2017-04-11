<section class="list">
	<h2 class="List__Title">najlepsze filmy!!!!</h2>
	<ul class="Carousel">
		<?php foreach($this->get("topRated") as $movie): ?>
			<li class="List__Item">
				<img src="" />
				<h3><?= $movie["title"] ?></h3>
			</li>
		<?php endforeach; ?>
	</ul>
</section>
