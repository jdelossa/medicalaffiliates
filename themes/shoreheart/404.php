<?php
/**
 * The template for displaying 404 pages (Not Found)
 */
?>
<?php get_header(); ?>

<!--HERO UNIT-->
<div id="error">
    <div class="cta container">
        <div class="cta-container">
            <div class="cta animated fadeInUp" style="visibility: visible;">
                <h2><?php _e("404 Error - Page Not Found","wpbootstrap"); ?></h2>
                <p><?php _e("This is embarrassing. We can't find what you were looking for. <br> Go back home by clicking on the button below.","wpbootstrap"); ?></p>
                <div class="cta-bg">
                    <ul>
                        <li><a href="<?php echo site_url(); ?>">Home</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="cta-logo">
        <img src="<?php bloginfo('template_directory');?>/library/images/affiliate.png" alt="Affiliates">
    </div>
</div>



<div id="wrap" class="container">

    <section>
        <div class="row">
            <div class="col-md-12">
                <div class="content">
                    <div class="full-text-margin text-center">
                        <h4>Contact Information</h4>
                        <p><?= get_option('qs_contact_street'); ?><br>
                            <?= get_option('qs_contact_city'); ?>,
                            <?= get_option('qs_contact_state'); ?>
                            <?= get_option('qs_contact_zip'); ?><br></p>

                        <p><b>Phone: </b><a href="tel:<?= get_option("qs_contact_phone"); ?>"><?= get_option("qs_contact_phone"); ?></a></p>
                        <p><b>Fax: </b><a href="tel:<?= get_option("qs_contact_fax"); ?>"><?= get_option("qs_contact_fax"); ?></a></p>

                        <?php $post = get_post(711); $content = apply_filters('the_content', $post->post_content); echo $content;?>
                        <p class="muted"><small>* Diagnostic Testing Only</small></p>

                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<!-- Modal -->
<div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h3 class="modal-title" id="myModalLabel">Contact Us</h3>
            </div>

            <div class="modal-body">
                <h4>Our Office</h4>
                <p><?= get_option('qs_contact_street'); ?><br>
                    <?= get_option('qs_contact_city'); ?>,
                    <?= get_option('qs_contact_state'); ?>
                    <?= get_option('qs_contact_zip'); ?><br></p>

                <p><b>Phone: </b><a href="tel:<?= get_option("qs_contact_phone"); ?>"><?= get_option("qs_contact_phone"); ?></a></p>
                <p><b>Fax: </b><a href="tel:<?= get_option("qs_contact_fax"); ?>"><?= get_option("qs_contact_fax"); ?></a></p>

                <?php $post = get_post(711); $content = apply_filters('the_content', $post->post_content); echo $content;?>
                <p class="muted"><small>* Diagnostic Testing Only</small></p>


                <div class="separator line-separator"></div>

                <h4>E-Mail Us</h4>
                <?php $post = get_post(11); $content = apply_filters('the_content', $post->post_content); echo $content;?>
                <?= do_shortcode ('[contact-form-7 id="139" title="Contact form 1"]'); ?>
            </div>

        </div>
    </div>
</div>

<?php get_footer(); ?>