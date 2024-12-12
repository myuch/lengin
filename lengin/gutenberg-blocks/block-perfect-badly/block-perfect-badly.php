<?php
$fields = get_fields();

$perfect = $fields['pb_perfect'];
$badly = $fields['pb_badly'];

?>

<section class="perfectBadly">
    <div class="container">

        <div class="wrap">
            <div class="perfectBadly__block dark p-24 brs-16">
                <span class="title fz_h3">
                    <?= $perfect['title']; ?>
                </span>
                <ul>
                    <?php foreach ($perfect['list'] as $item) : ?>
                        <li>
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/perfectbadly/checkbox-light.svg" alt="check">
                            <p>
                                <?= $item['item']; ?>
                            </p>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="perfectBadly__block light p-24 brs-16">
                <img class="perfectBadly-illustration-1" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/perfectbadly/illustration-1.svg" alt="Illustration">
                <img class="perfectBadly-illustration-2" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/perfectbadly/illustration-2.svg" alt="Illustration">
                <span class="title fz_h3">
                    <?= $badly['title']; ?>
                </span>
                <ul>
                    <?php foreach ($badly['list'] as $item) : ?>
                        <li>
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/perfectbadly/checkbox-dark.svg" alt="check">
                            <p>
                                <?= $item['item']; ?>
                            </p>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

    </div>
</section>