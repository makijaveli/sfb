<?php 
	if ( in_array(1814, $post->ancestors) 
	|| in_array(6700, $post->ancestors) 
	|| in_array(1826, $post->ancestors) 
	|| in_array(5824, $post->ancestors)
	|| in_array(7533, $post->ancestors)  
	|| in_array(5864, $post->ancestors) 
	|| in_array(5896, $post->ancestors)
	|| in_array(7880, $post->ancestors)  
	|| in_array(5931, $post->ancestors)
	|| in_array(9123, $post->ancestors)  
	|| in_array(1101, $post->ancestors) 
	|| in_array(2642, $post->ancestors)
	|| in_array(7894, $post->ancestors)  
	|| in_array(5912, $post->ancestors) 
	|| in_array(1822, $post->ancestors) 
	|| in_array(1808, $post->ancestors)
	|| in_array(6682, $post->ancestors)  
	|| in_array(6682, $post->ancestors)
	|| in_array(2695, $post->ancestors)
	|| in_array(7782, $post->ancestors)  
	|| in_array(1103, $post->ancestors) 
	|| in_array(1810, $post->ancestors)
	|| in_array(6693, $post->ancestors) 
	|| in_array(1830, $post->ancestors) 
	|| in_array(1105, $post->ancestors) 
	|| in_array(2770, $post->ancestors)
	|| in_array(7854, $post->ancestors)  
	|| in_array(1805, $post->ancestors)
	|| in_array(6696, $post->ancestors)  
	|| in_array(1818, $post->ancestors)
	|| in_array(6702, $post->ancestors)  
	|| in_array(1801, $post->ancestors)
	|| in_array(1402, $post->ancestors)
	|| in_array(19, $post->ancestors)
	|| in_array(28, $post->ancestors)
	|| in_array(7840, $post->ancestors)
	|| in_array(7703, $post->ancestors)
	|| in_array(7217, $post->ancestors)
	|| in_array(7185, $post->ancestors)
	|| in_array(7235, $post->ancestors)
	|| in_array(7202, $post->ancestors)
	|| in_array(7173, $post->ancestors)
	|| in_array(7254, $post->ancestors)
	|| is_page(1402)
	|| is_page(2379) 
	|| is_page(2356) 
	|| is_page(2372)
	|| is_page(2365)
	|| is_page(1455)
	|| is_page(1461)
	|| is_page(28)
	|| is_page(2476)
	|| is_page(2491)
	|| is_page(2473)
	|| is_page(2453)
	|| is_page(2518)
	|| is_page(2527)
	|| is_page(2555)
	|| is_page(2561)
	): ?>

	<?php if (ICL_LANGUAGE_CODE=='sr' ) : ?>
   <aside class="page <?php if ( (is_tree(718)) ) echo 'red'; elseif ( (is_tree(1085)) ) echo 'orange'; elseif ( (is_tree(1083)) ) echo 'blue'; elseif ( (is_tree(2628)) ) echo 'green'; ?>">				
			<?php else: ?>
		<aside class="page <?php if ( (is_tree(7092)) ) echo 'red'; elseif ( (is_tree(5619)) ) echo 'orange'; elseif ( (is_tree(6805)) ) echo 'blue'; elseif ( (is_tree(5612)) ) echo 'green'; ?>">				
			<?php endif; ?>
			<?php if ( is_active_sidebar( 'widget-area-6' ) ) : ?>
				<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
					<?php dynamic_sidebar( 'widget-area-6' ); ?>
				</div><!-- #primary-sidebar -->
			<?php endif; ?>
	</aside>

<?php elseif(is_page(array(1826,7202,7703,7173,7235,7217,7254,7185,5824,7533,5864,5896,7880,5931,1101,2642,7894,5912,1822,7840,1808,6682,6682,2695,7782,9123,1103,1810,6693,1830,1105,2770,7854,1805,6696,1801,1814,6700,1818,6702))): ?>
		<?php if (ICL_LANGUAGE_CODE=='sr' ) : ?>
		<aside class="page <?php if ( (is_tree(718)) ) echo 'red'; elseif ( (is_tree(1085)) ) echo 'orange'; elseif ( (is_tree(1083)) ) echo 'blue'; elseif ( (is_tree(2628)) ) echo 'green'; ?>">				
		<?php else: ?>
		<aside class="page <?php if ( (is_tree(7092)) ) echo 'red'; elseif ( (is_tree(5619)) ) echo 'orange'; elseif ( (is_tree(6805)) ) echo 'blue'; elseif ( (is_tree(5612)) ) echo 'green'; ?>">				
			<?php endif; ?>
			<?php if ( is_active_sidebar( 'widget-area-5' ) ) : ?>
				<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
					<?php dynamic_sidebar( 'widget-area-5' ); ?>
				</div><!-- #primary-sidebar -->
			<?php endif; ?>
		</aside>
<?php elseif(
	in_array(2628, $post->ancestors) 
	|| in_array(5612, $post->ancestors)//su	
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
	in_array(1083, $post->ancestors) 
	|| in_array(6805, $post->ancestors)//ei	
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
	in_array(1085, $post->ancestors)
	|| in_array(5619, $post->ancestors)  //tmp	
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
	in_array(718, $post->ancestors) 
	|| in_array(7092, $post->ancestors)  //paih	
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