<?php
/*
Template Name: Casino
*/
get_header();
$thisID = get_the_ID();
?>
<?php  
  $pgbanner = get_field('pagebanner', $thisID);
  if($pgbanner):
    $bannerposter = !empty($pgbanner['afbeelding'])? cbv_get_image_src( $pgbanner['afbeelding'], 'full' ): '';
    $pgvideo = !empty($pgbanner['video_uploaden'])? $pgbanner['video_uploaden']:'';
?>
<section class="page-banner">
  <div class="page-banner-inr">
  	<?php if( empty($pgvideo) ): ?>
    <div class="page-banner-bg-cntlr">
      <div class="page-banner-bg inline-bg" style="background-image:url(<?php echo $bannerposter; ?>);">
      </div>
    </div>
    <?php 

else:
$ext = strtolower(pathinfo($pgvideo, PATHINFO_EXTENSION));
?>
    <div class="bnr-vdo-cntlr"> 
      <video id="fl-vdo" class="fl-vdo" muted poster="<?php echo $bannerposter; ?>">
      	<?php if( $ext == 'mp4' ): ?>
        <source src="<?php echo $pgvideo; ?>" type="video/mp4">
        <?php 
    	endif; 
        ?>
      </video>
      <div class="vdo-controller">
        <button class="fl-play-btn">
          <i>
            <svg class="play-icon-svg" width="18" height="24" viewBox="0 0 18 24" fill="#ffffff">
              <use xlink:href="#play-icon-svg"></use>
            </svg> 
          </i>
        </button> 
        <button class="fl-push-btn">
          <i>
            <svg class="push-icon-svg" width="24" height="24" viewBox="0 0 24 24" fill="#ffffff">
              <use xlink:href="#push-icon-svg"></use>
            </svg> 
          </i>
        </button> 
      </div>
    </div>
	<?php endif; ?>
    <div class="page-banner-des">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="page-banner-des-inr">
              <div>
                <?php 
                	if( !empty($pgbanner['titel']) ) printf( '<h1 class="page-banner-title">%s</h1>', $pgbanner['titel'] ); 
                	if( !empty($pgbanner['subtitel']) ) printf( '<strong>%s</strong>', $pgbanner['subtitel'] ); 
                	if( !empty($pgbanner['beschrijving']) ) echo wpautop( $pgbanner['beschrijving'] );
					$pknop = $pgbanner['knop'];
					if( is_array( $pknop ) &&  !empty( $pknop['url'] ) ){
					  printf('<a class="fl-red-btn" href="%s" target="%s"><span>%s</span><i><svg class="btn-white-angle-svg" width="6" height="8" viewBox="0 0 6 8" fill="#ffffff"><use xlink:href="#btn-white-angle-svg"></use></svg></i></a>', $pknop['url'], $pknop['target'], $pknop['title']); 
					}
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- end of page-banner -->
<?php endif; ?>

<?php  
  $video = get_field('video', $thisID);
  if($video): 
  	$videoImg = !empty($video['afbeelding'])? cbv_get_image_src( $video['afbeelding'], 'cposter' ): ''; 
?>
<section class="loyalty-welcome-section">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="loyalty-welcome-sec-con">
            <div class="loyalty-welcome-sec-lft">
              <div class="loyalty-welcome-sec-fea-img img-div-scale ">
                <div class="loyalty-welcome-sec-fea-img-inr img-div inline-bg" style="background-image: url(<?php echo $videoImg; ?>);"></div>
                  <?php if( !empty($video['video_url']) ):?>
                  <a href="<?php echo $video['video_url']; ?>" data-fancybox="gallery" class="overlay-link"></a>
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
                <?php 
                if( !empty($video['titel']) ) printf('<h2 class="lwsd-title">%s</h2>', $video['titel']); 
                if( !empty($video['subtitel']) ) printf('<strong>%s</strong>', $video['subtitel']); 
                if( !empty($video['beschrijving']) ) echo wpautop( $video['beschrijving'] ); 
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>    
</section>
<?php endif; ?>
<?php  
  $blok_tonenverbergen_1 = get_field('blok_tonenverbergen_1', $thisID);
  if($blok_tonenverbergen_1): 
  	$blok1 = get_field('blok_inhoud_1', $thisID);
