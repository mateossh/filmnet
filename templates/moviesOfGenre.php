<?php $genre = $this->get("movies")[0]; ?>

<div class="list">
	<h3> <?= $genre["name"]; ?> </h3>
	<?php if(!empty($this->get("movies")[1])): foreach($this->get("movies")[1] as $movie): ?> 
		<br>
		
		<span class="id" style="font-size: 1.3em">
			<?= $movie["id"] ?>
		</span>
		<span class="title" style="color: darkblue">
			<a href="index.php?action=singleMovie&task=<?= $movie['id'] ?>">
				<?= $movie["title"] ?>
			</a>
		</span>
	<?php endforeach; else: ?>
		Nie ma filmów z tego gatunku;
	<?php endif; ?>
</div>