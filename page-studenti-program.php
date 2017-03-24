<?php

/*
Template Name: Studenti - program
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

				<?php $value = get_field( "naslov" ); ?>

				

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<?php 	if( $value ) { ?>
				    
				    <h1><?php echo $value; ?></h1>

				<?php  } else { ?>

				    <h1><?php the_title() ?></h1>
				    
				<?php  } ?>

					<div class="svi-servisi" style="margin-bottom: 25px; display: table;">
						<?php while ( have_rows('linkovi') ) : the_row(); ?>
							<a href="<?php the_sub_field('link'); ?>">
								<div class="block-servis">
									<i class="fa <?php the_sub_field('kod_ikonice');?>" aria-hidden="true"></i>
								</div>	
								<span><?php the_sub_field('tekst_linka'); ?></span>						
							</a>
						<?php endwhile; ?>												
					</div>

					<p><?php the_content(); ?></p>



				<?php

		        endwhile;

		        endif;

		     	?>  

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