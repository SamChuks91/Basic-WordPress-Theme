<?php get_header();?>

	
	<div class="container">
		<div class="jumbotron">
			<?php if (have_posts()):
	?>
	
			<h2><?php
				if ( is_category()){
					single_cat_title();
				} elseif (is_tag()) {
					single_tag_title();
				} elseif (is_author()) {
					the_post();
					echo 'Author Archives: ' . get_the_author();
					rewind_posts();
				} elseif (is_day()) {
					echo'Daily Archives: ' . get_the_date();
				} elseif (is_month()){
					echo'Monthly Archives: ' . get_the_date('F Y');
				} elseif (is_year()){
					echo'Yearly Archives: ' . get_the_date('Y');
				} else {
					echo'Archives:';
				}
			?></h2>
			
			<?php
			while(have_posts()) : the_post();
				
				<h2><?php the_title(); ?></h2>
						<p><?php the_content(); ?></p>
						
			endwhile;
			
			else : 
				echo '<p>No content found</p>';

			endif;?>
		</div>
	</div>
	<?php get_footer();?>