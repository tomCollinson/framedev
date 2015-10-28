<?php

function undercore_widgets_init() {

	register_sidebar( array(
						  'name'          => __( 'Main Sidebar', 'undercore' ),
						  'description'   => __( 'Default sidebar pulled from sidebar.php.', 'undercore' ),
						  'id'            => 'main-sidebar',
						  'before_title'  => '<div class="widget-title"><h3>',
						  'after_title'   => '</h3></div>',
						  'before_widget' => '<div id="%1$s" class="widget-wrapper %2$s">',
						  'after_widget'  => '</div>'
					  ) );
	register_sidebar( array(
						  'name'          => __( 'Blog Sidebar', 'undercore' ),
						  'description'   => __( 'Sidebar for your blog page and single posts', 'undercore' ),
						  'id'            => 'blog-sidebar',
						  'before_title'  => '<div class="widget-title"><h3>',
						  'after_title'   => '</h3></div>',
						  'before_widget' => '<div id="%1$s" class="widget-wrapper %2$s">',
						  'after_widget'  => '</div>'
					  ) );
	register_sidebar( array(
						  'name'          => __( 'Page Sidebar', 'undercore' ),
						  'description'   => __( 'Sidebar for pages', 'undercore' ),
						  'id'            => 'page-sidebar',
						  'before_title'  => '<div class="widget-title"><h3>',
						  'after_title'   => '</h3></div>',
						  'before_widget' => '<div id="%1$s" class="widget-wrapper %2$s">',
						  'after_widget'  => '</div>'
					  ) );
	
	$footer_columns = undercore_get_footer_columns(5); // provide a default if none is set
	
	for ($i = 1; $i <= $footer_columns; $i++)
	{
		register_sidebar(array(
			'name' => 'Footer Column '.$i,
			'before_widget' => '<section id="%1$s" class="widget clearfix %2$s">', 
			'after_widget' => '<span class="seperator extralight-border"></span></section>', 
			'before_title' => '<h3 class="widgettitle">', 
			'after_title' => '</h3>', 
			'id'=>'footer-col-'.$i
		));
	}
}
add_action( 'widgets_init', 'undercore_widgets_init' );

?>