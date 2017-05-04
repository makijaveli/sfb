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
			
		<?php if (ICL_LANGUAGE_CODE=='sr' ) : ?>

		<?php if ( is_active_sidebar( 'widget-area-2' ) ) : ?>
				<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
					<?php dynamic_sidebar( 'widget-area-2' ); ?>
				</div><!-- #primary-sidebar -->
		<?php endif; ?>

		<?php else: ?>
			<?php if ( is_active_sidebar( 'widget-area-11' ) ) : ?>
				<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
					<?php dynamic_sidebar( 'widget-area-11' ); ?>
				</div><!-- #primary-sidebar -->
			<?php endif; ?>
		<?php endif; ?>
		    

		</aside>

		<div class="content">
			<span class="button">+</span>
		</div>

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
						<?php if(get_field('naucna_oblast')): ?>
							<div class="oblast">	
								<h2><?php _e( 'Ужа научна област', 'sfb' ); ?></h2>
								<?php the_field('naucna_oblast'); ?>
							</div>
						<?php endif; ?>
						<?php if(get_field('oblast_istrazivanja')): ?>
							<div class="oblast">	
								<h2><?php _e( 'Област истраживања', 'sfb' ); ?></h2>
								<?php the_field('oblast_istrazivanja'); ?>
							</div>
						<?php endif; ?>	
						<?php if(get_field('angazovanje_u_nastavi')): ?>
							<div class="oblast">
								<h2><?php _e( 'Ангажовање у настави', 'sfb' ); ?></h2>
								<?php the_field('angazovanje_u_nastavi'); ?>
							</div>
						<?php endif; ?>	
						<?php if(get_field('odabrani_naucni_radovi')): ?>
							<div class="oblast">
								<h2><?php _e( 'Одабрани научни радови', 'sfb' ); ?></h2>
								<?php the_field('odabrani_naucni_radovi'); ?>								
							</div>
						<?php endif; ?>

						<?php if( get_field('kobson') || get_field('scindex') ): ?>
							<div class="oblast">
								<div class="science-platforms">	
									<?php if(get_field('kobson')): ?>							
										<a href="<?php the_field('kobson'); ?>" target="_blank"><i class="fa fa-umbrella science-icons fa-rotate-45" aria-hidden="true"></i><span>KoBSON</span></a>
									<?php endif; ?>
									<?php if(get_field('scindex')): ?>
										<a href="<?php the_field('scindex'); ?>" target="_blank"><i class="fa fa-bug science-icons fa-rotate-45" aria-hidden="true"></i></i><span>SCIndex​</span></a>
									<?php endif; ?>
								</div>
							</div>	
						<?php endif; ?>
					</div><!-- /ostali-detalji -->

				<?php

		        endwhile;

		        endif;

		     	?>  

     	</div>
	
	</main>

</div><!-- wrapper -->


<?php get_footer(); ?>