<section class="List">
	<?php if(!empty($this->get("movies"))): foreach($this->get("movies") as $movie): ?>
		<li class="List__Item"><a href="index.php?action=singleMovie&task=<?= $movie['id'] ?>">
			<h3><?= $movie['title'] ?></h3>
		</a></li>
	<?php endforeach; ?>
	</ul>
</section>
<?php else: endif;?>
