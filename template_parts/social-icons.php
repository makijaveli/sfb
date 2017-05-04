<div class="headersoclang">	
							
						<!--	<a href=""><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
							<a href=""><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
							<a href=""><i class="fa fa-youtube-play" aria-hidden="true"></i></a> -->
							


						<div class="lang">
							<div class="cir-lat-select">
								<?php if(ICL_LANGUAGE_CODE=='sr'): ?>						
									<?php stl_show_selector ('oneline', '', 'Ћир', 'Lat') ?>
								<?php endif; ?>						
							</div>	
							<div class="lang-select">
								<?php do_action('wpml_add_language_selector'); ?>
							</div>
						</div>

					</div><!-- headersoclang -->