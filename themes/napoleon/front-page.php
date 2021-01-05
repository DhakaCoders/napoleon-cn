<?php
get_header();
?>
<?php  
  $pgbanner = get_field('pagebanner', HOMEID);
  if($pgbanner):
    $bannerposter = !empty($pgbanner['afbeelding'])? cbv_get_image_src( $pgbanner['afbeelding'], 'full' ): '';
    $pgvideo = !empty($pgbanner['video_uploaden'])? $pgbanner['video_uploaden']:'';
?>
<section class="page-banner home-page-bnr">
  <div class="page-banner-inr">
  	<?php if( empty($pgvideo) ): ?>
    <div class="page-banner-bg-cntlr">
      <div class="inline-bg" style="background-image:url(<?php echo $bannerposter; ?>);">
      </div>
    </div>
    <?php 

else:
$ext = strtolower(pathinfo($pgvideo, PATHINFO_EXTENSION));
?>
    <div class="bnr-vdo-cntlr"> 
      <video autoplay muted loop id="fl-vdo" class="fl-vdo" poster="<?php echo $bannerposter; ?>">
        <?php if( $ext == 'mp4' ): ?>
        <source src="<?php echo $pgvideo; ?>" type="video/mp4">
        <?php elseif($ext == 'ogg'): ?>
          <source src="<?php echo $pgvideo; ?>" type="video/ogg">
        <?php endif; ?>
      </video>
    </div>
	<?php endif; ?>
    <div class="page-banner-des">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="page-banner-des-inr homePageBnr">
              <div>
                <?php 
                	if( !empty($pgbanner['titel']) ) 
                    printf( '<h1 data-aos="fade-up4" data-aos-delay="10" class="page-banner-title">%s</h1>', $pgbanner['titel'] ); 
                	if( !empty($pgbanner['subtitel']) ) 
                    printf( '<strong data-aos="fade-up4" data-aos-delay="300">%s</strong>', $pgbanner['subtitel'] ); 
                  ?>
                  <div class="btext" data-aos="fade-up4" data-aos-delay="500">
                  <?php
                	if( !empty($pgbanner['beschrijving']) ) 
                    echo wpautop( $pgbanner['beschrijving'] );
                  ?>
                  </div>
                <div class="bnr-btns" data-aos="fade-up4" data-aos-delay="600">
		            <?php 
		              $hknop_1 = $pgbanner['knop_1'];
		              $hknop_2 = $pgbanner['knop_2'];
		              if( is_array( $hknop_1 ) &&  !empty( $hknop_1['url'] ) ){
		                  printf('<div class="bnr-btn-1"><a class="fl-red-btn" href="%s" target="%s"><span>%s</span><i><svg class="btn-white-angle-svg" width="6" height="8" viewBox="0 0 6 8" fill="#ffffff"><use xlink:href="#btn-white-angle-svg"></use></svg></i></a></div>', $hknop_1['url'], $hknop_1['target'], $hknop_1['title']); 
		              }
		              if( is_array( $hknop_2 ) &&  !empty( $hknop_2['url'] ) ){
		                  printf('<div class="bnr-btn-2"><a class="fl-red-btn" href="%s" target="%s"><span>%s</span><i><svg class="btn-white-angle-svg" width="6" height="8" viewBox="0 0 6 8" fill="#ffffff"><use xlink:href="#btn-white-angle-svg"></use></svg></i></a></div>', $hknop_2['url'], $hknop_2['target'], $hknop_2['title']); 
		              }
		            ?>
                </div>
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
  $showhide_qknops = get_field('showhide_qknops', HOMEID);
  if($showhide_qknops): 
  	$qknops = get_field('knops', HOMEID);
