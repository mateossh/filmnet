<div class="list">
	<h3> gatunki!!!!</h3>
	<?php if(!empty($this->get("genres"))): foreach($this->get("genres") as $genre): ?> 
		<br>
		<span class="id" style="font-size: 1.3em">
			<?= $genre["id"] ?>
		</span>
		<span class="title" style="color: darkblue">
			<a href="index.php?action=listMoviesByGenre&task=<?= $genre['id'] ?>">
				<?= $genre["name"] ?>
			</a>
		</span>
	<?php endforeach; endif; ?>
</div>