<div class="list">
	<h3> najnowsze filmy!!!!</h3>
	<?php if(!empty($this->get("mostRecent"))): foreach($this->get("mostRecent") as $movie): ?> 
		<br>
		<span class="id" style="font-size: 1.3em">
			<?= $movie["id"] ?>
		</span>
		<span class="title" style="color: darkblue">
			<a href="index.php?action=singleMovie&task=<?= $movie['id'] ?>">
				<?= $movie["title"] ?>
			</a>
		</span>
	<?php endforeach; endif; ?>
</div>