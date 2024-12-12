<?php
$fields = get_fields();
$options = get_fields('option');

$fd_list = $fields['fd_list'];

require get_template_directory() . '/template-parts/settings.php';

?>

<section class="frdevelopment <?= $sPadding; ?> <?= $nameTheme; ?>">
	<div class="container">
		<div class="wrap">
			<?php if ($fd_list) : ?>
				<?php foreach ($fd_list as $item) : ?>
					<div class="frdevelopment__item">
						<div class="frdevelopment__item_top">
							<div class="iconBlock <?= $item['color']; ?>">
								<img src="<?= $item['icon']; ?>" alt="Icon" width="56" height="56">
							</div>
							<?php if ($item['title']) : ?>
								<h3 class="title fz_h6">
									<?= $item['title']; ?>
								</h3>
							<?php endif; ?>
						</div>
						<?php if ($item['description']) : ?>
							<p class="description">
								<?= $item['description']; ?>
							</p>
						<?php endif; ?>
						<?php if ($item['fd_items']) : ?>
							<ul class="frdevelopment__list">
								<?php foreach ($item['fd_items'] as $pos) : ?>
									<li class="frdevelopment__link">
										<span class="<?= $pos['color']; ?>"></span>
										<?php if ($pos['title']) : ?>
											<p class="title">
												<?= $pos['title']; ?>
											</p>
										<? endif ?>
									</li>
								<?php endforeach; ?>
							</ul>
						<?php endif ?>
					</div>
				<?php endforeach; ?>
			<?php endif; ?>
		</div>
	</div>
</section>