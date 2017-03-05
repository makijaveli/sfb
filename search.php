<?php 

get_header();

?>

<div class="wrapper">
	

	<main>


		<div class="page-content">

				<div class="cattitle"> 

						<h1><?php _e( 'Резултати претраге', 'sfb' ); ?></h1>

				</div>
				

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<!-- post iz kategorije -->

					<div class="category-post">

						<div class="postthumb">
							
							<?php if ( has_post_thumbnail() ) : ?>
							    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							        <?php the_post_thumbnail('category-size'); ?>
							    </a>
							<?php endif; ?>

						</div>	

				    
				    	<h1><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h1>

				    	<div class="catinfo">
				    		<span>
				    		<?php _e( 'Датум:', 'sfb' ); ?>
							</span><?php echo get_the_date('d.m.Y'); ?>
				    	</div>
				    

				    </div>

				    <?php endwhile; ?>

				    <?php else : ?>

				    	<?php if(ICL_LANGUAGE_CODE=='en') { ?>

							<?php _e(nl2br( "Back to home page.\n", 'sfb' )); ?><a class="s" href="<?php echo home_url(); ?>">

						<?php } else { ?>

							<?php _e(nl2br( "Вратите се на почетну страну.\n", 'sfb' )); ?><a class="s" href="<?php echo home_url(); ?>">

						<?php } ?>

						<?php _e( 'Почетна страна', 'sfb' ); ?></a>

				<?php endif; ?>  

		     	<?php html5wp_pagination(); ?>

     	</div>
	
	</main>

</div><!-- wrapper -->


<?php 

	get_footer();

 ?>