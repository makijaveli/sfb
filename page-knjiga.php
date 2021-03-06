<?php
	
/*
Template Name: Knjiga
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

		<aside class="knjiga">
			
			<?php 
			if ( in_array(2379, $post->ancestors) 
			|| in_array(2356, $post->ancestors) 
			|| in_array(2372, $post->ancestors) 
			|| in_array(2365, $post->ancestors) ) : ?>

			<?php if ( is_active_sidebar( 'widget-area-8' ) ) : ?>
				<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
					<?php dynamic_sidebar( 'widget-area-8' ); ?>
				</div><!-- #primary-sidebar -->
			<?php endif; ?>

			<?php elseif( in_array(2476, $post->ancestors)
			|| in_array(2491, $post->ancestors)
			|| in_array(2473, $post->ancestors)
			|| in_array(2453, $post->ancestors) ) : ?>

			<?php if ( is_active_sidebar( 'widget-area-9' ) ) : ?>
				<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
					<?php dynamic_sidebar( 'widget-area-9' ); ?>
				</div><!-- #primary-sidebar -->
			<?php endif; ?>

			<?php elseif( in_array(2518, $post->ancestors)
			|| in_array(2527, $post->ancestors)
			|| in_array(2555, $post->ancestors)
			|| in_array(2561, $post->ancestors) ) : ?>

			<?php if ( is_active_sidebar( 'widget-area-10' ) ) : ?>
				<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
					<?php dynamic_sidebar( 'widget-area-10' ); ?>
				</div><!-- #primary-sidebar -->
			<?php endif; ?>
				 
			<?php else: ?>
			<?php if ( is_active_sidebar( 'widget-area-1' ) ) : ?>
				<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
					<?php dynamic_sidebar( 'widget-area-1' ); ?>
				</div><!-- #primary-sidebar -->
			<?php endif; ?>

			<?php endif; ?>

		</aside>

		<div class="content">
			<span class="button">+</span>
		</div>

		<div class="page-content">

				<?php 

				$nastavnik_link = get_field('nastavnik', false, false);

				$saradnik_link = get_field('saradnik', false, false);

				?>

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				    <h1><?php the_title() ?></h1>

					<div class="bookinfo">
						<span><?php _e( 'Шифра предмета:', 'sfb' ); ?></span>
						<?php the_field('sifra-predmeta'); ?>
					</div>

					<div class="bookinfo">
						<span><?php _e( 'Студијски програм:', 'sfb' ); ?></span>
						<?php the_field('studijski-program'); ?>
					</div>

					<div class="bookinfo">
						<span><?php _e( 'Врста и ниво студија:', 'sfb' ); ?></span>
						<?php the_field('nivo-studija'); ?>
					</div>

					<div class="bookinfo">
						<span><?php _e( 'Наставник:', 'sfb' ); ?></span>
						<div class="nastavnik-field"><?php the_field('nastavnik'); ?></div>
					</div>


					<div class="bookinfo">
						<span><?php _e( 'Статус предмета:', 'sfb' ); ?></span>
						<?php the_field('status-predmeta'); ?>
					</div>

					<div class="bookinfo">
						<span><?php _e( 'Број ESPB:', 'sfb' ); ?></span>
						<?php the_field('espb'); ?>
					</div>

					

					<div class="bookinfo">
						<span><?php _e( 'Услов:', 'sfb' ); ?></span>				   
						<?php the_field('uslov'); ?>
					</div>

					
					<?php /*
					<div class="bookinfo">
						<span><?php _e( 'Број часова активне наставе:', 'sfb' ); ?></span>
						<?php the_field('broj-casova'); ?>
					</div>

					<div class="bookinfo">
						<span><?php _e( 'Вежбе:', 'sfb' ); ?></span>
						<?php the_field('vezbe'); ?>
					</div>

					<div class="bookinfo">
						<span><?php _e( 'Предавања:', 'sfb' ); ?></span>
						<?php the_field('predavanja'); ?>
					</div>					

					<div class="bookinfo">
						<span><?php _e( 'Други облици наставе:', 'sfb' ); ?></span>				    
						<?php the_field('drugi-oblici'); ?>

					</div>

					<div class="bookinfo">
						<span><?php _e( 'Студијски истраживачки рад:', 'sfb' ); ?></span>
						<?php the_field('istrazivacki-rad'); ?>
					</div>

					<div class="bookinfo">
						<span><?php _e( 'Остали часови:', 'sfb' ); ?></span>
						<?php the_field('ostali-casovi'); ?>
					</div>

					*/ ?>

				<?php

		        endwhile;

		        endif;

		     	?>

		     	<!-- Tabs -->

		     	<div id="tabs">
					  <ul>

					    <li><a href="#tabs-1">
					    	<?php _e( 'Циљ предмета', 'sfb' ); ?>
					    	</a>
					    </li>
					    <li><a href="#tabs-2">
					    	<?php _e( 'Исход предмета', 'sfb' ); ?>
					 
					    	</a>
					    </li>
					    <li><a href="#tabs-3">
					    	<?php _e( 'Садржај предмета', 'sfb' ); ?>
					    	
					    	</a>
					    </li>
					    <li><a href="#tabs-4">
					    	<?php _e( 'Maтеријал за наставу', 'sfb' ); ?>

					    	</a>
					    </li>
					    

					  </ul>
					  <div id="tabs-1">
					    <?php the_field('cilj-predmeta'); ?>
					  </div>
					  <div id="tabs-2">
					    <?php the_field('ishod-predmeta'); ?>
					  </div>
					  <div id="tabs-3">
					    <?php the_field('sadrzaj-predmeta'); ?>
					  </div>
					  <div id="tabs-4">
					    <p><iframe class="predmet" style="width: 100%; height: 600px;" src="<?php the_field('materijal-za-nastavu'); ?>" width="300" height="150" frameborder="0" marginwidth="0" marginheight="0" scrolling="No"><br /></iframe></p>					    
					  </div>
				</div>  

     	</div>
	
	</main>

</div><!-- wrapper -->




<?php 
	get_footer(); 
?>