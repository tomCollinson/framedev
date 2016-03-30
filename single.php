<?php

get_header(); 
$undercore_page_type = undercore_get_page_type();
$undercore_sidebar_class = undercore_get_sidebar_class($undercore_page_type); // Class to apply which controls where the sidebar sits in relation to content
$displayHtmlTags = undercore_get_option('undercore_blog_html_tags');
?>
<div class="container <?php echo $undercore_sidebar_class; ?>">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php the_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();

					if ( $displayHtmlTags ) :
					

					echo '<div class="allowed-html-comments"><p>Allowed HTML Tags</p><span class="allowed-html-comments-tags">';
					
					echo allowed_tags(); 
					endif;

					echo "</span></div>";
				endif;
			endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>