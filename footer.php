
<!--modal start-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-danger" id="exampleModalLabel">Unavailable!!!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="text-secondary" >This part of the website is under development, we are working on this behind the scene. However, you can still enjoy other segment of our website.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!--modal ends-->



    <footer class="blog-footer">
        <div class="container border-bottom border-light">
            <div class="row py-5 my-5 text-sm-center">
                <div class="col-md-3 col-sm-12 text-center text-md-start">
                    <a href="/" class="d-flex align-items-center justify-content-center justify-content-md-start mb-3 link-dark text-decoration-none">
                        <h1>Logo</h1>
                    </a>
                    <p class="text-muted">© 2021</p>
                </div>
                <div class="col-md-3 col-sm-12 text-center text-md-start">
                    <?php

                    wp_nav_menu(array(
                        'theme_location' => 'main_menu',
                        'container' => 'ul',
                        'menu_class' => 'nav flex-column',
                        'add_li_class' => 'nav-item mb-2',
                        'add_a_class' => 'nav-link p-0 text-light',
                    ));

                    ?>
                </div>

                <div class="col-md-3 col-sm-12 text-center text-md-start">
                    <?php

                    wp_nav_menu(array(
                        'theme_location' => 'feature_menu',
                        'container' => 'ul',
                        'menu_class' => 'nav flex-column',
                        'add_li_class' => 'nav-item mb-2',
                        'add_a_class' => 'nav-link p-0 text-light',
                    ));

                    ?>
                </div>
                <div class="col-md-3 col-sm-12 text-center text-md-start">
                    <h5>Newsletter</h5>
                    <div class="input-group px-3 under-development">
                        <input type="text" aria-label="First name" class="form-control newsletter-input">
                        <span class="input-group-text bg-dark text-light px-3"><i class="bi bi-send"></i>Send</span>
                    </div>
                </div>
            </div>

        </div>
        <div class="footer-end py-3">
            <div class="container text-center">
                <p class="text-light">&copy; <?php echo Date('Y');?> - <?php bloginfo('name');?></p>
                <p class="p-0 m-0">
                    <a href="#" class="text-light text-decoration-none">Back to top</a>
                </p>
            </div>
        </div>
    </footer>

</div>
<!--site wrapper end -->
<?php wp_footer() ?>

</body>
</html>