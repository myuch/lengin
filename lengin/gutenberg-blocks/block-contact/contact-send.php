<?php
$options = get_fields('option');
$thankYou = $options['block_thank_you'];
?>

<div class="contactSend">
  <div class="contactSend__wrapper">

    <?php if ($thankYou['title']) : ?>
      <span class="title fz_h4">
        <?= $thankYou['title']; ?>
      </span>
    <?php endif; ?>

    <?php if ($thankYou['image']) : ?>
      <div class="contactSend__post">
        <img class="contactSend__image" src="<?= $thankYou['image']; ?>" alt="Post">
      </div>
    <?php endif; ?>

    <?php if ($thankYou['description']) : ?>
      <div class="contactSend__desc lh19">
        <?= $thankYou['description']; ?>
      </div>
    <?php endif; ?>

  </div>
</div>