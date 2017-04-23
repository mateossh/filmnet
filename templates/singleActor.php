<section class="Single">
	<?php $actor = $this->get("actor"); ?>

	<div class="Single__Information">
		<h2 class="Single__Title"><?= $actor['name'].$actor['surname'] ?></h2>

		<ul class="Single__Details">
			kraj: <?= $actor['nationality'] ?>

			<li class="Single__DetailsItem">
				Role: <span class="Single__Genres">
					<?php if (!empty($this->get("movies"))): foreach ($this->get("movies") as $movie): ?>
						<span class="genre_<?= $movie["movie"] ?>">
							<?= $movie["title"]." jako ".$movie["role"] ?>
						</span>
					<?php endforeach; endif; ?>
				</span>
			</li>
		</ul>
	</div>
</section>
<div class="Clearfix"></div>
