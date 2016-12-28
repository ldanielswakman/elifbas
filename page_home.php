<?php
/* Template Name: Home */ 

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			

			

			<div id="homeGroup1">
				<div id="homeBigText">
				    <?php  echo get_field('big_text'); ?>
				</div>
				<div id="homeSmallText">
				    <?php  echo get_field('small_text'); ?>
				</div>
				<div id="homeImage">
				    <img src="<?php  echo get_field('home_image'); ?>">
				</div>
			</div>
			
			
			
			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
