<div class="col-sm-8 col-centered">
    <?php get_template_part('templates/content', 'page'); ?>
    <div class="offices">
        <div class="col-lg-8 col-md-7">
            <img src="<?php $bloginfo = get_bloginfo('url'); ?>wpsite/wp-content/uploads/2015/10/giali-office.jpg" class="post-image" alt="Lake Success Office"/>
        </div>
        <div class="col-lg-4 col-md-5">
            <h4><span>Lake Success Office</span></h4>
            <p><a href="https://www.google.com/maps/place/Gastrointestinal+Associates+of+Long+Island,+LLP/@40.7568638,-73.6912493,17z/data=!3m1!4b1!4m2!3m1!1s0x89c28828dad07297:0x5807bfb9cf248916" target="_blank"><?php echo get_option('qs_contact_street'); ?></a></p>
            <p>Tel: <a href="tel:<?php echo get_option('qs_contact_phone'); ?>"><?php echo get_option('qs_contact_phone'); ?></a></p>
            <p>Fax: <?php echo get_option('qs_contact_fax'); ?></p>
            <h4><span>Glen Cove Office</span></h4>
            <p><a href="https://www.google.com/maps/place/Gastrointestinal+Associates+of+Long+Island/@40.8102228,-73.6600027,13z/data=!4m5!1m2!2m1!1sGastrointestinal+Associates+of+Long+Island,+LLP+glen+clove!3m1!1s0x0000000000000000:0x1066620ad5107392" target="_blank"><?php echo get_option('qs_contact_street2'); ?></a></p>
            <p>Tel: <a href="tel:<?php echo get_option('qs_contact_phone2'); ?>"><?php echo get_option('qs_contact_phone2'); ?></a></p>
            <p>Fax: <?php echo get_option('qs_contact_fax2'); ?></p>
<h4><span>Queens Office</span></h4>
            <p><a href="https://www.google.com/maps/place/68-35+Myrtle+Ave,+Glendale,+NY+11385/@40.701907,-73.8855612,17z/data=!3m1!4b1!4m2!3m1!1s0x89c25e7f523db539:0xd23bfaa654e96512" target="_blank">68-35 Myrtle Avenue</a></p>
            <p>Tel: <a href="tel:<?php echo get_option('qs_contact_phone'); ?>"><?php echo get_option('qs_contact_phone'); ?></a></p>
            <p>Fax: <?php echo get_option('qs_contact_fax'); ?></p>
        </div>
    </div>
</div>