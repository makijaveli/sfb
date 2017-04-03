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

				

				<h1><a href="<?php echo $link; ?>"><?php the_sub_field('naslov'); ?></a></h1>

				

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
							
							<?php get_template_part('template_parts/news-faculty-icons'); ?>
							
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
							
						<?php get_template_part('template_parts/news-students-icons'); ?>

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
