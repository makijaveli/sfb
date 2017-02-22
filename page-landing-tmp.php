<?php 

/*
Template Name: Kartice - TMP
*/

get_header( 'orange' );

?>

<div class="breadcrumbs">
	
	<div class="wrapper">

		<div class="breadcrumb orange">

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

		<aside class="page orange">
			
			<h2 class="orange"><?php the_title() ?></h2>
			
			<?php if ( is_active_sidebar( 'widget-area-4' ) ) : ?>
				<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
					<?php dynamic_sidebar( 'widget-area-4' ); ?>
				</div><!-- #primary-sidebar -->
			<?php endif; ?>

			<h2 class="orange"><?php echo get_the_title( 1136 ); ?></h2>

			<?php if ( is_active_sidebar( 'widget-area-3' ) ) : ?>
				<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
					<?php dynamic_sidebar( 'widget-area-3' ); ?>
				</div><!-- #primary-sidebar -->
			<?php endif; ?>

		</aside>

		<div class="page-content orange">

				<?php 

				$strategija_link = get_field('strategija-link');

				$istorijat_link = get_field('istorijat-link');

				$zvanja_link = get_field('zvanja-link');

				$za_buduce_studente_link = get_field('za-buduce-studente-link');

				$studije_link = get_field('studije-link');

				$studentski_zivot_link = get_field('studentski-zivot-link');

				$delatnost_link = get_field('delatnost-tekst-link');

				$vrednosti_link = get_field('nase-vrednosti-link');

				$ciljevi_link = get_field('ciljevi-link');

				$saradnja_link = get_field('saradnja-link');

				$karijera_link = get_field('karijera-link');

				?>

				    <h1><?php the_title() ?></h1>

				    <div class="social orange">

							<a href=""><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
							<a href=""><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
							<a href=""><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
							<a href=""><i class="fa fa-pinterest-square" aria-hidden="true"></i></a>
							<a href=""><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
						

					</div>

					<p><?php the_content(); ?></p>

					
					<?php /*
					<?php if (stl_is_current_cyrillic()) { ?>
						<h2>Стратегија</h2>
							<p><?php the_field('strategija-tekst'); ?></p>
						<div class="cta">
							<a href="<?php echo $strategija_link; ?>">	Више о стратегији <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
						</div>
					<?php } else { ?>
						<h2>Strategija</h2>
						<p><?php the_field('strategija-tekst'); ?></p>
						<a href="<?php echo $strategija_link; ?>">	Više o strategiji <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
					<?php } ?>

					<?php if (stl_is_current_cyrillic()) { ?>
						<h2>Историјат одсека</h2>
						<p><?php the_field('istorijat-tekst'); ?></p>
						<div class="cta">
							<a href="<?php echo $istorijat_link; ?>">	Види комплетан историјат одсека <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
						</div>
					<?php } else { ?>
						<h2>Istorijat odseka</h2>
						<p><?php the_field('istorijat-tekst'); ?></p>
						<a href="<?php echo $istorijat_link; ?>">Vidi kompletan istorijat odseka<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
					<?php } ?>

					<?php if (stl_is_current_cyrillic()) { ?>
						<h2>Звања стечена на одсеку</h2>
						<p><?php the_field('zvanja-tekst'); ?></p>
						<div class="cta">
							<a href="<?php echo $zvanja_link; ?>">	Види листу стечених звања <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
						</div>
					<?php } else { ?>
						<h2>Zvanja stečena na odseku</h2>
						<p><?php the_field('zvanja-tekst'); ?></p>
						<a href="<?php echo $zvanja_link; ?>">	Vidi listu stečenih zvanja <i class="fa fa-chevron-right" aria-hidden="true"></i></a>

					<?php } ?>


					*/ ?>

				<div class="block-landing block-news">	
					<h2><?php _e('Актуелности', 'mweb' ); ?></h2>

					<div class="odsek-all-news">
						<?php 
							$args = array ( 'category' => 25, 'posts_per_page' => 3);
							$myposts = get_posts( $args );
						foreach( $myposts as $post ) :	setup_postdata($post); ?>

						<div class="odsek-news">
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
								<?php the_post_thumbnail( 'custom-single' ); ?>
							</a>

							<h4> <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title() ?></a> </h4>
						</div>

						<?php endforeach; ?>
					</div>	

					<div class="cta">
						<a href="<?php echo get_category_link(25); ?>">	Види све актуелности <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
					</div>
				</div><!-- /block-news -->


					
					<h2><?php _e( 'Наставници и сарадници', 'mweb' ); ?></h2>
					<?php 
						$args = array ( 'category' => 29, 'posts_per_page' => 5, 'orderby' => 'rand');
						$myposts = get_posts( $args );
						foreach( $myposts as $post ) :	setup_postdata($post);
						 ?>

						<div class="odsek-prof">
							<?php $image = get_field('slika'); ?>
							
							<?php if($image): //dont output an empty image tag ?>
								<a href="<?php the_permalink() ?>">
									<img src="<?php echo $image['sizes']['profil-profesora']; ?>" width="<?php echo $image['sizes']['profil-profesora']; ?>" height="<?php echo $image['sizes']['profil-profesora']; ?>" alt="<?php echo $image['caption']; ?>" />
								</a>
							<?php else: ?>
								<a href="<?php the_permalink() ?>">	
									<img src="<?php echo get_template_directory_uri(); ?>/images/user-profile-default.jpg" />
								</a>	 
							<?php endif; ?>

							<h4><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title() ?></a></h4>


							<?php if(in_category(17)): ?>
								<span><?php _e( 'Редовни професор', 'mweb' ); ?></span>
							<?php elseif(in_category(18)): ?>
								<span><?php _e( 'Ванредни професор', 'mweb' ); ?></span>
							<?php elseif(in_category(19)): ?>
								<span><?php _e( 'Доцент', 'mweb' ); ?></span>
							<?php elseif(in_category(20)): ?>
								<span><?php _e( 'Асистент', 'mweb' ); ?></span>
							<?php elseif(in_category(21)): ?>
								<span><?php _e( 'Сарадник у настави', 'mweb' ); ?></span>					
							<?php elseif(in_category(31)): ?>
								<span><?php _e( 'Стручни сарадник', 'mweb' ); ?></span>			
							<?php endif; ?>	

						</div>

						<?php endforeach; ?>


					<div class="cta">
						<a href="<?php echo get_permalink_current_language(1691); ?>"><?php _e( 'Види комплетну листу', 'mweb' ); ?><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
					</div>

					

					

						

					

					<div class="katedre">

					 <?php // Učitava se PAGE_ID strane: Pocetna i Home
			               $args = array('page_id' => 1085 );
			               $wp_query = new WP_Query($args);
			               if($wp_query->have_posts()) : 
			               	while($wp_query->have_posts()) : $wp_query->the_post();
			            ?>


					

						<h2><?php _e( 'Катедре', 'mweb' ); ?></h2>
						

	                    <?php if( have_rows('katedre') ): ?>

	                	<?php while( have_rows('katedre') ): the_row(); 

	                	// vars
	                    $image_kat = get_sub_field('kat-slika');
	                    $link_kat = get_sub_field('kat-link');
	                    $naslov_kat = get_sub_field('kat-naslov');  ?>

	                     <div class="odsek-kat blue">

				                        <?php if( $link_kat ): ?>
				                            <a href="<?php echo $link_kat; ?>">
				                        <?php endif; ?>

				                            <img src="<?php echo $image_kat['sizes']['custom-katedra']; ?>" width="<?php echo $image_kat['sizes']['custom-katedra']; ?>" height="<?php echo $image_kat['sizes']['custom-katedra']; ?>" alt="<?php echo $image_kat['caption']; ?>" />
				                            <h4><?php echo $naslov_kat; ?></h4>

				                        <?php if( $link_kat ): ?>
				                            </a>

				                        <?php endif; ?>


						</div>

				        <?php endwhile; endif; ?>

	                    

						


						 

				         <?php

					        endwhile;

					        endif;

					     	?> 

						
					  </div><!--end katedre -->

					


					<?php /*  
					<?php if (stl_is_current_cyrillic()) { ?>

						<h2>За будуће студенте</h2>

						<p><?php the_field('za-buduce-studente'); ?></p>

						<div class="cta">

							<a href="<?php echo $za_buduce_studente_link; ?>">	Сазнај више <i class="fa fa-chevron-right" aria-hidden="true"></i></a>

						</div>

					<?php } else { ?>

						<h2>Za buduće studente</h2>

						<p><?php the_field('za-buduce-studente'); ?></p>

						<a href="<?php echo $za_buduce_studente_link; ?>">	Saznaj više <i class="fa fa-chevron-right" aria-hidden="true"></i></a>

					<?php } ?>

					<?php if (stl_is_current_cyrillic()) { ?>

						<h2>Студије</h2>

						<p><?php the_field('studije-tekst'); ?></p>

						<div class="cta">

							<a href="<?php echo $studije_link; ?>">	Више о студијама <i class="fa fa-chevron-right" aria-hidden="true"></i></a>

						</div>

					<?php } else { ?>

						<h2>Studije</h2>

						<p><?php the_field('studije-tekst'); ?></p>

						<a href="<?php echo $studije_link; ?>">	Više o studijama <i class="fa fa-chevron-right" aria-hidden="true"></i></a>

					<?php } ?>

					<?php if (stl_is_current_cyrillic()) { ?>

						<h2>Студентски живот</h2>

						<p><?php the_field('studentski-zivot'); ?></p>

						<div class="cta">

							<a href="<?php echo $studentski_zivot_link; ?>">	Више о студентском животу <i class="fa fa-chevron-right" aria-hidden="true"></i></a>

						</div>

					<?php } else { ?>

						<h2>Studentski život</h2>

						<p><?php the_field('studentski-zivot'); ?></p>

						<a href="<?php echo $studentski_zivot_link; ?>">	Više o studentskom životu <i class="fa fa-chevron-right" aria-hidden="true"></i></a>

					<?php } ?>

					<?php if (stl_is_current_cyrillic()) { ?>

						<h2>Делатност</h2>

						<p><?php the_field('delatnost-tekst'); ?></p>

						<div class="cta">

							<a href="<?php echo $delatnost_link; ?>">	Више о делатностима <i class="fa fa-chevron-right" aria-hidden="true"></i></a>

						</div>

					<?php } else { ?>

						<h2>Delatnosti</h2>

						<p><?php the_field('delatnost-tekst'); ?></p>

						<a href="<?php echo $delatnost_link; ?>">	Više o delatnostima <i class="fa fa-chevron-right" aria-hidden="true"></i></a>

					<?php } ?>

					*/ ?>

     	</div>
	
	</main>

</div><!-- wrapper -->


<?php get_footer('orange'); ?>