<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php $image = get_field('slika'); 

					$file = get_field('cvsrb');
					$file2 = get_field('cveng'); ?>

					<div class="custom-prof">

						<div class="profimg cat">
							<?php if($image): //dont output an empty image tag ?>
								<a href="<?php the_permalink() ?>">
									<img src="<?php echo $image['sizes']['profil-profesora']; ?>" width="<?php echo $image['sizes']['profil-profesora']; ?>" height="<?php echo $image['sizes']['profil-profesora']; ?>" alt="<?php echo $image['caption']; ?>" />
								</a>
							<?php else: ?>
								<a href="<?php the_permalink() ?>">	
									<img src="<?php echo get_template_directory_uri(); ?>/images/user-profile-default.jpg" />
								</a>	 
							<?php endif; ?>
						</div>

						<div class="profabout">

							<h1><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title() ?></a></h1>


							<span><?php _e( 'Телефон', 'sfb' ); ?>: </span><?php the_field('telefon'); ?> <br>
							<span><?php _e( 'Е-маил', 'sfb' ); ?>: </span><?php the_field('email'); ?> <br>
							<span><?php _e( 'Кабинет', 'sfb' ); ?>: </span><?php the_field('kabinet'); ?> <br>
							<span><?php _e( 'Консултације', 'sfb' ); ?>: </span><?php the_field('konsultacije'); ?> <br>

						</div>

					</div>


				<?php

		        endwhile;

		        endif;

		     	?> 

				 <?php html5wp_pagination(); ?>