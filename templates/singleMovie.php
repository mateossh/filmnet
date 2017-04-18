<div class="one">
	<?php $movie = $this->get("movie"); ?> 
	
	<span class="id">
		<?= $movie["id"] ?>
	</span>

	<span class="title" style="color: darkblue; font-size: 5em">
		<?= $movie["title"] ?>
	</span>

	<span class="desc" style="color: grey;">
		<?= $movie["description"] ?>
	</span>

	<?php if (!empty($movie["genres"])): foreach ($movie["genres"] as $genre): ?>
		<span class="genre_<?= $genre["id"] ?>">
			<?= $genre["name"] ?>
		</span>
	<?php endforeach; endif; ?> 

</div>