?>
<section class="np-roulette-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="np-roulette-sec-inr clearfix">
          <?php 
          if( $blok1 ): 
          	$blok1Img = !empty($blok1['afbeelding'])? cbv_get_image_src( $blok1['afbeelding'], 'cblok1' ): '';
          	$bk_knop1 = $blok1['knop'];
          ?>
          <div class="np-roulette-rgt">
            <div class="np-roulette-img inline-bg" style="background: url('<?php echo $blok1Img; ?>');"></div>
          </div>
          <div class="np-roulette-lft">
			<?php 
	            if( !empty($blok1['titel']) ) printf('<h3 class="np-roulette-lft-title">%s</h3>', $blok1['titel']); 
	            if( !empty($blok1['beschrijving']) ) echo wpautop( $blok1['beschrijving'] ); 
				if( is_array( $bk_knop1 ) &&  !empty( $bk_knop1['url'] ) ){
					printf('<a href="%s" target="%s">%s</a>', $bk_knop1['url'], $bk_knop1['target'], $bk_knop1['title']); 
				}
            ?>
          </div>
      	  <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<div class="np-casino-ctlr">
<?php  
  $blok_tonenverbergen_slider = get_field('blok_tonenverbergen_slider', $thisID);
  if($blok_tonenverbergen_slider): 
  	$imgsliders = get_field('afbeelding_sliders', $thisID);
?>
  <section class="restaurant-gallery-slider">
    <div class="rgsHolder">
      <div class="np-casino-slider-ctlr">
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
  $blok_tonenverbergen_2 = get_field('blok_tonenverbergen_2', $thisID);
  if($blok_tonenverbergen_2): 
  	$blok2 = get_field('blok_inhoud_2', $thisID);
?>
  <section class="np-winner-sec">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        	<?php 
        	if( $blok2 ): 
        	$blokImg2 = !empty($blok2['afbeelding'])? cbv_get_image_src( $blok2['afbeelding'], 'cblok1' ): '';
        	$bk_knop2 = $blok2['knop'];
        	?>
          <div class="np-winner-sec-inr clearfix">
            <div class="np-winner-lft">
              <div class="np-winner-lft-img inline-bg" style="background: url('<?php echo $blokImg2; ?>');"></div>
            </div>
            <div class="np-winner-rgt">
			<?php 
	            if( !empty($blok2['titel']) ) printf('<h4 class="np-winner-rgt-title">%s</h4>', $blok2['titel']); 
	            if( !empty($blok2['beschrijving']) ) echo wpautop( $blok2['beschrijving'] ); 
				if( is_array( $bk_knop2 ) &&  !empty( $bk_knop2['url'] ) ){
					printf('<a href="%s" target="%s">%s</a>', $bk_knop2['url'], $bk_knop2['target'], $bk_knop2['title']); 
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
  $blok_tonenverbergen_3 = get_field('blok_tonenverbergen_3', $thisID);
  if($blok_tonenverbergen_3): 
  	$blok3 = get_field('blok_inhoud_3', $thisID);
?>
  <section class="np-roulette-sec">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
		<?php 
			if( $blok3 ): 
			$blokImg3 = !empty($blok3['afbeelding'])? cbv_get_image_src( $blok3['afbeelding'], 'cblok1' ): '';
			$bk_knop3 = $blok3['knop'];
		?>
          <div class="np-roulette-sec-inr clearfix">
            <div class="np-roulette-rgt">
              <div class="np-roulette-img inline-bg" style="background: url('<?php echo $blokImg3; ?>');"></div>
            </div>
            <div class="np-roulette-lft">
			<?php 
	            if( !empty($blok3['titel']) ) printf('<h5 class="np-roulette-lft-title">%s</h5>', $blok3['titel']); 
	            if( !empty($blok3['beschrijving']) ) echo wpautop( $blok3['beschrijving'] ); 
				if( is_array( $bk_knop3 ) &&  !empty( $bk_knop3['url'] ) ){
					printf('<a href="%s" target="%s">%s</a>', $bk_knop3['url'], $bk_knop3['target'], $bk_knop3['title']); 
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
</div>
<?php endif; ?>
<?php get_template_part('templates/openhours'); ?>
<?php
get_footer();
?>