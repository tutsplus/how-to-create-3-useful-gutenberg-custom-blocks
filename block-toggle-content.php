<div class="toggles">
    <?php
        for ($i = 1; $i <= 3; $i++) {
            if ($i == 1) {
                echo '<details open>';
            } else {
                echo '<details>';
            }

            echo '<summary>' . block_value('q' . $i) . '</summary>';
            echo '<div>' . block_value('a' . $i) . '</div>';
            echo '</details>';
        }
    ?>
</div>