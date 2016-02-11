<header id="header" class="banner" role="banner">
  <div class="container">
    <div class="mobile-header">
        <div class="button1 btn">
            <a href="tel:5163654949"><i class="fa fa-phone"> Call Us</i></a>
        </div>
        <div class="button2 btn">
            <a href="https://www.google.com/maps/search/gastrointestinal+associates+of+long+island/@40.8102231,-73.6600035,12z/data=!3m1!4b1" target="_blank"><i class="fa fa-map-marker"> Long Island, NY</i></a>
        </div>
    </div>
    <a class="brand" href="<?= esc_url(home_url('/')); ?>">Gastrointestinal Associates of Long Island</a>
      <img src="http://giali.net/wpsite/wp-content/uploads/2015/10/WUH_Affiliate_Color.png" alt="Winthrop Logo" class="header-logo"/>

    <nav role="navigation">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>
  </div>
</header>
