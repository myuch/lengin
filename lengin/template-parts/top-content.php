<?php
$tag = $fields['title']['tag'];
$fontSize = $fields['title']['font_size'];
$titleText = $fields['title']['text'];
$subtitle = $fields['subtitle'];
$shortDesc = $fields['short_description'];
// $sectionID = $fields['section_id'];
?>

<div class="topContent">

    <?php if ($subtitle) : ?>
        <span class="subtitle">
            <?= $subtitle; ?>
        </span>
    <?php endif; ?>

    <?php if ($titleText) : ?>
        <<?= $tag; ?> class="title <?= $fontSize; ?>">
            <?= $titleText; ?>
        </<?= $tag; ?>>
    <?php endif; ?>

    <?php if ($shortDesc) : ?>
        <p class="shortDesc">
            <?= $shortDesc; ?>
        </p>
    <?php endif; ?>

</div>

