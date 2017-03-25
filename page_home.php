<?php
/* Template Name: Home */ 

get_header(); ?>

<div class="row">

  <div class="col-xs-12 col-sm-2 u-leftshadow"></div>
  <div class="col-xs-12 col-sm-3 u-leftshadow u-leftshadow--extra u-p-content u-pt1">

		<?php echo get_field('small_text'); ?>

  </div>
  <div class="col-xs-12 col-sm-7 u-leftshadow u-leftshadow--extra u-pt1 u-ph0">

  	<img src="<?php  echo get_field('home_image'); ?>" alt="" /></figure>

	</div>
</div>

<?php
get_sidebar();
get_footer();
