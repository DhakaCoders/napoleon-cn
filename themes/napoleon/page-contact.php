<?php
/*
Template Name: Contact

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
  $address = get_field('address', 'options');
  $parkaddress = get_field('parking_adres', 'options');
  $gmurl = get_field('url', 'options');
  $parkgmurl = get_field('parking_url', 'options');
  $telefoon1 = get_field('telefoon_1', 'options');
  $telefoon2 = get_field('telefoon_2', 'options');
  $email = get_field('emailadres', 'options');
  $gmaplink = !empty($gmurl)?$gmurl: 'javascript:void()';
  $parkgmaplink = !empty($parkgmurl)?$parkgmurl: 'javascript:void()';
  $smedias = get_field('social_media', 'options');
?>

<section class="contact-info-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="contact-info-wrp clearfix">
        <div class="contact-info-lft mHc">
          <ul class="clearfix reset-list">
          	<?php if(!empty($smedias)):  ?>
          	<?php foreach($smedias as $smedia): ?>
            <li>
              <div class="contact-info-gird-inr mHc1">
                <a target="_blank" class="overlay-link" href="<?php echo $smedia['url']; ?>"></a>
                <div class="contact-info-gird">
                  <?php echo $smedia['icon']; ?>
                  <p>Volg ons op Facebook:</p>
                  <?php if( !empty($smedia['titel']) ) printf('<span>%s</span>', $smedia['titel']); ?>
                </div>
              </div>
            </li>
            <?php endforeach; ?>
            <?php endif; ?>
            <?php if( !empty($telefoon1) ): ?>
            <li class="hide-sm">
              <div class="contact-info-gird-inr mHc3">
                <a href="<?php if( !empty($telefoon1) ) echo phone_preg($telefoon1); ?>" class="overlay-link"></a>
                <div class="contact-info-gird">
                  <i>
                    <svg class="contact-info-phone-icon-svg" width="24" height="24" viewBox="0 0 24 24" fill="#CB9F67">
                      <use xlink:href="#contact-info-phone-icon-svg"></use>
                    </svg> 
                  </i>
                  <p><?php _e( 'Bel ons', THEME_NAME ); ?>:</p>
                  <?php printf('<a href="tel:%s">%s</a>', phone_preg($telefoon1),  $telefoon1); ?>
                </div>
              </div>
            </li>
        	<?php endif; ?>
            <?php if( !empty($address) ): ?>
            <li class="hide-sm">
              <div class="contact-info-gird-inr mHc4">
                <a href="<?php echo $gmaplink; ?>" class="overlay-link"></a>
                <div class="contact-info-gird">
                  <i>
                    <svg class="contact-info-map-icon-svg" width="24" height="24" viewBox="0 0 24 24" fill="#CB9F67">
                      <use xlink:href="#contact-info-map-icon-svg"></use>
                    </svg> 
                  </i>
                  <p><?php _e( 'Bezoek ons', THEME_NAME ); ?>:</p>
                  <?php printf('<a href="%s">%s</a>', $gmaplink, $address); ?>
                </div>
              </div>
            </li>
        	<?php endif; ?>
            <?php if( !empty($telefoon2) ): ?>
            <li class="hide-sm">
              <div class="contact-info-gird-inr mHc5">
                <a href="<?php if( !empty($telefoon2) ) echo phone_preg($telefoon2); ?>" class="overlay-link"></a>
                <div class="contact-info-gird">
                  <i>
                    <svg class="contact-info-phone-icon-svg" width="24" height="24" viewBox="0 0 24 24" fill="#CB9F67">
                      <use xlink:href="#contact-info-phone-icon-svg"></use>
                    </svg> 
                  </i>
                  <p><?php _e( 'PR & Communicatie', THEME_NAME ); ?>:</p>
                  <?php printf('<a href="tel:%s">%s</a>', phone_preg($telefoon2),  $telefoon2); ?>
                </div>
              </div>
            </li>
        	<?php endif; ?>
            <?php if( !empty($parkaddress) ): ?>
            <li class="hide-sm">
              <div class="contact-info-gird-inr mHc6">
                <a href="<?php echo $parkgmaplink; ?>" class="overlay-link"></a>
                <div class="contact-info-gird">
                  <i>
                    <svg class="contact-info-parking-icon-svg" width="24" height="24" viewBox="0 0 24 24" fill="#CB9F67">
                      <use xlink:href="#contact-info-parking-icon-svg"></use>
                    </svg> 
                  </i>
                  <p><?php _e( 'Parking', THEME_NAME ); ?>:</p>
                  <?php printf('<span>%s</span>', $parkaddress); ?>
                </div>
              </div>
            </li>
        	<?php endif; ?>
          </ul>
        </div>
        <?php $fc_openhour = get_field('fc_openingsuren', 'options'); ?>
        <div class="contact-info-rgt mHc hide-sm">
          <div class="contact-info-tab-wrp mHc">
              <div class="contact-info-tab-innr">
                <div class="clock-circular-outline">
                  <i>
                    <svg class="clock-circular-outline-svg" width="24" height="24" viewBox="0 0 24 24" fill="#CB9F67">
                      <use xlink:href="#clock-circular-outline-svg"></use>
                    </svg> 
                  </i>
                  <span>Openingsuren:</span>
                </div>
                <?php if( $fc_openhour ): ?>
                <div class="np-contact-form-tab clearfix">
                  <ul class="reset-list tabs-menu clearfix">
                    <li class="active"><a href="#tabs">Algemeen</a></li>
                    <li class=""><a href="#tabs">Restaurant</a></li>
                    <li class=""><a href="#tabs">Live tables</a></li>
                  </ul>
                </div>
                <div class="tabs">
                  <div class="np-contact-form-tab-dsc">
                  	<?php 
                  	$algemeen = $fc_openhour['algemeen']; 
                  	if( $algemeen ):
                  	?>
                    <ul class="clearfix reset-list">
					<?php 
	                  foreach( $algemeen as $alhour ): 
	                ?>
                      <li>
                        <?php 
	                        if( !empty($alhour['dag']) ) printf('<strong>%s</strong>', $alhour['dag']);
	                        if( !empty($alhour['tijd']) ) printf('<span>%s</span>', $alhour['tijd']); 
                        ?>
                      </li>
                  	<?php endforeach; ?>
                    </ul>
                	<?php endif; ?>
                  </div>
                </div>
                <div class="tabs">
                  <div class="np-contact-form-tab-dsc">
                  	<?php 
                  	$restaurant = $fc_openhour['restaurant']; 
                  	if( $restaurant ):
                  	?>
                    <ul class="clearfix reset-list">
					<?php 
	                  foreach( $restaurant as $resthour ): 
	                ?>
                      <li>
                        <?php 
	                        if( !empty($resthour['dag']) ) printf('<strong>%s</strong>', $resthour['dag']);
	                        if( !empty($resthour['tijd']) ) printf('<span>%s</span>', $resthour['tijd']); 
                        ?>
                      </li>
                  	<?php endforeach; ?>
                    </ul>
                	<?php endif; ?>
                  </div>
                </div>
                <div class="tabs">
                  <div class="np-contact-form-tab-dsc">
                  	<?php 
                  	$live_tables = $fc_openhour['live_tables']; 
                  	if( $live_tables ):
                  	?>
                    <ul class="clearfix reset-list">
					<?php 
	                  foreach( $live_tables as $livehour ): 
	                ?>
                      <li>
                        <?php 
	                        if( !empty($livehour['dag']) ) printf('<strong>%s</strong>', $livehour['dag']);
	                        if( !empty($livehour['tijd']) ) printf('<span>%s</span>', $livehour['tijd']); 
                        ?>
                      </li>
                  	<?php endforeach; ?>
                    </ul>
                	<?php endif; ?>
                  </div>
                </div>
            	<?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
  $form = get_field('formsec', $thisID);
  $embedded_map = get_field('embedded_code', $thisID);
?>

<section class="contact-form-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
      	<?php if( $form ): ?>
        <div class="contact-form-wrp clearfix">
          <div class="contact-form-dsc">
            <?php if( !empty( $form['titel'] ) ) printf( '<h2 class="contact-form-dsc-title">%s</h2>', $form['titel']); ?>
          </div>
          <div class="wpforms-container">
			<?php if( !empty( $form['shortcode'] ) ) echo do_shortcode( $form['shortcode'] ); ?>
          </div>
        </div>
    	<?php endif; ?>
      </div>
    </div>
  </div>
</section>
<?php if( !empty($embedded_map) ): ?>
<section class="contact-map-sec-wrp">
 <?php printf('%s', $embedded_map); ?>
</section>
<?php endif; ?>

<?php get_template_part('templates/newslater'); ?>
<?php
get_footer();
?>