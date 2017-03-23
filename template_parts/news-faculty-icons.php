<?php if( get_field('kategorija_vesti_fakultet') == 'vazno' ): //Važno?>
								<div class="icon-hold">
									<i class="fa fa-bookmark-o" aria-hidden="true"></i>
								</div>
							<?php endif; ?>
							<?php if( get_field('kategorija_vesti_fakultet') == 'zan'  ): //Zanimljivosti ?>
								<div class="icon-hold">
									<i class="fa fa-info" aria-hidden="true"></i>
								</div>
							<?php endif; ?>
							<?php if( get_field('kategorija_vesti_fakultet') == 'adm'  ): //Admistracija?>
								<div class="icon-hold">
									<i class="fa fa-file-text" aria-hidden="true"></i>
								</div>	
							<?php endif; ?>
							<?php if( get_field('kategorija_vesti_fakultet') == 'fin' ): //Finansije ?>
								<div class="icon-hold">							
									<i class="fa fa-credit-card-alt" aria-hidden="true"></i>
								</div>	
							<?php endif; ?>
							<?php if( get_field('kategorija_vesti_fakultet') == 'stip'  ):  // Konkursi - stipendije?>
								<div class="icon-hold">
									<i class="fa fa-handshake-o" aria-hidden="true"></i>
								</div>	
							<?php endif; ?>

							<?php if( get_field('odsek') == 'paih' ): ?>
								<?php if( get_field('kategorija_vesti_fakultet') == 'nagrade' ): //Nagrade - PAIH ?>
									<div class="icon-hold paih">
										<i class="fa fa-trophy" aria-hidden="true"></i>
									</div>
								<?php endif; ?>
							<?php endif; ?>

							<?php if( get_field('odsek') == 'ei' ): ?>
								<?php if( get_field('kategorija_vesti_fakultet') == 'nagrade' ): //Nagrade - EI ?>
									<div class="icon-hold ei">
										<i class="fa fa-trophy" aria-hidden="true"></i>
									</div>
								<?php endif; ?>
							<?php endif; ?>

							<?php if( get_field('odsek') == 'tmp' ): ?>
								<?php if( get_field('kategorija_vesti_fakultet') == 'nagrade' ): //Nagrade-TMP ?>
									<div class="icon-hold tmp">
										<i class="fa fa-trophy" aria-hidden="true"></i>
									</div>	
								<?php endif; ?>
							<?php endif; ?>

							<?php if( get_field('odsek') == 'su' ): ?>
								<?php if( get_field('kategorija_vesti_fakultet') == 'nagrade'  ): //Nagrade-SU?>
									<div class="icon-hold su">
										<i class="fa fa-trophy" aria-hidden="true"></i>
									</div>	
								<?php endif; ?>
							<?php endif; ?>

							<?php if( get_field('odsek') == 'sve' ): ?>
								<?php if( get_field('kategorija_vesti_fakultet') == 'nagrade'  ): //Nagrade - SVE ?>
									<div class="icon-hold">
										<i class="fa fa-trophy" aria-hidden="true"></i>
									</div>	
								<?php endif; ?>
							<?php endif; ?>