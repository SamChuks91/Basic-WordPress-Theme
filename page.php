<?php get_header();?>

	
	<div class="container">
		<div class="jumbotron">
			<?php
			if (have_posts()):
	while(have_posts()) : the_post(); ?>
		
		<h2><?php the_title(); ?></h2>
				<p><?php the_content(); ?></p>
	
	<?php endwhile;
	
	else : 
		echo '<p>No content found</p>';

	endif;
	?>
		</div>
	</div>
	<?php get_footer();?>
