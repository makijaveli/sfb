<?php 

get_header();

?>

<div class="breadcrumbs">
	
	<div class="wrapper">

		<div class="breadcrumb">

			<?php $url = home_url();?>

			<a href="<?php echo $url; ?>"> 

			<?php _e( 'Шумарски факултет', 'sfb' ); ?>

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

        <?php if ( is_active_sidebar( 'widget-area-7' ) ) : ?>
				<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
					<?php dynamic_sidebar( 'widget-area-7' ); ?>
				</div><!-- #primary-sidebar -->
			<?php endif; ?>

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