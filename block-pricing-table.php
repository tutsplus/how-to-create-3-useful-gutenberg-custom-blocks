<div class="pricing-table">
	<?php
		for ($i = 1; $i <=3; $i++) {
			if (block_value('highlighted-plan') == $i) {
				echo '<div class="plan highlighted">';
				echo '<span class="badge">' . block_value('highlighted-plan-text') . '</span>';
			} else {
				echo '<div class="plan">';
			} ?>

			<h1 style="color: <?php block_field('plan-'. $i .'-color')?>"><?php block_field('plan-'. $i .'-title') ?></h1>
			<h2><?php block_field('plan-'. $i .'-description') ?></h2>
			<h3><?php block_field('plan-'. $i .'-price') ?></h3>
			
			<?php block_field('plan-'. $i .'-features') ?>
			
			<a href="#" class="btn" style="background-color: <?php block_field('plan-'. $i .'-color') ?>">Start now</a>
		</div>
	<?php } ?>
</div>