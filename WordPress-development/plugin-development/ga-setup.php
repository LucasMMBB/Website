<?php
/*
Plugin Name: Google analysis helper
Plugin URI: welcometolucs.com
Description: Adds a Google analytics trascking code to the <head> of your theme, by hooking to wp_head.
Author: Maoxu Liu
Version: 1.0
 */

function wpmudev_google_analytics() { ?>
	<!--
		Add your script below 
	-->
	<!-- Modification starts here -->
	<script>
		(function(i, s, o, g, r, a, m) {
		    i['GoogleAnalyticsObject'] = r;
		    i[r] = i[r] || function() {
		        (i[r].q = i[r].q || []).push(arguments)
		    }, i[r].l = 1 * new Date();
		    a = s.createElement(o),
		        m = s.getElementsByTagName(o)[0];
		    a.async = 1;
		    a.src = g;
		    m.parentNode.insertBefore(a, m)
		})(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

		ga('create', 'UA-77357825-4', 'auto');
		ga('send', 'pageview');
	</script>
	<!-- Modification ends here -->

<?php }
add_action( 'wp_head', 'wpmudev_google_analytics', 10 );