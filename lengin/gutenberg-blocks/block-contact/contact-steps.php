<?php
$options = get_fields('option');
$stepsTitle = $options['steps_title'];
$steps = $options['steps'];
$salesManager = $options['sales_manager'];
?>

<div class="contactSteps">

	<div class="contactSteps__wrap">
		<div class="stepsWrap">
			<?php if ($stepsTitle) : ?>
				<span class="title fz_h4">
					<?= $stepsTitle; ?>
				</span>
			<?php endif; ?>

			<?php if ($steps) : ?>
				<div class="steps">
					<?php foreach ($steps as $key => $item) : ?>
						<div class="steps__item">
							<div class="steps__item-number">
								<span><?= $key + 1; ?> step</span>
								<?php if ($key === 0) : ?>
									<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/icon/steps/circle-1.svg" alt="Circle" width="122" height="44">
								<?php endif; ?>
								<?php if ($key === 1) : ?>
									<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/icon/steps/circle-2.svg" alt="Circle" width="110" height="48">
								<?php endif; ?>
								<?php if ($key === 2) : ?>
									<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/icon/steps/circle-3.svg" alt="Circle" width="119" height="52">
								<?php endif; ?>
							</div>
							<p>
								<?= $item['description']; ?>
							</p>
						</div>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
		</div>

		<?php require get_template_directory() . '/gutenberg-blocks/block-contact/sales-manager.php'; ?>
	</div>

</div>