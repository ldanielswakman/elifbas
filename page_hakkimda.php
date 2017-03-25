<?php
/* Template Name: Hakkimda */ 

get_header(); ?>

<div class="row">

	<?php // Title ?>
  <div class="col-xs-12 col-sm-2 u-leftshadow"></div>
  <div class="col-xs-12 col-sm-3 u-leftshadow"></div>
  <div class="col-xs-12 col-sm-7 u-leftshadow u-leftshadow--extra u-p-content u-p-content-large">
  	<h1 class="h1--curl<?php echo rand(1, 4); ?>"><?php echo $post->post_title ?></h1>
	</div>

  <div class="col-xs-12 col-sm-2 u-leftshadow"></div>
  <div class="col-xs-12 col-sm-3 u-leftshadow u-leftshadow--extra u-p-content u-pb6">
  	<div class="u-sticky">
  		<figure><img src="<?php echo get_template_directory_uri() ?>/img/portrait.jpg" alt="" /></figure>
  		<?php  echo get_field('info'); ?>
		</div>
  </div>

  <div class="col-xs-12 col-sm-7 u-leftshadow u-leftshadow--extra u-p-content-large u-pb6">

  	<?php  echo get_field('text'); ?>

	</div>

</div>

<?php
get_sidebar();
get_footer();
