<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area-404">
		
       		<section class="error-404-page not-found">
				<header class="page-header-404">
					<h1><img src="<?php echo get_template_directory_uri(); ?>/images/404.png" alt="..."></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p>Oops! That page cannot be found.</p>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->




	</div><!-- .content-area -->

<?php get_footer(); ?>
