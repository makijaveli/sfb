<?php

/*
Template Name: Studenti - landing strana
*/

// f-ja koja ispituje da li je stranica child stranica za odseke

	function is_tree($pid)
		{
		 global $post;
		 $ancestors = get_post_ancestors($post->$pid);
		 $root = count($ancestors) - 1;
		 $parent = $ancestors[$root];
		 if(is_page() && (is_page($pid) || $post->post_parent == $pid || in_array($pid, $ancestors)))
		 {
		 return true;
		 }
		 else
		 {
		 return false;
		 }
		};

if (is_tree(718)) { 
	get_header('red'); 
} elseif (is_tree(1085)) { 
	get_header('orange'); 
} elseif (is_tree(1083)) { 
	get_header('blue');
} elseif (is_tree(2628)) { 
	get_header('green');  
} else {
	get_header();
} 

?>

<div class="breadcrumbs">
	
	<div class="wrapper">

		<div class="breadcrumb <?php if ( (is_tree(718)) ) echo 'red'; elseif ( (is_tree(1085)) ) echo 'orange'; elseif ( (is_tree(1083)) ) echo 'blue'; elseif ( (is_tree(2628)) ) echo 'green'; ?>">

			<?php $url = home_url();?>

			<a href="<?php echo $url; ?>"> 

			<?php _e( 'Шумaрски факултет', 'sfb' ); ?>

			</a> >

			 <?php if(function_exists('bcn_display'))
	    	{

	        bcn_display();

	    	} ?>

    	</div>


	</div>

</div>

<div class="wrapper">
	

	<main>

		
			<?php get_sidebar(); ?>

		<div class="content">
			<span class="button">+</span>
		</div>

		<div class="page-content <?php if ( (is_tree(718)) ) echo 'red'; elseif ( (is_tree(1085)) ) echo 'orange'; elseif ( (is_tree(1083)) ) echo 'blue'; elseif ( (is_tree(2628)) ) echo 'green'; ?>">

				

				<div class="block-landing block-news">					
					<h2 style="margin-bottom: 40px;"><?php _e( 'Вести студентске службе', 'sfb' ); ?></h2>
					<?php
						   $args = array('p' => 9300, 'posts_per_page'=> 1);
						   $wp_query = new WP_Query($args); ?>
						<?php if($wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post(); ?>
							<div class="articles">
							<div class="news-thumb">							
								<?php get_template_part('template_parts/news-students-icons'); ?>
							</div>

							<div class="titledate">						
								<h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title() ?></a></h3>
								<div class="artdate"><?php echo get_the_date('d/m/y'); ?></div>
							</div>
						</div>

					<?php endwhile; ?> 
					<?php endif; ?>
					<?php wp_reset_postdata(); ?>


					<?php
					   $args = array('cat' => 102, 'posts_per_page' => 2);
					   $wp_query = new WP_Query($args);
					   if($wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post();
					?>	
						<div class="articles">
							<div class="news-thumb">							
								<?php get_template_part('template_parts/news-students-icons'); ?>
							</div>

							<div class="titledate">						
								<h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title() ?></a></h3>
								<div class="artdate"><?php echo get_the_date('d/m/y'); ?></div>
							</div>
						</div>

					<?php endwhile; ?> 
					<?php endif; ?>
					<?php wp_reset_postdata(); ?>

					<div class="ctanews studenti">
						<?php $category_link = get_category_link(102); ?>
						<a href="<?php echo esc_url( $category_link ); ?>">
								<?php _e( 'Види све вести', 'sfb' ); ?>
								<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
					</div>
				</div><!-- /artnews -->				


				<div class="block-landing block-news">	
					<h2><?php _e('Вести студентсkoг парламента', 'sfb' ); ?></h2>

					<div class="odsek-all-news">					

						<?php
						   $args = array('cat' => 101, 'posts_per_page'=> 3);
						   $wp_query = new WP_Query($args); ?>
						<?php if($wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post(); ?>
							<div class="odsek-news">							
								<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
									<?php if(the_post_thumbnail( 'custom-single' )): ?>
										<?php the_post_thumbnail( 'custom-single' ); ?>
									<?php else: ?>
										<img src="<?php bloginfo('template_directory'); ?>/images/no-img-sfb.jpg" />
									<?php endif; ?>
								</a>

								<h4> <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title() ?></a> </h4>
							</div>
						<?php endwhile; ?>
						<?php else: ?>
						<?php endif; ?>
						<?php wp_reset_postdata(); ?>					
					</div>	

					<div class="ctanews studenti">
						<a href="<?php echo get_category_link(101); ?>">	<?php _e('Види све актуелности', 'sfb'); ?> <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
					</div>
				</div><!-- /block-news -->

     	</div>
	
	</main>

</div><!-- wrapper -->


<?php if (is_tree(718)) { 
	get_footer('red'); 
} elseif (is_tree(1085)) { 
	get_footer('orange'); 
} elseif (is_tree(1083)) { 
	get_footer('blue');
} elseif (is_tree(2628)) { 
	get_footer('green');  
} else { 
	get_footer(); 
}  ?>