<?php 
	if ( in_array(1814, $post->ancestors) 
	|| in_array(1826, $post->ancestors) 
	|| in_array(5824, $post->ancestors) 
	|| in_array(5864, $post->ancestors) 
	|| in_array(5896, $post->ancestors) 
	|| in_array(5931, $post->ancestors) 
	|| in_array(1101, $post->ancestors) 
	|| in_array(2642, $post->ancestors) 
	|| in_array(5912, $post->ancestors) 
	|| in_array(1822, $post->ancestors) 
	|| in_array(1808, $post->ancestors) 
	|| in_array(2695, $post->ancestors) 
	|| in_array(1103, $post->ancestors) 
	|| in_array(1810, $post->ancestors) 
	|| in_array(1830, $post->ancestors) 
	|| in_array(1105, $post->ancestors) 
	|| in_array(2770, $post->ancestors) 
	|| in_array(1805, $post->ancestors) 
	|| in_array(1818, $post->ancestors) 
	|| in_array(1801, $post->ancestors)
	|| in_array(1402, $post->ancestors)
	|| in_array(19, $post->ancestors)
	|| in_array(28, $post->ancestors)
	|| is_page(1402)
	|| is_page(2379) 
	|| is_page(2356) 
	|| is_page(2372)
	|| is_page(2365)
	|| is_page(1455)
	|| is_page(1461)
	|| is_page(28)
	): ?>

   <aside class="page <?php if ( (is_tree(718)) ) echo 'red'; elseif ( (is_tree(1085)) ) echo 'orange'; elseif ( (is_tree(1083)) ) echo 'blue'; elseif ( (is_tree(2628)) ) echo 'green'; ?>">				
			<?php if ( is_active_sidebar( 'widget-area-6' ) ) : ?>
				<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
					<?php dynamic_sidebar( 'widget-area-6' ); ?>
				</div><!-- #primary-sidebar -->
			<?php endif; ?>
	</aside>

<?php elseif(is_page(array(1826,5824,5864,5896,5931,1101,2642,5912,1822,1808,2695,1103,1810,1830,1105,2770,1805,1801,1814,1818))): ?>
		<aside class="page <?php if ( (is_tree(718)) ) echo 'red'; elseif ( (is_tree(1085)) ) echo 'orange'; elseif ( (is_tree(1083)) ) echo 'blue'; elseif ( (is_tree(2628)) ) echo 'green'; ?>">				
			<?php if ( is_active_sidebar( 'widget-area-5' ) ) : ?>
				<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
					<?php dynamic_sidebar( 'widget-area-5' ); ?>
				</div><!-- #primary-sidebar -->
			<?php endif; ?>
		</aside>
<?php elseif(
	in_array(2628, $post->ancestors) //su	
): ?>

	

	<aside class="page green">
				
				<h2 class="green"><?php echo get_the_title( 2628 ); ?></h2>

				<?php if ( is_active_sidebar( 'widget-area-1' ) ) : ?>
					<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
						<?php dynamic_sidebar( 'widget-area-1' ); ?>
					</div><!-- #primary-sidebar -->
				<?php endif; ?>

				<?php if(ICL_LANGUAGE_CODE=='en') { ?>

				<h2 class="green"><?php echo get_the_title( 5615 ); ?></h2>	

				<?php } else { ?>		

				<h2 class="green"><?php echo get_the_title( 1136 ); ?></h2>

				<?php } ?>

				<?php if ( is_active_sidebar( 'widget-area-3' ) ) : ?>
					<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
						<?php dynamic_sidebar( 'widget-area-3' ); ?>
					</div><!-- #primary-sidebar -->
				<?php endif; ?>

	</aside>	

<?php elseif(
	in_array(1083, $post->ancestors) //ei	
): ?>

<aside class="page blue">
			
			<h2 class="blue"><?php echo get_the_title( 1083 ); ?></h2>
			
			<?php if ( is_active_sidebar( 'widget-area-1' ) ) : ?>
				<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
					<?php dynamic_sidebar( 'widget-area-1' ); ?>
				</div><!-- #primary-sidebar -->
			<?php endif; ?>

			<?php if(ICL_LANGUAGE_CODE=='en') { ?>

			<h2 class="blue"><?php echo get_the_title( 5615 ); ?></h2>	

			<?php } else { ?>		

			<h2 class="blue"><?php echo get_the_title( 1136 ); ?></h2>

			<?php } ?>

			<?php if ( is_active_sidebar( 'widget-area-3' ) ) : ?>
				<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
					<?php dynamic_sidebar( 'widget-area-3' ); ?>
				</div><!-- #primary-sidebar -->
			<?php endif; ?>

		</aside>

<?php elseif(
	in_array(1085, $post->ancestors) //tmp	
): ?>

<aside class="page orange">
			
			<h2 class="orange"><?php echo get_the_title( 1085 ); ?></h2>
			
			<?php if ( is_active_sidebar( 'widget-area-1' ) ) : ?>
				<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
					<?php dynamic_sidebar( 'widget-area-1' ); ?>
				</div><!-- #primary-sidebar -->
			<?php endif; ?>

			<?php if(ICL_LANGUAGE_CODE=='en') { ?>

			<h2 class="orange"><?php echo get_the_title( 5615 ); ?></h2>	

			<?php } else { ?>		

			<h2 class="orange"><?php echo get_the_title( 1136 ); ?></h2>

			<?php } ?>

			<?php if ( is_active_sidebar( 'widget-area-3' ) ) : ?>
				<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
					<?php dynamic_sidebar( 'widget-area-3' ); ?>
				</div><!-- #primary-sidebar -->
			<?php endif; ?>

		</aside>	

<?php elseif(
	in_array(718, $post->ancestors) //paih	
): ?>

<aside class="page red">		

			<h2 class="red"><?php echo get_the_title( 718 ); ?></h2>	

			<?php if ( is_active_sidebar( 'widget-area-1' ) ) : ?>
				<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
					<?php dynamic_sidebar( 'widget-area-1' ); ?>
				</div><!-- #primary-sidebar -->
			<?php endif; ?>

			<?php if(ICL_LANGUAGE_CODE=='en') { ?>

			<h2 class="red"><?php echo get_the_title( 5615 ); ?></h2>	

			<?php } else { ?>		

			<h2 class="red"><?php echo get_the_title( 1136 ); ?></h2>

			<?php } ?>

			<?php if ( is_active_sidebar( 'widget-area-3' ) ) : ?>
				<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
					<?php dynamic_sidebar( 'widget-area-3' ); ?>
				</div><!-- #primary-sidebar -->
			<?php endif; ?>

		</aside>	

<?php else: ?>
		<aside class="page <?php if ( (is_tree(718)) ) echo 'red'; elseif ( (is_tree(1085)) ) echo 'orange'; elseif ( (is_tree(1083)) ) echo 'blue'; elseif ( (is_tree(2628)) ) echo 'green'; ?>">	
			<?php if ( is_active_sidebar( 'widget-area-1' ) ) : ?>
				<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
					<?php dynamic_sidebar( 'widget-area-1' ); ?>
				</div><!-- #primary-sidebar -->
			<?php endif; ?>
		</aside>
<?php endif; ?>