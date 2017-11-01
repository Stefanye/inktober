<?php error_reporting(E_ALL); ?>

<section class="art-block">
    <span class="art-block_title">- 2017 -</span>

    <div class="art-block_wrapper">
        <?php
            $dirname = "img/2017/";
            $images = glob($dirname."*.jpg");

            foreach($images as $image) {
                $path_parts = pathinfo($image);
        ?>
                <img class="art-block_wrapper_image" src="<?= $image ?>" alt="<?= $path_parts["filename"] ?>" />
        <?php
            }
        ?>
    </div>
</section>
