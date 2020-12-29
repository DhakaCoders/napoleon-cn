<?php
get_header();
$thisID = get_the_ID();
$overzicht = get_field('overzicht', get_the_ID());
$blokImg = !empty($overzicht['afbeelding'])? cbv_get_image_src( $overzicht['afbeelding'], 'arrgblok' ): '';
?>
<?php get_template_part('templates/page', 'breadcrumbs'); ?>
<section class="np-ad-package-sec">
  <div class="np-ad-package-holder">
    <div class="np-ad-package-inr">
      <div class="np-ad-package-rgt">
        <div class="np-ad-package-rgt-img inline-bg" style="background: url('<?php echo $blokImg; ?>');"></div>
      </div>
      <div class="np-ad-package-lft">
        <h2 class="np-ad-package-lft-title"><?php echo get_the_title(get_the_ID()); ?></h2>
        <div class="np-ad-package-price">
          <span class="woocommerce-Price-amount amount">
            <?php if( !empty($overzicht['prijs']) ) printf('<bdi>%s</bdi>', $overzicht['prijs']); ?>
          </span>
        </div>
        <?php 
          if( !empty($overzicht['beschrijving']) ) {
            echo wpautop( $overzicht['beschrijving'] ); 
          }
          elseif(empty($overzicht['beschrijving'])){
            if(empty($overzicht['kort_beschrijving']) ) echo wpautop( $overzicht['kort_beschrijving'] );
          }
        ?>
      </div>
    </div>
  </div>
</section>
<?php  
  $blok_tonenverbergen_1 = get_field('blok_tonenverbergen_1', $thisID);
  if($blok_tonenverbergen_1): 
    $blok1 = get_field('blok_inhoud_1', $thisID);
?>
<section class="np-ad-btm-package-sec">
  <div class="np-ad-btm-package-holder">
    <div class="np-ad-btm-package-inr">
      <?php 
        if( $blok1 ): 
        $blokImg1 = !empty($blok1['afbeelding'])? cbv_get_image_src( $blok1['afbeelding'], 'arrgblok' ): '';
      ?>
      <div class="np-ad-btm-package-lft">
        <div class="np-ad-btm-package-lft-img inline-bg" style="background: url('<?php echo $blokImg1; ?>');"></div>
      </div>
      <div class="np-ad-btm-package-rgt">
        <?php 
          if( !empty($blok1['titel']) ) printf('<h3 class="np-ad-btm-package-rgt-title">%s</h3>', $blok1['titel']); 
          if( !empty($blok1['beschrijving']) ) echo wpautop( $blok1['beschrijving'] ); 
        ?>
      </div>
      <?php endif; ?>
    </div>
  </div>
</section>
<?php endif; ?>
<?php  
  $blok_tonenverbergen_2 = get_field('blok_tonenverbergen_2', $thisID);
  if($blok_tonenverbergen_2): 
    $blok_col1 = get_field('blok_col_1', $thisID);
    $blok_col2 = get_field('blok_col_2', $thisID);
?>
<section class="np-ad-expert-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="np-ad-expert-sec-inr clearfix">
          <div class="np-ad-expert-rgt mHc">
          <?php 
            if( $blok_col2 ):
              if( !empty($blok_col2['titel']) ) printf('<h5 class="np-ad-expert-rgt-title">%s</h5>', $blok_col2['titel']);  
              if( !empty($blok_col2['beschrijving']) ) echo wpautop($blok_col2['beschrijving'] );  
            endif; 
          ?>
          </div>
          <div class="np-ad-expert-lft mHc">
          <?php 
            if( $blok_col1 ):
              if( !empty($blok_col1['titel']) ) printf('<h5 class="np-ad-expert-lft-title">%s</h5>', $blok_col1['titel']);  
              if( !empty($blok_col1['beschrijving']) ) echo wpautop($blok_col1['beschrijving'] );  
            endif; 
          ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<div class="np-ad-ctlr">
<?php  
  $blok_tonenverbergen_slider = get_field('blok_tonenverbergen_slider', $thisID);
  if($blok_tonenverbergen_slider): 
    $imgsliders = get_field('afbeelding_sliders', $thisID);
?>
  <section class="restaurant-gallery-slider">
    <div class="rgsHolder">
      <div class="np-ad-rgsholder-inr">
        <?php if( $imgsliders ): ?>
        <div class="swiper-container restaurantGallerySlider">
          <div class="swiper-wrapper slide1Wrapper">
            <?php 
              foreach( $imgsliders as $imgslideID ): 
              $slideImg = !empty($imgslideID)? cbv_get_image_src( $imgslideID, 'cslider' ): ''; 
            ?>
            <div class="swiper-slide restaurantGallerySlide">
              <div class='restaurant-gallery-slide-item'>
                <div class="inline-bg" style="background: url(<?php echo $slideImg; ?>);"></div>
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
        <?php endif; ?>
      </div>
    </div>    
  </section>
<?php endif; ?>
<?php 
$fc_arrang = get_field('fc_arrangementen', 'options');
if( $fc_arrang ):
?>
  <section class="np-ad-contact-sec">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="np-ad-contact-sec-inr">
            <div class="contact-form-wrp clearfix">
              <div class="contact-form-dsc">
              <?php 
                if( !empty($fc_arrang['titel']) ) printf('<h5 class="contact-form-dsc-title">%s</h5>', $fc_arrang['titel']);
                if( !empty($fc_arrang['beschrijving']) ) echo wpautop( $fc_arrang['beschrijving'] ); 
              ?>
              </div>
              <div class="wpforms-container">
              <?php if( !empty($fc_arrang['form_shortcode']) ) echo do_shortcode( $fc_arrang['form_shortcode'] ); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>
<?php  
  $blok_tonenverbergen_testi = get_field('blok_tonenverbergen_getuigenis', $thisID);
  if($blok_tonenverbergen_testi): 
    $getuigenissen = get_field('getuigenissen', $thisID);
    $getuiIDs = $getuigenissen['selecteer_getuigenis'];
?>
  <section class="restaurant-testi-slider">
    <div class="rtsHolder">
      <div class="np-casino-rtstestiholder-inr">
          <?php 
            if( !empty($getuiIDs) ){
              $count = count($getuiIDs);
              $getIDS = ( $count > 1 )? $getuiIDs: $getuiIDs;
              $getQuery = new WP_Query(array(
                'post_type' => 'getuigenis',
                'posts_per_page'=> $count,
                'post__in' => $getIDS,
                'orderby' => 'rand'

              ));
                  
            }else{
              $getQuery = new WP_Query(array(
                'post_type' => 'getuigenis',
                'posts_per_page'=> 3,
                'orderby' => 'rand',
                'order'=> 'desc',

              ));
            }
            if( $getQuery->have_posts() ):
          ?>
        <div class="swiper-container restaurantTestiSlider">
          <div class="swiper-wrapper">
          <?php 
            while($getQuery->have_posts()): $getQuery->the_post(); 
          ?>
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
        <?php endif; wp_reset_postdata(); ?>
      </div>
    </div>    
  </section>
<?php endif; ?>
</div>
<?php get_template_part('templates/openhours'); ?>
<?php
get_footer();
?>