<!--        custom post category feature start-->
<div class="row cat-features">
    <?php wp_nav_menu(array(
        'theme_location' => 'feature_menu',
        'container' => '',
        'menu_class' => 'nav col-12 col-lg-auto my-2 justify-content-center justify-content-md-between my-md-0 text-small',
        'walker' => new Thesportworship_Feature_Menu_Walker()
    )); ?>
</div>
<!--        custom post category feature end-->