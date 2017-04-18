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
				Reżyser: <span class="Single__Director"><?= $movie['director'] ?></span>
			</li>
			<li class="Single__DetailsItem">
				Scenarzysta: <span class="Single__Writer"><?= $movie['writer'] ?></span>
			</li>
			<li class="Single__DetailsItem">
				Gatunki: <span class="Single__Genres">
					<?php if (!empty($movie["genres"])): foreach ($movie["genres"] as $genre): ?>
						<span class="genre_<?= $genre["id"] ?>">
							<?= $genre["name"] ?>
						</span>
					<?php endforeach; endif; ?>
				</span>
			</li>
		</ul>
	</div>
</section>
<div class="Clearfix"></div>
