<?php

/*
Template Name: Studentski servis
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

					<div class="svi-servisi">
						<a href="https://www.google.com/a/sfb.bg.ac.rs/ServiceLogin?service=mail&passive=true&rm=false&continue=http%3A%2F%2Fmail.google.com%2Fa%2Fsfb.bg.ac.rs%2F&bsv=llya694le36z" target="_blank">
							<div class="block-servis">
								<i class="fa fa-envelope-open-o" aria-hidden="true"></i>
							</div>	
							<span>Webmail</span>						
						</a>
						<a href="https://student.sfb.bg.ac.rs/" target="_blank">
							<div class="block-servis">
								<i class="fa fa-id-card" aria-hidden="true"></i>
							</div>	
							<span>Е досије</span>
						</a>
						<a href="<?php echo home_url(); ?>/wp-content/uploads/2017/05/estudent-uputstvosfb.docx" target="_blank">
							<div class="block-servis">
								<i class="fa fa-id-card" aria-hidden="true"></i>
							</div>	
							<span>Упутство за приступ е налогу</span>
						</a>						
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