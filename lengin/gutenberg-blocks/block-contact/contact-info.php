<?php
$options = get_fields('option');
$platforms = $options['platforms'];
$location = $options['location'];
$email = $options['email'];
$phone = $options['phone'];
$cleanPhoneNumber = str_replace([' ', '-'], '', $phone);
$skype = $options['skype'];
$telegram = $options['telegram'];
$instagram = $options['instagram'];
$facebook = $options['facebook'];
$linkedin = $options['linkedin'];
$twitter = $options['twitter'];
$whatsapp = $options['whatsapp'];
$youtube = $options['youtube'];

?>

<div class="contactInfo">
	<div class="contactInfo__wrap">

		<div class="contactInfo__block">

			<div class="contactInfo__block-lists">
				<span class="title fz_h5">
					Contact info
				</span>
				<div class="cWithText">
					<div class="cWithText__item">
						<div class="cWithText__item-icon siOrange">
							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/icon/address.svg" alt="Address" width="27" height="27">
						</div>
						<span class="cWithText__item-title">
							<?= $location; ?>
						</span>
					</div>
					<?php if ($email) : ?>
						<a href="mailto:<?= $email; ?>" class="cWithText__item">
							<div class="cWithText__item-icon siBlue">
								<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/icon/email.svg" alt="Email" width="27" height="27">
							</div>
							<span class="cWithText__item-title">
								<?= $email; ?>
							</span>
						</a>
					<?php endif; ?>
					<?php if ($phone) : ?>
						<a href="tel:<?= $cleanPhoneNumber; ?>" class="cWithText__item">
							<div class="cWithText__item-icon siGreen">
								<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/icon/phone.svg" alt="Phone" width="27" height="27">
							</div>
							<span class="cWithText__item-title">
								<?= $phone; ?>
							</span>
						</a>
					<?php endif; ?>
				</div>
			</div>


			<div class="contactInfo__block-lists">
				<span class="title fz_h5">
					Let`s talk
				</span>
				<div class="sWithText">
					<?php if ($telegram) : ?>
						<a href="<?= $telegram; ?>" class="sWithText__item" target="_blank">
							<div class="sWithText__item-icon siOrange">
								<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/icon/socials/telegram.svg" alt="Telegram" width="27" height="27">
							</div>
							<span class="sWithText__item-title">
								Telegram
							</span>
						</a>
					<?php endif; ?>
					<?php if ($skype) : ?>
						<a href="<?= $skype; ?>" class="sWithText__item" target="_blank">
							<div class="sWithText__item-icon siBlue">
								<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/icon/socials/skype.svg" alt="Skype" width="27" height="27">
							</div>
							<span class="sWithText__item-title">
								Skype
							</span>
						</a>
					<?php endif; ?>
					<?php if ($whatsapp) : ?>
						<a href="<?= $whatsapp; ?>" class="sWithText__item" target="_blank">
							<div class="sWithText__item-icon siGreen">
								<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/icon/socials/whatsapp.svg" alt="Whatsapp" width="27" height="27">
							</div>
							<span class="sWithText__item-title">
								WhatsApp
							</span>
						</a>
					<?php endif; ?>
				</div>
			</div>

		</div>

		<div class="contactInfo__bottom">
			<span class="title fz_h5">
				Follow us
			</span>
			<div class="socials largeIcon">

				<?php if ($linkedin) : ?>
					<a href="<?= $linkedin; ?>" class="socials__item siGreen" target="_blank">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/icon/socials/linkedin.svg" alt="Linkedin" width="27" height="27">
					</a>
				<?php endif; ?>
				<?php if ($twitter) : ?>
					<a href="<?= $twitter; ?>" class="socials__item siBlue" target="_blank">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/icon/socials/twitter.svg" alt="Twitter" width="27" height="27">
					</a>
				<?php endif; ?>
				<?php if ($instagram) : ?>
					<a href="<?= $instagram; ?>" class="socials__item siRed" target="_blank">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/icon/socials/instagram.svg" alt="Instagram" width="27" height="27">
					</a>
				<?php endif; ?>
				<?php if ($facebook) : ?>
					<a href="<?= $facebook; ?>" class="socials__item siYellow" target="_blank">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/icon/socials/facebook.svg" alt="Facebook" width="27" height="27">
					</a>
				<?php endif; ?>
				<?php if ($youtube) : ?>
					<a href="<?= $youtube; ?>" class="socials__item siRed" target="_blank">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/icon/socials/youtube.svg" alt="Youtube" width="27" height="27">
					</a>
				<?php endif; ?>
			</div>

		</div>

	</div>
</div>