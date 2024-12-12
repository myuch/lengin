<?php
$fields = get_fields();
$options = get_fields('option');

$cr_list = $fields['cr_list'];

require get_template_directory() . '/template-parts/settings.php';

?>

<section class="cRevenue <?= $sPadding; ?> <?= $nameTheme; ?>">
	<div class="container">
		<?php require get_template_directory() . '/template-parts/top-content.php'; ?>
		<div class="wrap mt48">
			<?php if ($cr_list) : ?>
				<?php foreach ($cr_list as $item) : ?>
					<?php
					$image = wp_get_attachment_image($item['image']['id'], 'large');
					?>
					<div class="cRevenue__item <?= $item['color']; ?>">
						<?php if ($item['image']) : ?>
							<?= $image; ?>
						<?php endif ?>
						<div class="cRevenue__item_content">
							<?php if ($item['percent']) : ?>
								<span class="percent">
									<?= $item['percent']; ?>
								</span>
							<?php endif; ?>
							<?php if ($item['description']) : ?>
								<p class="description">
									<?= $item['description']; ?>
								</p>
							<?php endif; ?>
						</div>
					</div>
				<?php endforeach; ?>
			<?php endif; ?>
		</div>
	</div>
</section>