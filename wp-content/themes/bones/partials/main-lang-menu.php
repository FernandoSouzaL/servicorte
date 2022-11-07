<?php 
    $menu_name = 'main-language';
    $locations = get_nav_menu_locations();
    $menu      = wp_get_nav_menu_object($locations[ $menu_name ]);
    $redes     = wp_get_nav_menu_items($menu->term_id, array('order' => 'DESC')); ?>

    <?php foreach ($redes as $menu): ?>

        <li class="c-menu__icon">
            <a href="<?= $menu->url; ?>">
                <picture>
                    <img src="<?php echo get_template_directory_uri(); ?>/library/images/<?= $menu->title; ?>.png" alt="<?= $menu->title; ?>">
                </picture>
            </a>
        </li>

    <?php endforeach; ?>