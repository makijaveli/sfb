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
	|| is_page(1402) 
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
<?php else: ?>
		<aside class="page <?php if ( (is_tree(718)) ) echo 'red'; elseif ( (is_tree(1085)) ) echo 'orange'; elseif ( (is_tree(1083)) ) echo 'blue'; elseif ( (is_tree(2628)) ) echo 'green'; ?>">	
			<?php if ( is_active_sidebar( 'widget-area-1' ) ) : ?>
				<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
					<?php dynamic_sidebar( 'widget-area-1' ); ?>
				</div><!-- #primary-sidebar -->
			<?php endif; ?>
		</aside>
<?php endif; ?>