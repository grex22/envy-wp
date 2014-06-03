<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php wp_head(); ?>

  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,300,600' rel='stylesheet' type='text/css'>
  <link href="<?php bloginfo('template_url'); ?>/assets/css/font-awesome.css" rel="stylesheet">
  <!-- GAnalytics Tracking -->
  <script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	ga('create', 'UA-16907549-4', 'envysion.com');
	ga('send', 'pageview');
	
  </script>
  <!-- Eloqua Tracking -->
  <script type="text/javascript">
    var _elqQ = _elqQ || [];
    _elqQ.push(['elqSetSiteId', '1628470252']);
    _elqQ.push(['elqTrackPageView']);
    
    (function () {
        function async_load() {
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;
            s.src = '//img.en25.com/i/elqCfg.min.js';
            var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
        }
        if (window.addEventListener) window.addEventListener('DOMContentLoaded', async_load, false);
        else if (window.attachEvent) window.attachEvent('onload', async_load); 
    })();
  </script>
  <script type='text/javascript'><!--//
	var timerId = null, timeout = 5;
	//--></script>
	<script type='text/javascript'><!--//
	function WaitUntilCustomerGUIDIsRetrieved() {
	if (!!(timerId)) {
		if (timeout == 0) {
	return;
	}
	if (typeof this.GetElqCustomerGUID === 'function') {
			document.forms["webdemorequest"].elements["elqCustomerGUID"].value = GetElqCustomerGUID();
	return;
	}
	timeout -= 1;
	}
	timerId = setTimeout("WaitUntilCustomerGUIDIsRetrieved()", 500);
	return;
	}
	window.onload = WaitUntilCustomerGUIDIsRetrieved;
	_elqQ.push(['elqGetCustomerGUID']);
	//--></script>

</head>
