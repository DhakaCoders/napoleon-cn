<?php
get_header();
$pageID = get_option( 'page_for_posts' );
$titel = get_field('titel', $pageID);
$beschrijving = get_field('beschrijving', $pageID);
global $wp_query;
?>
<section class="np-nieuws-con-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="np-nieuws-con-sec-ctlr clearfix">
          <div class="np-nieuws-lftsidebar">
            <div class="np-nieuws-lftsidebar-inr">
              <div class="np-nieuws-lftsidebar-des">
                <div class="np-nieuws-lftsidebar-des-inr">
                  <div class="np-nieuws-lftsidebar-des-ctlr">
                    <?php 
                      if( !empty($titel) ) 
                        printf('<h2 class="np-nieuws-lftsidebar-title">%s</h2>', $titel);
                      else
                        printf('<h2 class="np-nieuws-lftsidebar-title">%s</h2>', get_the_title($pageID));

                      if( !empty($beschrijving) ) echo wpautop($beschrijving);
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="np-nieuws-grds-item">
            <div class="np-nieuws-grd-items">
              <ul class="reset-list clearfix">
              <?php 
                 while ( have_posts() ) : the_post();
                  $gridurl = cbv_get_image_src( get_post_thumbnail_id(get_the_ID()), 'postgrid' );
                  if( empty($gridurl) ){
                    $gridurl = THEME_URI.'/assets/images/news-item-img-01.jpg';
                  }
                  $terms = get_the_terms(get_the_ID(), 'category');
                  $termNameTag = $gridTag = '';
                  if( !empty($terms) ){
                    foreach ($terms as $key => $term) {
                      $termThumID = get_field('icon', $term);
                      $termNameTag = '<a>'.$term->name.'</a> / ';
                    }

                  }
                  if( !empty($termThumID) ){
                    $gridTag = cbv_get_image_tag($termThumID);
                  } 
              ?> 
                <li>
                  <div class="np-nieuws-grd-item">
                    <div class="np-nieuws-grd-item-img-ctlr">
                      <a href="<?php the_permalink(); ?>" class="overlay-link"></a>
                      <div class="np-nieuws-grd-item-img inline-bg" style="background: url('<?php echo $gridurl; ?>');"></div>
                    </div>
                    <div class="np-nieuws-grd-item-des">
                      <i><?php echo $gridTag; ?></i>
                      <span><?php echo $termNameTag; ?><?php echo get_the_date('d-m-Y'); ?></span>
                      <h6 class="np-ngid-title mHc">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                      </h6>
                    </div>
                  </div>
                </li>
                <?php endwhile; ?>
              </ul>
            </div>
            <div class="fl-pagination-ctlr">
          <?php
            $big = 999999999; // need an unlikely integer
            $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;

            echo paginate_links( array(
              'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
              'type'      => 'list',
              'prev_text' => __('<span>PREVIOUS</span><i><svg class="fl-pgntn-lft-arrow-svg" width="20" height="16" viewBox="0 0 20 16" fill="#CBA068"><use xlink:href="#fl-pgntn-lft-arrow-svg"></use></svg></i>'),
              'next_text' => __('<span>NEXT</span><i><svg class="fl-pgntn-rgt-arrow-svg" width="20" height="16" viewBox="0 0 20 16" fill="#CBA068"><use xlink:href="#fl-pgntn-rgt-arrow-svg"></use></svg></i>'),
              'format'    => '?paged=%#%',
              'current'   => $current,
              'total'     => $wp_query->max_num_pages
            ) );
          ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_template_part('templates/newslater'); ?>
<?php
get_footer();
?>