	   </div><!-- #content -->
    </div>
  </nav><!-- Nav end -->

  <div class="row"><!-- Next page link -->
    <div class="col-xs-5 col-sm-2 u-aligncenter u-leftshadow">
    </div>
    <div class="col-xs-7 col-sm-3 u-leftshadow u-p-content">
    </div>
    <div class="col-xs-12 col-sm-7 u-leftshadow u-leftshadow--extra u-p-content-large">
      <?php
      $template = get_post_meta( $post->ID, '_wp_page_template', true );
      if ($template !== 'page_home.php') {

        $locations = get_nav_menu_locations();
        $menu = wp_get_nav_menu_object( $locations['primary'] );
        $menuitems = wp_get_nav_menu_items( $menu->term_id, array() );
        $i = 0;
        $is_next_page = false;

        foreach( $menuitems as $item) {
          $id = get_post_meta( $item->ID, '_menu_item_object_id', true );
          $page = get_page( $id );
          $link = get_page_link( $id );

          if($is_next_page === true) {
            echo '<a href="' . $link . '" class="button">' . pll__('next') . ': ' . $page->post_title . '</a>';
            break;
          }
          if($id == $post->ID) { $is_next_page = true; }

          $i++;
        } 
        
      }
      ?>
    </div>
  </div>

	<footer id="colophon" class="site-footer" role="contentinfo">

  <div class="row"><!-- Nav start -->
    <div class="col-xs-5 col-sm-2 u-aligncenter u-leftshadow">
    </div>
    <div class="col-xs-7 col-sm-3 u-leftshadow u-p-content">
    </div>
    <div class="col-xs-12 col-sm-7 u-leftshadow u-leftshadow--extra" style="height: 4rem;">
      <a href="http://www.ldaniel.eu" target="_blank" class="u-dogear--br">
        <span class="text">
          <span style="opacity: 0.4; font-size: 0.6em;">designed by</span><br>
          ldaniel.eu
        </span>
      </a>
    </div>
  </div>
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-87949698-1', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>
