<?php /* Template Name: Osoblje lista - EI */

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

		<aside class="page <?php if ( (is_tree(718)) ) echo 'red'; elseif ( (is_tree(1085)) ) echo 'orange'; elseif ( (is_tree(1083)) ) echo 'blue'; elseif ( (is_tree(2628)) ) echo 'green'; ?>">
			
			
			<?php if ( is_active_sidebar( 'widget-area-1' ) ) : ?>
				<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
					<?php dynamic_sidebar( 'widget-area-1' ); ?>
				</div><!-- #primary-sidebar -->
			<?php endif; ?>

		</aside>

		<div class="page-content <?php if ( (is_tree(718)) ) echo 'red'; elseif ( (is_tree(1085)) ) echo 'orange'; elseif ( (is_tree(1083)) ) echo 'blue'; elseif ( (is_tree(2628)) ) echo 'green'; ?>">


				<?php
				   $args = array('cat' => 30, 'posts_per_page'=>-1);
				   $wp_query = new WP_Query($args);
				   if($wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post();
				?>

					<?php $image = get_field('slika'); ?>

					<div class="custom-prof">
						<div class="profimg">
						
						<?php if($image): //dont output an empty image tag ?>
								<a href="<?php the_permalink() ?>">
									<img src="<?php echo $image['sizes']['profil-profesora']; ?>" width="<?php echo $image['sizes']['profil-profesora']; ?>" height="<?php echo $image['sizes']['profil-profesora']; ?>" alt="<?php echo $image['caption']; ?>" />
								</a>
							<?php else: ?>
								<a href="<?php the_permalink() ?>">	
									<img src="<?php echo get_template_directory_uri(); ?>/images/user-profile-default.jpg" />
								</a>	 
							<?php endif; ?>
						
						</div>

						<div class="profabout">
							<h1><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title() ?></a></h1>
							<div class="pozicija">	
								<?php get_template_part('template_parts/osoblje-pozicija'); ?>
							</div>
							<div class="detalji-lista">
								<span><?php _e( 'Телефон', 'sfb' ); ?>: </span><?php the_field('telefon'); ?> <br>
								<span><?php _e( 'Е-маил', 'sfb' ); ?>: </span><?php the_field('email'); ?> <br>								
							</div>
						</div>
					</div><!-- /custom-prof -->



				<?php endwhile; ?> 

				<?php  endif; ?> 
				
     	</div>

    
	
	</main>

</div><!-- wrapper -->


<?php 
	get_footer('blue'); 
  ?>