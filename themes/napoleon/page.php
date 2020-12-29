<?php 
get_header(); 
$thisID = get_the_ID();
while ( have_posts() ) :
  the_post();
?>
<?php get_template_part('templates/page', 'breadcrumbs'); ?>
<section class="innerpage-con-wrap">
  <article class="default-page-con">
    <?php if(have_rows('inhoud')){  ?>
    <?php while ( have_rows('inhoud') ) : the_row();  ?>
    <?php 
      if( get_row_layout() == 'introductietekst' ){ 
      $title = get_sub_field('titel');
      $afbeelding = get_sub_field('afbeelding');
      $mbafbeelding = get_sub_field('mb_afbeelding');
    ?>
    <div class="dfp-promo-module-cntlr">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="dfp-promo-module clearfix">
              <?php 
                if( !empty($title) ) printf('<div><strong class="dfp-promo-module-title block-930">%s</strong></div>', $title); 
                echo '<div class="dfp-plate-one-img-bx">';
                  if( !empty($afbeelding) ){
                    echo cbv_get_image_tag($afbeelding);
                  }
                  if( !empty($mbafbeelding) ){
                    $mbimg_src = cbv_get_image_src($mbafbeelding);
                    echo '<div class="dfp-plate-one-img-inr inline-bg show-sm" style="background: url('.$mbimg_src.');"></div>';
                  }
                echo '</div>';
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php 
      }elseif( get_row_layout() == 'teksteditor' ){ 
      $beschrijving = get_sub_field('fc_teksteditor');
    ?>
    <div class="dfp-text-module-cntlr">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="dfp-text-module block-930 clearfix">
              <?php if( !empty( $beschrijving ) ) echo wpautop($beschrijving); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php }elseif( get_row_layout() == 'afbeelding_tekst' ){ 
      $fc_afbeelding = get_sub_field('fc_afbeelding');
      $imgsrc = cbv_get_image_src($fc_afbeelding, 'dfpageg1');
      $fc_tekst = get_sub_field('fc_tekst');
      $fc_video = get_sub_field('video_url');
      $positie_afbeelding = get_sub_field('positie_afbeelding');
    ?>
    <?php if( $positie_afbeelding == 'right' ): ?>
    <div class="dfp-loyalty-welcome-sec-con-cntlr">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="loyalty-welcome-sec-con-cntlr">
              <div class="loyalty-welcome-sec-con">
                <div class="loyalty-welcome-sec-lft">
                  <div class="loyalty-welcome-sec-fea-img img-div-scale ">
                    <div class="loyalty-welcome-sec-fea-img-inr img-div inline-bg" style="background-image: url(<?php echo $imgsrc; ?>);"></div>
                    <?php if( !empty($fc_video) ): ?>
                    <a href="<?php echo $fc_video; ?>" data-fancybox="gallery" class="overlay-link"></a>
                    <i>
                      <svg class="play-button-svg" width="50" height="50" viewBox="0 0 50 50" fill="#CB9F67">
                        <use xlink:href="#play-button-svg"></use>
                      </svg> 
                    </i>
                    <?php endif; ?>
                  </div>
                </div>
                <div class="loyalty-welcome-sec-rgt">
                  <div class="loyalty-welcome-sec-des">
                    <?php echo wpautop($fc_tekst); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php else:?>
    <div class="fl-dft-lftimg-rgtdes-cntlr">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="fl-dft-lftimg-rgtdes clearfix">
              <div class="fl-dft-lftimg-rgtdes-lft" style="background-image: url(<?php echo $imgsrc; ?>);">
              <a href="https://youtu.be/9No-FiEInLA" data-fancybox="gallery" class="overlay-link"></a>
              <i>
                <svg class="play-button-svg" width="50" height="50" viewBox="0 0 50 50" fill="#CB9F67">
                  <use xlink:href="#play-button-svg"></use>
                </svg> 
              </i>
              </div>
              <div class="fl-dft-lftimg-rgtdes-rgt">
                <?php echo wpautop($fc_tekst); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endif; ?>
    <?php 
      }elseif( get_row_layout() == 'afbeeldingen_slider' ){ 
        $fc_afbeeldingen = get_sub_field('afbeeldingen');
        if( $fc_afbeeldingen ):
    ?>
    <div class="dfp-restaurant-gallery-slider">
      <div class="restaurant-gallery-slider">
        <div class="rgsHolder">
          <div class="dfp-rgsholder">
            <div class="swiper-container restaurantGallerySlider">
              <div class="swiper-wrapper slide1Wrapper">
              <?php 
                foreach( $fc_afbeeldingen as $fcafbeeldingID ): 
                $fcslideImg = !empty($fcafbeeldingID)? cbv_get_image_src( $fcafbeeldingID, 'dftslide' ):''; 
              ?>
                <div class="swiper-slide restaurantGallerySlide">
                  <div class='restaurant-gallery-slide-item'>
                    <div class="inline-bg" style="background: url(<?php echo $fcslideImg; ?>);"></div>
                  </div>
                </div>
                <?php endforeach; ?>
              </div>
            </div>
            <div class="slider-arrows restaurantGallerySliderArrows">
              <div class="swiper-button-prev">
                <i>
                  <svg class="fl-lft-arrow-svg" width="27" height="22" viewBox="0 0 27 22" fill="#CBA068">
                    <use xlink:href="#fl-lft-arrow-svg"></use>
                  </svg> 
                </i>
              </div>
              <div class="swiper-button-next">
                <i>
                  <svg class="fl-rgt-arrow-svg" width="27" height="22" viewBox="0 0 27 22" fill="#CBA068">
                    <use xlink:href="#fl-rgt-arrow-svg"></use>
                  </svg> 
                </i>
              </div>
            </div>
          </div>
        </div>    
      </div>
    </div>
    <?php endif; ?>
  <?php 
    }elseif( get_row_layout() == 'arrangementen' ){
      $fc_arrangID = get_sub_field('fc_arrangementen');
      if( !empty($fc_arrangIDs) ){
        $arrangQuery = new WP_Query(array(
          'post_type' => 'arrangementen',
          'posts_per_page'=> 1,
          'post__in' => array($fc_arrangID)

        ));   
      }else{
        $arrangQuery = new WP_Query(array(
          'post_type' => 'arrangementen',
          'posts_per_page'=> 1,
          'orderby' => 'date',
          'order'=> 'desc',

        ));
      }
      if( $arrangQuery->have_posts() ):
      while($arrangQuery->have_posts()): $arrangQuery->the_post(); 
      $overzicht = get_field('overzicht', get_the_ID());
      $gridImg = !empty($overzicht['afbeelding'])? cbv_get_image_src( $overzicht['afbeelding'], 'agendagrid' ): '';
      $excerpt = !empty($overzicht['kort_beschrijving'])? wpautop( $overzicht['kort_beschrijving']): '';
      $label = !empty($overzicht['etiket'])? '<label>'.$overzicht['etiket'].'</label>': '';
      $price = !empty($overzicht['prijs'])? '<bdi>'.$overzicht['prijs'].'</bdi>':'';
  ?>
    <div class="dfp-lftimg-rtdesc-grid-cntlr">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="dfp-lftimg-rtdesc-grid">
              <div class="dfp-lftimg-rtdesc-lft mHc">
                <div class="dfp-lftimg-rtdesc-lft-img-cntlr">
                  <div class="dfp-lftimg-rtdesc-lft-img inline-bg dft-transition" style="background: url('<?php echo $gridImg; ?>');"> </div>
                  <a class="overlay-link" href="<?php the_permalink(); ?>"></a>
                  <div class="dfp-lftimg-rtdesc-lft-img-rb">
                    <img src="<?php echo THEME_URI; ?>/assets/images/dfp-lftimg-rtdesc-lft-img-rb.png" alt="<?php the_title(); ?>">
                  </div>
                </div>
              </div>
              <div class="dfp-lftimg-rtdesc-rt mHc">
                <div class="dfp-lftimg-rtdesc-rt-desc-cntlr">
                  <div class="dfp-lftimg-rtdesc-rt-desc">
                    <?php echo !empty($overzicht['etiket'])? '<span class="jkpt-cntnt-item-brand nl-right-desc-brand">'.$overzicht['etiket'].'</span>': '';?>
                    <h3 class="jkpt-cntnt-item-title nl-right-desc-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <div class="dfp-lftimg-rtdesc-rt-desc-prize">
                      <span class="price">
                        <span class="woocommerce-Price-amount amount">
                          <?php echo $price; ?>
                        </span>
                      </span>
                    </div>
                    <?php echo $excerpt; ?>
                    <div class="dfp-lftimg-rtdesc-rt-desc-btn">
                      <a href="<?php the_permalink(); ?>">
                        <span>LEES MEER</span>
                        <i>
                          <svg class="dfp-lftimg-rtdesc-icon" width="6" height="8" viewBox="0 0 6 8" fill="#CB9F67">
                            <use xlink:href="#dfp-lftimg-rtdesc-icon"></use> </svg>
                        </i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endwhile;  endif; wp_reset_postdata(); ?>
  <?php 
    }elseif( get_row_layout() == 'getuigenis' ){
      $fc_getuiIDs = get_sub_field('fc_getuigenis');
      if( !empty($fc_getuiIDs) ){
        $count = count($fc_getuiIDs);
        $getuiIDS = ( $count > 1 )? $fc_getuiIDs: $fc_getuiIDs;
        $getuiQuery = new WP_Query(array(
          'post_type' => 'getuigenis',
          'posts_per_page'=> $count,
          'post__in' => $getuiIDS,
          'orderby' => 'rand'

        ));
            
      }else{
        $getuiQuery = new WP_Query(array(
          'post_type' => 'getuigenis',
          'posts_per_page'=> 4,
          'orderby' => 'rand',
          'order'=> 'desc',

        ));
      }
      if( $getuiQuery->have_posts() ):
  ?>
    <div class="dfp-restaurant-testi-slider">
      <div class="rtsHolder">
        <div class="dfp-rtsholder">
          <div class="swiper-container restaurantTestiSlider">
            <div class="swiper-wrapper">
            <?php while($getuiQuery->have_posts()): $getuiQuery->the_post(); ?>
              <div class="swiper-slide restaurantTestiSlide">
                <div class="restaurantTestiSlide-item">
                  <i>
                    <svg class="blockquote-icon-svg" width="44" height="32" viewBox="0 0 44 32" fill="#CB9F67">
                      <use xlink:href="#blockquote-icon-svg"></use> </svg>
                    </i>
                    <h4 class="rti-titlte"><?php the_title(); ?></h4>
                    <?php the_content(); ?>
                  </div>
                </div>
                <?php endwhile; ?>
            </div>
            </div>

            <div class="slider-arrows restaurantTestiSliderArrows">
              <div class="swiper-button-prev">
                <i>
                  <svg class="fl-lft-arrow-svg" width="27" height="22" viewBox="0 0 27 22" fill="#CBA068">
                    <use xlink:href="#fl-lft-arrow-svg"></use>
                  </svg> 
                </i>
              </div>
              <div class="swiper-button-next">
                <i>
                  <svg class="fl-rgt-arrow-svg" width="27" height="22" viewBox="0 0 27 22" fill="#CBA068">
                    <use xlink:href="#fl-rgt-arrow-svg"></use>
                  </svg> 
                </i>
              </div>
            </div>
        </div>
      </div> 
    </div>
    <?php endif; wp_reset_postdata(); ?>
  <?php 
    }elseif( get_row_layout() == 'agenda' ){
      $ag_titel = get_sub_field('fc_titel');
      $ag_tekst = get_sub_field('fc_tekst');
      $fc_agendaIDs = get_sub_field('fc_agenda');
      if( !empty($fc_agendaIDs) ){
        $count = count($fc_agendaIDs);
        $agendaIDS = ( $count > 1 )? $fc_agendaIDs: $fc_agendaIDs;
        $agendaQuery = new WP_Query(array(
          'post_type' => 'agenda',
          'posts_per_page'=> $count,
          'post__in' => $agendaIDS,
          'orderby' => 'rand'

        ));
            
      }else{
        $agendaQuery = new WP_Query(array(
          'post_type' => 'agenda',
          'posts_per_page'=> 4,
          'orderby' => 'rand',
          'order'=> 'desc',

        ));
      }
      
  ?>
    <div class="dfp-nieuws-con-sec">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="np-nieuws-con-sec-ctlr dfp-nieuws-con-sec-cntlr clearfix">

              <div class="np-nieuws-lftsidebar">
                <div class="np-nieuws-lftsidebar-inr">
                  <div class="np-nieuws-lftsidebar-des">
                    <div class="np-nieuws-lftsidebar-des-inr">
                      <div class="np-nieuws-lftsidebar-des-ctlr">
                      <?php 
                        if( !empty($ag_titel) ) printf('<h4 class="np-nieuws-lftsidebar-title">%s</h4>', $ag_titel); 
                        if( !empty($ag_tekst) ) echo wpautop( $ag_tekst );
                      ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php if( $agendaQuery->have_posts() ): ?>
              <div class="np-nieuws-grds-item">
                <div class="np-nieuws-grd-items dfp-np-nieuws-grds-items">
                  <ul class="reset-list clearfix">
                <?php 
                  while($agendaQuery->have_posts()): $agendaQuery->the_post(); 
                  $postID = get_the_ID();
                  $aoverzicht = get_field('overzicht', $postID);
                  $agendagridImg = !empty($aoverzicht['afbeelding'])? cbv_get_image_src( $aoverzicht['afbeelding'], 'dftagenda' ): '';
                  $label = !empty($aoverzicht['etiket'])? '<span class="dfp-ngibd-brnd">'.$aoverzicht['etiket'].'</span>': '';
                  $datum = !empty($aoverzicht['datum'])? '<strong class="dfp-ngibd-time">'.$aoverzicht['datum'].'</strong>': '';
                ?>
                    <li>
                      <div class="np-nieuws-grd-item dfp-np-nieuws-grds-item">
                        <div class="np-nieuws-grd-item-img-ctlr">
                          <a href="<?php the_permalink(); ?>" class="overlay-link"></a>
                          <div class="np-nieuws-grd-item-img inline-bg" style="background: url('<?php echo $agendagridImg; ?>');"></div>
                        </div>
                        <div class="dfp-nieuws-grd-item-btm-desc-cntlr">
                          <div class="dfp-nieuws-grd-item-btm-desc">
                            <?php echo $label; ?>
                            <h3 class="dfp-ngibd-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <?php echo $datum; ?>
                          </div>
                        </div>
                      </div>
                    </li>
                <?php endwhile; ?>
                  </ul>
                </div>
              </div>
              <?php endif; wp_reset_postdata(); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
   <?php 
      }elseif( get_row_layout() == 'nieuws' ){
      $fc_nieuwsIDs = get_sub_field('fc_nieuws');
      if( !empty($fc_nieuwsIDs) ){
        $nieucount = count($fc_nieuwsIDs);
        $nieuwsIDS = ( $nieucount > 1 )? $fc_nieuwsIDs: $fc_nieuwsIDs;
        $nieuwsQuery = new WP_Query(array(
          'post_type' => 'post',
          'posts_per_page'=> $nieucount,
          'post__in' => $nieuwsIDS,
          'orderby' => 'rand'

        ));
            
      }else{
        $nieuwsQuery = new WP_Query(array(
          'post_type' => 'post',
          'posts_per_page'=> 4,
          'orderby' => 'rand',
          'order'=> 'desc',

        ));
      }
    if( $nieuwsQuery->have_posts() ): 
    ?>
    <div class="dfp-np-nieuws-grd-items-sec">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="np-nieuws-grd-items block-954 dfp-np-nieuws-grd-items-in">
              <ul class="reset-list clearfix">
              <?php 
                while($nieuwsQuery->have_posts()): $nieuwsQuery->the_post();
                $gridurl = cbv_get_image_src( get_post_thumbnail_id(get_the_ID()), 'dftnieuws' );
                if( empty($gridurl) ){
                  $gridurl = THEME_URI.'/assets/images/news-item-img-01.jpg';
                }
                $terms = get_the_terms(get_the_ID(), 'category');
                $termNameTag = $gridTag = '';
                if( !empty($terms) ){
                  foreach ($terms as $key => $term) {
                    $termThumID = get_field('icon', $term);
                    $termNameTag = '<a href="'.esc_url( get_term_link( $term ) ).'">'.$term->name.'</a> / ';
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
          </div>
        </div>
      </div>
    </div>
    <?php endif; wp_reset_postdata(); ?>
  <?php 
    }elseif( get_row_layout() == 'poster' ){
      $fc_posterID = get_sub_field('afbeeldingen');
      $fc_videourl = get_sub_field('fc_videourl');
      $fcposter = !empty($fc_posterID)? cbv_get_image_src( $fc_posterID, 'dftposter' ): '';
  ?>
    <div class="dfp-loyalty-welcome-sec">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="dfp-loyalty-welcome-cntlr block-930">
              <div class="loyalty-welcome-sec-fea-img img-div-scale">
                <div class="loyalty-welcome-sec-fea-img-inr img-div inline-bg" style="background-image: url(<?php echo $fcposter; ?>);"></div>
                <?php if( !empty($fc_videourl) ): ?>
                <a href="<?php echo $fc_videourl; ?>" data-fancybox="gallery" class="overlay-link"></a>
                <i>
                  <svg class="play-button-svg" width="50" height="50" viewBox="0 0 50 50" fill="#CB9F67">
                    <use xlink:href="#play-button-svg"></use>
                  </svg> 
                </i>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   <?php 
    }elseif( get_row_layout() == 'restaurant' ){
      $menu_titel = get_sub_field('fc_titel');
      $menuIDs = get_sub_field('fc_restaurant');
      if( !empty($menuIDs) ){
        $menucount = count($menuIDs);
        $menuIDs = ( $menucount > 1 )? $menuIDs: $menuIDs;
        $menuQuery = new WP_Query(array(
          'post_type' => 'restaurant',
          'posts_per_page'=> $menucount,
          'post__in' => $menuIDs,
          'orderby' => 'rand'

        ));
            
      }else{
        $menuQuery = new WP_Query(array(
          'post_type' => 'restaurant',
          'posts_per_page'=> 5,
          'orderby' => 'rand',
          'order'=> 'desc',

        ));
      }
      if( $menuQuery->have_posts() ):
    ?>
    <div class="dfp-restaurant-tab-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="dfp-restaurant-tab-section-cntlr">
              <?php if( !empty($menu_titel) ) printf('<h3 class="dfp-restaurant-tab-section-title">%s</h3>', $menu_titel); ?>
              <div class="fl-tabs clearfix restaurant-tabs dfp-restaurant-tabs">
                <ul class="reset-list clearfix">
                  <?php $i = 1; while($menuQuery->have_posts()): $menuQuery->the_post(); ?>
                  <li><button class="tab-link<?php echo ($i == 1)?' current': ''; ?>" data-tab="tab-<?php echo $i; ?>"><span><?php the_title(); ?></span></button></li>
                  <?php $i++; endwhile; ?>
                </ul>
                </div>
                <?php 
                  $i = 1; while($menuQuery->have_posts()): $menuQuery->the_post(); 
                  $menuTitel = get_field('titel', get_the_ID());
                  $menuPrijs = get_field('prijs', get_the_ID());
                  $kortbesch = get_field('kort_beschrijving', get_the_ID());
                  $beschrijving = get_field('beschrijving', get_the_ID());
                  $thumID = get_post_thumbnail_id(get_the_ID());
                  $menuImg = !empty($thumID)? cbv_get_image_src( $thumID, 'restaugrid' ): '';

                ?>
                <div id="tab-<?php echo $i; ?>" class="fl-tab-content<?php echo ($i == 1)?' current': ''; ?>">
                  <div class="restaurant-tab-con">
                    <div class="restaurant-tab-con-fea-box">
                      <div class="inline-bg restaurant-tab-con-fea-box-img" style="background: url(<?php echo $menuImg; ?>);"></div>
                      <div class="restaurant-tab-con-fea-box-des">
                      <?php 
                        if( !empty($menuTitel) ) printf('<h4 class="rtcfbd-title">%s</h4>', $menuTitel); 
                        if( !empty($kortbesch) ) echo wpautop( $kortbesch ); 
                      ?>
                        <div class="rtcfbd-price">
                          <span class="price">
                            <span class="woocommerce-Price-amount amount">
                              <?php if( !empty($menuPrijs) ) printf('<bdi>%s</bdi>', $menuPrijs); ?>
                            </span>
                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="restaurant-tab-con-des">
                      <?php if( !empty($beschrijving) ) echo wpautop( $beschrijving ); ?>
                    </div>
                  </div>
                </div>
                <?php $i++; endwhile; ?>
              </div>
            </div>
          </div>
        </div>
    </div>
    <?php endif; wp_reset_postdata(); ?>
  <?php 
  }elseif( get_row_layout() == 'fcknop' ){
    $rode_knop = get_sub_field('rode_knop');
    $witte_knop = get_sub_field('witte_knop');
  ?>
  <div class="dfp-text-module-cntlr">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="dfp-text-module block-930 clearfix">
            <div class="dfp-text-module-btn">
            <?php 
              if( is_array( $rode_knop ) &&  !empty( $rode_knop['url'] ) ){
                printf('<a class="fl-tsprnt-btn dfp-tmb2" href="%s" target="%s">%s</a>', $rode_knop['url'], $rode_knop['target'], $rode_knop['title']); 
              }
              if( is_array( $witte_knop ) &&  !empty( $witte_knop['url'] ) ){
                printf('<a class="fl-tsprnt-btn" href="%s" target="%s">%s</a>', $witte_knop['url'], $witte_knop['target'], $witte_knop['title']); 
              }
            ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php 
  }elseif( get_row_layout() == 'downloads' ){
    $pdf_titel = get_sub_field('fc_titel');
    $pdf_tekst = get_sub_field('fc_tekst');
    $fc_pdfs = get_sub_field('fc_pdfs');
  ?>
  <div class="dfp-text-module-cntlr">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="dfp-text-module block-930 clearfix">
            <?php 
              if( !empty($menuTitel) ) printf('<h6>%s</h6>', $pdf_titel); 
              if( !empty($pdf_tekst) ) echo wpautop( $pdf_tekst ); 
              if( $fc_pdfs ):
            ?>
            <div class="dfp-download-pdf">
              <?php foreach( $fc_pdfs as $fc_pdf ): ?>
              <div class="dfp-download-pdf-item-cntlr">
                <div class="dfp-download-pdf-item">
                  <div class="dfp-download-pdf-item-img">
                    <img src="<?php echo THEME_URI; ?>/assets/images/dfp-download-item-pdf-icon.png" alt="">
                  </div>
                  <h6 class="dfp-download-pdf-item-type">Book:</h6>
                  <?php if( !empty($fc_pdf['titel']) ) printf('<h3 class="dfp-download-pdf-item-title">%s</h3>',$fc_pdf['titel']); ?>
                  <?php if( !empty($fc_pdf['hetdossier']) ): ?>
                  <div class="dfp-download-pdf-item-btn dfp-lftimg-rtdesc-rt-desc-btn">
                    <a href="<?php echo $fc_pdf['hetdossier']; ?>" download>
                      <span><?php echo !empty($fc_pdf['knop_tekst'])? $fc_pdf['knop_tekst']:'DOWNLOAD';?></span>
                      <i>
                        <svg class="dfp-lftimg-rtdesc-icon" width="6" height="8" viewBox="0 0 6 8" fill="#CB9F67">
                        <use xlink:href="#dfp-lftimg-rtdesc-icon"></use> </svg>
                      </i>
                    </a>
                  </div>
                  <?php endif; ?>
                </div>
              </div>
            <?php endforeach; ?>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php 
  }elseif( get_row_layout() == 'tafel' ){
    $fctable = get_sub_field('fc_tafel');
  ?>
    <div class="dfp-tbl-wrap-sec">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="dfp-tbl-wrap-cntlr">
              <?php cbv_table( $fctable); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php }?>
    <?php endwhile; ?>
    <?php }else{ ?>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
    <?php } ?>

  </article>
</section>
<?php get_template_part('templates/openhours'); ?>
<?php 
endwhile; 
get_footer(); 
?>