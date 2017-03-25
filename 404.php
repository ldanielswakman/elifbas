<?php get_header(); ?>

<div class="row">

  <?php // Title ?>
  <div class="col-xs-12 col-sm-2 u-leftshadow"></div>
  <div class="col-xs-12 col-sm-3 u-leftshadow"></div>
  <div class="col-xs-12 col-sm-7 u-leftshadow u-leftshadow--extra u-p-content u-p-content-large">
  </div>

  <div class="col-xs-12 col-sm-2 u-leftshadow"></div>
  <div class="col-xs-12 col-sm-3 u-leftshadow u-leftshadow--extra u-p-content u-pb6">
  </div>

  <div class="col-xs-12 col-sm-7 u-leftshadow u-leftshadow--extra u-p-content-large u-pb6">

    <h2><?php pll_e('page_not_found') ?></h2>

    <a href="<?php echo home_url() ?>" class="button u-mt2"><?php pll_e('return_home') ?></a>

  </div>

</div>

<?php
get_footer();
