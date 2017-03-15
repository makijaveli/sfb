<?php 

/*
Template Name: Profesor
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

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php $image = get_field('slika'); 

					$file = get_field('cvsrb');
					$file2 = get_field('cveng'); ?>

					<div class="custom-prof">

						<div class="profimg"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" alt="Vest"></div>

						<div class="profabout">

							<h1><?php the_title() ?></h1>

							<span><?php _e( 'Телефон', 'sfb' ); ?>: </span><?php the_field('telefon'); ?> <br>
							<span><?php _e( 'Е-маил', 'sfb' ); ?>: </span><?php the_field('email'); ?> <br>
							<span><?php _e( 'Кабинет', 'sfb' ); ?>: </span><?php the_field('kabinet'); ?> <br>
							<span><?php _e( 'Консултације', 'sfb' ); ?>: </span><?php the_field('konsultacije'); ?> <br>
							<span>CV: </span><a href="<?php echo $file; ?>">Preuzmite na srpskom</a> <br>
							<span class="nod">CV: </span><a href="<?php echo $file2; ?>">Preuzmite na engleskom</a> <br>

						</div>

					</div>

						<p><?php the_content(); ?></p>



				<?php

		        endwhile;

		        endif;

		     	?>  

     	</div>
	
	</main>

</div><!-- wrapper -->


<?php get_footer(); ?>