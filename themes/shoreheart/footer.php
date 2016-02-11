<footer>
  <!-- Footer -->
  <div id="contact" class="footer">
    <div class="container">
        <div class="row-fluid">
            <div class="col-sm-12">
                <h3><?php $post = get_post(16); $title = apply_filters('the_title', $post->post_title); echo $title;?></h3>
                <hr>
                <?php $post = get_post(16); $content = apply_filters('the_content', $post->post_content); echo $content;?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="col-sm-6">
                <h4>Our Office</h4>
                <p><?= get_option('qs_contact_street'); ?><br>
                    <?= get_option('qs_contact_city'); ?>,
                    <?= get_option('qs_contact_state'); ?>
                    <?= get_option('qs_contact_zip'); ?><br></p>
                <p>Phone: <a href="tel:<?= get_option("qs_contact_phone"); ?>"><?= get_option("qs_contact_phone"); ?></a></p>
                <p>Fax: <a href="tel:<?= get_option("qs_contact_fax"); ?>"><?= get_option("qs_contact_fax"); ?></a></p>

            </div>
            <div class="col-sm-6">
                <h4>E-Mail Us</h4>
                <?= do_shortcode ('[contact-form-7 id="63" title="Contact Us"]'); ?>
            </div>
        </div>

        <div class="row-fluid">
            <div class="col-sm-6">
              <div class="footer-logo">
                <a href="http://www.winthrop.org" target="_blank"><img src="<?php bloginfo('template_directory');?>/library/images/affiliate.png" alt="affliate"></a>
              </div>
            </div>
            <div class="col-sm-6">
              <p class="attribution">©<?php echo date("Y"); ?> - Winthrop University Hospital</p>
        </div>
        </div>
    </div>
  </div>
</footer> <!-- end footer -->	
			
	<!--[if lt IE 7 ]>
			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
	<![endif]-->
	
	<?php wp_footer(); // js scripts are inserted using this function ?>
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory');?>/library/js/scroll-then-fixed.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory');?>/library/js/smoothscroll.js"></script>
		
</body>
</html>