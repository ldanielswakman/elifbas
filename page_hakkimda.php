<?php
/* Template Name: Hakkimda */ 

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			

			
<div id="headerHakkimdaContainer">
    <h1 id='headerHakkimda'><?php echo $post->post_title ?></h1>
</div>




<div id="hakkimdaContent" class="">
		
	<span id='hakkimdaInfo'>
		<?php  echo get_field('info'); ?>
<br/>
	</span>
	<?php  echo get_field('text'); ?>

</div>
		



<div id="hakkimdaBrush1" class="slowScroll">
		<img src="<?php bloginfo('template_directory') ?>/img/brush-hakkimda-1.jpg">
</div>

<div id="hakkimdaBrush2" class="slowScroll">
		<img src="<?php bloginfo('template_directory') ?>/img/brush-hakkimda-2.jpg">
</div>	
			
			
			
			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
