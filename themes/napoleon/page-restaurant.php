<?php
/*
Template Name: Restaurant

*/
get_header();
$thisID = get_the_ID();
?>
<?php get_template_part('templates/page', 'breadcrumbs'); ?>

<?php  
  $introsec = get_field('introsec', $thisID);
  if($introsec):  
?>
<section class="restaurant-page-entry-hdr-sec">
  <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="restaurant-page-entry-hdr">
		<?php 
			if( !empty($introsec['titel']) ) printf('<h2 class="rpeh-title">%s</h2>', $introsec['titel']); 
			if( !empty($introsec['beschrijving']) ) echo wpautop( $introsec['beschrijving'] );
			$intor_knop = $introsec['knop']; 
			if( is_array( $intor_knop ) &&  !empty( $intor_knop['url'] ) ){
				printf('<div class="goToform"><a href="%s" target="%s">%s</a></div>', $intor_knop['url'], $intor_knop['target'], $intor_knop['title']); 
			}
		?>
          </div>
        </div>
      </div>
  </div>    
</section>
<?php endif; ?>
<?php  
  $mrestaurant = get_field('mrestaurant', $thisID);
  if($mrestaurant): 
  	$menuIDs = $mrestaurant['selecteer_restaurant'];
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
<section class="restaurant-tab-section">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="">
              <div class="fl-tabs clearfix restaurant-tabs">
                <div class="swiper-container xsRestaurantTabsSlider">
                <ul class="reset-list clearfix swiper-wrapper">
	        	  <?php $i = 1; $j = 0; while($menuQuery->have_posts()): $menuQuery->the_post(); ?>
                  <li class="swiper-slide xsRestaurantTabsSliderItem" 
                  data-tab="tab-<?php echo $i; ?>"
                  data-slide="<?php echo $j; ?>">
                    <button class="tab-link<?php echo ($i == 1)?' current': ''; ?>" data-tab="tab-<?php echo $i; ?>"><span><?php the_title(); ?></span></button></li>
                  <?php $i++; $j++; endwhile; ?>
                </ul>
              </div>
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
                    <div class="rtcd-btn-cntlr goToform">
                      <a class="fl-red-center-btn" href="#">Boek uw tafel</a>
                    </div>
                  </div>
                </div>
              </div> 
              <?php $i++; endwhile; ?>
          </div>
        </div>
      </div>
  </div>    
</section>
<?php endif; wp_reset_postdata(); ?>
<?php endif; ?>
<?php  
  $blok_tonenverbergen_slider = get_field('blok_tonenverbergen_slider', $thisID);
  if($blok_tonenverbergen_slider): 
  	$imgsliders = get_field('afbeelding_sliders', $thisID);
?>
<section class="restaurant-gallery-slider">
  <div class="rgsHolder1">
  <div class="rgsHolder1Inner">
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
  $blok_tonenverbergen_mascotte = get_field('blok_tonenverbergen_mascotte', $thisID);
  if($blok_tonenverbergen_mascotte): 
  	$bmascotte = get_field('blok_mascotte', $thisID);
?>
<section class="restaurant-mascotte-section">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
    	<?php 
    	if( $bmascotte ): 
    	$bmasImg2 = !empty($bmascotte['afbeelding'])? cbv_get_image_src( $bmascotte['afbeelding'], 'cblok1' ): '';
    	$bmas_knop = $bmascotte['knop'];
    	?>
          <div class="restaurant-mascotte-sec-con">
            <div class="restaurant-mascotte-sec-fea-img">
              <div class="inline-bg" style="background: url(<?php echo $bmasImg2; ?>);"></div>
            </div>
            <div class="restaurant-mascotte-sec-con-des">
			<?php 
			if( !empty($bmascotte['titel']) ) printf('<h3 class="rmscd-title">%s</h3>', $bmascotte['titel']); 
			if( !empty($bmascotte['beschrijving']) ) echo wpautop( $bmascotte['beschrijving'] ); 
			if( is_array( $bmas_knop ) &&  !empty( $bmas_knop['url'] ) ){
				printf('<div class="rtcd-btn-cntlr goToform"><a class="fl-red-center-btn" href="%s" target="%s">%s</a></div>', $bmas_knop['url'], $bmas_knop['target'], $bmas_knop['title']); 
			}
            ?>
            </div>
          </div>
      	<?php endif; ?>
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
  <div class="rtsHolderRes">
      <div class="restaurant-testi-slider-hdr">
        <?php if( !empty($getuigenissen['titel']) ) printf('<h4 class="rtshdr-title">%s</h4>', $getuigenissen['titel']); ?>
      </div>
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
<?php  
  $blok_tonenverbergen = get_field('blok_tonenverbergen', $thisID);
  if($blok_tonenverbergen): 
  	$blokbtm = get_field('blok_inhoud', $thisID);
?>
<section class="restaurant-btm-des-section">
  <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="res-btm-des-sec-lft">
            <div>
            <?php if(!empty($blokbtm['titel'])) printf('<p><strong>%s</strong></p>', $blokbtm['titel']); ?>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="res-btm-des-sec-rgt">
            <div>
			<?php if( !empty($blokbtm['beschrijving']) ) echo wpautop( $blokbtm['beschrijving'] ); ?>
            </div>
          </div>
        </div>
      </div>
  </div>    
</section>
<?php endif; ?>

<section id="booking-form" class="ftr-top-blank-bg-sec inline-bg" style="background: url(<?php echo THEME_URI; ?>/assets/images/ftr-top-blank-bg.jpg);">
  <div></div>   
</section>
<?php get_footer(); ?>