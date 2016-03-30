<?php
	// Get Single Post Settings
	$displayAuthor = undercore_get_option('undercore_blog_author');
	$displayCommentCount = undercore_get_option('undercore_blog_comment_count');
	$displayCategories = undercore_get_option('undercore_blog_category');
	$displayTags = undercore_get_option('undercore_blog_tags');
	$displayDate = undercore_get_option('undercore_blog_date');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<div class="entry-meta">
			<?php if ($displayDate) : ?>

				<?php echo get_the_date( 'Y-m-d' ); ?>

			<?php endif;
				if ($displayCommentCount) : ?>
				<div class="entry-comment-count">
					<a href="#respond"><?php echo get_comments_number_text( "Be the first to comment", "%", "%");?></a>
				</div>
			<?php endif; 
				if ($displayAuthor) :
			?>
				<div class="entry-author">
					Posted by: <?php the_author(); ?>
				</div>
			<?php endif;
				 if ($displayCategories) : ?>
				<div class="entry-categories">
					Posted in: <?php the_category(); ?>
				</div>
			<?php endif ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'undercore' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<footer class="entry-footer">
		<?php if ($displayTags) : ?>
			<div class="entry-tags">
				<?php the_tags(); ?>
			</div>
		<?php endif; ?>
	</footer>
</article><!-- #post-## -->