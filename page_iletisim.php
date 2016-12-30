<?php
/* Template Name: Iletisim */ 

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			


	





<div id="iletisimContent" class="">

<div id="iletisimInner">
   
    <h1 id='headerIletisim'><?php echo $post->post_title ?></h1>


		
	<?php if( have_rows('item') ): ?>


	<?php while( have_rows('item') ): the_row(); ?>

		<div class="itelisimItem">

			    <img src="<?php echo get_sub_field('image'); ?>"> <br/>
			    <?php echo get_sub_field('label'); ?>

		</div>

	<?php endwhile; ?>

	</ul>

<?php endif; ?>

</div>

</div>
			
			
			
			
			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
