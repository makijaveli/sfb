<?php 

/*
Template Name: Pocetna
*/

get_header();


?>

			<?php // Učitava se PAGE_ID strane: Pocetna i Home
               $args = array('page_id' => 10,70);
               $wp_query = new WP_Query($args);
               if($wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post();
            ?>

            <?php if( have_rows('slider') ): ?>

	<ul class="slider">

		<?php while( have_rows('slider') ): the_row(); 

                    // vars
                    $image = get_sub_field('image');
                    $link = get_sub_field('link');
                    $text = get_sub_field('text');
                    $datum = get_sub_field('datum');

         ?>

		<li>
			
			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" alt="Vest">

			<div class="overlay"></div>
			
			<div class="slidenews">

				<?php  ?>
				
				<div class="date"><?php echo $datum; ?></div>

				<?php if( $link ): ?>

				<h1><a href="<?php echo $link; ?>"><?php echo $text; ?></a></h1>

				<?php endif; ?>

				<div class="cta">

					<a href="<?php echo $link; ?>">	<?php _e( 'Види више', 'sfb' ); ?> <i class="fa fa-chevron-right" aria-hidden="true"></i></a>

				</div>

			</div><!-- slidenews -->

		</li>

		<?php endwhile; ?>

	</ul><!-- slider -->

	<?php endif; ?>
    <?php endwhile; ?>
    <?php endif; ?> 
		
		<div class="wrapper">
			
			<?php get_template_part('template_parts/cards'); ?>

	<main>

			<section class="news">

				<div class="artnews">
					
					<?php query_posts('cat=3&posts_per_page=7'); ?><!-- vesti za fakultet -->

					<h3><?php single_cat_title(); ?></h3>

			 		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					

					<div class="articles">

						<div class="news-thumb fakultet">
							<?php if( get_field('kategorija_vesti_fakultet') == 'vazno' ): //Važno?>
								<div class="icon-hold">
									<i class="fa fa-bookmark-o" aria-hidden="true"></i>
								</div>
							<?php endif; ?>
							<?php if( get_field('kategorija_vesti_fakultet') == 'zan'  ): //Zanimljivosti ?>
								<div class="icon-hold">
									<i class="fa fa-info" aria-hidden="true"></i>
								</div>
							<?php endif; ?>
							<?php if( get_field('kategorija_vesti_fakultet') == 'adm'  ): //Admistracija?>
								<div class="icon-hold">
									<i class="fa fa-file-text" aria-hidden="true"></i>
								</div>	
							<?php endif; ?>
							<?php if( get_field('kategorija_vesti_fakultet') == 'fin' ): //Finansije ?>
								<div class="icon-hold">							
									<i class="fa fa-credit-card-alt" aria-hidden="true"></i>
								</div>	
							<?php endif; ?>
							<?php if( get_field('kategorija_vesti_fakultet') == 'stip'  ):  // Konkursi - stipendije?>
								<div class="icon-hold">
									<i class="fa fa-handshake-o" aria-hidden="true"></i>
								</div>	
							<?php endif; ?>

							<?php if( get_field('odsek') == 'paih' ): ?>
								<?php if( get_field('kategorija_vesti_fakultet') == 'nagrade' ): //Nagrade - PAIH ?>
									<div class="icon-hold paih">
										<i class="fa fa-trophy" aria-hidden="true"></i>
									</div>
								<?php endif; ?>
							<?php endif; ?>

							<?php if( get_field('odsek') == 'ei' ): ?>
								<?php if( get_field('kategorija_vesti_fakultet') == 'nagrade' ): //Nagrade - EI ?>
									<div class="icon-hold ei">
										<i class="fa fa-trophy" aria-hidden="true"></i>
									</div>
								<?php endif; ?>
							<?php endif; ?>

							<?php if( get_field('odsek') == 'tmp' ): ?>
								<?php if( get_field('kategorija_vesti_fakultet') == 'nagrade' ): //Nagrade-TMP ?>
									<div class="icon-hold tmp">
										<i class="fa fa-trophy" aria-hidden="true"></i>
									</div>	
								<?php endif; ?>
							<?php endif; ?>

							<?php if( get_field('odsek') == 'su' ): ?>
								<?php if( get_field('kategorija_vesti_fakultet') == 'nagrade'  ): //Nagrade-SU?>
									<div class="icon-hold su">
										<i class="fa fa-trophy" aria-hidden="true"></i>
									</div>	
								<?php endif; ?>
							<?php endif; ?>

							<?php if( get_field('odsek') == 'sve' ): ?>
								<?php if( get_field('kategorija_vesti_fakultet') == 'nagrade'  ): //Nagrade - SVE ?>
									<div class="icon-hold">
										<i class="fa fa-trophy" aria-hidden="true"></i>
									</div>	
								<?php endif; ?>
							<?php endif; ?>
							
						</div>

						<div class="titledate">
						
							<h1><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title() ?></a></h1>		

							<div class="artdate"><?php echo get_the_date('d/m/y'); ?></div>		

						</div>

					</div>

					<?php

						endwhile;

						endif;

						wp_reset_query();

					?>

					<div class="ctanews">

						<?php
						    $category_link = get_category_link(3);
						?>

						<a href="<?php echo esc_url( $category_link ); ?>">
								<?php _e( 'Види све вести факултетa', 'sfb' ); ?>
								
						<i class="fa fa-chevron-right" aria-hidden="true"></i></a>

					</div>

				</div>
				<div class="artnews">
					
					<?php query_posts('cat=2&posts_per_page=7'); ?> <!-- vesti za studente -->

					<h3><?php single_cat_title(); ?></h3>

			 		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					

					<div class="articles">

					<div class="news-thumb">

							<?php if( get_field('kategorija_vesti_studenti') == 'fin' ): //Finansije ?>
								<div class="icon-hold">
									<i class="fa fa-credit-card-alt" aria-hidden="true"></i>
								</div>	
							<?php endif; ?>

							<?php if( get_field('odsek') == 'sve' ): ?>

								<?php if( get_field('kategorija_vesti_studenti') == 'vazno' ): //Vazno ?>
									<div class="icon-hold">
										<i class="fa fa-bookmark-o" aria-hidden="true"></i>
									</div>	
								<?php endif; ?>
								<?php if( get_field('kategorija_vesti_studenti') == 'zan' ): //Zanimljivosti?>
									<div class="icon-hold">
										<i class="fa fa-info" aria-hidden="true"></i>
									</div>	
								<?php endif; ?>
								<?php if( get_field('kategorija_vesti_studenti') == 'adm' ): // Administracija ?>
									<div class="icon-hold">
										<i class="fa fa-file-text" aria-hidden="true"></i>
									</div>	
								<?php endif; ?>								
								<?php if( get_field('kategorija_vesti_studenti') == 'stip' ): //Stipendije - konkursi ?>
									<div class="icon-hold">
										<i class="fa fa-graduation-cap" aria-hidden="true"></i>
									</div>	
								<?php endif; ?>
								
							<?php endif; ?>

							<?php if( get_field('odsek') == 'paih' ): ?>
								<?php if( get_field('kategorija_vesti_studenti') == 'vazno' ): // Vazno - Paih ?>
									<div class="icon-hold paih">
										<i class="fa fa-bookmark-o" aria-hidden="true"></i>
									</div>	
								<?php endif; ?>
								<?php if( get_field('kategorija_vesti_studenti') == 'zan' ): //Zanimljivosti - Paih?>
									<div class="icon-hold paih">
										<i class="fa fa-info" aria-hidden="true"></i>
									</div>	
								<?php endif; ?>
								<?php if( get_field('kategorija_vesti_studenti') == 'adm' ): //Admninistracija - Paih?>
									<div class="icon-hold paih">
										<i class="fa fa-file-text" aria-hidden="true"></i>
									</div>	
								<?php endif; ?>								
								<?php if( get_field('kategorija_vesti_studenti') == 'stip' ): //Stipendije - Konkursi - Paih ?>
									<div class="icon-hold paih">
										<i class="fa fa-graduation-cap" aria-hidden="true"></i>
									</div>	
								<?php endif; ?>								
							<?php endif; ?>

							<?php if( get_field('odsek') == 'ei' ): ?>
								<?php if( get_field('kategorija_vesti_studenti') == 'vazno' ): // Vazno - EI?>
									<div class="icon-hold ei">
										<i class="fa fa-bookmark-o" aria-hidden="true"></i>
									</div>	
								<?php endif; ?>
								<?php if( get_field('kategorija_vesti_studenti') == 'zan' ): //Zanimljivosti - EI?>
									<div class="icon-hold ei">
										<i class="fa fa-info" aria-hidden="true"></i>
									</div>	
									<?php endif; ?>
								<?php if( get_field('kategorija_vesti_studenti') == 'adm' ): // Administracija - EI?>
									<div class="icon-hold ei">
										<i class="fa fa-file-text" aria-hidden="true"></i>
									</div>	
									<?php endif; ?>								
								<?php if( get_field('kategorija_vesti_studenti') == 'stip' ): // Stipendije-Konkursi EI ?>
									<div class="icon-hold ei">
										<i class="fa fa-graduation-cap" aria-hidden="true"></i>
									</div>	
								<?php endif; ?>
								
							<?php endif; ?>

							<?php if( get_field('odsek') == 'tmp' ): ?>
								<?php if( get_field('kategorija_vesti_studenti') == 'vazno' ): //Vazno- TMP ?>
									<div class="icon-hold tmp">
										<i class="fa fa-bookmark-o" aria-hidden="true"></i>
									</div>	
								<?php endif; ?>
								<?php if( get_field('kategorija_vesti_studenti') == 'zan' ): //Zanimljivosti-TMP ?>
									<div class="icon-hold tmp">
										<i class="fa fa-info" aria-hidden="true"></i>
									</div>	
									<?php endif; ?>
								<?php if( get_field('kategorija_vesti_studenti') == 'adm' ): //Administracija-TMP?>
									<div class="icon-hold tmp">
										<i class="fa fa-file-text" aria-hidden="true"></i>
									</div>	
									<?php endif; ?>								
								<?php if( get_field('kategorija_vesti_studenti') == 'stip' )://Stipendije-Konkursi-TMP ?>
									<div class="icon-hold tmp">
										<i class="fa fa-graduation-cap" aria-hidden="true"></i>
									</div>	
								<?php endif; ?>
								
							<?php endif; ?>

							<?php if( get_field('odsek') == 'su' ): ?>
								<?php if( get_field('kategorija_vesti_studenti') == 'vazno' ): //Vazno-SU ?>
									<div class="icon-hold su">
										<i class="fa fa-bookmark-o" aria-hidden="true"></i>
									</div>	
								<?php endif; ?>
								<?php if( get_field('kategorija_vesti_studenti') == 'zan' ): //Zanimljivosti ?>
									<div class="icon-hold su">
										<i class="fa fa-info" aria-hidden="true"></i>
									</div>	
									<?php endif; ?>
								<?php if( get_field('kategorija_vesti_studenti') == 'adm' ): //Administracija ?>
									<div class="icon-hold su">
										<i class="fa fa-file-text" aria-hidden="true"></i>
									</div>	
									<?php endif; ?>								
								<?php if( get_field('kategorija_vesti_studenti') == 'stip' ): //Konkursi-stipendije-SU ?>
									<div class="icon-hold su">
										<i class="fa fa-graduation-cap" aria-hidden="true"></i>
									</div>	
								<?php endif; ?>
								
							<?php endif; ?>

							
						
						</div>

						<div class="titledate">
						
							<h1><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title() ?></a></h1>		

							<div class="artdate"><?php echo get_the_date('d/m/y'); ?></div>		

						</div>

					</div>

					<?php

						endwhile;

						endif;

						wp_reset_query();

					?>

					<div class="ctanews">

						<?php
						    $category_link = get_category_link(2);
						?>

						<a href="<?php echo esc_url( $category_link ); ?>">

								<?php _e( 'Види све вести за студенте', 'sfb' ); ?>
								<i class="fa fa-chevron-right" aria-hidden="true"></i></a>

					</div>

				</div>

			</section>

			

		</div><!-- wrapper -->

	</main>

<?php get_footer(); ?>
