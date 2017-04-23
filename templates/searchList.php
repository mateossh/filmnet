<?php if(!empty($this->get("movies"))): foreach($this->get("movies") as $movie): ?>
	<a href="index.php?action=singleMovie&task=<?= $movie['id'] ?>"><span class="Results__Item">
		<img src="<?= $movie['poster'] ?>"/>
		<div class="Results__ItemContent">
			<h3><?= $movie['title'] ?></h3>
			<p><?= substr($movie['description'],0,100) . "..." ?></p>
		</div>
	</span></a>
<?php endforeach; ?>
<?php else: ?>
	<span class="Results__Item--slim">
		Brak wyników.
	</span>
<?php endif;?>
