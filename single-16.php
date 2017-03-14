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

		<aside class="page-profesor">
			
		<?php if ( is_active_sidebar( 'widget-area-2' ) ) : ?>
				<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
					<?php dynamic_sidebar( 'widget-area-2' ); ?>
				</div><!-- #primary-sidebar -->
			<?php endif; ?>
		    

		</aside>

		<div class="page-content">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		

					<?php
						$file = get_field('cvsrb');
						$file2 = get_field('cveng'); 
					?>
					<div class="custom-prof">

						<!--<div class="profimg"><img src="<?php the_field('slika'); ?>" /></div> slika kada je url slike u CF-->

						<?php $image = get_field('slika'); ?>
						<?php if($image): //dont output an empty image tag ?>
						<img src="<?php echo $image['sizes']['profil-profesora']; ?>" width="<?php echo $image['sizes']['profil-profesora']; ?>" height="<?php echo $image['sizes']['profil-profesora']; ?>" alt="<?php echo $image['caption']; ?>" />
						<?php endif; ?>

						<div class="profabout">

							<h1><?php the_title() ?></h1>
							<div class="pozicija">	
								<?php get_template_part('template_parts/osoblje-pozicija'); ?>
							</div>
							
							<div class="kontakt-detalji">
								<span><?php _e( 'Телефон', 'sfb' ); ?>: </span><?php the_field('telefon'); ?> <br>
								<span><?php _e( 'Е-маил', 'sfb' ); ?>: </span><?php the_field('email'); ?> <br>
								<span><?php _e( 'Кабинет', 'sfb' ); ?>: </span><?php the_field('kabinet'); ?> <br>
								<span><?php _e( 'Консултације', 'sfb' ); ?>: </span><?php the_field('konsultacije'); ?> <br>
								<?php if(get_field('cv_link')): ?>
									<span>CV: </span><a href="<?php the_field('cv_link'); ?>"><?php _e( 'Погледајте CV', 'sfb' );?></a> <br>
								<?php endif; ?>
							</div>
						</div>

					</div>

					<div class="ostali-detalji">
						<?php the_content(); ?>
						<div class="oblast">	
							<h2><?php _e( 'Ужа научна област', 'sfb' ); ?></h2>
							<?php the_field('naucna_oblast'); ?>
						</div>
						<div class="oblast">	
							<h2><?php _e( 'Област истраживања', 'sfb' ); ?></h2>
							<?php the_field('oblast_istrazivanja'); ?>
						</div>
						<div class="oblast">
							<h2><?php _e( 'Ангажовање у настави', 'sfb' ); ?></h2>
							<?php the_field('angazovanje_u_nastavi'); ?>
						</div>
						<div class="oblast">
							<h2><?php _e( 'Одабрани научни радови', 'sfb' ); ?></h2>
							<?php the_field('odabrani_naucni_radovi'); ?>
						</div>	
					</div><!-- /ostali-detalji -->

				<?php

		        endwhile;

		        endif;

		     	?>  

     	</div>
	
	</main>

</div><!-- wrapper -->


<?php get_footer(); ?>