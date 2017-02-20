<?php
	
/*
Template Name: Knjiga
*/
	get_header();

?>

<div class="breadcrumbs">
	
	<div class="wrapper">

		<div class="breadcrumb <?php if ( $post->post_parent == '718' ) echo 'red'; elseif ( $post->post_parent == '1085' ) echo 'orange'; elseif ( $post->post_parent == '1083' ) echo 'blue'; ?>">

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
			
			
			<?php if ( is_active_sidebar( 'widget-area-1' ) ) : ?>
				<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
					<?php dynamic_sidebar( 'widget-area-1' ); ?>
				</div><!-- #primary-sidebar -->
			<?php endif; ?>

		</aside>

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
					    <?php the_field('materijal-za-nastavu'); ?>
					  </div>
				</div>  

     	</div>
	
	</main>

</div><!-- wrapper -->




<?php 
	get_footer(); 
?>