<?php get_header();?>
<!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron-prime">
      <div class="container" id="line1">
        <h1 align="middle"><?php echo get_theme_mod( 'textarea_setting', 'default_value' ); ?></h1>
							
        <p align="middle"><?php echo get_theme_mod( 'textarea_setting1', 'default_value' ); ?></p>
        <p align="middle"><a class="btn btn-primary btn-lg" href="<?php echo get_theme_mod( 'textarea_setting2', '#' ); ?>" role="button">Learn more &raquo;</a></p>
      </div>
    </div>
	
	<div class="container">
		<div class="jumbotron">
			<?php
			if (have_posts()):
	while(have_posts()) : the_post(); 
		
		get_template_part('content', get_post_format());
	
	 endwhile;
	
	else : 
		echo '<p>No content found</p>';

	endif;
	?>
		</div>
	</div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4 panel1">
        </div>
        <div class="col-md-4 panel2">
        </div>
        <div class="col-md-4 panel3">
        </div>
      </div>
<?php get_footer();?>