?>
<section class="catagory-sec">
  <div class="catagory-sec-cntlr inline-bg" data-aos="fade" data-aos-delay="100"
  style="background-image: url('<?php echo THEME_URI; ?>/assets/images/catagory-sec-bg.png');">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="catagory-slider-cntlr" data-aos="fade-up6" data-aos-delay="300">
          	<?php if( $qknops ): ?>
            <div class="catagory-slider swiper-container catagorySlider"> 
              <div class="swiper-wrapper">
              	<?php 
              		foreach( $qknops as $qknop ): 
              		$qknopImg = !empty($qknop['afbeelding'])? cbv_get_image_src( $qknop['afbeelding'], 'quickknop' ): ''; 
              		$hqknop = $qknop['knop'];
              		$qknopUrl = '';
              		if( is_array( $hqknop ) &&  !empty( $hqknop['url'] ) ){
	                  $qknopUrl = $hqknop['url'];
	              	}
              	?>
                <div class="swiper-slide sliderItem">
                  <div class="catagory-slide-item-cntlr">
                    <div class="catagory-slide-item">
                      <div class="catagory-slide-item-img-cntlr">
                        <div class="catagory-slide-item-img dft-transition inline-bg" style="background-image: url('<?php echo $qknopImg; ?>');"></div>
                        <?php if( !empty($qknopUrl) ) printf('<a class="overlay-link" href="%s"></a>', $qknopUrl); ?>
                        
                      </div>
                      <div class="catagory-slide-item-desc-cntlr">
                        <?php 
                        if( empty($qknopUrl) )
                        {
                        	if( !empty($qknop['titel']) ) printf('<h3 class="catagory-slide-item-title mHc">%s</h3>', $qknop['titel']); 
                        }
	                    else{
	                    	if( !empty($qknop['titel']) ) printf('<h3 class="catagory-slide-item-title mHc"><a href="%s">%s</a></h3>',$qknopUrl, $qknop['titel']); 
	                    }
                        ?>
                        <div class="catagory-slide-item-desc mHc1">
                          <?php if( !empty($qknop['beschrijving']) ) echo wpautop( $qknop['beschrijving'] ); ?>
                        </div>
                        <?php 
							             if( is_array( $hqknop ) &&  !empty( $hqknop['url'] ) ){
    				                printf('<div class="catagory-slide-item-btn"><a class="fl-red-btn" href="%s" target="%s"><span>%s</span><i><svg class="btn-white-angle-svg" width="6" height="8" viewBox="0 0 6 8" fill="#ffffff"><use xlink:href="#btn-white-angle-svg"></use></svg></i></a></div>', $hqknop['url'], $hqknop['target'], $hqknop['title']); 
    				                }
                        ?>
                      </div>
                    </div>
                  </div>
                </div>
            	<?php endforeach; ?>
              </div>
              <div class="slider-arrows show-lg catagorySlider-arrows">
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
        	<?php endif; ?>
          </div>
        </div>
      </div>
    </div> 
  </div>   
</section>
<?php endif; ?>
<?php  
  $showhide_bienvenue = get_field('showhide_bienvenue', HOMEID);
  if($showhide_bienvenue): 
  	$bienvenue = get_field('bienvenue', HOMEID);
?>
<section class="wellcome-sec">
  <div class="wellcome-sec-wrap ">
    <div class="wellcome-sec-cntrl">
      <div class="wellcome-left">
        <?php if( !empty($bienvenue['titel']) ) printf('<h2 data-aos="fade-up4" data-aos-delay="50" class="wellcome-title">%s</h2>', $bienvenue['titel']); ?>
      </div>
      <div class="wellcome-right-cntlr">
        <div class="wellcome-right" data-aos="fade-up4" data-aos-delay="300">
		<?php 
			if( !empty($bienvenue['subtitel']) ) printf('<h5 class="wellcome-sub-title">%s</h5>', $bienvenue['subtitel']);
			if( !empty($bienvenue['beschrijving']) ) echo wpautop( $bienvenue['beschrijving'] ); 
		?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php  
  $showhide_tcasino = get_field('showhide_tcasino', HOMEID);
  if($showhide_tcasino): 
  	$tcasino = get_field('tour_casino', HOMEID);
  	$tslides = $tcasino['slider'];
?>
<section class="visite-sec">
  <div class="visite-sec-wrap">
    <div class="visite-lft-desc" data-aos="fade-up4" data-aos-delay="50">
      <?php 
        if( !empty($tcasino['titel']) ) printf('<h4 class="visite-lft-title">%s</h4>', $tcasino['titel']);
        if( !empty($tcasino['beschrijving']) ) echo wpautop( $tcasino['beschrijving'] );
      ?>
    </div>
    <?php if( $tslides ): ?>
    <div class="visite-slider-cntlr" data-aos="fade-up4" data-aos-delay="300">
      <div class="swiper-container restaurantGallerySlider">
        <div class="swiper-wrapper slide1Wrapper">
	      	<?php 
	      		foreach( $tslides as $tslide ): 
	      		$slideImg = !empty($tslide['afbeelding'])? cbv_get_image_src( $tslide['afbeelding'], 'hmslider' ): ''; 
	      		$knopStart = !empty($tslide['knop'])? '<a href="'.$tslide['knop'].'">':'';
	      		$knopEnd = !empty($tslide['knop'])? '</a>':'';
	      	?>
			<div class="swiper-slide restaurantGallerySlide">
			<div class='restaurant-gallery-slide-item'>
			  <div class="inline-bg" style="background: url(<?php echo $slideImg; ?>);"></div>
			  <div class="visite-slide-item-desc-cntlr">
			    <div class="visite-slide-item-desc">
			      <?php 
			        if( !empty($tslide['titel']) ) printf('<h4 class="visite-slide-item-title">%s%s%s</h4>',$knopStart, $tslide['titel'], $knopEnd);
			        if( !empty($tslide['beschrijving']) ) echo wpautop( $tslide['beschrijving'] );
			      ?>
			    </div>
			  </div>
			</div>
			</div>
			<?php endforeach; ?>
          <?php 
            foreach( $tslides as $tslide ): 
            $slideImg = !empty($tslide['afbeelding'])? cbv_get_image_src( $tslide['afbeelding'], 'hmslider' ): ''; 
            $knopStart = !empty($tslide['knop'])? '<a href="'.$tslide['knop'].'">':'';
            $knopEnd = !empty($tslide['knop'])? '</a>':'';
          ?>
      <div class="swiper-slide restaurantGallerySlide">
      <div class='restaurant-gallery-slide-item'>
        <div class="inline-bg" style="background: url(<?php echo $slideImg; ?>);"></div>
        <div class="visite-slide-item-desc-cntlr">
          <div class="visite-slide-item-desc">
            <?php 
              if( !empty($tslide['titel']) ) printf('<h4 class="visite-slide-item-title">%s%s%s</h4>',$knopStart, $tslide['titel'], $knopEnd);
              if( !empty($tslide['beschrijving']) ) echo wpautop( $tslide['beschrijving'] );
            ?>
          </div>
        </div>
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
	<?php endif; ?>
  </div>
