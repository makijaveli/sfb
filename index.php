<?php get_header(); ?>

			<?php // Učitava se PAGE_ID strane: Pocetna i Home
               $args = array('page_id' => 10 );
               $wp_query = new WP_Query($args);
               if($wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post();
            ?>

            <?php if( have_rows('slider') ): ?>

<ul class="slider">

		 <?php while( have_rows('slider') ): the_row(); 

                    // vars
                    $image = get_sub_field('image');
                    $link = get_sub_field('link');

         ?>

		<li>
			
			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" alt="Vest">

			<div class="overlay"></div>
			
			<div class="slidenews">
				
				<div class="date">10/11/2016</div>

				<h1> <a href="<?php echo $link; ?>">
                        <?php endif; ?>

                        <?php if( $link ): ?>
                            </a>
                        <?php endif; ?></h1>

				<div class="cta">

					<a href="<?php echo $link; ?>">Vidi više <i class="fa fa-chevron-right" aria-hidden="true"></i></a>

				</div>

			</div><!-- slidenews -->

		</li>

		
	</ul><!-- slider -->
		
		<div class="wrapper">
			
			<div class="cards">
				
				<div class="card green">
					
					<div class="cardtitle"><h2>Šumarstvo</h2></div>

					<ul>
					    <li><a href="">Aktuelnosti <i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
					    <li><a href="">Upis<i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
					    <li><a href="">Katedre<i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
					    <li><a href="">Nastavnici i saradnici<i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
					    <li><a href="">Nastavni planovi<i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
					    <li><a href="">Labaratorije i centri<i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
					</ul>

				</div>

				<div class="card orange">
					
					<div class="cardtitle"><h2>Tehnologije, menadžment i
						projektovanje nameštaja i
						proizvoda od drveta</h2></div>

					<ul>
					    <li><a href="">Aktuelnosti <i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
					    <li><a href="">Upis<i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
					    <li><a href="">Katedre<i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
					    <li><a href="">Nastavnici i saradnici<i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
					    <li><a href="">Nastavni planovi<i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
					    <li><a href="">Labaratorije i centri<i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
					</ul>

				</div>

				<div class="card red">
					
					<div class="cardtitle"><h2>Pejzažna arhitektura
						i hortikultura</h2></div>

					<ul>
					    <li><a href="">Aktuelnosti <i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
					    <li><a href="">Upis<i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
					    <li><a href="">Katedre<i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
					    <li><a href="">Nastavnici i saradnici<i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
					    <li><a href="">Nastavni planovi<i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
					    <li><a href="">Labaratorije i centri<i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
					</ul>

				</div>

				<div class="card blue">
					
					<div class="cardtitle"><h2>Ekološki inženjering
						u zaštiti zemljišnih i
						vodnih resursa</h2></div>

					<ul>
					    <li><a href="">Aktuelnosti <i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
					    <li><a href="">Upis<i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
					    <li><a href="">Katedre<i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
					    <li><a href="">Nastavnici i saradnici<i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
					    <li><a href="">Nastavni planovi<i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
					    <li><a href="">Labaratorije i centri<i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
					</ul>

				</div>

			</div><!-- cards -->

	<main>

			<section class="news">

				<div class="artnews">
					
					<h3>Vesti fakulteta</h3>

					<div class="articles">

						<div class="titledate">

							<div class="artdate">14/11/2016</div>
						
							<h1><a href="">Godišnje nagrade privredne komore Beograda</a></h1>				

						</div>

					</div>

					<div class="articles">

						<div class="titledate">

							<div class="artdate">11/11/2016</div>

							<h1><a href="">Sajam visokoškolskih institucija HEduFair 2016</a></h1>
	

						</div>

					</div>

					<div class="articles">

						<div class="titledate">

							<div class="artdate">05/11/2016</div>

							<h1><a href="">Rang lista prijavljenih kandidata za studentski 
							dom u školskoj 2016/2017. godini.

						</div>

					</div>

					<div class="articles">

						<div class="titledate">

							<div class="artdate">14/11/2016</div>
						
							<h1><a href="">Godišnje nagrade privredne komore Beograda</a></h1>				

						</div>

					</div>

					<div class="articles">

						<div class="titledate">

							<div class="artdate">11/11/2016</div>

							<h1><a href="">Sajam visokoškolskih institucija HEduFair 2016</a></h1>
	

						</div>

					</div>

					<div class="articles">

						<div class="titledate">

							<div class="artdate">05/11/2016</div>

							<h1><a href="">Rang lista prijavljenih kandidata za studentski 
							dom u školskoj 2016/2017. godini.</a></h1>

						</div>

					</div>

					<div class="ctanews">

						<a href="">Vidi sve vesti fakulteta <i class="fa fa-chevron-right" aria-hidden="true"></i></a>

					</div>


				</div>

				<div class="artnews">
					
					<h3>Vesti studenata</h3>

					<div class="articles">

						<div class="titledate">

							<div class="artdate">14/11/2016</div>

							<h1><a href="">Godišnje nagrade privredne komore Beograda</a></h1>

						</div>

					</div>

					<div class="articles">

						<div class="titledate">

							<div class="artdate">11/11/2016</div>

							<h1><a href="">Sajam visokoškolskih institucija HEduFair 2016</a></h1>

						</div>

					</div>

					<div class="articles">

						<div class="titledate">

							<div class="artdate">05/11/2016</div>

							<h1><a href="">Rang lista prijavljenih kandidata za studentski 
							dom u školskoj 2016/2017. godini.
							</a></h1>

						</div>

					</div>

					<div class="articles">

						<div class="titledate">

							<div class="artdate">14/11/2016</div>

							<h1><a href="">Godišnje nagrade privredne komore Beograda</a></h1>

						</div>

					</div>

					<div class="articles">

						<div class="titledate">

							<div class="artdate">11/11/2016</div>

							<h1><a href="">Sajam visokoškolskih institucija HEduFair 2016</a></h1>

						</div>

					</div>

					<div class="articles">

						<div class="titledate">

							<div class="artdate">05/11/2016</div>

							<h1><a href="">Rang lista prijavljenih kandidata za studentski 
							dom u školskoj 2016/2017. godini.
							</a></h1>

						</div>

					</div>

					<div class="ctanews">

						<a href="">Vidi sve vesti za studente <i class="fa fa-chevron-right" aria-hidden="true"></i></a>

					</div>

				</div>

			</section>

			

		</div><!-- wrapper -->

	</main>

<?php get_footer(); ?>
