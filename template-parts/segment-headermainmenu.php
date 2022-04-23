<!--        Main menu start -->
<div class="main-menu">
    <div class="container">
        <!--        main navbar start -->
        <div class="d-flex flex-wrap align-items-center justify-content-start justify-content-md-between py-3 bg-transparent">
            <a href="<?php echo get_home_url(); ?>" class="logo-holder d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none justify-content-center justify-content-md-start">
                <?php

                $custom_logo_id = get_theme_mod('custom_logo');
                $logo = wp_get_attachment_image_src($custom_logo_id, 'full');

                if (has_custom_logo()) {
                    echo '<img src="' . esc_url($logo[0]) . '" class="main-menu-logo" alt="' . get_bloginfo('name') . '">';
                } else {
                    echo '<h1>' . get_bloginfo('name') . '</h1>';
                }
                ?>
            </a>

            <?php
            if(has_nav_menu('main_menu')){
              wp_nav_menu(array(
                  'theme_location' => 'main_menu',
                  'container' => 'ul',
                  'menu_class' => 'nav col-12 col-md-auto mb-2 justify-content-md-center justify-content-between flex-sm-row flex-column align-items-center align-items-md-start mb-md-0',
                  'add_li_class' => '',
                  'add_a_class' => 'nav-link px-2 text-white text-uppercase',
              ));
            }
            ?>

            <div class="col-12 col-md-3 text-end">
<!--                handled by searchform.php-->
                <?php get_search_form(); ?>
            </div>
        </div>
        <!--        main navbar end -->
    </div>
</div>
<!--        Main menu end -->
