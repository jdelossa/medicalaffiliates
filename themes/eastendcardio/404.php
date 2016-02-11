<?php get_header(); ?>

    <section id="error-hero">
        <div class="jumbotron"></div>
    </section>

    <section id="error">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2><?php _e("404 Error - Page Not Found","wpbootstrap"); ?></h2>
                    <br><span class="separator line-separator"></span></h2>
                    <p class="text-center"><?php _e("This is embarrassing. We can't find what you were looking for.","wpbootstrap"); ?></p>
                    <p class="text-center">To go back home, <a href="<?php echo site_url(); ?>">click here</a>.</p>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>