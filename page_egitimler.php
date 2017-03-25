<?php
/* Template Name: Egitimler */ 

get_header(); ?>

<div class="row">

	<?php // Title ?>
  <div class="col-xs-12 col-sm-2 u-leftshadow"></div>
  <div class="col-xs-12 col-sm-3 u-leftshadow"></div>
  <div class="col-xs-12 col-sm-7 u-leftshadow u-p-content u-p-content-large">
  	<h1 class="h1--curl<?php echo rand(1, 4); ?>"><?php echo $post->post_title ?></h1>
	</div>

</div>

<?php if( have_rows('egitimler') ): ?>

	<?php $count = 1; while( have_rows('egitimler') ): the_row(); ?>

		<div class="row">

		 	<div class="col-xs-12 col-sm-2 u-leftshadow"></div>
	    <div class="col-xs-12 col-sm-3 u-leftshadow u-p-content u-aligncenter">
	    	<h2><span class="circle" style="transform: scale(1.<?php echo rand(1, 4) / 2; ?>) rotate(<?php echo rand(1, 360); ?>deg);"></span><?php echo romanic_number($count, true) ?></h2>
	    </div>

	    <div class="col-xs-12 col-sm-7 u-leftshadow u-p-content-large u-pb4">

		    <h3><?php echo get_sub_field('header'); ?></h3>

		    <?php echo get_sub_field('description'); ?>

				<?php if(get_sub_field('detail')) : ?>

					<div class="detail-wrapper">

						<div class="detail">
				    	<?php echo get_sub_field('detail'); ?>
			    	</div>

						<a href="javascript:void(0)" class="button js-detail-toggle-button">
							<span class="more"><?php pll_e('detail_open') ?></span>
							<span class="less"><?php pll_e('detail_close') ?></span>
						</a>

					</div>

				<?php endif; ?>

	  	</div>

		</div>

	<?php $count++; endwhile; ?>

<?php endif; ?>

<?php
get_sidebar();
get_footer();
