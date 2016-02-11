<?php get_header(); ?>
<div id="wrapper">
	<div class="container-fluid">
		<section>
			<div class="row">
				<div class="col-sm-12">
					<h3 class="header"><?php _e("Epic 404 - Article Not Found","wpbootstrap"); ?></h3>
					<p><?php _e("This is embarassing. We can't find what you were looking for.","wpbootstrap"); ?></p>
					<p>Go back <a href="<?php get_page_link(2); ?>" style="text-decoration: underline;">home</a>.</p>
				</div>
			</div>
		</section>
	</div>
</div>
<?php get_footer(); ?>