<?php
$fields = get_fields();
$options = get_fields('option');

$cib_list = $fields['cib_list'];
$cib_button = $fields['cib_button'];

require get_template_directory() . '/template-parts/settings.php';

?>

<section class="icBlocks <?= $sPadding; ?> <?= $nameTheme; ?>">
	<div class="container">

		<?php require get_template_directory() . '/template-parts/top-content.php'; ?>

		<?php if ($cib_list) : ?>
			<div class="wrap mt48">
				<?php foreach ($cib_list as $item) : ?>
					<div class="icBlocks__item blColor <?= $item['color']; ?>">
						<div class="icBlocks__item_top">
							<div class="iconBlock <?= $item['color']; ?>">
								<?php if ($item['icon']) : ?>
									<img src="<?= $item['icon']; ?>" alt="Icon" width="40" height="40">
								<?php endif ?>
							</div>
							<div class="icBlocks__item_wrap">
								<?php if ($item['title']) : ?>
									<h3 class="title fz_h5">
										<?= $item['title']; ?>
									</h3>
								<?php endif; ?>
								<svg class="icBlocks__item-arrow" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M18 9L12 15L6 9" stroke="#C7C9D6" stroke-width="1.5" />
								</svg>
							</div>
						</div>
						<?php if ($item['description']) : ?>
							<div class="icBlocks__item_desc lh19">
								<p><?= $item['description']; ?></p>
							</div>
						<?php endif; ?>
					</div>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>

		<?php if ($cib_button) : ?>
			<button class="btn btnPrimary openModalForm">
				<?= $cib_button; ?>
			</button>
		<?php endif; ?>

	</div>
</section>