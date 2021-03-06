<div class="wrapper">

			<div class="footerup">
				
				<div class="fcol">
					
					<h3><?php _e( 'У сусрет јубилеју', 'sfb' ); ?></h3>
						<div class="jubilej">
							<img src="<?php bloginfo('template_directory'); ?>/images/100_godina_sfb.png" alt="Šumarski fakultet"></a>
						</div>	

					<?php if (ICL_LANGUAGE_CODE=='sr' ) : ?>

					<p> <?php _e( '100 година <br /> Шумарског факултета', 'sfb' ); ?><br /> 
					<?php _e( 'Одбројавање:', 'sfb' ); ?> <span id="countdown">0 dana</span></p> 

					<?php else: ?>
						<p> <?php _e( '100 years <br /> of the Faculty of Forestry', 'sfb' ); ?><br /> 
					<?php _e( 'Countdown:', 'sfb' ); ?> <span id="countdown">0 days</span></p> 
					<?php endif; ?>

					<h3><?php _e( 'Брзи линкови', 'sfb' ); ?></h3>

					<?php wp_nav_menu( array( 'theme_location' => 'footer-menu-bl' ) ); ?>

				</div>

				<div class="fcol">
					
					<h3><?php _e( 'Факултет', 'sfb' ); ?></h3>

					<?php wp_nav_menu( array( 'theme_location' => 'footer-menu-fc' ) ); ?>

				</div>

				<div class="fcol">

					<ul>			
						<h3><?php _e( 'Студијски програм', 'sfb' ); ?></h3>
						<?php wp_nav_menu( array( 'theme_location' => 'footer-menu-ob' ) ); ?>
						<h3><?php _e( 'Студенти', 'sfb' ); ?></h3>
						<?php wp_nav_menu( array( 'theme_location' => 'footer-menu-st' ) ); ?>
					</ul>


				</div>

				<div class="fcol">

					<ul>
						<h3><?php _e( 'Наука', 'sfb' ); ?></h3>
						<?php wp_nav_menu( array( 'theme_location' => 'footer-menu-na' ) ); ?>
					
						<h3><?php _e( 'Сарадња', 'sfb' ); ?></h3>

						<?php wp_nav_menu( array( 'theme_location' => 'footer-menu-sa' ) ); ?>

						<h3><?php _e( 'Услуге', 'sfb' ); ?></h3>

						<?php wp_nav_menu( array( 'theme_location' => 'footer-menu-us' ) ); ?>

						<h3><?php _e( 'Наставне базе', 'sfb' ); ?></h3>

						<?php wp_nav_menu( array( 'theme_location' => 'footer-menu-nb' ) ); ?>

					</ul>

				</div>

			</div>

		</div><!-- wrapper -->

		<div class="clear"></div>

		<div class="footerdown">
			
			<div class="footerlogo">

				<?php if (stl_is_current_cyrillic()) { ?>
					<a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/flogo-cir.png" alt=""></a>
				<?php } else { ?>
					<a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/flogo.png" alt=""></a>
				<?php } ?>

			</div>

			<?php if(ICL_LANGUAGE_CODE=='en') { ?>

			<?php _e(nl2br( "University of Belgrade - Faculty of Forestry
							 Knez Viseslav 1, 11030 Belgrade
							  phone: (011) 3053-990; fax: (011) 2545-485
							   Site created", 'sfb' )); ?> <a href="http://mweb.rs" target="_blank">mweb</a>

			<?php } else { ?>

			<?php _e(nl2br( "Универзитет у Београду — Шумарски факулет
						Кнеза Вишеслава 1, 11030 Београд
						тел: (011) 3053-990; факс: (011) 2545-485
						Сајт креирао", 'sfb' )); ?> <a href="http://mweb.rs" target="_blank">mweb</a>

			<?php } ?>

		</div>


	</footer>

	<?php wp_footer(); ?>

	<script src="<?php bloginfo('template_directory'); ?>/js/jquery.slicknav.js"></script>

		<script type="text/javascript">
		 $(function () {
		  $('#menu').slicknav({
						appendTo:'.res'
						})
						});
		</script>

		<script>
		  $( function() {
		    $( "#tabs" ).tabs();
		  } );
		  </script>

	<script>

		var mn = $(".main-nav");
		    mns = "main-nav-scrolled";
		    hdr = $('header').height();

		$(window).scroll(function() {
		  if( $(this).scrollTop() > hdr ) {
		    mn.addClass(mns);
		  } else {
		    mn.removeClass(mns);
		  }
		});

	</script>

	<script> $('aside ul li:has(ul.children)').addClass('has_sub'); </script>

	<script type="text/javascript">
		if($(window).width() <= 768){
		$(document).ready(function(){
		    $('.card.green').click(function() {
		        $('.card.green ul').slideToggle();
		    });
		});
	};
	</script>

	<script type="text/javascript">
		if($(window).width() <= 768){
		$(document).ready(function(){
		    $('.card.orange').click(function() {
		        $('.card.orange ul').slideToggle();
		    });
		});
		};
	</script>

	<script type="text/javascript">
		if($(window).width() <= 768){
		$(document).ready(function(){
		    $('.card.red').click(function() {
		        $('.card.red ul').slideToggle();
		    });
		});
		};
	</script>

	<script type="text/javascript">
		if($(window).width() <= 768){
		$(document).ready(function(){
		    $('.card.blue').click(function() {
		        $('.card.blue ul').slideToggle();
		    });
		});
		};
	</script>

	<script>
	var end = new Date('12/05/2020 00:00:00');

	    var _second = 1000;
	    var _minute = _second * 60;
	    var _hour = _minute * 60;
	    var _day = _hour * 24;
	    var timer;

	    function showRemaining() {
	        var now = new Date();
	        var distance = end - now;
	        if (distance < 0) {

	            clearInterval(timer);
	            document.getElementById('countdown').innerHTML = 'Istekao!';

	            return;
	        }
	        var days = Math.floor(distance / _day);

			<?php if (ICL_LANGUAGE_CODE=='sr' ) : ?>
	        <?php if (stl_is_current_cyrillic()) { ?>
						document.getElementById('countdown').innerHTML = days + ' ' +  'дана ';
						 <?php } else {  ?>
						document.getElementById('countdown').innerHTML = days + ' ' +  'dana ';
						<?php } ?>
			<?php else: ?>
			document.getElementById('countdown').innerHTML = days + ' ' +  'days ';
			<?php endif; ?>
	    }

	    timer = setInterval(showRemaining, 1000);
	</script>

	<script>
		$('.toggle').click(function(e) {
  	e.preventDefault();
  
    var $this = $(this);
  
    if ($this.next().hasClass('show')) {
        $this.next().removeClass('show');
        $this.next().slideUp(350);
    } else {
        $this.parent().parent().find('.inner').removeClass('show');
        $this.parent().parent().find('.inner').slideUp(350);
        $this.next().toggleClass('show');
        $this.next().slideToggle(350);
    }
});
	</script>

	<script>
		var $container = $('.page');

  $button = $('.button');
  $button.on('click', toggleMenu);

function toggleMenu() {
	$container.toggleClass('slide');
}
	</script>