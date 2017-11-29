<?php

function blogresources() {
	
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true );
}

add_action('wp_enqueue_scripts', 'blogresources');

function wcWordPress_setup() {
	
	// Navigation Menus
	require_once('wp_bootstrap_navwalker.php');

	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'Blog1' ),
		'footer' => __( 'Footer Menu', 'Blog1'),
	) );
	
		//add featured image support
		add_theme_support('post-thumbnails');
		add_image_size('small-thumbnail', 180, 120, true);
		//to define what part of the image is cropped
		//('banner-image', 920, 210, array('left', 'top'));
		add_image_size('banner-image', 1000, 150, true);
		add_image_size('column-image', 150,1000, true);
	
		// Add post type support
		add_theme_support('post-formats', array('aside', 'gallery', 'link'));
}

add_action('after_setup_theme', 'wcWordPress_setup');

// Customize excerpt word count length
function custom_excerpt_length() {
	return 22;
}

add_filter('excerpt_length', 'custom_excerpt_length');

// Customize Appearance Options
function blog1_customize_register( $wp_customize ) {
//Setting
	
	$wp_customize->add_setting('blog1_text_colour', array(
		'default' => '#000000',
		'transport' => 'refresh',
	));
	
	$wp_customize->add_setting('blog1_text_color', array(
		'default' => '#777777',
		'transport' => 'refresh',
	));
	
	$wp_customize->add_setting('blog1_text_color2', array(
		'default' => '#ffffff',
		'transport' => 'refresh',
	));
	
	$wp_customize->add_setting('blog1_link_color', array(
		'default' => '#006ec3',
		'transport' => 'refresh',
	));

	$wp_customize->add_setting('blog1_btn_color', array(
		'default' => '#006ec3',
		'transport' => 'refresh',
	));

	$wp_customize->add_setting('blog1_btn_hover_color', array(
		'default' => '#004C87',
		'transport' => 'refresh',
	));
	
	$wp_customize->add_setting('blog1_background_color', array(
		'default' => '#ffffff',
		'transport' => 'refresh',
	));
	
	//----- Home Page -----
	
	$wp_customize->add_setting('blog1_header_image', array(
		'default' => 'img/stadium.jpg',
		'transport' => 'refresh',
	));
	
	$wp_customize->add_setting('blog1_panel1_image', array(
		'default' => 'img/football.jpg ',
		'transport' => 'refresh',
	));
	
	$wp_customize->add_setting('blog1_panel2_image', array(
		'default' => 'img/rugby.jpg ',
		'transport' => 'refresh',
	));
	
	$wp_customize->add_setting('blog1_panel3_image', array(
		'default' => 'img/cricket.jpg ',
		'transport' => 'refresh',
	));
	// Jumbotron
	$wp_customize->add_setting('blog1_foreground_color', array(
		'default' => '#ffffff',
		'transport' => 'refresh',
	));
//Section
	// Title
	$wp_customize->add_section('blog1_standard_colors', array(
		'title' => __('Standard Colors', 'Blog1'),
		'priority' => 30,
	));
	$wp_customize->add_section('blog1_Header', array(
		'title' => __('Header image', 'Blog1'),
		'priority' => 40,
	));
	
	$wp_customize->add_section('blog1_panel_images', array(
		'title' => __('Panel Image', 'Blog1'),
		'priority' => 50,
	));
// Control

	
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'blog1_text_color_control', array(
		'label' => __('Header Color', 'webCode'),
		'section' => 'blog1_Header',
		'settings' => 'blog1_text_color',
	) ) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'blog1_text_color2_control', array(
		'label' => __('Description Color', 'webCode'),
		'section' => 'blog1_Header',
		'settings' => 'blog1_text_color2',
	) ) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'blog1_text_colour_control', array(
		'label' => __('Text Color', 'webCode'),
		'section' => 'blog1_standard_colors',
		'settings' => 'blog1_text_colour',
	) ) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'blog1_link_color_control', array(
		'label' => __('Link Color', 'webCode'),
		'section' => 'blog1_standard_colors',
		'settings' => 'blog1_link_color',
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'blog1_btn_color_control', array(
		'label' => __('Button Color', 'webCode'),
		'section' => 'blog1_standard_colors',
		'settings' => 'blog1_btn_color',
	) ) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'blog1_btn_hover_color_control', array(
		'label' => __('Button Hover Color', 'webCode'),
		'section' => 'blog1_standard_colors',
		'settings' => 'blog1_btn_hover_color',
	) ) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'blog1_background_color_control', array(
		'label' => __('Background Color', 'webCode'),
		'section' => 'blog1_standard_colors',
		'settings' => 'blog1_background_color',
	) ) );
	
	//Images
	$wp_customize->add_control( new WP_Customize_image_Control( $wp_customize, 'blog1_header_image', array(
		'label' => __('Header Image', 'Blog1'),
		'section' => 'blog1_Header',
		'settings' => 'blog1_header_image',
	) ) );
	
	$wp_customize->add_control( new WP_Customize_image_Control( $wp_customize, 'blog1_panel1_image', array(
		'label' => __('Panel 1', 'webCode'),
		'section' => 'blog1_panel_images',
		'settings' => 'blog1_panel1_image',
	) ) );
	
	$wp_customize->add_control( new WP_Customize_image_Control( $wp_customize, 'blog1_panel2_image', array(
		'label' => __('Panel 2', 'webCode'),
		'section' => 'blog1_panel_images',
		'settings' => 'blog1_panel2_image',
	) ) );
	
	$wp_customize->add_control( new WP_Customize_image_Control( $wp_customize, 'blog1_panel3_image', array(
		'label' => __('Panel 3', 'webCode'),
		'section' => 'blog1_panel_images',
		'settings' => 'blog1_panel3_image',
	) ) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'blog1_foreground_color_control', array(
		'label' => __('Foreground Color', 'webCode'),
		'section' => 'blog1_standard_colors',
		'settings' => 'blog1_foreground_color',
	) ) );
	


