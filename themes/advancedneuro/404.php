<?php
/**
 * The template for displaying 404 pages (Not Found)
 */
?>
<?php get_header(); ?>

    <div id="wrapper" class="error-page">

        <div id="error" class="jumbotron"></div>

        <div id="wrap" class="container">

            <section>
                <div class="row">
                    <div class="col-md-12">
                        <div class="content">
                            <div class="full-text-margin text-center">

                                <h2><?php _e("404 Error - Page Not Found","wpbootstrap"); ?></h2>

                                <a href="<?php echo site_url(); ?>" class="btn">Home</a><br>

                                <p><?php _e("This is embarrassing. We can't find what you were looking for. <br> Go back home by clicking on the button above.","wpbootstrap"); ?></p>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>

<?php get_footer(); ?>