<?php
$fields = get_fields();
$options = get_fields('option');

$сhoose_a_form = $fields['сhoose_a_form'];

?>

<div class="contactForm">
  <span class="title fz_h5">Tell us about your project</span>

  <?php echo do_shortcode('[contact-form-7 id="'.$сhoose_a_form->ID.'"     title="'.$сhoose_a_form->post_title.'"]') ?>
</div>