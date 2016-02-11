<?php get_header(); ?>

    <div class="container">

        <section id="error">

            <div class="wrapper text-center">
                <h2 class="headline"><?php _e("404 Error - Page Not Found","wpbootstrap"); ?></h2>
                <p><?php _e("This is embarrassing. We can't find what you were looking for.","wpbootstrap"); ?></p>
                <br>
                <p><a href="<?php echo site_url(); ?>#contact">Contact us</a> or go back <a href="<?php echo site_url(); ?>">home</a>.</p>
            </div>

        </section>

    </div>

<?php get_footer(); ?>