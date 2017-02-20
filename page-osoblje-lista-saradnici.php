<?php /* Template Name: Osoblje lista - saradnici */ get_header(); ?>

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
				   $args = array('cat' => 21, 'posts_per_page'=>-1);
				   $wp_query = new WP_Query($args);
				   if($wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post();
				?>

					<?php $image = get_field('slika');

					$file = get_field('cvsrb');
					$file2 = get_field('cveng'); ?>

					<div class="custom-prof">

						<div class="profimg"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><img src="<?php echo $image['sizes']['profil-profesora']; ?>" width="<?php echo $image['sizes']['profil-profesora']; ?>" height="<?php echo $image['sizes']['profil-profesora']; ?>" alt="<?php echo $image['caption']; ?>" /></a></div>

						<div class="profabout">

							<h1><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title() ?></a></h1>

							<span><?php _e( 'Телефон', 'sfb' ); ?>: </span><?php the_field('telefon'); ?> <br>
							<span><?php _e( 'Е-маил', 'sfb' ); ?>: </span><?php the_field('email'); ?> <br>
							<span><?php _e( 'Кабинет', 'sfb' ); ?>: </span><?php the_field('kabinet'); ?> <br>
							<span><?php _e( 'Консултације', 'sfb' ); ?>: </span><?php the_field('konsultacije'); ?> <br>
							<span>CV: </span><a href="<?php echo $file; ?>"><?php _e( 'Преузмите на српском', 'sfb' );?></a> <br>
							<span class="nod">CV: </span><a href="<?php echo $file2; ?>"><?php _e( 'Преузмите на енглеском', 'sfb' );?></a> <br>

						</div>

					</div>



				<?php endwhile; ?> 

				<?php  endif; ?> 
				
     	</div>

    
	
	</main>

</div><!-- wrapper -->


<?php get_footer(); ?>