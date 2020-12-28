<?php
/*Template Name: Agenda*/
get_header();
$thisID = get_the_ID();
?>
<section class="breadcrumbs-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="page-breadcrumbs">
          <?php cbv_breadcrumbs(); ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php 
$intro = get_field('intro_blok', $thisID); 
$overzicht = get_field('overzicht', get_the_ID());
?>
<section class="ad-two-grid-sec-wrp">
  <div class="ad-two-grid-wrp clearfix">
    <ul class="clearfix reset-list">
      <?php 
        if( $intro || $overzicht ):

          if( !$intro ){
            $intro = $overzicht;
          } 

          $blokImg = !empty($intro['afbeelding'])? cbv_get_image_src( $intro['afbeelding'], 'agendadesk' ): '';
          $mbblokImg = !empty($intro['mobiel_afbeelding'])? cbv_get_image_tag( $intro['mobiel_afbeelding'], 'agendamb' ): cbv_get_image_tag( $intro['afbeelding'], 'agendamb' );
      ?>
      <li>
        <div class="ad-two-grid-img-inr">
          <div class="ad-two-grid-img inline-bg" style="background: url(<?php echo $blokImg; ?>);"> 
            <?php echo $mbblokImg; ?>
          </div>              
        </div> 
        <div class="ad-two-grid-des-inr">
          <div class="ad-two-grid-des"> 
            <?php 
              if( !empty($intro['titel']) ) 
                printf('<h2 class="ad-two-grid-des-title">%s</h2>', $intro['titel']);
              else
                printf('<h2 class="ad-two-grid-des-title">%s</h2>', get_the_title($thisID));
            ?>
            <span>28 FEBRUARI T/M 27 MAART</span>
            <?php if( !empty($intro['beschrijving']) ) echo wpautop($intro['beschrijving']); ?>
          </div>
        </div>    
      </li>
      <?php endif; ?>
      <?php  
        $blok_tonenverbergen = get_field('blok_tonenverbergen', $thisID);
        if($blok_tonenverbergen): 
          $blok = get_field('blok_inhoud', $thisID);
          if( $blok ):
            $blokImg1 = !empty($blok['afbeelding'])? cbv_get_image_src( $blok['afbeelding'], 'agendadesk' ): '';
            $mbblokImg1 = !empty($blok['mobiel_afbeelding'])? cbv_get_image_tag( $blok['mobiel_afbeelding'], 'agendamb' ): cbv_get_image_tag( $blok['afbeelding'], 'agendamb' );
      ?>
      <li>
        <div class="ad-two-grid-img-inr">
          <div class="ad-two-grid-img inline-bg" style="background: url(<?php echo $blokImg1; ?>);"> 
            <?php echo $mbblokImg1; ?>
          </div>              
        </div> 
        <div class="ad-two-grid-des-inr">
          <div class="ad-two-grid-des"> 
          <?php 
            if( !empty($blok['titel']) ) printf('<h2 class="ad-two-grid-des-title">%s</h2>', $blok['titel']); 
            if( !empty($blok['beschrijving']) ) echo wpautop( $blok['beschrijving'] ); 
            $bk_knop1 = $blok['knop'];
            if( is_array( $bk_knop1 ) &&  !empty( $bk_knop1['url'] ) ){
              printf('<a href="%s" target="%s">%s</a>', $bk_knop1['url'], $bk_knop1['target'], $bk_knop1['title']); 
            }
          ?>
          </div>
        </div>    
      </li>
      <?php endif; ?>
      <?php endif; ?>
    </ul>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="terug-overzicht">
          <a href="<?php echo esc_url(home_url('agenda')); ?>">Terug naar overzicht</a>
        </div>
      </div>
    </div>
  </div>
  
</section>
<?php get_template_part('templates/newslater'); ?>
<?php
get_footer();
?>