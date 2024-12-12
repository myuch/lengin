<div class="jsChoose__item">
    <svg class="jsChoose__item-border d1920 <?= $item['color']; ?>" viewBox="0 0 390 256" fill="none" xmlns="http://www.w3.org/2000/svg">
        <mask fill="white">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M120 16C120 7.16344 112.837 0 104 0H16C7.16345 0 0 7.16345 0 16V93V120V240C0 248.837 7.16344 256 16 256H374C382.837 256 390 248.837 390 240V109C390 100.163 382.837 93 374 93H136C127.163 93 120 85.8366 120 77V16Z" />
        </mask>
        <path class="jsChoose__item-border-path1" fill-rule="evenodd" clip-rule="evenodd" d="M120 16C120 7.16344 112.837 0 104 0H16C7.16345 0 0 7.16345 0 16V93V120V240C0 248.837 7.16344 256 16 256H374C382.837 256 390 248.837 390 240V109C390 100.163 382.837 93 374 93H136C127.163 93 120 85.8366 120 77V16Z" fill="transparent" />
        <path class="jsChoose__item-border-path2" d="M16 1H104V-1H16V1ZM1 93V16H-1V93H1ZM1 120V93H-1V120H1ZM1 240V120H-1V240H1ZM374 255H16V257H374V255ZM389 109V240H391V109H389ZM136 94H374V92H136V94ZM119 16V77H121V16H119ZM136 92C127.716 92 121 85.2843 121 77H119C119 86.3888 126.611 94 136 94V92ZM-1 240C-1 249.389 6.61116 257 16 257V255C7.71573 255 1 248.284 1 240H-1ZM391 109C391 99.6112 383.389 92 374 92V94C382.284 94 389 100.716 389 109H391ZM104 1C112.284 1 119 7.71573 119 16H121C121 6.61116 113.389 -1 104 -1V1ZM374 257C383.389 257 391 249.389 391 240H389C389 248.284 382.284 255 374 255V257ZM16 -1C6.61116 -1 -1 6.61116 -1 16H1C1 7.71573 7.71573 1 16 1V-1Z" fill="#C7C9D6" mask="url(#path-1-inside-1_800_1445177)" />
    </svg>
    <svg class="jsChoose__item-border d2560 <?= $item['color']; ?>" width="521" height="320" viewBox="0 0 521 320" fill="none" xmlns="http://www.w3.org/2000/svg">
        <mask fill="white">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M136 16C136 7.16344 128.837 0 120 0H16C7.16344 0 0 7.16344 0 16V116.25V150V304C0 312.837 7.16344 320 16 320H505C513.837 320 521 312.837 521 304V132.25C521 123.413 513.837 116.25 505 116.25H152C143.163 116.25 136 109.087 136 100.25V16Z" />
        </mask>
        <path class="jsChoose__item-border-path1" fill-rule="evenodd" clip-rule="evenodd" d="M136 16C136 7.16344 128.837 0 120 0H16C7.16344 0 0 7.16344 0 16V116.25V150V304C0 312.837 7.16344 320 16 320H505C513.837 320 521 312.837 521 304V132.25C521 123.413 513.837 116.25 505 116.25H152C143.163 116.25 136 109.087 136 100.25V16Z" fill="white" />
        <path class="jsChoose__item-border-path2" d="M16 1H120V-1H16V1ZM1 116.25V16H-1V116.25H1ZM1 150V116.25H-1V150H1ZM1 304V150H-1V304H1ZM505 319H16V321H505V319ZM520 132.25V304H522V132.25H520ZM152 117.25H505V115.25H152V117.25ZM135 16V100.25H137V16H135ZM152 115.25C143.716 115.25 137 108.534 137 100.25H135C135 109.639 142.611 117.25 152 117.25V115.25ZM-1 304C-1 313.389 6.61115 321 16 321V319C7.71572 319 1 312.284 1 304H-1ZM522 132.25C522 122.861 514.389 115.25 505 115.25V117.25C513.284 117.25 520 123.966 520 132.25H522ZM120 1C128.284 1 135 7.71573 135 16H137C137 6.61116 129.389 -1 120 -1V1ZM505 321C514.389 321 522 313.389 522 304H520C520 312.284 513.284 319 505 319V321ZM16 -1C6.61116 -1 -1 6.61116 -1 16H1C1 7.71573 7.71573 1 16 1V-1Z" fill="#C7C9D6" mask="url(#path-1-inside-1_905_1256798)" />
    </svg>
    <div class="jsChoose__item_top">
        <?php if ($item['icon']) : ?>
            <div class="iconBlock <?= $item['color']; ?>">
                <img src="<?= $item['icon']; ?>" alt="Icon" width="40" height="40">
            </div>
        <?php endif; ?>
        <div class="jsChoose__item_top_wrap">
            <?php if ($item['title']) : ?>
                <h3 class="title fz_h6">
                    <?= $item['title']; ?>
                </h3>
            <?php endif; ?>
            <svg class="jsChoose__item_arrow" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18 9L12 15L6 9" stroke="#C7C9D6" stroke-width="1.5" />
            </svg>
        </div>
    </div>
    <?php if ($item['description']) : ?>
        <div class="jsChoose__item_desc lh19">
            <p><?= $item['description']; ?></p>
        </div>
    <?php endif; ?>
</div>