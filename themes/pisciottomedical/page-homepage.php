<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

<div id="hero">
	<div class="jumbotron"></div>
</div>

<section id="home" class="wrap container">
    <div class="row">
        <div class="col-sm-12">
            <ul class="location">
                <li><a href="#office1"><i class="fa fa-map-marker"></i>
                    <?= get_option('qs_contact_city'); ?>,
                    <?= get_option('qs_contact_state'); ?>
                </a>
                    <br>
                    <a class="phone" href="tel:<?= get_option('qs_contact_phone'); ?>"><?= get_option('qs_contact_phone'); ?></a>
                </li>
                <li><a href="#office2"><i class="fa fa-map-marker"></i>
                    <?= get_option('qs_contact_city2'); ?>,
                    <?= get_option('qs_contact_state2'); ?>
                </a>
                    <br>
                    <a class="phone" href="tel:<?= get_option('qs_contact_phone2'); ?>"><?= get_option('qs_contact_phone2'); ?></a>
                </li>
            </ul>
        </div>
    </div>
</section>

<section id="about" class="wrap container">

    <div class="row">
        <div class="col-md-8 col-centered">
            <h2><?php $post = get_post(2); $content = apply_filters('the_title', $post->post_title); echo $content;?></h2>
            <div class="small-separator small-line-separator"></div>
            <?php $post = get_post(2); $content = apply_filters('the_content', $post->post_content); echo $content;?>
        </div>
    </div>

</section>

<section id="physicians" class="wrap container">

    <div class="row">
        <div class="col-md-8 col-centered">
            <h2>Our Physicians</h2>
            <div class="small-separator small-line-separator"></div>
            <?php get_template_part('doctor-images'); ?>
        </div>
    </div>

</section>

<section id="insurance" class="wrap container">

    <div class="row">
        <div class="col-md-8 col-centered">
            <h2>Accepted Insurance</h2>
            <div class="small-separator small-line-separator"></div>
            <?php $post = get_post(40); $content = apply_filters('the_content', $post->post_content); echo $content;?>

            <div class="insurance">
                <div class="insurances aetna"></div>
                <div class="insurances anthem"></div>
                <div class="insurances bluecross"></div>
                <div class="insurances centerlight"></div>
                <div class="insurances choicecare"></div>
                <div class="insurances cigna"></div>
                <div class="insurances elderplan"></div>
                <div class="insurances fidelis"></div>
                <div class="insurances ghi"></div>
                <div class="insurances hip"></div>
                <div class="insurances magnaCare"></div>
                <div class="insurances medicaid"></div>
                <div class="insurances medicare"></div>
                <div class="insurances multiPlan"></div>
                <div class="insurances oneonenine"></div>
                <div class="insurances oxford"></div>
                <div class="insurances unhc"></div>
                <div class="insurances vytra"></div>
                <p class="muted" style="text-align: center;"><small>* If your insurance is not listed here, please call the office.</small></p>
            </div>
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
                <div class="office-hours">
                    <?php $post = get_post(42); $content = apply_filters('the_content', $post->post_content); echo $content;?>
                </div>

            </div>

            <div class="office-btn">

                <div class="map2">
                    <a href="https://www.google.com/maps/place/68-35+Myrtle+Ave,+Glendale,+NY+11385/@40.7019103,-73.8833704,17z/data=!3m1!4b1!4m2!3m1!1s0x89c25e7f524bf29f:0xbeeac5090228a099" target="_blank" class="mobile">View On Map</a>
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
                <p>Tel: <a href="tel:<?= get_option("qs_contact_phone2"); ?>"><?= get_option("qs_contact_phone2"); ?></a> | Fax: <?= get_option("qs_contact_fax2"); ?></p>

                <h4>Office Hours</h4>
                <div class="office-hours">
                    <?php $post = get_post(45); $content = apply_filters('the_content', $post->post_content); echo $content;?>
                </div>

            </div>

            <div class="office-btn">

                <div class="map2">
                    <a href="https://www.google.com/maps/place/355+Mineola+Blvd,+Mineola,+NY+11501/@40.75051,-73.645779,17z/data=!3m1!4b1!4m2!3m1!1s0x89c287f96f621e5b:0x7b91aa51c23106ee" target="_blank" class="mobile">View On Map</a>
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