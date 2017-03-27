<?php 

/*
Template Name: Nauka te
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


	<aside class="page">
			
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


					<h1>Наука</h1>
				    <h2>Скупови и конференције</h2>

				    <?php                    
                    $args = array('cat' => 97, 'posts_per_page'=>-1); //konkursi
                    $wp_query = new WP_Query($args); ?>
                    
                    <?php if($wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post();
				    ?>
                        
                        <a href="<?php the_permalink(); ?>" class="nabavka-stil"><h3><?php the_title(); ?></h3></a>                    


                    <?php endwhile; ?> 

                     <?php else : ?>
                        <p> <?php _e( 'Тренутно нема постављених материјала', 'sfb' ); ?></p>

                    <?php  endif; ?> 

                    <div class="break"></div>

					<h2>Национални пројекти</h2>

				    <?php                    
                    $args = array('cat' => 97, 'posts_per_page'=>-1); //konkursi
                    $wp_query = new WP_Query($args); ?>
                    
                    <?php if($wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post();
				    ?>
                        
                        <a class="nabavka-stil" href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>                    


                    <?php endwhile; ?> 

                     <?php else : ?>
                        <p> <?php _e( 'Тренутно нема постављених материјала', 'sfb' ); ?></p>

                    <?php  endif; ?> 

                    <div class="break"></div>

					<h2>Међународни пројекти</h2>

				    <?php                    
                    $args = array('cat' => 97, 'posts_per_page'=>-1); //konkursi
                    $wp_query = new WP_Query($args); ?>
                    
                    <?php if($wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post();
				    ?>
                        
                        <a class="nabavka-stil" href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>                    


                    <?php endwhile; ?> 

                     <?php else : ?>
                        <p> <?php _e( 'Тренутно нема постављених материјала', 'sfb' ); ?></p>

                    <?php  endif; ?> 

                    <div class="break"></div>                                                         


					
     	</div>
	
	</main>

</div><!-- wrapper -->


<?php get_footer(); ?>