</section>
<?php endif; ?>
<?php  
  $showhide_nieuws = get_field('showhide_nieuws', HOMEID);
  if($showhide_nieuws): 
  	$snieuws = get_field('snieuws', HOMEID);
  	$snieuwsIDs = $snieuws['selecteer_nieuws'];
?>
<section class="news-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="news-sec-inr">
        <?php if( !empty($snieuws['titel']) ) printf('<h2 data-aos="fade-up4" data-aos-delay="100" class="news-title">%s</h2>', $snieuws['titel']); ?>
          <?php 
            if( !empty($snieuwsIDs) ){
              $count = count($snieuwsIDs);
              $pIDS = ( $count > 1 )? $snieuwsIDs: $snieuwsIDs;
              $pQuery = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page'=> 3,
                'post__in' => $pIDS,
                'orderby' => 'rand'

              ));  
            }else{
              $pQuery = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page'=> 3,
                'orderby' => 'rand',
                'order'=> 'desc',

              ));
            }
            if( $pQuery->have_posts() ):
          ?>
          <div class="news-items-cntlr">
            <div class="np-nieuws-grd-items" data-aos="fade-up4" data-aos-delay="300">
              <ul class="reset-list clearfix">
                <?php 
                  while($pQuery->have_posts()): $pQuery->the_post(); 
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
          </div>
          <div class="news-btn">
            <a class="fl-tsprnt-btn" href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">Ontdek meer nieuws</a>
          </div>
          <?php endif; wp_reset_postdata(); ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<section class="hm-footer-gallery">
  <h2 class="hm-footer-gallery-title" data-aos="fade-up4" data-aos-delay="100">#GrandCasinoKnokke on Instagram</h2>
  <div class="hm-ftr-gllry-cntlr" data-aos="fade-up4" data-aos-delay="300">
    <img src="<?php echo THEME_URI; ?>/assets/images/hm-ftr-gllry-img.jpg" alt="hm-ftr-gllry-img">
  </div>
</section>


<section class="footer-top-sec">
  <span class="footer-top-sec-bg inline-bg" data-aos="fade" data-aos-delay="100"
  style="background-image: url('<?php echo THEME_URI; ?>/assets/images/footer-top-sec-bg.png');"></span>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="footer-top-sec-cntlr" data-aos="fade-up4" data-aos-delay="300">
          <div class="footer-top-col-hedding">
            <h4 class="footer-top-col-title">Schrijf je in voor <br>onze nieuwsbrief</h4>
          </div>
          <div class="footer-top-col-desc">
            <p>Ja, ik wil op de hoogte blijven van de laatste<br>
              acties & promoties! Mis geen enkele kans om<br>
              mooie prijzen te winnen!
            </p>
          </div>
          <div class="footer-top-form">
            <form action="" class="needs-validation" novalidate>
              <div class="input-fields-row input-fields-row-d2">
                <div class="input-fields-col">
                  <input type="text" name="fname" placeholder="Naam">
                </div>
                <div class="input-fields-col">
                  <input type="text" name="lname" placeholder="Voornaam">
                </div>
              </div>

              <div class="input-fields-row input-fields-row-d2">
                <div class="input-fields-col input-fields-email-col from-group">
                  <input type="email" name="email" placeholder="mathias2.conversalbe" class="form-control" required>
                </div>
                <div class="input-fields-col input-fields-submit-col">
                  <button type="submit" name="submit">SCHRIJF JE IN</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
?>