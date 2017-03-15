<?php 

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

		<aside class="page-profesor">
			
		<?php if ( is_active_sidebar( 'widget-area-2' ) ) : ?>
				<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
					<?php dynamic_sidebar( 'widget-area-2' ); ?>
				</div><!-- #primary-sidebar -->
		<?php endif; ?>
		    

		</aside>

		<div class="content">
			<span class="button">+</span>
		</div>

		<div class="page-content">

				<?php get_template_part('template_parts/catprof-template'); ?>

     	</div><!-- page-content -->
	
	</main>

</div><!-- wrapper -->


<?php get_footer(); ?>