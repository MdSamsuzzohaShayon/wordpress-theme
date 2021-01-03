<h2>Hello from contact</h2>


<!--THIS IS MAP-->
<?php
//    pageBanner(array(
//            'title'=> "Our Location",
//            "subtitle" => "We have several conveniently located place"
//    ));
?>

<div class="container container--narrow page-section">
    <ul class="link-list min-list">
        <?php 
            while(have_posts()){
                the_post();
                ?>
                <li><a href="<?php the_permalink(); ?>" class="link"><?php the_title(); ?></a></li>
                <?php
            }
            echo pageinate_links();
        ?>
    </ul>
</div>
