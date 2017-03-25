<?php
/* Template Name: Iletisim */

get_header(); ?>

<div class="row">

	<?php // Title ?>
  <div class="col-xs-12 col-sm-2 u-leftshadow"></div>
  <div class="col-xs-12 col-sm-3 u-leftshadow"></div>
  <div class="col-xs-12 col-sm-7 u-leftshadow u-leftshadow--extra u-p-content u-p-content-large">
  	<h1 class="h1--curl<?php echo rand(1, 4); ?>"><?php echo $post->post_title ?></h1>
	</div>

  <div class="col-xs-12 col-sm-2 u-leftshadow"></div>
  <div class="col-xs-12 col-sm-3 u-leftshadow u-p-content"></div>

  <div class="col-xs-12 col-sm-7 u-leftshadow u-leftshadow--extra u-p-content-large">

		<?php if( have_rows('item') ): while( have_rows('item') ): the_row(); ?>
			<div class="u-flex-row u-mv05">
		    <img src="<?php echo get_sub_field('image'); ?>" alt="" class="u-w3 u-h3 u-mr1" />
        <h2 style="margin-top: 0.5rem;"><?php echo get_sub_field('label'); ?></h2>
			</div>
		<?php endwhile; endif; ?>

	</div>

</div>

<?php
get_sidebar();
get_footer();
