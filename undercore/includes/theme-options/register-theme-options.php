<?php

// GENERAL THEME SETTINGS

$undercore_options[] = array(
	"slug" => "general",
	"name" => __("Upload Logo","undercore"),
	"desc" => __("Upload your logo or enter the URL if already uploaded. If no logo is provided the default theme logo will be displayed. Logo dimensions 340px * 120px", "undercore"),
	"id" => "undercore_site_logo",
	"type" => "upload"
	);

$undercore_options[] = array(
	"slug" => "general",
	"name" => __("Favicon Upload" , "undercore"),
	"desc" => __( "Upload your site Favicon in the following formats: .png, .ico, .gif" ,"undercore"),
	"id" => "undercore_favicon",
	"type" => "upload"
	);

$undercore_options[] = array(
	"slug" => "general",
	"name" => __( "Google Analytics Tracking Code", "undercore"),
	"desc" => __( "Enter your Google Analytics tracking code here. You can either provide the entire code or just your UA ID and we'll do the rest.","undercore"),
	"id" => "undercore_analytics_code",
	"type" => "textarea"
	);

// FOOTER SETTINGS

$undercore_options[] = array(
	"slug" => "footer",
	"name" => __( "Copyright Notice", "undercore"),
	"desc" => __( "Enter your copyright notice that will sit at the bottom of the footer.","undercore"),
	"id" => "undercore_copyright_notice",
	"type" => "text"
	);

$footerColSelectOptions = array(
	"1" => __("One Column", "undercore"),
	"2" => __("Two Columns", "undercore"),
	"3" => __("Three Columns", "undercore"),
	"4" => __("Four Columns", "undercore"),
	"5" => __("Five Columns", "undercore"),
	"6" => __("Six Columns", "undercore")
	);


$undercore_options[] = array(
	"slug" => "footer",
	"name" => __( "Footer Columns", "undercore"),
	"desc" => __( "<p>Select the number of columns to display in the footer.</p>","undercore"),
	"id" => "undercore_footer_columns",
	"type" => "select",
	"options" => $footerColSelectOptions
	);

$undercore_options[] = array(
	"slug" => "footer",
	"name" => __( "Preserve Column Widths", "undercore"),
	"desc" => __( "<p><strong>Preserving Widths</strong><br/>If unchecked the columns will expand to fill the width of the footer.</p>","undercore"),
	"std" => "false",
	"id" => "undercore_footer_column_widths_preserved",
	"type" => "checkbox"
	);

$undercore_options[] = array(
	"slug" => "footer",
	"name" => __( "Footer Social Icons", "undercore"),
	"desc" => __( "<p>Display social account icons in the footer of the website</p>","undercore"),
	"std" => "false",
	"id" => "undercore_footer_social",
	"type" => "checkbox"
	);


$socialMediaOptions = array(
	"fb" => "Facebook",
	"tw" => "Twitter",
	"li" => "LinkedIn",
	"be" => "Behance",
	"in" => "Instagram"
	);

// SOCIAL
$undercore_options[] = array(
	"slug" => "social",
	"name" => __( "Social Icon", "undercore"),
	"id" => "undercore_social_icon",
	"type" => "select",
	"options" => $socialMediaOptions
	);
$undercore_options[] = array(
	"slug" => "social",
	"name" => __( "Social Url", "undercore"),
	"id" => "undercore_social_url",
	"type" => "text"
	);

// HEADER
$undercore_options[] = array(
	"slug" => "header",
	"name" => __( "Extra Header Information", "undercore"),
	"desc" => __( "<p>Include extra information in a bar above the main header, for example your phone number.</p>","undercore"),
	"id" => "undercore_header_extra",
	"type" => "text",
	);
$undercore_options[] = array(
	"slug" => "header",
	"name" => __( "Header Social Icons", "undercore"),
	"desc" => __( "<p>Display Social Profile icons as set in the social profile setting</p>","undercore"),
	"id" => "undercore_header_social",
	"std" => "false",
	"type" => "checkbox"
	);
$undercore_options[] = array(
	"slug" => "header",
	"name" => __( "Sticky Header", "undercore"),
	"desc" => __( "<p>The header sticks to the top of the page when the user scrolls down.</p>","undercore"),
	"id" => "undercore_header_sticky",
	"std" => "false",
	"type" => "checkbox",
	"bodyClass" => "undercore_header_sticky"
	);
$undercore_options[] = array(
	"slug" => "header",
	"name" => __( "Collapse Header", "undercore"),
	"desc" => __( "<p>Check to collapse the header when the page is scrolled down, reducing the space it takes up on the screen.</p>","undercore"),
	"id" => "undercore_header_collapse",
	"std" => "false",
	"type" => "checkbox",
	"requires" => "undercore_header_sticky",
	"bodyClass" => "undercore_header_collapse"
	);

