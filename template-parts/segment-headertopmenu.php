<header>
    <div class="top-menu bg-secondary">
        <!--top navbar start -->
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-transparent top-navbar">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                        aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => "top_menu", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
                        'menu_class' => "navbar-nav me-auto mb-2 mb-lg-0", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
                        'container' => "", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
                        'walker' => new Thesportworship_Top_Menu_Walker(), // (object) Instance of a custom walker class.
                    ));
                    ?>
                    <span class="navbar-text text-white under-development">Login / Register </span>
                </div>
            </nav>


        </div>

        <!--top navbar end -->
    </div>
</header>