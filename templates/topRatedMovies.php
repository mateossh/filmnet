<div class="list">
	<h3> najlepsze filmy!!!! </h3>
	<?php foreach($this->get("topRatedMovies") as $movie): ?> 
			<br>
			<span class="id" style="font-size: 1.3em">
				<?= $movie["id"] ?>
			</span>
			<span class="title" style="color: darkblue">
				<?= $movie["title"] ?>
			</span>
	<?php endforeach; ?>
</div>