<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package elifbas
 */

?>

	</div><!-- #content -->

	<div id="expandBrowser">
	    <div id="expandBrowserInner">
	        Please expand your browser.
	    </div>
	    
	</div>
	

	<footer id="colophon" class="site-footer" role="contentinfo">
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<style type="text/css">
	span#siteLogo {
		background-image: url('<?php echo get_field('logo_black', 115); ?>');
	}
	body.home span#siteLogo {
		background-image: url('<?php echo get_field('logo_white', 115); ?>');
	}
</style>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-87949698-1', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>
