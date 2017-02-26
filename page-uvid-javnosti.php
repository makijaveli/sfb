<?php 

/*
Template Name: Uvid javnosti
*/

get_header();

?>

<div class="breadcrumbs">
	
	<div class="wrapper">

		<div class="breadcrumb">

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

		<aside class="page">
			
			<?php if ( is_active_sidebar( 'widget-area-1' ) ) : ?>
				<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
					<?php dynamic_sidebar( 'widget-area-1' ); ?>
				</div><!-- #primary-sidebar -->
			<?php endif; ?>

		</aside>

		<div class="page-content">
        		    <h1><?php the_title() ?></h1>

				    <?php
                    $args = array('cat' => 35, 'posts_per_page'=>-1); //doktorske disertacije
                    $wp_query = new WP_Query($args); ?>
                    <h2><?php single_cat_title(); ?></h2>
                    <?php if($wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post();
				    ?>
                        <h3 class="ime-uvid-javnosti"><?php the_title(); ?></h3>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                     <?php else : ?>
                        <p> <?php _e( 'Тренутно нема постављених материјала', 'sfb' ); ?></p>
                    <?php endif; ?> 

                    <div class="break"></div>

                    <?php
                    $args = array('cat' => 36, 'posts_per_page'=>-1); //master radovi
                    $wp_query = new WP_Query($args); ?>
                    <h2><?php single_cat_title(); ?></h2>
                    <?php if($wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post();
				    ?>
                        <h3 class="ime-uvid-javnosti"><?php the_title(); ?></h3>
                        <?php the_content(); ?>
                    <?php endwhile; ?> 

                    <?php else : ?>
                        <p><?php _e( 'Тренутно нема постављених материјала', 'sfb' ); ?></p>
                    <?php endif; ?> 

                    <div class="break"></div>

                    <?php
                    $args = array('cat' => 37, 'posts_per_page'=>-1); //specijalisticki radovi
                    $wp_query = new WP_Query($args); ?>
                    <h2><?php single_cat_title(); ?></h2>
                    <?php if($wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post();
				    ?>
                        <h3 class="ime-uvid-javnosti"><?php the_title(); ?></h3>
                        <?php the_content(); ?>

                    <?php endwhile; ?>
                    <?php else : ?>
                        <p><?php _e( 'Тренутно нема постављених материјала', 'sfb' ); ?></p>
                    <?php endif; ?>					
     	</div>
	
	</main>

</div><!-- wrapper -->


<?php get_footer(); ?>