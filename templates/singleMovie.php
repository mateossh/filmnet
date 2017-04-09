<div class="one">
	<?php foreach($this->get("movies") as $movie): ?> 
			<span class="id">
				<?= $movie["id"] ?>
			</span>
			<span class="title" style="color: darkblue; font-size: 5em">
				<?= $movie["title"] ?>
			</span>
	<?php endforeach; ?>
</div>