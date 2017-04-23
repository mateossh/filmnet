<section class="Single">
	<?php $actor = $this->get("actor"); ?>

	<img class="Single__Poster" src="<?= $actor['photo'] ?>"/>

	<div class="Single__Information">
		<h2 class="Single__Title"><?= $actor['name']. " " . $actor['surname'] ?></h2>

		<ul class="Single__Details">
			<li class="Single__DetailsItem">
				Narodowość: <span class="Single__ReleaseDate"><?= $actor['nationality'] ?></span>
			</li>
			<li class="Single__DetailsItem">
				Data urodzenia: <span class="Single__ReleaseDate"><?= $actor['date_of_birth'] ?></span>
			</li>

			<li class="Single__DetailsItem">
				Role w filmach: <ul class="Cast Roles">
					<?php if (!empty($this->get("movies"))): foreach ($this->get("movies") as $movie): ?>
						<li class="Roles__Item">
							<a class="Roles__Role" href="index.php?action=singleMovie&task=<?= $movie['id'] ?>">
								<?= $movie["title"] ?>
							</a>
							jako <?= $movie["role"] ?>
						</li>
					<?php endforeach; endif; ?>
				</ul>
			</li>
		</ul>
	</div>
</section>
<div class="Clearfix"></div>
