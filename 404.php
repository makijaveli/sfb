<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 */

 /* MWEB */

get_header(); ?>

	<div class="wrapper">
	

	<main>


		<div class="page-content">

				<div class="cattitle"> 

					<h1 class="page-title"><?php _e( 'Страница није пронађена', 'sfb' ); ?></h1>

				</div>

					<!-- post iz kategorije -->

					<div class="category-post">

						<?php _e(nl2br( "Вратите се на почетну страну.\n", 'sfb' )); ?><a class="s" href="<?php echo home_url(); ?>">

						<?php _e( 'Почетна страна', 'sfb' ); ?></a>

					</div>


     	</div>
	
	</main>

</div><!-- wrapper -->

<?php get_footer(); ?>