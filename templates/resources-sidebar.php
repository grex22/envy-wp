<?php if( !is_page('resources') ) : ?>
	<a href="/resources/" class="cta-btn medium primary"><i class="fa fa-caret-square-o-left"></i> Overview</a>
<?php endif; ?>
<h2>View by Industry:</h2>
<ul class="menu">
	<li class=""><a href="<?php echo home_url('/industry-resource/retail/'); ?>">Retail</a></li>
	<li class=""><a href="<?php echo home_url('/industry-resource/restaurant/'); ?>">Restaurant</a></li>
	<li class=""><a href="<?php echo home_url('/industry-resource/cinema/'); ?>">Cinema</a></li>
	<li class=""><a href="<?php echo home_url('/industry-resource/convenience-store/'); ?>">Convenience Store</a></li>
	<li class=""><a href="<?php echo home_url('/industry-resource/hospitality/'); ?>">Hospitality</a></li>
</ul>