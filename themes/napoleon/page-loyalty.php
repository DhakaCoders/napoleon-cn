<?php
/*
Template Name: Loyalty
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
        <?php elseif($ext == 'ogg'): ?>
          <source src="<?php echo $pgvideo; ?>" type="video/ogg">
        <?php endif; ?>
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
            <div class="loyalty-welcome-sec-lft" data-aos="fade-up4" data-aos-delay="100">
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
            <div class="loyalty-welcome-sec-rgt" data-aos="fade-up4" data-aos-delay="400">
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
  $tonenverbergen_blok = get_field('blok_tonenverbergen_blok', $thisID);
  if( $tonenverbergen_blok ):
    $inhouds = get_field('inhouds', $thisID);
?>
<section class="loyalty-grds-section">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <?php if( $inhouds ): ?>
          <div class="loyalty-grds-cntlr">
            <ul class="clearfix reset-list">
              <?php foreach( $inhouds as $inhoud ): 
                $inhoudImg = !empty($inhoud['afbeelding'])? cbv_get_image_src( $inhoud['afbeelding'], 'cposter' ): '';
              ?>
              <li>
                <div class="loyalty-grd-item">
                  <div class="loyalty-grd-item-fea-img" data-aos="fade-up4" data-aos-delay="100">
                    <div class="inline-bg" style="background: url(<?php echo $inhoudImg;?>);"></div>
                  </div>
                  <div class="loyalty-grd-item-des" data-aos="fade-up5" data-aos-delay="300">
                    <div>
                      <?php 
                      if( !empty($inhoud['titel']) ) printf('<h3 class="lgid-title">%s</h3>', $inhoud['titel']); 
                      if( !empty($inhoud['beschrijving']) ) echo wpautop( $inhoud['beschrijving'] ); 
                      $blok_knop = $inhoud['knop'];
                      if( is_array( $blok_knop ) &&  !empty( $blok_knop['url'] ) ){
                        printf('<a href="%s" target="%s">%s</a>', $blok_knop['url'], $blok_knop['target'], $blok_knop['title']); 
                      }
                      ?>
                    </div>
                  </div>
                </div>
              </li>
              <?php endforeach; ?>
              
            </ul>
          </div>
          <?php endif; ?>
        </div>
      </div>
  </div>    
</section>

<?php endif; ?>

<?php get_template_part('templates/openhours'); ?>
<?php
get_footer();
?>