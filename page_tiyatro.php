<?php
/* Template Name: Tiyatro */ 

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			

			
<div id="headerTiyatroContainer">
    <h1 id='headerTiyatro'><?php echo $post->post_title ?></h1>
</div>




<div id="tiyatroContent" class="">
		
	
	<?php if( have_rows('oyunlar') ): ?>


	<?php while( have_rows('oyunlar') ): the_row(); ?>

		<div class="oyun">

		<div class="oyunColumnLeft" style="background-image: url('<?php echo get_sub_field('brush'); ?>')">
		  <span class="oyunTitle"><?php echo get_sub_field('title'); ?></span>  
		  <span class="oyunDetail"><?php echo get_sub_field('detail'); ?></span>  
		</div>

		<div class="oyunColumnRight">
		    <span class="oyunText"><?php echo get_sub_field('text'); ?></span>  
		  <span class="oyunImage"><img src="<?php echo get_sub_field('image'); ?>"></span>  
		</div>
		

		</div>

	<?php endwhile; ?>

	</ul>

<?php endif; ?>

</div>





<div id="tiyatroBrush2" class="slowScroll">
		<img src="<?php bloginfo('template_directory') ?>/img/brush-tiyatro-2.jpg">
</div>		

<div id="tiyatroBrush3" class="slowScroll">
		<img src="<?php bloginfo('template_directory') ?>/img/brush-tiyatro-3.jpg">
</div>		
			
			
			
			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
