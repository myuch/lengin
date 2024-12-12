<?php
$fields = get_fields();

$title_left = $fields['title_left'];
$title_right = $fields['title_right'];

$list_left = $fields['list_left'];
$list_right = $fields['list_right'];

$circleArray = [1, 2, 3, 4, 5]

?>

<section class="twoLists">
    <div class="container">
        <div class="wrap">

            <?php if ($list_left) : ?>
                <div class="twoLists__col">
                    <span class="twoLists-title">
                        <?= $title_left; ?>
                    </span>
                    <div class="twoLists__list">
                        <?php foreach ($list_left as $key => $item) : ?>
                            <?php
                            $randomIndex = array_rand($circleArray);
                            ?>
                            <div class="twoLists__item">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/twolists/circle-<?php echo $circleArray[$randomIndex]; ?>.svg" alt="circle">
                                <p><?= $item['item']; ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>

            <?php if ($list_right) : ?>
                <div class="twoLists__col">
                    <span class="twoLists-title">
                        <?= $title_right; ?>
                    </span>
                    <div class="twoLists__list">
                        <?php foreach ($list_right as $key => $item) : ?>
                            <?php
                            $randomIndex = array_rand($circleArray);
                            ?>
                            <div class="twoLists__item">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/twolists/circle-<?php echo $circleArray[$randomIndex]; ?>.svg" alt="circle">
                                <p><?= $item['item']; ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>

        </div>
    </div>
</section>