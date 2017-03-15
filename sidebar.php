<?php if(is_page(array(1826,5824,5864,5896,5931,1101,2642,5912,1822,1808,2695,1103,1810,1830,1105,2770,1805,1801,1814,1818))): ?>
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