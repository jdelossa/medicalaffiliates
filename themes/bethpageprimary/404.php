<?php
/**
 * The template for displaying 404 pages (Not Found)
 */
?>
<?php get_header(); ?>

<div class="sub-header">
	<div class="container">
		<div class="page-title">
		<h2>404 Error</h2>
		</div>
	</div>
</div>

<div id="error" class="hero-unit">
	<div class="container">
		<div class="error-logo">
			<img src="<?php bloginfo('template_directory');?>/img/affiliate.png">
		</div>
	</div>
</div>

<div class="container push-footer">
	<div class="row-fluid">
		<div class="span8">
			<div class="content">
				<h3>Page Not Found</h3> 
				<p>Sorry, the page you are looking for does not exist.</p>
				<p>If you are looking for the Winthrop University Hospital website, you can find the link <a href="http://www.winthrop.org" target="_blank">here</a>.</p>		
				<br><br><br>
			</div>
		</div>

		<div class="span4">
			<div class="content">
				<div class="search-form form-horizontal">
					<p>Please try one of the following links:</p>
					<ul class="nav navbar-nav">
			        	<?php wp_list_pages(array('title_li' => '', 'orderby' => 'id', 'include' => '2, 13, 15')); ?>
			      	</ul>
				</div>
			</div>
		</div>
	</div>
</div>





<?php get_footer(); ?>