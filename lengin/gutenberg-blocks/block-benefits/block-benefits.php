<?php
$fields = get_fields();
$options = get_fields('option');

$bf_list = $fields['bf_list'];
$bf_block = $fields['bf_block'];


$bfimage = wp_get_attachment_image($fields['bfimage']['id'], 'large');
require get_template_directory() . '/template-parts/settings.php';

?>

<section class="benefits <?= $sPadding; ?> <?= $nameTheme; ?>">
	<div class="container">

		<?php require get_template_directory() . '/template-parts/top-content.php'; ?>

		<div class="wrap mt48">
			<div class="benefits__left">
				<?php if ($fields['bfimage']) : ?>
					<?= $bfimage; ?>
				<?php endif; ?>
			</div>
			<div class="benefits__right">
				<?php if ($bf_list) : ?>
					<div class="benefits__cards">
						<?php foreach ($bf_list as $item) : ?>
							<div class="odCard <?= $item['color']; ?>">
								<?php if ($item['title']) : ?>
									<span class="title fz_h5">
										<?= $item['title']; ?>
									</span>
								<?php endif; ?>
								<?php if ($item['description']) : ?>
									<p class="lh19">
										<?= $item['description']; ?>
									</p>
								<?php endif; ?>
							</div>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>
			</div>
		</div>

		<div class="benefits__bottom">
			<?php if ($bf_block['short_description']) : ?>
				<?= $bf_block['short_description']; ?>
			<?php endif; ?>
			<?php if ($bf_block['short_description']) : ?>
				<button class="btn btnPrimary openModalForm">
					<?= $bf_block['button']; ?>
				</button>
			<?php endif; ?>
		</div>

	</div>
</section>