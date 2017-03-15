<?php 

get_header();

?>

<div class="breadcrumbs">
	
	<div class="wrapper">

		<div class="breadcrumb <?php if ( $post->post_parent == '718' ) echo 'red'; elseif ( $post->post_parent == '1085' ) echo 'orange'; elseif ( $post->post_parent == '1083' ) echo 'blue'; elseif ( $post->post_parent == '2628' ) echo 'green'; ?>">

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

		<aside class="page-profesor">
			
			<h3>
				<?php _e( 'Најновије вести', 'sfb' ); ?>
			</h3>	
			
			<div class="cataside">

			<?php 
				// the query
				$wpb_all_query = new WP_Query(array('post_type'=>'post', 'category__in' => array(2,3), 'post_status'=>'publish', 'posts_per_page'=> 5)); ?>

				<?php if ( $wpb_all_query->have_posts() ) : ?>

				<ul>

					<!-- the loop -->
					<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
						<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
					<?php endwhile; ?>
					<!-- end of the loop -->

				</ul>

					<?php wp_reset_postdata(); ?>

				<?php else : ?>
					<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>

			</div>

			<div class="cataside">

			<h3>
				<?php _e( 'Категорије вести', 'sfb' ); ?>
			</h3>

			    <?php
				    if (is_category()) {
				    $this_category = get_category($cat);
				    }
				    ?>
				    <?php
				    if($this_category->category_parent)
				    $this_category = wp_list_categories('orderby=id&title_li=&use_desc_for_title=1&child_of='.$this_category->category_parent.
				    "&echo=0"); else
				    $this_category = wp_list_categories('orderby=id&depth=1
				    &title_li=&use_desc_for_title=1&child_of='.$this_category->cat_ID.
				    "&echo=0");
				    if ($this_category) { ?> 

				<ul>
				<?php echo $this_category; ?>

				</ul>

				<?php } ?>

			</div>	

		</aside>

		<div class="content">
			<span class="button">+</span>
		</div>

		<div class="page-content">

				<div class="cattitle"> <?php single_cat_title(); ?> </div>
				

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<!-- post iz kategorije -->

					<div class="category-post">

						<div class="news-thumb">
							
							<?php if( get_field('kategorija_vesti_fakultet') == 'vazno' ): ?>
								<img src="<?php bloginfo('template_directory'); ?>/images/vazno.png" alt="Šumarski fakultet">
								<?php endif; ?>
							<?php if( get_field('kategorija_vesti_fakultet') == 'zan' ): ?>
								<img src="<?php bloginfo('template_directory'); ?>/images/zanimljivosti.png" alt="Šumarski fakultet">
								<?php endif; ?>
							<?php if( get_field('kategorija_vesti_fakultet') == 'adm' ): ?>
								<img src="<?php bloginfo('template_directory'); ?>/images/adm.png" alt="Šumarski fakultet">
								<?php endif; ?>
							<?php if( get_field('kategorija_vesti_fakultet') == 'fin' ): ?>
								<img src="<?php bloginfo('template_directory'); ?>/images/finansije.png" alt="Šumarski fakultet">
								<?php endif; ?>
							<?php if( get_field('kategorija_vesti_fakultet') == 'stip' ): ?>
								<img src="<?php bloginfo('template_directory'); ?>/images/stip-faks.png" alt="Šumarski fakultet">
							<?php endif; ?>

							<?php if( get_field('odsek') == 'paih' ): ?>
								<?php if( get_field('kategorija_vesti_fakultet') == 'nagrade' ): ?>
									<img src="<?php bloginfo('template_directory'); ?>/images/nagrade_smer_paih.png" alt="Šumarski fakultet">
								<?php endif; ?>
							<?php endif; ?>

							<?php if( get_field('odsek') == 'ei' ): ?>
								<?php if( get_field('kategorija_vesti_fakultet') == 'nagrade' ): ?>
									<img src="<?php bloginfo('template_directory'); ?>/images/nagrade_smer_ei.png" alt="Šumarski fakultet">
								<?php endif; ?>
							<?php endif; ?>

							<?php if( get_field('odsek') == 'tmp' ): ?>
								<?php if( get_field('kategorija_vesti_fakultet') == 'nagrade' ): ?>
									<img src="<?php bloginfo('template_directory'); ?>/images/nagrade_smer_tmp.png" alt="Šumarski fakultet">
								<?php endif; ?>
							<?php endif; ?>

							<?php if( get_field('odsek') == 'su' ): ?>
								<?php if( get_field('kategorija_vesti_fakultet') == 'nagrade' ): ?>
									<img src="<?php bloginfo('template_directory'); ?>/images/nagrade_smer_su.png" alt="Šumarski fakultet">
								<?php endif; ?>
							<?php endif; ?>

							<?php if( get_field('odsek') == 'sve' ): ?>
								<?php if( get_field('kategorija_vesti_fakultet') == 'nagrade' ): ?>
									<img src="<?php bloginfo('template_directory'); ?>/images/nagrade_fakultet.png" alt="Šumarski fakultet">
								<?php endif; ?>
							<?php endif; ?>

							<?php if( get_field('kategorija_vesti_studenti') == 'fin' ): ?>
								<img src="<?php bloginfo('template_directory'); ?>/images/finansije.png" alt="Šumarski fakultet">
							<?php endif; ?>

							<?php if( get_field('odsek') == 'sve' ): ?>

								<?php if( get_field('kategorija_vesti_studenti') == 'vazno' ): ?>
									<img src="<?php bloginfo('template_directory'); ?>/images/vazno.png" alt="Šumarski fakultet">
								<?php endif; ?>
								<?php if( get_field('kategorija_vesti_studenti') == 'zan' ): ?>
									<img src="<?php bloginfo('template_directory'); ?>/images/zanimljivosti.png" alt="Šumarski fakultet">
									<?php endif; ?>
								<?php if( get_field('kategorija_vesti_studenti') == 'adm' ): ?>
									<img src="<?php bloginfo('template_directory'); ?>/images/adm.png" alt="Šumarski fakultet">
									<?php endif; ?>
								
								<?php if( get_field('kategorija_vesti_studenti') == 'stip' ): ?>
									<img src="<?php bloginfo('template_directory'); ?>/images/stip.png" alt="Šumarski fakultet">
								<?php endif; ?>
								
							<?php endif; ?>

							<?php if( get_field('odsek') == 'paih' ): ?>

								<?php if( get_field('kategorija_vesti_studenti') == 'vazno' ): ?>
									<img src="<?php bloginfo('template_directory'); ?>/images/vazno_odsek_paih.png" alt="Šumarski fakultet">
								<?php endif; ?>
								<?php if( get_field('kategorija_vesti_studenti') == 'zan' ): ?>
									<img src="<?php bloginfo('template_directory'); ?>/images/zanimljivosti_odsek_paih.png" alt="Šumarski fakultet">
									<?php endif; ?>
								<?php if( get_field('kategorija_vesti_studenti') == 'adm' ): ?>
									<img src="<?php bloginfo('template_directory'); ?>/images/administracija_odsek_paih.png" alt="Šumarski fakultet">
									<?php endif; ?>
								
								<?php if( get_field('kategorija_vesti_studenti') == 'stip' ): ?>
									<img src="<?php bloginfo('template_directory'); ?>/images/stipendije_konkursi_odsek_paih.png" alt="Šumarski fakultet">
								<?php endif; ?>
								
							<?php endif; ?>

							<?php if( get_field('odsek') == 'ei' ): ?>

								<?php if( get_field('kategorija_vesti_studenti') == 'vazno' ): ?>
									<img src="<?php bloginfo('template_directory'); ?>/images/vazno_odsek_ei.png" alt="Šumarski fakultet">
								<?php endif; ?>
								<?php if( get_field('kategorija_vesti_studenti') == 'zan' ): ?>
									<img src="<?php bloginfo('template_directory'); ?>/images/zanimljivosti_odsek_ei.png" alt="Šumarski fakultet">
									<?php endif; ?>
								<?php if( get_field('kategorija_vesti_studenti') == 'adm' ): ?>
									<img src="<?php bloginfo('template_directory'); ?>/images/administracija_odsek_ei.png" alt="Šumarski fakultet">
									<?php endif; ?>
								
								<?php if( get_field('kategorija_vesti_studenti') == 'stip' ): ?>
									<img src="<?php bloginfo('template_directory'); ?>/images/stipendije_konkursi_odsek_ei.png" alt="Šumarski fakultet">
								<?php endif; ?>
								
							<?php endif; ?>

							<?php if( get_field('odsek') == 'tmp' ): ?>

								<?php if( get_field('kategorija_vesti_studenti') == 'vazno' ): ?>
									<img src="<?php bloginfo('template_directory'); ?>/images/vazno_odsek_tmp.png" alt="Šumarski fakultet">
								<?php endif; ?>
								<?php if( get_field('kategorija_vesti_studenti') == 'zan' ): ?>
									<img src="<?php bloginfo('template_directory'); ?>/images/zanimljivosti_odsek_tmp.png" alt="Šumarski fakultet">
									<?php endif; ?>
								<?php if( get_field('kategorija_vesti_studenti') == 'adm' ): ?>
									<img src="<?php bloginfo('template_directory'); ?>/images/administracija_odsek_tmp.png" alt="Šumarski fakultet">
									<?php endif; ?>
								
								<?php if( get_field('kategorija_vesti_studenti') == 'stip' ): ?>
									<img src="<?php bloginfo('template_directory'); ?>/images/stipendije_konkursi_odsek_tmp.png" alt="Šumarski fakultet">
								<?php endif; ?>
								
							<?php endif; ?>

							<?php if( get_field('odsek') == 'su' ): ?>

								<?php if( get_field('kategorija_vesti_studenti') == 'vazno' ): ?>
									<img src="<?php bloginfo('template_directory'); ?>/images/vazno_odsek_su.png" alt="Šumarski fakultet">
								<?php endif; ?>
								<?php if( get_field('kategorija_vesti_studenti') == 'zan' ): ?>
									<img src="<?php bloginfo('template_directory'); ?>/images/zanimljivosti_odsek_su.png" alt="Šumarski fakultet">
									<?php endif; ?>
								<?php if( get_field('kategorija_vesti_studenti') == 'adm' ): ?>
									<img src="<?php bloginfo('template_directory'); ?>/images/administracija_odsek_su.png" alt="Šumarski fakultet">
									<?php endif; ?>
								
								<?php if( get_field('kategorija_vesti_studenti') == 'stip' ): ?>
									<img src="<?php bloginfo('template_directory'); ?>/images/stipendije_konkursi_odsek_su.png" alt="Šumarski fakultet">
								<?php endif; ?>
								
							<?php endif; ?>

						</div>	

				    
				    	<h1><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h1>

				    	<div class="catinfo">
				    		<span>
				    		<?php _e( 'Датум:', 'sfb' ); ?>
							</span><?php echo get_the_date('d.m.Y'); ?><?php _e( ' - ', 'sfb' ); ?><span>
				    		<?php _e( 'Категорија:', 'sfb' ); ?>

							</span>
							<?php $categories = get_the_category();
							 if ( ! empty( $categories ) ) { ?>
							    <?php echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
					   } ?>
				    	</div>

				    </div>

				<?php

		        endwhile;

		        endif;

		     	?>  

		     	<?php html5wp_pagination(); ?>

     	</div>
	
	</main>

</div><!-- wrapper -->


<?php 

	get_footer();

 ?>