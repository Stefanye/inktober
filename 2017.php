<?php
    $kepek = [
        [
            'filename' => 'image_1.jpg',
            'date'     => 'Day 2',
            'title'    => '',
        ],
        [
            'filename' => 'image_2.jpg',
            'date'     => 'Day 3',
            'title'    => '',
        ],
        [
            'filename' => 'underwater.jpg',
            'date'     => 'Day 4',
            'title'    => 'Underwater',
        ],
        [
            'filename' => 'long.jpg',
            'date'     => 'Day 5',
            'title'    => 'Long',
        ],
        [
            'filename' => 'sword.jpg',
            'date'     => 'Day 6',
            'title'    => 'Sword',
        ],
        [
            'filename' => 'shy.jpg',
            'date'     => 'Day 7',
            'title'    => 'Shy',
        ],
        [
            'filename' => 'crooked.jpg',
            'date'     => 'Day 8',
            'title'    => 'Crooked',
        ],
        [
            'filename' => 'screech.jpg',
            'date'     => 'Day 9',
            'title'    => 'Screech',
        ],
        [
            'filename' => 'gigantic.jpg',
            'date'     => 'Day 10',
            'title'    => 'Gigantic',
        ],
        [
            'filename' => 'run.jpg',
            'date'     => 'Day 11',
            'title'    => 'Run',
        ],
        [
            'filename' => 'shattered.jpg',
            'date'     => 'Day 12',
            'title'    => 'Shattered',
        ],
        [
            'filename' => 'teeming.jpg',
            'date'     => 'Day 13',
            'title'    => 'Teeming',
        ],
        [
            'filename' => 'fierce.jpg',
            'date'     => 'Day 14',
            'title'    => 'Fierce',
        ],
        [
            'filename' => 'mysterious.jpg',
            'date'     => 'Day 15',
            'title'    => 'Mysterious',
        ],
        [
            'filename' => 'fat.jpg',
            'date'     => 'Day 16',
            'title'    => 'Fat',
        ],
        [
            'filename' => 'graceful.jpg',
            'date'     => 'Day 17',
            'title'    => 'Graceful',
        ],
        [
            'filename' => 'filthy.jpg',
            'date'     => 'Day 18',
            'title'    => 'Filthy',
        ],
        [
            'filename' => 'cloud.jpg',
            'date'     => 'Day 19',
            'title'    => 'Cloud',
        ],
        [
            'filename' => 'deep.jpg',
            'date'     => 'Day 20',
            'title'    => 'Deep',
        ],
        [
            'filename' => 'furious.jpg',
            'date'     => 'Day 21',
            'title'    => 'Furious',
        ],
        [
            'filename' => 'trail.jpg',
            'date'     => 'Day 22',
            'title'    => 'Trail',
        ],
        [
            'filename' => 'juicy.jpg',
            'date'     => 'Day 23',
            'title'    => 'Juicy',
        ],
        [
            'filename' => 'blind.jpg',
            'date'     => 'Day 24',
            'title'    => 'Blind',
        ],
        [
            'filename' => 'ship.jpg',
            'date'     => 'Day 25',
            'title'    => 'Ship',
        ],
        [
            'filename' => 'squeak.jpg',
            'date'     => 'Day 26',
            'title'    => 'Squeak',
        ],
        [
            'filename' => 'climb.jpg',
            'date'     => 'Day 27',
            'title'    => 'Cimb',
        ],
        [
            'filename' => 'fall.jpg',
            'date'     => 'Day 28',
            'title'    => 'Fall',
        ],
        [
            'filename' => 'united.jpg',
            'date'     => 'Day 29',
            'title'    => 'United',
        ],
        [
            'filename' => 'found.jpg',
            'date'     => 'Day 30',
            'title'    => 'Found',
        ],
        [
            'filename' => 'mask.jpg',
            'date'     => 'Day 31',
            'title'    => 'Mask',
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
                    <a class="art_wrapper_content_link" href="/img/2017/<?= $kep['filename'] ?>" data-lightbox="inktober2017">
                        <img class="art_wrapper_content_link_image" src="/img/2017/<?= $kep['filename'] ?>" alt="<?= $kep['title']; ?>">
                        <figcaption class="art_wrapper_content_link_caption">
                            <cite class="art_wrapper_content_link_caption_title"><?= $kep['title']; ?></cite>
                            <span class="art_wrapper_content_link_caption_day"><?= $kep['date']; ?></span>
                        </figcaption>
                    </a>
                </figure>
        <?php
            }
        ?>
    </div>
</section>
