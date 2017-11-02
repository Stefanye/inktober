<?php
    $kepek = [
        [
            'filename' => 'alma.jpg',
            'date'     => 'Day 1',
            'title'    => 'Alma',
        ],
        [
            'filename' => 'image_2.jpg',
            'date'     => 'Day 2',
            'title'    => 'Plant',
        ],
        [
            'filename' => 'image_3.jpg',
            'date'     => 'Day 3',
            'title'    => 'Blind',
        ],
        [
            'filename' => 'image_4.jpg',
            'date'     => 'Day 4',
            'title'    => 'United',
        ],
    ];
?>

<section class="art">
    <span class="art_title">- 2017 -</span>

    <div class="art_wrapper">
        <?php
            foreach ($kepek as $kep) {
        ?>
                <figure class="art_wrapper_content">
                    <img class="art_wrapper_content_image" src="/img/2017/<?= $kep['filename'] ?>" alt="<?= $kep['title']; ?>">
                    <figcaption class="art_wrapper_content_caption">
                        <cite class="art_wrapper_content_caption_title"><?= $kep['title']; ?></cite>
                        <span class="art_wrapper_content_caption_day"><?= $kep['date']; ?></span>
                    </figcaption>
                </figure>
        <?php
            }
        ?>



        <?php
            /*
            $dirname = "img/2017/";
            $images = glob($dirname."*.jpg");

            foreach($images as $image) {
                $path_parts = pathinfo($image);
        ?>
                <img class="art_wrapper_image" src="<?= $image ?>" alt="<?= $path_parts["filename"] ?>" />
        <?php
            }
            */
        ?>
    </div>
</section>
