<?php 

/*
Template Name: Studijski programi
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

		<div class="page-content">



				    <h1><?php the_title() ?></h1>

					<p><?php the_content(); ?></p>
					
                    <?php get_template_part('template_parts/cards-sp'); ?>

                    <?php the_field('tekst_ispod'); ?>

					


					
     	</div>
	
	</main>

</div><!-- wrapper -->


<?php get_footer(); ?>