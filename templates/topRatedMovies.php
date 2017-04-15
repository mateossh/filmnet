<div class="list">
	<h3> najlepsze filmy!!!! </h3>
	<?php if(!empty($this->get("topRated"))): foreach($this->get("topRated") as $movie): ?> 
		<br>
		<span class="id" style="font-size: 1.3em">
			<?= $movie["id"] ?>
		</span>
		<span class="title" style="color: darkblue">
			<?= $movie["title"] ?>
		</span>
	<?php endforeach; endif; ?>
</div>