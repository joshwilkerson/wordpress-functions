<?php 
	// check in url to see if GET segment exists
	if (isset($_GET['var'])) {
		// if so, declare variable
		$category_slug = $_GET['var'];
	} else {
		// if not, declare default value for variable
		$category_slug = "string";
	}
	
	$query_args = array(
    'post_type' => 'POSTTYPE',
    'orderby' => 'menu_order',
    'order' => 'ASC',
    'posts_per_page' => '-1',
    'tax_query' => array(
			array(
			  'taxonomy' => 'custom_taxonomy_slug',
			  'terms' => $category_slug,
			  'field' => 'slug',
			  'operator' => 'IN'
			)
		)
  );
  $query = new WP_Query( $query_args );
?>

<?php if($team->have_posts()) : while($team->have_posts()) : $team->the_post(); ?>

<!-- looped content here -->

<?php 
	endwhile;
	endif;
	wp_reset_postdata();
?>