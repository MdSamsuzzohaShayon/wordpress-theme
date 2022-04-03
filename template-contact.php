<?php
/*
 Template Name: Contact
 */
//Set default template to contact from page edit option
?>

<?php get_header(); ?>

<div class="container">
    <h2 class="text-danger mt-3">Contact Us</h2>
    <div class="contact-form row">
        <div class="col-md-6 col-sm-12">
            Something
        </div>
        <div class="col-md-6 col-sm-12">
<!--            <form action="/">-->
<!--                <div class="input-group mb-3 border-1 border-light">-->
<!--                    <span class="input-group-text bg-secondary text-light border-0" id="name"><i-->
<!--                                class="bi bi-file-person"></i></span>-->
<!--                    <input type="text" class="form-control bg-secondary border-0 text-light" placeholder="Name"-->
<!--                           aria-label="Name" aria-describedby="name">-->
<!--                </div>-->
<!--                <div class="input-group mb-3 border-1 border-light">-->
<!--                    <span class="input-group-text bg-secondary text-light border-0" id="email"><i-->
<!--                                class="bi bi-envelope"></i></span>-->
<!--                    <input type="email" class="form-control bg-secondary border-0 text-light" placeholder="Email"-->
<!--                           aria-label="Email" aria-describedby="email">-->
<!--                </div>-->
<!--                <div class="input-group mb-3 border-1 border-light">-->
<!--                    <textarea class="form-control bg-secondary border-0 text-light" placeholder="Leave a message here"-->
<!--                              id="floatingTextarea"></textarea>-->
<!--                </div>-->
<!--                <button class="btn btn-danger px-5 rounded-0" type="submit">Send</button>-->
<!--            </form>-->
            <?php get_template_part('template-parts/contact', 'form'); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>

