<?php 

get_header();

?>

<div class="wrapper">
	

	<main>

		<aside class="page">

		<h3><?php if(is_single()) {
					$category = get_the_category(); 
					$title = $category[0]->cat_name;
					} else {
					$title  = __('Blog - Latest News', 'avia_framework'); //default blog title
					} echo $title; ?></h3>
		
			
		<?php
		// Default arguments
		$args = array(
			'posts_per_page' => 5, // How many items to display
			'post__not_in'   => array( get_the_ID() ), // Exclude current post
			'no_found_rows'  => true, // We don't ned pagination so this speeds up the query
		);

		// Check for current post category and add tax_query to the query arguments
		$cats = wp_get_post_terms( get_the_ID(), 'category' ); 
		$cats_ids = array();  
		foreach( $cats as $wpex_related_cat ) {
			$cats_ids[] = $wpex_related_cat->term_id; 
		}
		if ( ! empty( $cats_ids ) ) {
			$args['category__in'] = $cats_ids;
		}

		// Query posts
		$wpex_query = new wp_query( $args );



		// Loop through posts
		foreach( $wpex_query->posts as $post ) : setup_postdata( $post ); ?>
			
			<ul>
				<li class="singleside">
					<ul>
						<li class="singleside"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( the_title_attribute( 'echo=0' ) ); ?>"><?php the_title(); ?></a></li>
					</ul>
				</li>
			</ul>

		<?php
		// End loop
		endforeach;

		// Reset post data
		wp_reset_postdata(); ?>

		</aside>

		<div class="content">
			<span class="button">+</span>
		</div>

		<div class="page-content">

				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


				    <h1 class="single"><?php the_title() ?></h1>

				    <span class="date"><?php the_time('d/m/y'); ?></span>

					<p><?php the_content(); ?></p>



				<?php

		        endwhile;

		        endif;

		     	?>  

     	</div>
	
	</main>

</div><!-- wrapper -->


<?php get_footer(); ?>