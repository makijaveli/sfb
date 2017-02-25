<?php /* Template Name: Osoblje lista - vanredni */ get_header(); ?>

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


				<?php
				   $args = array('cat' => 18, 'posts_per_page'=>-1);
				   $wp_query = new WP_Query($args);
				   if($wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post();
				?>

					<?php $image = get_field('slika'); ?>

					<div class="custom-prof">
						<div class="profimg"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><img src="<?php echo $image['sizes']['profil-profesora']; ?>" width="<?php echo $image['sizes']['profil-profesora']; ?>" height="<?php echo $image['sizes']['profil-profesora']; ?>" alt="<?php echo $image['caption']; ?>" /></a></div>

						<div class="profabout">
							<h1><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title() ?></a></h1>
							<div class="pozicija">	
								<?php get_template_part('template_parts/osoblje-pozicija'); ?>
							</div>
							<div class="detalji-lista">
								<span><?php _e( 'Телефон', 'sfb' ); ?>: </span><?php the_field('telefon'); ?> <br>
								<span><?php _e( 'Е-маил', 'sfb' ); ?>: </span><?php the_field('email'); ?> <br>
								<span><?php _e( 'Кабинет', 'sfb' ); ?>: </span><?php the_field('kabinet'); ?> <br>
							</div>
						</div>
					</div><!-- /custom-prof -->



				<?php endwhile; ?> 

				<?php  endif; ?> 
				
     	</div>

    
	
	</main>

</div><!-- wrapper -->


<?php get_footer(); ?>