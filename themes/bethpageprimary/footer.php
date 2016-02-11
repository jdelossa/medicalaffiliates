<footer id="footer">
  <!-- Pre Footer -->
  <div class="pre-footer">
    <div class="container">
      <div class="row-fluid">
        <div class="span12">
          <a href="#" id="top" class="top"><i class="fa fa-chevron-up"></i></a>
          <p>Phone: <a href="tel:<?= get_option("qs_contact_phone"); ?>"><?= get_option("qs_contact_phone"); ?></a> | Fax: <a href="tel:<?= get_option("qs_contact_fax"); ?>"><?= get_option("qs_contact_fax"); ?></a></p>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <div class="footer"> 
    <div class="container"> 
      <div class="row-fluid">
        <div class="span6">
          <div class="footer-logo">
            <a href="http://www.winthrop.org" target="_blank"><img src="<?php bloginfo('template_directory');?>/img/affiliate.png" alt="affliate"></a>
          </div>
        </div>
        <div class="span6">
          <p><a href="http://wuhwebsites.winthrop.org/bethpage_wordpress/patient-privacy-policy/" style="color: rgba(255,255,255,0.8); font-size: 12px;">Patient Privacy Policy</a> | ©<?php echo date("Y")?> - Winthrop University Hospital</p>
        </div>
      </div>
    </div>
  </div>

</footer>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/sticky-footer.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/smoothscroll.js"></script>
</body>
</html>