// Sidebar Options

$sidebarOptions = array(
	"left" => "Left aligned",
	"right" => "Right aligned",
	"disabled" => "Disabled"
	);

$undercore_options[] = array(
	"slug" => "sidebars",
	"name" => __( "Pages Sidebar", "undercore"),
	"desc" => __( "<p>Choose the poisiton of the sidebar or disable it for pages.</p>","undercore"),
	"id" => "undercore_sidebar_page",
	"type" => "select",
	"std" => "right",
	"options" => $sidebarOptions
	);
$undercore_options[] = array(
	"slug" => "sidebars",
	"name" => __( "Blog Page Sidebar", "undercore"),
	"desc" => __( "<p>Choose the poisiton of the sidebar or disable it for your blog page.</p>","undercore"),
	"id" => "undercore_sidebar_blog",
	"type" => "select",
	"std" => "right",
	"options" => $sidebarOptions
	);
$undercore_options[] = array(
	"slug" => "sidebars",
	"name" => __( "Single Posts Sidebar", "undercore"),
	"desc" => __( "<p>Choose the poisiton of the sidebar or disable it for single posts.</p>","undercore"),
	"id" => "undercore_sidebar_single",
	"type" => "select",
	"std" => "right",
 	"options" => $sidebarOptions
	);
$undercore_options[] = array(
	"slug" => "sidebars",
	"name" => __( "Archive Sidebar", "undercore"),
	"desc" => __( "<p>Choose the poisiton of the sidebar or disable it for archive pages.</p>","undercore"),
	"id" => "undercore_sidebar_archive",
	"type" => "select",
	"std" => "right",
	"options" => $sidebarOptions
	);


/**
 * Colors
 * Lets the user control the colors used throughout the theme. Presets can be provided that will populate these options
 *
 */
$undercore_config['color_sets'] = array(
    'header'      => 'Header',
    'main'        => 'Main Content',
    'alternate'   => 'Alternate Content',
    'footer'      => 'Footer'
 );

$undercore_colorsets = $undercore_config['color_sets'];

foreach($undercore_colorsets as $key => $value)
{
$undercore_options[] = array(
	"slug" => "styles",
	"name" => $value ." ". __( "Background Color", "undercore"),
	"desc" => __( "<p>Main Background Colour</p>","undercore"),
	"id" => "undercore-" . $key . "-colors_background",
	"class" => "undercore-color-picker",
	"type" => "text",
	"std" => "#ffffff",
	"group" => $key,
	"custom_css" => true
	);
$undercore_options[] = array(
	"slug" => "styles",
	"name" => $value ." ". __( "Primary Color", "undercore"),
	"desc" => __( "<p>Main Theme Colour</p>","undercore"),
	"id" => "undercore-" . $key . "-colors_primary",
	"class" => "undercore-color-picker",
	"type" => "text",
	"std" => "#444444",
	"group" => $key,
	"custom_css" => true
	);
$undercore_options[] = array(
	"slug" => "styles",
	"name" => $value ." ". __( "Secondary Color", "undercore"),
	"desc" => __( "<p>Secondary Theme Colour</p>","undercore"),
	"id" => "undercore-" . $key . "-colors_secondary",
	"class" => "undercore-color-picker",
	"type" => "text",
	"std" => "#dddddd",
	"group" => $key,
	"custom_css" => true
	);
$undercore_options[] = array(
	"slug" => "styles",
	"name" => $value ." ". __( "Body Text Color", "undercore"),
	"desc" => __( "<p>Colour of body text</p>","undercore"),
	"id" => "undercore-" . $key . "-colors_body_text",
	"class" => "undercore-color-picker",
	"type" => "text",
	"std" => "#000000",
	"group" => $key,
	"custom_css" => true
	);

};

// Blog Page Options
/**
 * @ToDo - Add layout and post style options. For now we can control what is and isn't displayed
 *
 */

$blogOptions = array(
	"author" => "Post Author",
	"comment_count" => "Post Comment Count",
	"category" => "Post Categories",
	"tags" => "Post Tags",
	"date" => "Post Published Date",
	"html_tags" => "Allowed HTML Tags"
	);

foreach($blogOptions as $key => $val) {
	$undercore_options[] = array(
	"slug" => "blog",
	"name" => __( $val, "undercore"),
	"desc" => __( "<p>" . $val . "</p>","undercore"),
	"id" => "undercore_blog_" . $key,
	"std" => "true",
	"type" => "checkbox"
	);
}

?>