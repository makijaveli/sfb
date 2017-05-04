<?php 

/*
Template Name: Nauka template
*/

get_header();

?>

<div class="breadcrumbs">
	
	<div class="wrapper">

		<div class="breadcrumb">

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


		<aside>				
			<?php if ( is_active_sidebar( 'widget-area-6' ) ) : ?>
				<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
					<?php dynamic_sidebar( 'widget-area-6' ); ?>
				</div><!-- #primary-sidebar -->
			<?php endif; ?>
		</aside>
        <div class="content">
			<span class="button">+</span>
		</div>

		<div class="page-content">


					<h1><?php _e( 'Наука', 'sfb' ); ?></h1>
				    <h2><?php _e( 'Скупови и конференције', 'sfb' ); ?></h2>

				    <div class="block-nauka">
					    <?php                    
	                    $args = array('cat' => 97, 'posts_per_page'=> 5); //konkursi
	                    $wp_query = new WP_Query($args); ?>
	                    
	                    <?php if($wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post();
					    ?>
	                        
	                        <a href="<?php the_permalink(); ?>" class="nabavka-stil"><h3><?php the_title(); ?></h3></a>                    


	                    <?php endwhile; ?> 
	                    <div class="ctanews nauka">						
							<a href="<?php echo get_permalink_current_language(7011); ?>"><?php _e( 'Види више', 'sfb' ); ?><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
						</div>
	                    <?php else : ?>
	                        <p> <?php _e( 'Тренутно нема постављених материјала', 'sfb' ); ?></p>

	                    <?php  endif; ?>

	                    
					</div>

                    <div class="break"></div>

					<h2><?php _e( 'Национални пројекти', 'sfb' ); ?></h2>
					<div class="block-nauka">
					    <?php                    
	                    $args = array('cat' => 98, 'posts_per_page'=>5 ); //konkursi
	                    $wp_query = new WP_Query($args); ?>
	                    
	                    <?php if($wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post();
					    ?>
	                        
	                        <a class="nabavka-stil" href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>                    


	                    <?php endwhile; ?> 
	                    <div class="ctanews nauka">						
							<a href="<?php echo get_permalink_current_language(7015); ?>"><?php _e( 'Види више', 'sfb' ); ?><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
						</div>
	                    <?php else : ?>
	                        <p> <?php _e( 'Тренутно нема постављених материјала', 'sfb' ); ?></p>

	                    <?php  endif; ?>
	                </div>    

                    <div class="break"></div>

					<h2><?php _e( 'Међународни пројекти', 'sfb' ); ?></h2>

					<div class="block-nauka">
					    <?php                    
	                    $args = array('cat' => 99, 'posts_per_page'=> 5); //konkursi
	                    $wp_query = new WP_Query($args); ?>
	                    
	                    <?php if($wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post();
					    ?>
	                        
	                        <a class="nabavka-stil" href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>                    


	                    <?php endwhile; ?> 
	                    <div class="ctanews nauka">						
							<a href="<?php echo get_permalink_current_language(7013); ?>"><?php _e( 'Види више', 'sfb' ); ?><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
						</div>
	                    <?php else : ?>
	                        <p> <?php _e( 'Тренутно нема постављених материјала', 'sfb' ); ?></p>

	                    <?php  endif; ?>
	                </div>    
                    <div class="break"></div>                                                         


					
     	</div>
	
	</main>

</div><!-- wrapper -->


<?php get_footer(); ?>