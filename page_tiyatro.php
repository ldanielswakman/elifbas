<?php
/* Template Name: Tiyatro */ 

get_header(); ?>

<div class="row">

	<?php // Title ?>
  <div class="col-xs-12 col-sm-2 u-leftshadow"></div>
  <div class="col-xs-12 col-sm-3 u-leftshadow"></div>
  <div class="col-xs-12 col-sm-7 u-leftshadow u-leftshadow--extra u-p-content u-p-content-large">
  	<h1 class="h1--curl<?php echo rand(1, 4); ?>"><?php echo $post->post_title ?></h1>
	</div>

</div>

<?php if( have_rows('oyunlar') ): ?>

	<?php while( have_rows('oyunlar') ): the_row(); ?>

		<div class="row">

		 	<div class="col-xs-12 col-sm-2 u-leftshadow"></div>
	    <div class="col-xs-12 col-sm-3 u-leftshadow u-leftshadow--extra u-p-content u-pb1">
	    	<div class="u-sticky">
		    	<h2><?php echo get_sub_field('title'); ?></h2>
		    	<?php echo get_sub_field('detail'); ?>
	    	</div>
	    </div>

	    <div class="col-xs-12 col-sm-7 u-leftshadow u-leftshadow--extra u-p-content-large u-pb1">

				<img src="<?php echo get_sub_field('image'); ?>" alt="" />

				<?php echo get_sub_field('text'); ?>

	  	</div>

		</div>

		<div class="row">

		 	<div class="col-xs-12 col-sm-2 u-leftshadow"></div>
	    <div class="col-xs-12 col-sm-3 u-leftshadow u-p-content"></div>

	    <div class="col-xs-12 col-sm-7 u-leftshadow u-leftshadow--extra u-p-content-large">

				<div class="u-aligncenter u-mv3" style="max-width: 36em;">
					<img src="<?php echo get_template_directory_uri() ?>/img/separator.svg" alt="" style="width: 300px; max-width: 70vw; opacity: 0.4;" />
				</div>

	  	</div>

		</div>

	<?php endwhile; ?>

<?php endif; ?>

<?php
get_sidebar();
get_footer();
