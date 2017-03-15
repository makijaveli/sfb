<?php 

/*
Template Name: Licitacije
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
			
			<?php if ( is_active_sidebar( 'widget-area-1' ) ) : ?>
				<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
					<?php dynamic_sidebar( 'widget-area-1' ); ?>
				</div><!-- #primary-sidebar -->
			<?php endif; ?>

		</aside>

		<div class="content">
			<span class="button">+</span>
		</div>

		<div class="page-content">


                    
				    <h1><?php the_title() ?></h1>

				    <?php
                    $args = array('cat' => 48, 'posts_per_page'=>-1); // Licitacije
                    $wp_query = new WP_Query($args); ?>
                    <?php if($wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post();
				    ?>
                    <ul class="accordion">
                        <a class="toggle nabavka-stil" href="javascript:void(0);"><h3><?php the_title(); ?></h3></a>
                         <div class="inner">
                            <div class="li"><?php the_content(); ?></div>
                        </div>

                     </ul>



                    <?php endwhile; ?> 

                     <?php else : ?>
                        <p> <?php _e( 'Тренутно нема постављених материјала', 'sfb' ); ?></p>

                    <?php  endif; ?> 

                   
					
     	</div>
	
	</main>

</div><!-- wrapper -->


<?php get_footer(); ?>