class Ari_Customize_Textarea_Control extends WP_Customize_Control {
  public $type = 'textarea';
  public function render_content() {
?>

  <label>
    <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
    <textarea rows="1" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
  </label>

<?php
  }
}
$wp_customize->add_setting('textarea_header', array('default' => 'default text',));
$wp_customize->add_control(new Ari_Customize_Textarea_Control($wp_customize, 'textarea_setting', array(
  'label' => 'Header title',
  'section' => 'blog1_Header',
  'settings' => 'textarea_header',
)));

class blog1_Customize_Textarea_Control extends WP_Customize_Control {
  public $type = 'textarea';
  public function render_content() {
?>

  <label>
    <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
    <textarea rows="3" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
  </label>

<?php
  }
}
$wp_customize->add_setting('textarea_setting1', array('default' => 'default text',));
$wp_customize->add_control(new blog1_Customize_Textarea_Control($wp_customize, 'textarea_setting1', array(
  'label' => 'Description',
  'section' => 'blog1_Header',
  'settings' => 'textarea_setting1',
)));

class blog2_Customize_Textarea_Control extends WP_Customize_Control {
  public $type = 'textarea';
  public function render_content() {
?>

  <label>
    <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
    <textarea rows="1" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
  </label>

<?php
  }
}
$wp_customize->add_setting('textarea_setting2', array('default' => '#',));
$wp_customize->add_control(new blog2_Customize_Textarea_Control($wp_customize, 'textarea_setting2', array(
  'label' => 'Button Link',
  'section' => 'blog1_Header',
  'settings' => 'textarea_setting2',
)));


}

add_action('customize_register', 'blog1_customize_register');



// Output Customize CSS
function blog1_customize_css() { ?>

	<style type="text/css">

		a:link,
		a:visited {
			color: <?php echo get_theme_mod('blog1_link_color'); ?>;
		}

		.site-header nav ul li .current-menu-item a:link,
		.site-header nav ul li .current-menu-item a:visited,
		.site-header nav ul li .current-page-ancestor a:link,
		.site-header nav ul li .current-page-ancestor a:visited {
			background-color: <?php echo get_theme_mod('blog1_link_color'); ?>;
		}

		
		div.hd-search #searchsubmit {
			background-color: <?php echo get_theme_mod('blog1_btn_color'); ?>;
		}

		
		div.hd-search #searchsubmit:hover {
			background-color: <?php echo get_theme_mod('blog1_btn_hover_color'); ?>;
		}
		
		body{
			
			background-color: <?php echo get_theme_mod('blog1_background_color'); ?>;
		}
		
		.jumbotron-prime{
			
			background-image: url(<?php echo get_theme_mod('blog1_header_image'); ?>);
		}
		
		.panel1{
			background-image: url(<?php echo get_theme_mod('blog1_panel1_image'); ?>);
		}
		
		.panel2{
			background-image: url(<?php echo get_theme_mod('blog1_panel2_image'); ?>);
		}
		
		.panel3{
			background-image: url(<?php echo get_theme_mod('blog1_panel3_image'); ?>);
		}
		
		.jumbotron{
			background-color: <?php echo get_theme_mod('blog1_foreground_color'); ?>;
		}
		
		div.jumbotron-prime div.container h1{
			color: <?php echo get_theme_mod('blog1_text_color'); ?>;
		}
		
		div.jumbotron-prime div.container p{
			color: <?php echo get_theme_mod('blog1_text_color2'); ?>;
		}
		
		 article.post p{
			color:<?php echo get_theme_mod('blog1_text_colour'); ?> ;
		}

		
		 footer{
			color:<?php echo get_theme_mod('blog1_text_color'); ?> ;
		}
		div.container div.jumbotron h2, div.container div.jumbotron h2{
			color:<?php echo get_theme_mod('blog1_text_colour'); ?> ;
		}
		
		.btn-primary{
			background-color: <?php echo get_theme_mod('blog1_btn_color'); ?>;
		}
		
		.btn-primary:hover{
			background-color: <?php echo get_theme_mod('blog1_btn_hover_color'); ?>;
		}
		
		

	</style>
	
<?php }

add_action('wp_head', 'blog1_customize_css');

	//Add Widget
	function ourWidgetsInit(){
		register_sidebar( array(
			'name' => 'Sidebar',
			'id' => 'sidebar1',
			'before_widget' => '<div class="widget-item">',
			'after_widget' => '</div>'
		));
	
	}
	
	add_action('widgets_init', 'ourWidgetsInit');

?>