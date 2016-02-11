<?php
/*
Template Name: Privacy Policy
*/
?>

<?php get_header(); ?>


<section class="wrap container">
    <div class="row">
        <div class="col-sm-12">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?><?php the_content(); ?>
                <?php endwhile; else: ?>
            <p><?php _e('Sorry, this page does not exist.'); ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>




<section id="offices">
    <div class="sidebar">
        <!-- Office One -->
        <div id="office1" class="office1">
            <h2><?= get_option('qs_contact_city'); ?></h2>
            <div class="info">

                <p><?= get_option('qs_contact_street'); ?><br>
                    <?= get_option('qs_contact_city'); ?>,
                    <?= get_option('qs_contact_state'); ?>
                    <?= get_option('qs_contact_zip'); ?><br></p>
                <p>Tel: <a href="tel:<?= get_option("qs_contact_phone"); ?>"><?= get_option("qs_contact_phone"); ?></a> | Fax: <?= get_option("qs_contact_fax"); ?></p>

                <h4>Office Hours</h4>
                <?php $post = get_post(9); $content = apply_filters('the_content', $post->post_content); echo $content;?>

            </div>

            <div class="office-btn">

                <div class="map2">
                    <a href="https://www.google.com/maps/place/68-35+Myrtle+Ave,+Glendale,+NY+11385/@40.7019103,-73.8833704,17z/data=!3m1!4b1!4m2!3m1!1s0x89c25e7f524bf29f:0xbeeac5090228a099" class="mobile">View On Map</a>
                </div>

            </div><!-- /.office-btn -->
        </div><!-- /.office1 -->

        <!-- Office Two -->
        <div id="office2" class="office2">
            <h2><?= get_option('qs_contact_city2'); ?></h2>
            <div class="info">

                <p><?= get_option('qs_contact_street2'); ?><br>
                    <?= get_option('qs_contact_city2'); ?>,
                    <?= get_option('qs_contact_state2'); ?>
                    <?= get_option('qs_contact_zip2'); ?><br></p>
                <p>Tel: <a href="tel:<?= get_option("qs_contact_phone2"); ?>"><?= get_option("qs_contact_phone2"); ?></a> | Fax: <?= get_option("qs_contact_fax"); ?></p>

                <h4>Office Hours</h4>
                <?php $post = get_post(63); $content = apply_filters('the_content', $post->post_content); echo $content;?>

            </div>

            <div class="office-btn">

                <div class="map2">
                    <a href="https://www.google.com/maps/place/355+Mineola+Blvd,+Mineola,+NY+11501/@40.75051,-73.645779,17z/data=!3m1!4b1!4m2!3m1!1s0x89c287f96f621e5b:0x7b91aa51c23106ee" class="mobile">View On Map</a>
                </div>
            </div><!-- /.office-btn -->

        </div><!-- /.office2 -->
    </div>

    <div class="map">
        <div id="map">
            <img src="#" alt="Static fallback image showing the location of South Shore Cardiovascular, West Islip"/>
        </div>
    </div>
</section>

<?php 
	// No comments on homepage
	//comments_template();
?>

<?php get_footer(); ?>