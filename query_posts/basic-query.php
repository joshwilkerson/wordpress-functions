<?php
	$args = array(
	  'post_type' => 'POSTTYPE',
		'posts_per_page'	=> -1,
		'order' => 'ASC'
	);
	$the_query = new WP_Query( $args );
?>


<?php 
	 // check to see if posts exist 
	if($the_query->have_posts()) :
?>
	<h1>Posts</h1>
	
	<?php 
		// if posts, loop through content 
		while ($the_query->have_posts()):$the_query->the_post(); 
	?>
	
		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
	
	<?php
		// end loop and reset post data
		endwhile; 
		wp_reset_postdata();  
	?>
	
<?php 
	// if no posts, display fallback message
	else : 
?>
	
	<p>Sorry - no posts available.</p>
	
<?php endif; ?>