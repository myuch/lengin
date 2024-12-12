<div class="pagination">
    <?php
    echo paginate_links(array(
        'base' => preg_replace('/\?.*/', '', get_pagenum_link()) . '%_%',
        'format' => '?pages=%#%',
        'total' => $blog->max_num_pages,
        'current' => $current_page,
        'prev_text'    => sprintf('<i></i> %1$s', __('
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 12H4M4 12L11 19M4 12L11 5" stroke="#C7C9D6" stroke-width="1.5"/>
                            </svg>
                            ')),
        'next_text'    => sprintf('%1$s <i></i>', __('
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 12H20M20 12L13 19M20 12L13 5" stroke="#C7C9D6" stroke-width="1.5"/>
                            </svg>
                            ')),
        'show_all'     => false,
        'end_size'     => 1,
        'mid_size'     => 1,
        'prev_next'    => true,
        'type'         => 'plain',
        'add_args'     => false,
        'add_fragment' => '',
    ));

    wp_reset_postdata();

    ?>
</div>