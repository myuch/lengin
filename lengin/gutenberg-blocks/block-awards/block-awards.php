<?php
$fields = get_fields();

$awardOne = $fields['award_one'];
$awardTwo = $fields['award_two'];
$awardThree = $fields['award_three'];
$awardFour = $fields['award_four'];
$awardFive = $fields['award_five'];

$awardOneLogo = wp_get_attachment_image($awardOne['logo']['id'], 'medium');
$awardTwoLogo = wp_get_attachment_image($awardTwo['logo']['id'], 'medium');
$awardThreeLogo = wp_get_attachment_image($awardThree['logo']['id'], 'medium');
$awardFourLogo = wp_get_attachment_image($awardFour['logo']['id'], 'medium');
$awardFiveLogo = wp_get_attachment_image($awardFive['logo']['id'], 'medium');


$aOneLink = $awardOne['link'];
$aTwoLink = $awardTwo['link'];
$aThreeLink = $awardThree['link'];
$aFourLink = $awardFour['link'];
$aFiveLink = $awardFive['link'];

require get_template_directory() . '/template-parts/settings.php';

?>

<section class="awards <?= $sPadding; ?>">
    <div class="container">


        <div class="awardsWrap">
            <div class="awardsBlock">
                <h2 class="title fz_h3">
                    Awards <br> and recognitions
                </h2>
                <svg width="35" height="34" viewBox="0 0 35 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.93256 1.6402L32.07 31.7776M32.07 31.7776L32.07 5.40737M32.07 31.7776L5.69974 31.7776" stroke="#B0B3C1" stroke-width="4" />
                </svg>
            </div>
            <div class="awardsMap">
                <img class="awardsMap-map desktop" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/awardsnew.svg" alt="Awards Map" width="1620" height="700">
                <img class="awardsMap-map tablet" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/award-map-tablet.svg" alt="Awards Map" width="670" height="630">
                <img class="awardsMap-map mobile" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/award-map-mobile.svg" alt="Awards Map" width="335" height="640">

                <?php if ($awardOne['logo']) : ?>
                    <a <?php if ($aOneLink) : ?>href="<?= $aOneLink; ?>" <?php endif; ?> id="awardsMap-one" class="awardsMap-item <?php if ($aOneLink) : ?>hasLink<?php endif; ?> <?= $awardOne['color']; ?> ">
                        <svg width="194" height="220" viewBox="0 0 194 220" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M93 1.3094C95.4752 -0.119661 98.5248 -0.119661 101 1.3094L189.129 52.1906C191.604 53.6197 193.129 56.2607 193.129 59.1188V160.881C193.129 163.739 191.604 166.38 189.129 167.809L101 218.691C98.5248 220.12 95.4752 220.12 93 218.691L4.87118 167.809C2.39597 166.38 0.871178 163.739 0.871178 160.881V59.1188C0.871178 56.2607 2.39597 53.6197 4.87118 52.1906L93 1.3094Z" fill="#1F212F" />
                        </svg>
                        <?= $awardOneLogo; ?>
                    </a>
                <?php endif; ?>

                <?php if ($awardTwo['logo']) : ?>
                    <a <?php if ($aTwoLink) : ?>href="<?= $aTwoLink; ?>" <?php endif; ?> id="awardsMap-two" class="awardsMap-item <?php if ($aTwoLink) : ?>hasLink<?php endif; ?> <?= $awardTwo['color']; ?> ">
                        <svg width="194" height="220" viewBox="0 0 194 220" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M93 1.3094C95.4752 -0.119661 98.5248 -0.119661 101 1.3094L189.129 52.1906C191.604 53.6197 193.129 56.2607 193.129 59.1188V160.881C193.129 163.739 191.604 166.38 189.129 167.809L101 218.691C98.5248 220.12 95.4752 220.12 93 218.691L4.87118 167.809C2.39597 166.38 0.871178 163.739 0.871178 160.881V59.1188C0.871178 56.2607 2.39597 53.6197 4.87118 52.1906L93 1.3094Z" fill="#1F212F" />
                        </svg>
                        <?= $awardTwoLogo; ?>
                    </a>
                <?php endif; ?>

                <?php if ($awardThree['logo']) : ?>
                    <a <?php if ($aThreeLink) : ?>href="<?= $aThreeLink; ?>" <?php endif; ?> id="awardsMap-three" class="awardsMap-item <?php if ($aThreeLink) : ?>hasLink<?php endif; ?> <?= $awardThree['color']; ?> ">
                        <svg width="194" height="220" viewBox="0 0 194 220" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M93 1.3094C95.4752 -0.119661 98.5248 -0.119661 101 1.3094L189.129 52.1906C191.604 53.6197 193.129 56.2607 193.129 59.1188V160.881C193.129 163.739 191.604 166.38 189.129 167.809L101 218.691C98.5248 220.12 95.4752 220.12 93 218.691L4.87118 167.809C2.39597 166.38 0.871178 163.739 0.871178 160.881V59.1188C0.871178 56.2607 2.39597 53.6197 4.87118 52.1906L93 1.3094Z" fill="#1F212F" />
                        </svg>
                        <?= $awardThreeLogo; ?>
                    </a>
                <?php endif; ?>

                <?php if ($awardFour['logo']) : ?>
                    <a <?php if ($aFourLink) : ?>href="<?= $aFourLink; ?>" <?php endif; ?> id="awardsMap-four" class="awardsMap-item <?php if ($aFourLink) : ?>hasLink<?php endif; ?> <?= $awardFour['color']; ?> ">
                        <svg width="194" height="220" viewBox="0 0 194 220" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M93 1.3094C95.4752 -0.119661 98.5248 -0.119661 101 1.3094L189.129 52.1906C191.604 53.6197 193.129 56.2607 193.129 59.1188V160.881C193.129 163.739 191.604 166.38 189.129 167.809L101 218.691C98.5248 220.12 95.4752 220.12 93 218.691L4.87118 167.809C2.39597 166.38 0.871178 163.739 0.871178 160.881V59.1188C0.871178 56.2607 2.39597 53.6197 4.87118 52.1906L93 1.3094Z" fill="#1F212F" />
                        </svg>
                        <?= $awardFourLogo; ?>
                    </a>
                <?php endif; ?>

                <?php if ($awardFive['logo']) : ?>
                    <a <?php if ($aFiveLink) : ?>href="<?= $aFiveLink; ?>" <?php endif; ?> id="awardsMap-five" class="awardsMap-item <?php if ($aFiveLink) : ?>hasLink<?php endif; ?> <?= $awardFive['color']; ?>">
                        <svg width="194" height="220" viewBox="0 0 194 220" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M93 1.3094C95.4752 -0.119661 98.5248 -0.119661 101 1.3094L189.129 52.1906C191.604 53.6197 193.129 56.2607 193.129 59.1188V160.881C193.129 163.739 191.604 166.38 189.129 167.809L101 218.691C98.5248 220.12 95.4752 220.12 93 218.691L4.87118 167.809C2.39597 166.38 0.871178 163.739 0.871178 160.881V59.1188C0.871178 56.2607 2.39597 53.6197 4.87118 52.1906L93 1.3094Z" fill="#1F212F" />
                        </svg>
                        <?= $awardFiveLogo; ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>

    </div>
</section>