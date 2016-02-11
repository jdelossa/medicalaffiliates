<?php
/**
 * Template Name: Patients Page Sidebar Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
	<?php get_template_part('templates/content', 'page'); ?>
    <h4><span><?php $post = get_post(37); $title = apply_filters('the_title', $post->post_title); echo $title;?></span></h4>
    <?php $post = get_post(37); $content = apply_filters('the_content', $post->post_content); echo $content;?>
    <h4><span><?php $post = get_post(31); $title = apply_filters('the_title', $post->post_title); echo $title;?></span></h4>
    <?php $post = get_post(31); $content = apply_filters('the_content', $post->post_content); echo $content;?>
<h4><span><?php $post = get_post(274); $title = apply_filters('the_title', $post->post_title); echo $title;?></span></h4>
    <?php $post = get_post(274); $content = apply_filters('the_content', $post->post_content); echo $content;?>
    <?php get_template_part('templates/patients/content', 'insurances'); ?>
<?php endwhile; 