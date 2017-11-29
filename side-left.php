<?php get_header();

/*
Template Name: Side-left
*/

?>

	
	<div class="container">
		<div class="jumbotron">
			<div class="row">
			<?php
			if (have_posts()):
	while(have_posts()) : the_post(); ?>
		<!-- Thumbnail image -->
		<div class="col-md-4">
			<?php the_post_thumbnail('column-image'); ?>
		</div>
		<!-- content -->
		<div class="col-md-7">
			<h2><?php the_title(); ?></h2>
				<p><?php the_content(); ?></p>
		</div>
		</div>
	<?php endwhile;
	
	else : 
		echo '<p>No content found</p>';

	endif;
	?>
		</div>
	</div>
	<?php get_footer();?>
