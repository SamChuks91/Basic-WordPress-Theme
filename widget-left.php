<?php get_header();

/*
Template Name: Widget-Left
*/

?>
	<div class="container">
		<div class="jumbotron">
			<div class="row">
				<div class="col-md-8">
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
				
				<div class="col-md-4">
					<?php dynamic_sidebar('sidebar1')?>
				</div>
			</div>
		</div>
	</div>
	<?php get_footer();?>

	<?php get_footer();?>
