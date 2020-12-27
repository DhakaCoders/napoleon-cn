<?php
/*
Template Name: Loyalty
*/
get_header();
$thisID = get_the_ID();
?>


<section class="page-banner">
  <div class="page-banner-inr">
    <div class="bnr-vdo-cntlr"> 
      <video id="fl-vdo" class="fl-vdo" muted poster="<?php echo THEME_URI; ?>/assets/images/page-bnr-loyalty.jpg">
        <source src="<?php echo THEME_URI; ?>/assets/images/mov_bbb.mp4" type="video/mp4">
        <source src="<?php echo THEME_URI; ?>/assets/images/mov_bbb.ogg" type="video/ogg">
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
    <div class="page-banner-des">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="page-banner-des-inr">
              <div>
                <h1 class="page-banner-title">Loyalty</h1>
                <p>Phasellus quam erat, facilisis sit amet est eu, accumsan disctum diam.
Phasellus nec sem at lectus interdum rhoncus.</p>
                <a class="fl-red-btn" href="#">
                  <span>BUTTON</span> 
                  <i>
                    <svg class="btn-white-angle-svg" width="6" height="8" viewBox="0 0 6 8" fill="#ffffff">
                      <use xlink:href="#btn-white-angle-svg"></use>
                    </svg> 
                  </i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- end of page-banner -->


<?php 
  $thisID = get_the_ID();
  $wc_fancy_box_image = get_field('image', $thisID);
  $wc_fancy_video_url = get_field('video_url', $thisID);
  $wc_title = get_field('title', $thisID);
  $wc_description = get_field('description', $thisID);

?>
<section class="loyalty-welcome-section">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="loyalty-welcome-sec-con">
            <div class="loyalty-welcome-sec-lft">
              <div class="loyalty-welcome-sec-fea-img img-div-scale ">
                <div class="loyalty-welcome-sec-fea-img-inr img-div inline-bg" style="background: url(<?php echo $wc_fancy_box_image; ?>"></div>
                  <a href="<?php echo $wc_fancy_video_url;?>" data-fancybox="gallery" class="overlay-link"></a>
                  <i>
                    <svg class="play-button-svg" width="50" height="50" viewBox="0 0 50 50" fill="#CB9F67">
                      <use xlink:href="#play-button-svg"></use>
                    </svg> 
                  </i>
              </div>
            </div>
            <div class="loyalty-welcome-sec-rgt">
              <div class="loyalty-welcome-sec-des">
                <h2 class="lwsd-title"><?php echo $wc_title;  ?></h2>
                <?php echo $wc_description; ?>

              </div>
            </div>
          </div>
        </div>
      </div>
  </div>    
</section>


<?php 
  $thisID = get_the_ID();
  $loyalties = get_field('loyalties', $thisID);
  if( $loyalties ):

?>

<section class="loyalty-grds-section">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="loyalty-grds-cntlr">
            <ul class="clearfix reset-list">
              <?php foreach( $loyalties as $loyalty ): 
                if( !empty($loyalty['image']) ){
                   $loyaltyImageId = $loyalty['image']; 
                   $loyaltyImageSrc = cbv_get_image_src($loyaltyImageId, 'full');
                }
              ?>
              <li>
                <div class="loyalty-grd-item">
                  <div class="loyalty-grd-item-fea-img">
                    <div class="inline-bg" style="background: url(<?php echo $loyaltyImageSrc;?>);"></div>
                  </div>
                  <div class="loyalty-grd-item-des">
                    <div>
                      <h3 class="lgid-title"><?php echo $loyalty['title']; ?></h3>
                      <?php echo $loyalty['description']; ?>

                      <?php if ( !empty($loyalty['link']) ): ?>
                        <a href="<?php the_permalink(); ?>">Meer Info</a>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              </li>
              <?php endforeach; ?>
              <!-- <li>
                <div class="loyalty-grd-item">
                  <div class="loyalty-grd-item-fea-img">
                    <div class="inline-bg" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/loyalty-grd-img-2.jpg);"></div>
                  </div>
                  <div class="loyalty-grd-item-des">
                    <div>
                      <h3 class="lgid-title">My Napoleon Prijzenkast</h3>
                      <p>Gebruik je My Napoleonkaart, verzamel loyaltypunten en ruil ze in! In onze My Napoleon prijzenkast wachten er tal van prachtige prijzen op jou. Pronk met je nieuwe modieuze accessoires of bezoek onze website op je splinternieuwe iPhone. Een leuk cadeau nodig? Kies dan voor een van de restaurantbons. Ontdek hier alle prijzen uit onze prijzenkast.</p>
                      <a href="#">Meer Info</a>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="loyalty-grd-item">
                  <div class="loyalty-grd-item-fea-img">
                    <div class="inline-bg" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/loyalty-grd-img-3.jpg);"></div>
                  </div>
                  <div class="loyalty-grd-item-des">
                    <div>
                      <h3 class="lgid-title">Ben jij klaar voor je eerste <br>bezoek?</h3>
                      <p>Breng je voor het eerst een bezoek aan Grand Casino Knokke? Wij zien je graag terugkomen! Kom alles te weten over een dag ongeremd speelplezier, en ontvang tot 11.000 loyaltypunten (= €110) op je persoonlijke spaarkaart.</p>
                      <a href="#">Meer Info</a>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="loyalty-grd-item">
                  <div class="loyalty-grd-item-fea-img">
                    <div class="inline-bg" style="background-image: url(<?php echo THEME_URI; ?>/assets/images/loyalty-grd-img-4.jpg);"></div>
                  </div>
                  <div class="loyalty-grd-item-des">
                    <div>
                      <h3 class="lgid-title">#Speelverantwoord</h3>
                      <p>We streven ernaar om je op een veilige en verantwoorde manier te laten spelen. Wij kennen de risico’s die verbonden zijn aan een casinobezoek en willen voorkomen dat een aangenaam uitje in een speelse sfeer uit de hand loopt. We geven graag enkele tips mee die ervoor moeten zorgen dat gokken een leuke ervaring blijft.</p>
                      <a href="#">Meer Info</a>
                    </div>
                  </div>
                </div>
              </li> -->
            </ul>
          </div>
        </div>
      </div>
  </div>    
