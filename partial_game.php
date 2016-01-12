<article class="game">
	<div class="image">
		<?php if ($game->getCover() == ""): ?>
			<div class="covers-missing">&nbsp;</div>
		<?php else: ?>
			<div class="covers-<?php echo $game->getCover(); ?>">&nbsp;</div>
		<?php endif; ?>
	</div>
	<div class="content">
		<h2><?php echo $game->getName(); ?> (<?php echo $game->getPublicDate(); ?>)</h2>
		<?php if ($game->isPlayed() == false): ?>
			<span class="not-played">Nicht gespielt (bisher)</span>
		<?php else: ?>
			<progress class="progress-bar-<?php echo $game->getColorCode(); ?>" max="100" value="<?php echo $game->getPercent(); ?>"></progress>
		<?php endif; ?>
	</div>
	<div class="status progress-status-<?php echo $game->getColorCode(); ?>">
		<?php echo $game->getPercent(); ?>%
	</div>
</article>