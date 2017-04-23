<section class="Single">
	<?php $movie = $this->get("movie"); ?>

	<img class="Single__Poster" src="<?= $movie['poster'] ?>"/>

	<div class="Single__Information">
		<h2 class="Single__Title"><?= $movie['title'] ?></h2>
		<p class="Single__Description"><?= $movie['description'] ?></p>

		<ul class="Single__Details">
			<li class="Single__DetailsItem">
				Premiera: <span class="Single__ReleaseDate"><?= $movie['release_date'] ?></span>
			</li>
			<li class="Single__DetailsItem">
				Reżyseria: <span class="Single__Director"><?= $movie['director'] ?></span>
			</li>
			<li class="Single__DetailsItem">
				Scenariusz: <span class="Single__Writer"><?= $movie['writer'] ?></span>
			</li>
			<li class="Single__DetailsItem">
				Gatunki: <span class="Single__Genres">

					<?php if (!empty($this->get("genres"))): foreach ($this->get("genres") as $genre): ?>
						<span class="genre_<?= $genre["id"] ?>"><a href="index.php?action=listMoviesByGenre&task=<?= $genre['id'] ?>">
							<?= $genre["name"] ?>
						</a></span>
					<?php endforeach; endif; ?>
				</span>
			</li>
			aktorzyny: <span class="Single__Genres">
					<?php if (!empty($this->get("actors"))): foreach ($this->get("actors") as $actor): ?>
						<a href="index.php?action=singleActor&task=<?= $actor['id'] ?>" class="genre_<?= $actor["id"] ?>">
							<?= $actor["name"]." ".$actor["surname"]." jako ".$actor['role'].", " ?>
						</a>
					<?php endforeach; endif; ?>
		</ul>
	</div>
</section>
<div class="Clearfix"></div>
