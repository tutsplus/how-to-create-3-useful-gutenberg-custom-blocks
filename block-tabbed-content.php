<div class="tabs">
	<ul class="tab-links">
        <?php 
            for ($i = 1; $i <=3; $i++) {
                if ($i == 1) {
                    echo '<li><a href="#tab-'. $i .'" class="active">' . block_value('tab-' . $i . '-link-text') . '</a></li>';
                } else {
                    echo '<li><a href="#tab-'. $i .'">' . block_value('tab-' . $i . '-link-text') . '</a></li>';
                }
            }
        ?>
	</ul>
	
	<div class="tab-panels">
        <?php 
            for ($i = 1; $i <=3; $i++) {
                if ($i == 1) {
                    echo '<div class="panel active" id="tab-1">';
                } else {
                    echo '<div class="panel" id="tab-' . $i . '">';
                }
                echo block_value('tab-' . $i . '-content') . '</div>';
            }
        ?>
	</div>
</div>