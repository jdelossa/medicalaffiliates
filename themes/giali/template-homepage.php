<?php
/**
 * Template Name: Homepage Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/home/content', 'jumbotron') ?>
  <?php get_template_part('templates/home/content', 'services')?>
  <h3 class="about">About Us</h3>
  <?php get_template_part('templates/home/content', 'offices')?>
<?php endwhile; ?>
