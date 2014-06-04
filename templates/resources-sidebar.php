<?php if ( ! is_page('resources') ) : ?>
	<a href="<?php echo home_url('/resources/'); ?>" class="cta-btn medium block primary"><i class="fa fa-caret-square-o-left"></i> Overview</a>
<?php endif; ?>
<h4>View by Industry:</h4>
<ul class="menu">
	<li class=""><a href="<?php echo home_url('/industry-resource/retail/'); ?>">Retail</a></li>
	<li class=""><a href="<?php echo home_url('/industry-resource/restaurant/'); ?>">Restaurant</a></li>
	<li class=""><a href="<?php echo home_url('/industry-resource/cinema/'); ?>">Cinema</a></li>
	<li class=""><a href="<?php echo home_url('/industry-resource/convenience-store/'); ?>">Convenience Store</a></li>
	<li class=""><a href="<?php echo home_url('/industry-resource/hospitality/'); ?>">Hospitality</a></li>
</ul>