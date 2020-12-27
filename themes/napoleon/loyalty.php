<?php
/*
Template Name: Loyalty
*/
get_header();
$thisID = get_the_ID();
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
                ?>
                <div class="bnr-btns">
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


<section class="loyalty-welcome-section">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="loyalty-welcome-sec-con">
            <div class="loyalty-welcome-sec-lft">
              <div class="loyalty-welcome-sec-fea-img img-div-scale ">
                <div class="loyalty-welcome-sec-fea-img-inr img-div inline-bg" style="background-image: url(assets/images/loyalty-welcome-sec-fea-img.jpg);"></div>
                  <a href="https://youtu.be/9No-FiEInLA" data-fancybox="gallery" class="overlay-link"></a>
                  <i>
                    <svg class="play-button-svg" width="50" height="50" viewBox="0 0 50 50" fill="#CB9F67">
                      <use xlink:href="#play-button-svg"></use>
                    </svg> 
                  </i>
              </div>
            </div>
            <div class="loyalty-welcome-sec-rgt">
              <div class="loyalty-welcome-sec-des">
                <h2 class="lwsd-title">Bienvenue à <br> Grand Casino <br>Knokke</h2>
                <strong>Hier zullen we verder ingaan op de grandeur en de
                  historie en het nu, van Grand Casino Knokke.
                  Phasellus quam erat, facilisis sit amet est eu.</strong>
                <p>Dit stuk gaat voornamelijk over het restaurant van Grand Casino Knokke. Hier kunnen we het restaurant verder uitlichten en de bezoeker lekker maken. Phasellus quam erat, facilisis sit amet est eu, accumsan disctum diam.
                Phasellus nec sem at lectus interdum rhoncus.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>    
</section>

<section class="loyalty-grds-section">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="loyalty-grds-cntlr">
            <ul class="clearfix reset-list">
              <li>
                <div class="loyalty-grd-item">
                  <div class="loyalty-grd-item-fea-img">
                    <div class="inline-bg" style="background-image: url(assets/images/loyalty-grd-img-1.jpg);"></div>
                  </div>
                  <div class="loyalty-grd-item-des">
                    <div>
                      <h3 class="lgid-title">My Napoleonkaart</h3>
                      <p>In Grand Casino Knokke laten we niets aan het toeval over om je het perfecte dagje uit voor te schotelen. Maar wist je dat je zelf nog verder kan gaan? Ontdek nu onze My Napoleonkaart, met tal van extra's die je bezoek aan Grand Casino Knokke nog specialer zullen maken!</p>
                      <a href="#">Meer Info</a>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="loyalty-grd-item">
                  <div class="loyalty-grd-item-fea-img">
                    <div class="inline-bg" style="background-image: url(assets/images/loyalty-grd-img-2.jpg);"></div>
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
                    <div class="inline-bg" style="background-image: url(assets/images/loyalty-grd-img-3.jpg);"></div>
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
                    <div class="inline-bg" style="background-image: url(assets/images/loyalty-grd-img-4.jpg);"></div>
                  </div>
                  <div class="loyalty-grd-item-des">
                    <div>
                      <h3 class="lgid-title">#Speelverantwoord</h3>
                      <p>We streven ernaar om je op een veilige en verantwoorde manier te laten spelen. Wij kennen de risico’s die verbonden zijn aan een casinobezoek en willen voorkomen dat een aangenaam uitje in een speelse sfeer uit de hand loopt. We geven graag enkele tips mee die ervoor moeten zorgen dat gokken een leuke ervaring blijft.</p>
                      <a href="#">Meer Info</a>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
  </div>    
</section>



<section class="footer-top-sec-v2">
  <div class="footer-top-sec-v2-bg inline-bg" style="background-image: url('assets/images/footer-top-sec-bg.png');"></div>
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