</section>

<?php endif; ?>


<section class="footer-top-sec-v2">
  <div class="footer-top-sec-v2-bg inline-bg" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/footer-top-sec-bg.png');"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="footer-top-sec-v2-inr">
          <div class="ftr-top-sec-v2-lft">
            <div class="fts-v2-lft-top">
              <h6 class="fts-v2-lft-sub-title">Openingsuren</h6>
              <h4 class="fts-v2-lft-title">Vandaag open van 11u tot 04u00</h4>
            </div>
            <div class="fts-v2-lft-sediule">
              <div class="fts-v2-lft-sediule-col">
                <ul class="reset-list">
                  <li>
                    <div class="fts-v2-lft-sediule-items">
                      <div class="fts-v2-lft-sdl-day">
                        <strong>Zondag</strong>
                      </div>
                      <div class="fts-v2-lft-sdl-time">
                        <span>11u tot 04u00</span>
                      </div>
                    </div>
                  </li>

                  <li>
                    <div class="fts-v2-lft-sediule-items">
                      <div class="fts-v2-lft-sdl-day">
                        <strong>Maandag</strong>
                      </div>
                      <div class="fts-v2-lft-sdl-time">
                        <span>11u tot 04u00</span>
                      </div>
                    </div>
                  </li>

                  <li>
                    <div class="fts-v2-lft-sediule-items">
                      <div class="fts-v2-lft-sdl-day">
                        <strong>Dinsdag</strong>
                      </div>
                      <div class="fts-v2-lft-sdl-time">
                        <span>11u tot 04u00</span>
                      </div>
                    </div>
                  </li>

                  <li>
                    <div class="fts-v2-lft-sediule-items">
                      <div class="fts-v2-lft-sdl-day">
                        <strong>Woensdag</strong>
                      </div>
                      <div class="fts-v2-lft-sdl-time">
                        <span>11u tot 04u00</span>
                      </div>
                    </div>
                  </li>

                  <li>
                    <div class="fts-v2-lft-sediule-items">
                      <div class="fts-v2-lft-sdl-day">
                        <strong>Donderdag</strong>
                      </div>
                      <div class="fts-v2-lft-sdl-time">
                        <span>11u tot 04u00</span>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="fts-v2-lft-sediule-col fts-v2-lft-sediule-col2">
                <ul class="reset-list">
                  <li>
                    <div class="fts-v2-lft-sediule-items">
                      <div class="fts-v2-lft-sdl-day">
                        <strong>Vrijdag</strong>
                      </div>
                      <div class="fts-v2-lft-sdl-time">
                        <span>11u tot 05u00</span>
                      </div>
                    </div>
                  </li>

                   <li>
                    <div class="fts-v2-lft-sediule-items">
                      <div class="fts-v2-lft-sdl-day">
                        <strong>Zaterdag</strong>
                      </div>
                      <div class="fts-v2-lft-sdl-time">
                        <span>11u tot 05u00</span>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="ftr-top-sec-v2-rt">
            <div class="fts-v2-rt-desc">
              <div class="fts-v2-rt-desc-contact fts-v2-rt-desc-row">
                <h5 class="fts-v2-rt-desc-row-title">Contact opnemen</h5>
                <div class="fts-v2-rt-desc-cntct-tel">
                  <a href="tel:(+32)050630500"> (+32) 050 630 500</a>
                </div>
                <div class="fts-v2-rt-desc-cntct-mail">
                  <a href="mailto: info@grandcasinoknokke.be">info@grandcasinoknokke.be</a>
                </div>
              </div>
              <div class="fts-v2-rt-desc-visit fts-v2-rt-desc-row">
                <h5 class="fts-v2-rt-desc-row-title">Bezoek ons</h5>
                <a href="#">Zeedijk-Albertstrand 509 <br>8300 Knokke-Heist</a>
              </div>
              <div class="fts-v2-rt-desc-Parking fts-v2-rt-desc-row">
                <h5 class="fts-v2-rt-desc-row-title">Parking</h5>
                <a href="#">Parking bij het gebouw voorzien</a>
              </div>
            </div>
            <div class="fts-v2-rt-form footer-top-form">
              <h5 class="fts-v2-rt-desc-row-title fts-v2-rt-form-title">Schrijf je in voor onze nieuwsbrief</h5>
              <form action="" class="needs-validation" novalidate>
                <div class="input-fields-row">
                  <div class="input-fields-col">
                    <input type="text" name="fname" placeholder="Naam">
                  </div>
                </div>

                <div class="input-fields-row">
                  <div class="input-fields-col">
                    <input type="text" name="lname" placeholder="Voornaam">
                  </div>
                </div>

                <div class="input-fields-row">
                  <div class="input-fields-col from-group">
                    <input type="email" name="email" placeholder="E-mailadres" class="form-control" required>
                  </div>
                </div>

                <div class="input-fields-row">
                  <div class="input-fields-col input-fields-submit-col fts-v2-input-fields-submit-col">
                    <button type="submit" name="submit">SCHRIJF JE IN</button>
                  </div>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<?php
get_footer();
?>