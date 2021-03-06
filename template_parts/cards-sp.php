<?php  
$link_su = get_field('link_su');
$link_tmp = get_field('link_tmp');
$link_paih = get_field('link_paih');
$link_ei = get_field('link_ei');
?>

<div class="cards studpro">				
	<?php if($link_su): ?>
	<div class="card sp green">					
		<div class="cardtitle studpro">
            <span><?php _e( 'Студијски програм', 'sfb' ); ?></span>
			<h2><a href="<?php echo $link_su; ?>"><?php _e( 'Шумарство', 'sfb' ); ?></a></h2>	
		</div>
	</div>
	<?php endif; ?>

	<?php if($link_tmp): ?>
	<div class="card sp orange">					
		<div class="cardtitle studpro">
            <span><?php _e( 'Студијски програм', 'sfb' ); ?></span>
			<h2><a href="<?php echo $link_tmp; ?>"><?php _e( 'Технологије, менаџмент и пројектовање намештаја и производа од дрвета', 'sfb' ); ?></a></h2>
		</div>
	</div>
	<?php endif; ?>

	<?php if($link_paih): ?>
	<div class="card sp red">					
		<div class="cardtitle studpro">
            <span><?php _e( 'Студијски програм', 'sfb' ); ?></span>
			<h2><a href="<?php echo $link_paih; ?>"><?php _e( 'Пејзажна архитектура', 'sfb' ); ?></a></h2>
		</div>
	</div>
	<?php endif; ?>

	<?php if($link_ei): ?>
	<div class="card sp blue">					
		<div class="cardtitle studpro">
            <span><?php _e( 'Студијски програм', 'sfb' ); ?></span>
			<h2><a href="<?php echo $link_ei; ?>"><?php _e( 'Еколошки инжењеринг у заштити земљишних и водeних ресурса', 'sfb' ); ?></a></h2>
		</div>
	</div>
	<?php endif; ?>
</div><!-- cards -->