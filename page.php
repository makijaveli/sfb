<?php

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
} elseif (is_tree(7092)) { 
	get_header('red');
} elseif (is_tree(1085)) { 
	get_header('orange');
} elseif (is_tree(5619)) { 
	get_header('orange'); 	 
} elseif (is_tree(1083)) { 
	get_header('blue');
} elseif (is_tree(6805)) { 
	get_header('blue');	
} elseif (is_tree(2628)) { 
	get_header('green');
} elseif (is_tree(5612)) { 
	get_header('green'); 	  
} else {
	get_header();
} 

?>

<div class="breadcrumbs">
	
	<div class="wrapper">
		<?php if (ICL_LANGUAGE_CODE=='sr' ) : ?>
			<div class="breadcrumb <?php if ( (is_tree(718)) ) echo 'red'; elseif ( (is_tree(1085)) ) echo 'orange'; elseif ( (is_tree(1083)) ) echo 'blue'; elseif ( (is_tree(2628)) ) echo 'green'; ?>">
		<?php else: ?>
			<div class="breadcrumb <?php if ( (is_tree(7092)) ) echo 'red'; elseif ( (is_tree(5619)) ) echo 'orange'; elseif ( (is_tree(6805)) ) echo 'blue'; elseif ( (is_tree(5612)) ) echo 'green'; ?>">
		<?php endif; ?>

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

		<?php if (ICL_LANGUAGE_CODE=='sr' ) : ?>
			<div class="page-content <?php if ( (is_tree(718)) ) echo 'red'; elseif ( (is_tree(1085)) ) echo 'orange'; elseif ( (is_tree(1083)) ) echo 'blue'; elseif ( (is_tree(2628)) ) echo 'green'; ?>">
		<?php else: ?>
			<div class="page-content <?php if ( (is_tree(7092)) ) echo 'red'; elseif ( (is_tree(5619)) ) echo 'orange'; elseif ( (is_tree(6805)) ) echo 'blue'; elseif ( (is_tree(5612)) ) echo 'green'; ?>">
		<?php endif; ?>

				<?php $value = get_field( "naslov" ); ?>

				

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<?php 	if( $value ) { ?>
				    
				    <h1><?php echo $value; ?></h1>

				<?php  } else { ?>

				    <h1><?php the_title() ?></h1>
				    
				<?php  } ?>



					<p><?php the_content(); ?></p>



				<?php

		        endwhile;

		        endif;

		     	?>  

     	</div>
	
	</main>

</div><!-- wrapper -->


<?php if (ICL_LANGUAGE_CODE=='sr' ) : ?>
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

<?php else: ?>
	<?php if (is_tree(7092)) { 
		get_footer('red'); 
	} elseif (is_tree(5619)) { 
		get_footer('orange'); 
	} elseif (is_tree(6805)) { 
		get_footer('blue');
	} elseif (is_tree(5612)) { 
		get_footer('green');  
	} else { 
		get_footer(); 
	}  ?>
<?php endif; ?>