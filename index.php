<?php
	get_header();
	
	$undercore_page_type = undercore_get_page_type();
	$undercore_sidebar_class = undercore_get_sidebar_class($undercore_page_type); // Class to apply which controls where the sidebar sits in relation to content

?>
<div class="container <?php echo $undercore_sidebar_Class; ?>">
	<?php get_template_part( 'template-parts/loop', 'index' ); ?>
</div>
<?php get_footer(); ?>