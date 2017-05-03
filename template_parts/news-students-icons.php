<?php if( get_field('kategorija_vesti_studenti') == 'fin' ): //Finansije ?>
	<div class="icon-hold">
		<i class="fa fa-credit-card-alt" aria-hidden="true"></i>
	</div>	
<?php endif; ?>

<?php if( get_field('odsek') == 'sve' ): ?>

	<?php if( get_field('kategorija_vesti_studenti') == 'vazno' ): //Vazno ?>
		<div class="icon-hold">
			<i class="fa fa-bookmark-o" aria-hidden="true"></i>
		</div>	
	<?php endif; ?>
	<?php if( get_field('kategorija_vesti_studenti') == 'zan' ): //Zanimljivosti?>
		<div class="icon-hold">
			<i class="fa fa-info" aria-hidden="true"></i>
		</div>	
	<?php endif; ?>
	<?php if( get_field('kategorija_vesti_studenti') == 'adm' ): // Administracija ?>
		<div class="icon-hold">
			<i class="fa fa-file-text" aria-hidden="true"></i>
		</div>	
	<?php endif; ?>								
	<?php if( get_field('kategorija_vesti_studenti') == 'stip' ): //Stipendije - konkursi ?>
		<div class="icon-hold">
			<i class="fa fa-graduation-cap" aria-hidden="true"></i>
		</div>	
	<?php endif; ?>
	
<?php endif; ?>

<?php if( get_field('odsek') == 'paih' ): ?>
	<?php if( get_field('kategorija_vesti_studenti') == 'vazno' ): // Vazno - Paih ?>
		<div class="icon-hold paih">
			<i class="fa fa-bookmark-o" aria-hidden="true"></i>
		</div>	
	<?php endif; ?>
	<?php if( get_field('kategorija_vesti_studenti') == 'zan' ): //Zanimljivosti - Paih?>
		<div class="icon-hold paih">
			<i class="fa fa-info" aria-hidden="true"></i>
		</div>	
	<?php endif; ?>
	<?php if( get_field('kategorija_vesti_studenti') == 'adm' ): //Admninistracija - Paih?>
		<div class="icon-hold paih">
			<i class="fa fa-file-text" aria-hidden="true"></i>
		</div>	
	<?php endif; ?>								
	<?php if( get_field('kategorija_vesti_studenti') == 'stip' ): //Stipendije - Konkursi - Paih ?>
		<div class="icon-hold paih">
			<i class="fa fa-graduation-cap" aria-hidden="true"></i>
		</div>	
	<?php endif; ?>								
<?php endif; ?>

<?php if( get_field('odsek') == 'ei' ): ?>
	<?php if( get_field('kategorija_vesti_studenti') == 'vazno' ): // Vazno - EI?>
		<div class="icon-hold ei">
			<i class="fa fa-bookmark-o" aria-hidden="true"></i>
		</div>	
	<?php endif; ?>
	<?php if( get_field('kategorija_vesti_studenti') == 'zan' ): //Zanimljivosti - EI?>
		<div class="icon-hold ei">
			<i class="fa fa-info" aria-hidden="true"></i>
		</div>	
		<?php endif; ?>
	<?php if( get_field('kategorija_vesti_studenti') == 'adm' ): // Administracija - EI?>
		<div class="icon-hold ei">
			<i class="fa fa-file-text" aria-hidden="true"></i>
		</div>	
		<?php endif; ?>								
	<?php if( get_field('kategorija_vesti_studenti') == 'stip' ): // Stipendije-Konkursi EI ?>
		<div class="icon-hold ei">
			<i class="fa fa-graduation-cap" aria-hidden="true"></i>
		</div>	
	<?php endif; ?>
	
<?php endif; ?>

<?php if( get_field('odsek') == 'tmp' ): ?>
	<?php if( get_field('kategorija_vesti_studenti') == 'vazno' ): //Vazno- TMP ?>
		<div class="icon-hold tmp">
			<i class="fa fa-bookmark-o" aria-hidden="true"></i>
		</div>	
	<?php endif; ?>
	<?php if( get_field('kategorija_vesti_studenti') == 'zan' ): //Zanimljivosti-TMP ?>
		<div class="icon-hold tmp">
			<i class="fa fa-info" aria-hidden="true"></i>
		</div>	
		<?php endif; ?>
	<?php if( get_field('kategorija_vesti_studenti') == 'adm' ): //Administracija-TMP?>
		<div class="icon-hold tmp">
			<i class="fa fa-file-text" aria-hidden="true"></i>
		</div>	
		<?php endif; ?>								
	<?php if( get_field('kategorija_vesti_studenti') == 'stip' )://Stipendije-Konkursi-TMP ?>
		<div class="icon-hold tmp">
			<i class="fa fa-graduation-cap" aria-hidden="true"></i>
		</div>	
	<?php endif; ?>
	
<?php endif; ?>

<?php if( get_field('odsek') == 'su' ): ?>
	<?php if( get_field('kategorija_vesti_studenti') == 'vazno' ): //Vazno-SU ?>
		<div class="icon-hold su">
			<i class="fa fa-bookmark-o" aria-hidden="true"></i>
		</div>	
	<?php endif; ?>
	<?php if( get_field('kategorija_vesti_studenti') == 'zan' ): //Zanimljivosti ?>
		<div class="icon-hold su">
			<i class="fa fa-info" aria-hidden="true"></i>
		</div>	
		<?php endif; ?>
	<?php if( get_field('kategorija_vesti_studenti') == 'adm' ): //Administracija ?>
		<div class="icon-hold su">
			<i class="fa fa-file-text" aria-hidden="true"></i>
		</div>	
		<?php endif; ?>								
	<?php if( get_field('kategorija_vesti_studenti') == 'stip' ): //Konkursi-stipendije-SU ?>
		<div class="icon-hold su">
			<i class="fa fa-graduation-cap" aria-hidden="true"></i>
		</div>	
	<?php endif; ?>
	
<?php endif; ?>