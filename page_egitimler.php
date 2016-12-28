<?php
/* Template Name: Egitimler */ 

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			

			
<div id="headerEgitimlerContainer">
    <h1 id='headerEgitimler'><?php echo $post->post_title ?></h1>
</div>




<div id="egitimlerContent" class="">
				

<?php if( have_rows('egitimler') ): ?>


	<?php while( have_rows('egitimler') ): the_row(); ?>

		<div class="egitim">

		<div class="egitimNumber">
		    <img src="<?php echo get_sub_field('number_image'); ?>">
		</div>

		<div class="egitimColumn2">
		    <div class="egitimHeader">
			    <?php echo get_sub_field('header'); ?>
			</div>

			<div class="egitimDescription">
			    <?php echo get_sub_field('description'); ?>
			</div>

			<?php if(get_sub_field('detail_button')){ ?>

			<div class="egitimDetailButton">
				<img src="<?php echo get_sub_field('detail_button'); ?>">
			</div>
			
			<div class="egitimDetail">
			    <?php echo get_sub_field('detail'); ?>
			</div>

			<?php }  ?>

		</div>

		</div>

	<?php endwhile; ?>

	</ul>

<?php endif; ?>


</div>
		
<div id="egitimlerBrush1" class="slowScroll">
		<img src="<?php bloginfo('template_directory') ?>/img/brush-egitimler-1.jpg">
</div>

<div id="egitimlerBrush2" class="slowScroll">
		<img src="<?php bloginfo('template_directory') ?>/img/brush-egitimler-2.jpg">
</div>
		
			
			
			
			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
