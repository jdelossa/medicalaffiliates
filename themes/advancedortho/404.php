<?php get_header(); ?>

    <div id="hero">
        <div id="home">
            <div class="container">
                <div class="cta">
                    <div class="cta-container">

                        <div class="animated fadeIn" style="visibility: visible;">

                            <h2><?php _e("404 Error - Page Not Found","wpbootstrap"); ?></h2>
                            <p style="margin-bottom: 20px;"><?php _e("This is embarrassing. We can't find what you were looking for.","wpbootstrap"); ?></p>

                            <div class="cta-logo">
                                <img src="<?php bloginfo('template_directory');?>/library/img/affiliate-header.png" alt="Winthrop Univeristy Hospital">
                            </div>

                            <div class="cta-down">
                                <a href="#about">&#9660;</a>
                            </div>

                        </div><!-- cta animated fadeInUp -->

                    </div><!-- /.cta-container -->
                </div><!-- .cta -->
            </div><!-- /.container-->
        </div><!-- /#home -->

        <div class="mobile-logo">
            <img src="<?php bloginfo('template_directory');?>/library/img/affiliate-header.png" alt="Winthrop Univeristy Hospital">
        </div>
    </div><!-- /#hero -->

    <section class="wrap container">
        <div id="error-page">
            <br/><br/><br/>
            <h3><?php _e("404 Error - Page Not Found","wpbootstrap"); ?></h3>
            <p>Sorry! If you can not find what you are looking for, please go back <a href="<?php echo site_url(); ?>">home</a> or <a href="<?php echo site_url(); ?>#contact-gc">contact us</a>.</p>
            <br/><br/><br/>
        </div>
    </section>


<?php get_footer(); ?>